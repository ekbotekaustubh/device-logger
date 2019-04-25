<?php

/**
 * Class Config
 */
class Config
{
    private $config;

    public function __construct()
    {
        $this->config = parse_ini_file(APPLICATION_PATH . '/config/application.ini', true);
    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        

        return $this->config[APPLICATION_ENV];
    }
}