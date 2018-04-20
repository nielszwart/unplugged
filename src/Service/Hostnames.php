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
                $host = 'www.unplugging.nl/admin';
                break;
            case 'prod':
                $host = 'www.unplugging.nl/admin';
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
                $host = 'www.unplugging.nl';
                break;
            case 'prod':
                $host = 'www.unplugging.nl';
                break;
            default:
                throw new HttpException(500, 'No environment given');
        }

        return 'http://' . $host;
    }
}
