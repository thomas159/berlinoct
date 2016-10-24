<?php

/* C:\xampp\htdocs\berlinoct/themes/superberlin/pages/links.htm */
class __TwigTemplate_e75369fe0db1c91d449452355ae2764c68e87f2a787c43290ef9ab7e82962a20 extends Twig_Template
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
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 7
        echo "
<ul class=\"record-list\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "        <li>
            ";
            // line 12
            echo "            ";
            ob_start();
            // line 13
            echo "                ";
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 14
                echo "                    <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter((isset($context["detailsPage"]) ? $context["detailsPage"] : null), array((isset($context["detailsUrlParameter"]) ? $context["detailsUrlParameter"] : null) => $this->getAttribute($context["record"], (isset($context["detailsKeyColumn"]) ? $context["detailsKeyColumn"] : null))));
                echo "\">
                ";
            }
            // line 16
            echo "
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], (isset($context["displayColumn"]) ? $context["displayColumn"] : null)), "html", null, true);
            echo "
                 ";
            // line 18
            echo $this->getAttribute($context["record"], "url", array());
            echo "

                ";
            // line 20
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 21
                echo "                    </a>
                ";
            }
            // line 23
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 24
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noRecordsMessage"]) ? $context["noRecordsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>

";
        // line 30
        if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > 1)) {
            // line 31
            echo "    <ul class=\"pagination\">
        ";
            // line 32
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) > 1)) {
                // line 33
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 35
            echo "
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 38
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        ";
            // line 42
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()))) {
                // line 43
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 45
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\berlinoct/themes/superberlin/pages/links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  136 => 43,  134 => 42,  131 => 41,  120 => 38,  115 => 37,  111 => 36,  108 => 35,  102 => 33,  100 => 32,  97 => 31,  95 => 30,  91 => 28,  82 => 26,  76 => 24,  73 => 23,  69 => 21,  67 => 20,  62 => 18,  58 => 17,  55 => 16,  49 => 14,  46 => 13,  43 => 12,  40 => 10,  35 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set records = builderList.records %}*/
/* {% set displayColumn = builderList.displayColumn %}*/
/* {% set noRecordsMessage = builderList.noRecordsMessage %}*/
/* {% set detailsPage = builderList.detailsPage %}*/
/* {% set detailsKeyColumn = builderList.detailsKeyColumn %}*/
/* {% set detailsUrlParameter = builderList.detailsUrlParameter %}*/
/* */
/* <ul class="record-list">*/
/*     {% for record in records %}*/
/*         <li>*/
/*             {# Use spaceless tag to remove spaces inside the A tag. #}*/
/*             {% spaceless %}*/
/*                 {% if detailsPage %}*/
/*                     <a href="{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}">*/
/*                 {% endif %}*/
/* */
/*                 {{ attribute(record, displayColumn) }}*/
/*                  {{ record.url|raw }}*/
/* */
/*                 {% if detailsPage %}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             {% endspaceless %}*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="no-data">{{ noRecordsMessage }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% if records.lastPage > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if records.currentPage > 1 %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}">&larr; Prev</a></li>*/
/*         {% endif %}*/
/* */
/*         {% for page in 1..records.lastPage %}*/
/*             <li class="{{ records.currentPage == page ? 'active' : null }}">*/
/*                 <a href="{{ this.page.baseFileName|page({ (pageParam): page }) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if records.lastPage > records.currentPage %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}">Next &rarr;</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
