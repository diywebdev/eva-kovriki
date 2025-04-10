<?php

Twig_Autoloader::register();

class View
{
    public $data = array();
    public $header = array();
    public $footer = array();

    function generate($content,$template_view = TPL)
    {
        $twig = new Twig_Environment(new Twig_Loader_Filesystem('view'));
        
        $header = $twig->loadTemplate("header.php")->render($this->header);
        $content = $twig->loadTemplate($content)->render($this->data);
        $footer = $twig->loadTemplate("footer.php")->render($this->footer);
        include $template_view;
    }
}

?>