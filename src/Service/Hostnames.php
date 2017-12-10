<?php


namespace App\Service;


use Symfony\Component\HttpKernel\Exception\HttpException;

class Hostnames
{
    protected $env;

    public function __construct($env)
    {
        $this->env = $env;
    }

    public function getAdminUrl()
    {
        switch ($this->env) {
            case 'dev':
                $host = 'www.unplugged.nl:8000/admin';
                break;
            case 'prod':
                $host = 'www.unplugged.nl/admin';
                break;
            default:
                throw new HttpException(500, 'No environment given');
        }

        return 'http://' . $host;
    }

    public function getWebsiteUrl()
    {
        switch ($this->env) {
            case 'dev':
                $host = 'www.unplugged.nl:8000';
                break;
            case 'prod':
                $host = 'www.unplugged.nl';
                break;
            default:
                throw new HttpException(500, 'No environment given');
        }

        return 'http://' . $host;
    }
}