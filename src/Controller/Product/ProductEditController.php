<?php


namespace App\Controller\Product;


use App\Controller\BaseController;
use App\Entity\Product;
use App\Form\ProductType;
use App\Service\FileUploader;
use App\Service\Localization;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ProductEditController extends BaseController
{
    public function edit($id, Request $request, Localization $localization, FileUploader $fileUploader)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if (empty($product)) {
            throw new HttpException(404, $localization->translate('Could not find requested product'));
        }

        $originalImage = $product->getImage();
        if (!empty($originalImage)) {
            $product->setImage(
                new File($fileUploader->getTargetDir() . $originalImage)
            );
        }

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $image = $product->getImage();
                if (!empty($image) && $image instanceof UploadedFile) {
                    $product->setImage($fileUploader->upload($image));
                } else {
                    $product->setImage($originalImage);
                }

                $this->save($product);
                $this->addFlash('success', $localization->translate('Product was edited successfully'));
                return $localization->redirectToLocalizedRoute('admin_product_edit', ['id' => $product->getId()]);
            } else {
                $this->addFlash('error', $localization->translate('Failed to edit product'));
            }
        } else {
            if (!empty($product->getImage())) {
                $product->setImage($originalImage);
            }
        }

        return $this->render(
            'admin/product/product-edit.twig',
            [
                'form' => $form->createView(),
                'product' => $product,
            ]
        );
    }
}