<?php

/* C:\xampp\htdocs\berlinoct/themes/superberlin/layouts/home.htm */
class __TwigTemplate_13dbfd89fa6ed43bc04e8d40f89ed42154a537dd62459c9cb3b318d120b70109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
\t@include('includes.head')
</head>
<body>
\t@include('includes.header')\t
<div class=\"main\">\t\t
\t@yield('content')\t
</div>
<footer id=\"footer\">
\t@include('includes.footer')
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\berlinoct/themes/superberlin/layouts/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en" class="no-js">*/
/* <head>*/
/* 	@include('includes.head')*/
/* </head>*/
/* <body>*/
/* 	@include('includes.header')	*/
/* <div class="main">		*/
/* 	@yield('content')	*/
/* </div>*/
/* <footer id="footer">*/
/* 	@include('includes.footer')*/
/* </footer>*/
/* </body>*/
/* </html>*/
