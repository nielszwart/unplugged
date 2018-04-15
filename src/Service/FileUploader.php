<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FileUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file)
    {
        $nameParts = pathinfo($file->getClientOriginalName());
        $fileName = $nameParts['filename'] . "_" . md5(uniqid()) . '.' . $file->guessExtension();

        $file->move($this->getTargetDir(), $fileName);

        return $fileName;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }

    public function chunkedUpload($values, SessionInterface $session)
    {
        if (empty($_FILES['file']) || intval($_FILES['file']['error']) > 0) {
            $this->validationFail('bad_request', 'An error occured.');
        }

        $tmpName = $_FILES['file']['tmp_name'];
        $tmpDirectory = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();

        if (!is_uploaded_file($tmpName)) {
            $this->validationFail('bad_request', 'An error occured.');
        }

        if (!empty($session->get('chunkedFilename')) && is_file($tmpDirectory.'/'.$session->get('chunkedFilename'))) {
            file_put_contents($tmpDirectory . '/' . $session->get('chunkedFilename'), fopen($tmpName, 'r'), FILE_APPEND);
            unlink($tmpName);

            // We stop here if the file is not completely loaded
            $currentSize = filesize($tmpDirectory . '/' . $session->get('chunkedFilename'));
            if ($currentSize < $values['resumableTotalSize']) {
                return true;
            } else {
                $tmpName = $tmpDirectory . '/' . $session->get('chunkedFilename');
            }
        } else {
            $session->set('chunkedFilename', $values['resumableIdentifier'] . '.part');
            move_uploaded_file($tmpName, $tmpDirectory . '/' . $session->get('chunkedFilename'));
            $currentSize = filesize($tmpDirectory . '/' . $session->get('chunkedFilename'));
            if ($currentSize < $values['resumableTotalSize']) {
                return true;
            } else {
                $tmpName = $tmpDirectory . '/' . $session->get('chunkedFilename');
            }
        }

        rename($tmpName, $this->getTargetDir() . md5(uniqid()) . '_' . $values['resumableFilename']);
        $session->remove('chunkedFilename');
        return true;
    }

    public function validationFail($result, $title = 'Invalid request.', $code = 400) {
        header('HTTP/1.1 '.$code.' '.$title);
        echo(json_encode(array(
            'success' => false,
            'result'  => $result,
            'error'   => $title
        )));

        exit();
    }
}
