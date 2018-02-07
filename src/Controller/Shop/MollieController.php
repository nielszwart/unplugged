<?php


namespace App\Controller\Shop;


use App\Controller\BaseController;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class MollieController extends BaseController
{
    public function webhook(Request $request)
    {
        $mollie = new \Mollie_API_Client();
        $mollie->setApiKey($this->getParameter('mollie_api_key'));

        if (empty($request->request->get('id'))) {
            throw new HttpException(500, "That is not what we expect");
        }

        $payment = $mollie->payments->get($request->request->get('id'));
        $order = $this->getDoctrine()->getRepository(Order::class)->findOneBy(['payment_provider_id' => $payment->id]);

        if ($payment->isPaid()) {
            $order->setStatus('paid');
            $order->setPaymentMethod($payment->method);
        } elseif (! $payment->isOpen()) {
            $order->setStatus('aborted');
        }

        $this->save($order);

        return new Response();
    }
}