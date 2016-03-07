<?php

namespace Vladab\BaseCRMBundle\BaseCRM;

use BaseCRM\Client;

class BaseCRM extends Client
{
    protected $config;

    /**
     * BaseCRM constructor.
     * @param array $config
     * @throws \Exception
     * @return BaseCRM/Client
     */
    public function __construct(array $config)
    {
        return parent::__construct(['accessToken' => $this->config['access_token']]);
    }
}