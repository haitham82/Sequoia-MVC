<?php
class Sequoia
{

    /**
     * @var SConfig
     */
    private $config;

    public function __construct(SConfig $config)
    {
        $this->config = $config;
    }

    public function init()
    {
        $application = isset($_GET['app']) ? $_GET['app'] : $this->config->defaultApp;
        $this->getApp($application);
    }

    private function getApp($appName)
    {
        require APP . DS . $appName . DS . $appName . '.php';
    }
}