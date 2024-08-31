<?php

namespace YipTest;

use Smarty\Smarty;

class bootstrap extends Smarty
{

    protected $landing;
    protected static $instance = null;

    /**
     * pass the landing page template filename as a string 
     * e.g. home_page.tpl = class::('home');
     * @param mixed $landing_page_name
     */
    public function __construct($landing_page_name = null)
    {

        parent::__construct();

        $this->landing = $landing_page_name;

        // the initialization what displays first
        $this->setTemplateDir(__DIR__ . '/templates/');
        $this->setCompileDir(__DIR__ . '/templates_c/');
     
        // >>>>> BACKEND SCRIPT ROUTING
        $this->assign('registration_script', '/app/scripts/user.php');

        if($this->landing){
        // Display the form for the first time
        $this->display($this->landing.'.tpl');
        }
    }

    public static function loadSmarty()
    {

        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
