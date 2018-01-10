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
            throw new HttpException(405, "That is not what we expect");
        }

        $payment = $mollie->payments->get($request->request->get('id'));
        $order = $this->getDoctrine()->getRepository(Order::class)->find($payment->metadata->order_id);

        if ($payment->isPaid()) {
            $order->setStatus('paid');
            $order->setPaymentMethod($payment->method);
        } elseif (! $payment->isOpen()) {
            $order->setStatus('aborted');
        }

        return Response::HTTP_OK;
    }
}