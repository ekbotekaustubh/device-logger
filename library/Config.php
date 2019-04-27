<?php

/**
 * Class Config
 */
class Config
{
    /**
     * @var array
     */
    private $config;

    /**
     * @return mixed
     */
    public function parseIniFile()
    {
        $data = parse_ini_file(APPLICATION_PATH . '/config/application.ini', true);

        $config = [];
        foreach ($data as $section => $configurations) {
            $explodeSection = explode(':', $section);
            if (count($explodeSection) > 1) {
                $config[$explodeSection[0]] = array_merge($data[$explodeSection[1]], $data[$section]);
                continue;
            }

            $config[$section] = $configurations;
        }

        return $config;
    }

    /**
     * Get configuaration.
     *
     * @return array
     * @throws Exception
     */
    public function getConfig()
    {
        if (null === $this->config) {
            $this->config = $this->parseIniFile();
        }

        if (!isset($this->config[APPLICATION_ENV])) {
            throw new Exception('Environment not set.');
        }

        return $this->config[APPLICATION_ENV];
    }
}