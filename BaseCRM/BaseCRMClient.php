<?php

namespace Vladab\BaseCRMBundle\BaseCRM;

use BaseCRM\Client;

class BaseCRMClient extends Client
{
    public $config;

    /**
     * BaseCRM constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        return parent::__construct(['accessToken' => $this->config['access_token']]);
    }
}