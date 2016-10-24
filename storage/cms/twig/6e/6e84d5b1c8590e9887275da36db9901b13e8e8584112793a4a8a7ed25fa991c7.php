<?php

/* C:\xampp\htdocs\berlinoct/themes/superberlin/pages/home.htm */
class __TwigTemplate_2cd7505bef54d8405133939ce4bca237172efb89c9a0496359a35e7c11c127c4 extends Twig_Template
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
        echo "@extends('layouts.home')
@section('title', 'SuperBerlin')
@section('content')

@include('partials.slider-home')


<div class=\"fullcontainer-diag-home\">

\t<div class=\"aside\">
\t\t<div class=\"aside-top\">
\t\t\t<div class=\"aside-container-home\"><img src=\"../../images/sidebar/ford300x600.jpg\" width=\"300\" height=\"600\"></div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t<div class=\"grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--full gridxl--full\">
\t\t\t\t<div class=\"grid-cell\">
\t\t\t\t\t<h1>News and reviews around Berlin</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-cell\">
\t\t\t\t\t<h5>We bring you reviews of Berlin's best restaurants and bars and provide help and advice on moving to Berlin</h5>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div><!--Container-->
</div><!--full Container end -->
    
<div class=\"fullcontainer-diag-before\">
\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t<div class=\"grid-cell\"><h3>LINKS</h3></div>
\t\t\t
\t\t\t@include('partials.home-links')
\t\t\t
\t\t</div>
\t</div><!--Main End -->
</div><!--Container end -->

<div class=\"fullcontainer-home\">
\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t<div class=\"grid-cell\"><h3>NEWS</h3></div>
\t\t\t
\t\t\t@include('partials.home-pie')
\t\t\t
\t\t</div>
\t</div><!--Main End -->
</div><!--Container end -->

<div class=\"fullcontainer-home\">
\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t
\t\t\t
\t\t\t@include('partials.home-thingstodo')
\t\t\t
\t\t</div>
\t</div><!--Main End -->
</div><!--Container end -->


\t\t


\t\t
\t
\t



@stop";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\berlinoct/themes/superberlin/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* @extends('layouts.home')*/
/* @section('title', 'SuperBerlin')*/
/* @section('content')*/
/* */
/* @include('partials.slider-home')*/
/* */
/* */
/* <div class="fullcontainer-diag-home">*/
/* */
/* 	<div class="aside">*/
/* 		<div class="aside-top">*/
/* 			<div class="aside-container-home"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="container">*/
/* 		<div class="content">*/
/* 			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--full gridxl--full">*/
/* 				<div class="grid-cell">*/
/* 					<h1>News and reviews around Berlin</h1>*/
/* 				</div>*/
/* 				<div class="grid-cell">*/
/* 					<h5>We bring you reviews of Berlin's best restaurants and bars and provide help and advice on moving to Berlin</h5>*/
/* 				</div>	*/
/* 			</div>*/
/* 		</div>*/
/* 	</div><!--Container-->*/
/* </div><!--full Container end -->*/
/*     */
/* <div class="fullcontainer-diag-before">*/
/* 	<div class="container">*/
/* 		<div class="content">*/
/* 			<div class="grid-cell"><h3>LINKS</h3></div>*/
/* 			*/
/* 			@include('partials.home-links')*/
/* 			*/
/* 		</div>*/
/* 	</div><!--Main End -->*/
/* </div><!--Container end -->*/
/* */
/* <div class="fullcontainer-home">*/
/* 	<div class="container">*/
/* 		<div class="content">*/
/* 			<div class="grid-cell"><h3>NEWS</h3></div>*/
/* 			*/
/* 			@include('partials.home-pie')*/
/* 			*/
/* 		</div>*/
/* 	</div><!--Main End -->*/
/* </div><!--Container end -->*/
/* */
/* <div class="fullcontainer-home">*/
/* 	<div class="container">*/
/* 		<div class="content">*/
/* 			*/
/* 			*/
/* 			@include('partials.home-thingstodo')*/
/* 			*/
/* 		</div>*/
/* 	</div><!--Main End -->*/
/* </div><!--Container end -->*/
/* */
/* */
/* 		*/
/* */
/* */
/* 		*/
/* 	*/
/* 	*/
/* */
/* */
/* */
/* @stop*/
