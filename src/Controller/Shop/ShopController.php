<?php


namespace App\Controller\Shop;


use App\Controller\BaseController;
use App\Entity\Product;
use App\Service\Localization;
use App\Service\ShoppingCart;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ShopController extends BaseController
{
    public function shop()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render(
            'website/shop/products.twig',
            [
                'products' => $products,
            ]
        );
    }

    public function product($id, Request $request, Localization $localization, ShoppingCart $cart)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if (empty($product)) {
            throw new HttpException(404, $localization->translate('Could not find requested product'));
        }

        if ($request->isMethod('post')) {
            $cart->addToCart($product);
            return $localization->redirectToLocalizedRoute('account_shop_cart');
        }

        return $this->render(
            'website/shop/product.twig',
            [
                'product' => $product,
            ]
        );
    }

    public function orderPlaced(Request $request)
    {
        return $this->render(
            'website/shop/order-placed.twig',
            [

            ]
        );
    }

}