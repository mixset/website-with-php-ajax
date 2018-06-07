<?php

namespace Application;

class Engine
{
    /**
     * Minimal PHP Version for application working
    */
    const REQUIRED_PHP_VERSION = '5.4.0';

    /**
     * Error reporting type
    */
    const ERROR_REPORTING = E_ALL ^ E_NOTICE;

    /**
     * Extension of files in pages directories
    */
    const TEMPLATE_EXT = '.php';

    /**
     * Path to pages directory
    */
    const PAGES_PATH = 'template/pages/';

    /**
     * Default page, when none is given
    */
    const DEFAULT_PAGE = 'strona-glowna';

    /**
     * Engine constructor.
    */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Some basic stuff
    */
    private function initialize()
    {
        error_reporting(self::ERROR_REPORTING);

        if (phpversion() < self::REQUIRED_PHP_VERSION) {
            throw new \Exception('Application requires' . self::REQUIRED_PHP_VERSION . ' or higher.');
        }
    }

    /**
     * Load page depending on $_GET['page'] variable
    */
    public function loadSection()
    {
        $page = $_GET['page']
            ? $this->secureGET('page')
            : self::DEFAULT_PAGE;

        $dir = self::PAGES_PATH;

        $path = $dir . $page . self::TEMPLATE_EXT;

        if (file_exists($path) === false) {
            throw new \Exception('File ' . $path . ' does not exist.');
        }

        require_once $path;
    }

    /**
     * Sanitize GET input
     *
     * @param $param
     * @return mixed
    */
    private function secureGET($param)
    {
        return filter_input(INPUT_GET, $param, FILTER_SANITIZE_STRING);
    }
}
