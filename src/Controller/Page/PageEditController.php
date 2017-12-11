<?php


namespace App\Controller\Page;


use App\Controller\BaseController;
use App\Entity\Page;
use App\Form\PageType;
use App\Service\FileUploader;
use App\Service\Localization;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Translation\Translator;

class PageEditController extends BaseController
{
    /**
     * @Route("/{_locale}/admin/pagina/wijzig/{id}/{locale}", name="admin_page_edit_nl", requirements={"id": "\d+"})
     * @Route("/admin/page/edit/{id}/{locale}", name="admin_page_edit_en", requirements={"id": "\d+"})
     */
    public function editAction($id, $locale, Request $request, Localization $localization, FileUploader $fileUploader)
    {
        $page = $this->getDoctrine()->getRepository(Page::class)->findOneBy(['id' => $id, 'locale' => $locale]);
        if (empty($page)) {
            throw new HttpException(404, $localization->translate('Could not find requested page'));
        }

        $form = $this->createForm(PageType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();

                if (!empty($data['slide_image']) && $data['slide_image'] instanceof UploadedFile) {
                    $data['slide_image'] = $fileUploader->upload($data['slide_image']);
                } else {
                    unset($data['slide_image']);
                }

                if (!empty($data['header']) && $data['header'] instanceof UploadedFile) {
                    $data['header'] = $fileUploader->upload($data['header']);
                } else {
                    unset($data['header']);
                }

                $page->edit($data);
                $this->save($page);
                $this->addFlash('success', $localization->translate('Page was edited successfully'));
                return $localization->redirectToLocalizedRoute('admin_page_edit', ['id' => $page->getId(), 'locale' => $page->getLocale()]);
            } else {
                $this->addFlash('error', $localization->translate('Failed to edit page'));
            }
        }

        return $this->render(
            'admin/page/page-edit.twig',
            [
                'form' => $form->createView(),
                'page' => $page,
            ]
        );
    }
}