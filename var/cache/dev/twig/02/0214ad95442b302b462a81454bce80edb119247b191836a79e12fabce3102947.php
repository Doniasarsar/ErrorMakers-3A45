<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* utilisateurs/addUser.html.twig */
class __TwigTemplate_471f9c68e9dd8483fd9820ac12b4d67a567b226756eca7e1aa382a7ea3d0a0e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/addUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/addUser.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "utilisateurs/addUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>ProTECH | Register</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class=\"breadcrumb-area\">
                <div class=\"container\">
                    <div class=\"breadcrumb-content\">
                        <ul>
                            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                            <li class=\"active\">Register</li>
                           </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class=\"page-section mb-60\">
                <div class=\"container\">
                    <div class=\"row\">       
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acteurSAdd");
        echo "\">Or register with a Professional account</a></h4>
                                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 38, $this->source); })()), "Prenom", [], "any", false, false, false, 38), 'label', ["label" => "First Name"]);
        echo "</td>
                                          <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 39, $this->source); })()), "Prenom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "</td>
                                         </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 43, $this->source); })()), "Nom", [], "any", false, false, false, 43), 'label', ["label" => "Last Name"]);
        echo "
                                           ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 44, $this->source); })()), "Nom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                         
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 48, $this->source); })()), "Telephone", [], "any", false, false, false, 48), 'label', ["label" => "Telephone"]);
        echo "
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 49, $this->source); })()), "Telephone", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 53, $this->source); })()), "Email", [], "any", false, false, false, 53), 'label', ["label" => "Email Adress"]);
        echo "
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 54, $this->source); })()), "Email", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                          </div>
                                        <div class=\"col-md-6 mb-20\">
                                           ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), "Password", [], "any", false, false, false, 57), 'label', ["label" => "Password"]);
        echo "
                                           ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 58, $this->source); })()), "Password", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 62, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 62), 'label', ["label" => "Confirm Password"]);
        echo "
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 63, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                            
                                         </div>
                                       <div class=\"col-12\">
                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 67, $this->source); })()), "Register", [], "any", false, false, false, 67), 'row', ["attr" => ["label" => "Register", "class" => "register-button mt-0"]]);
        echo "
                                          
                                        </div>
                                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
                                    </div>
                                </div>
                        
                        </div>
                   
                </div>
            </div>
            <!-- Login Content Area End Here -->
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 70,  198 => 67,  191 => 63,  187 => 62,  180 => 58,  176 => 57,  170 => 54,  166 => 53,  159 => 49,  155 => 48,  148 => 44,  144 => 43,  137 => 39,  133 => 38,  126 => 34,  122 => 33,  107 => 21,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseFront.html.twig\" %}
{% block title %}<title>ProTECH | Register</title> {% endblock %}
{% block body %}
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class=\"breadcrumb-area\">
                <div class=\"container\">
                    <div class=\"breadcrumb-content\">
                        <ul>
                            <li><a href=\"{{path('home')}}\">Home</a></li>
                            <li class=\"active\">Register</li>
                           </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class=\"page-section mb-60\">
                <div class=\"container\">
                    <div class=\"row\">       
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\"><a href=\"{{path('acteurSAdd')}}\">Or register with a Professional account</a></h4>
                                    {{ form_start(userForm,{'attr': {'novalidate': 'novalidate'}} ) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>{{ form_label(userForm.Prenom,\"First Name\") }}</td>
                                          <td>{{ form_widget(userForm.Prenom,{'attr':{\"class\":\"mb-0\"}}) }}</td>
                                         </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           {{ form_label(userForm.Nom,\"Last Name\") }}
                                           {{ form_widget(userForm.Nom,{'attr':{\"class\":\"mb-0\"}}) }}
                                         
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(userForm.Telephone,\"Telephone\") }}
                                            {{ form_widget(userForm.Telephone,{'attr':{\"class\":\"mb-0\"}}) }}
                                           
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(userForm.Email,\"Email Adress\") }}
                                            {{ form_widget(userForm.Email,{'attr':{\"class\":\"mb-0\"}}) }}
                                          </div>
                                        <div class=\"col-md-6 mb-20\">
                                           {{ form_label(userForm.Password,\"Password\") }}
                                           {{ form_widget(userForm.Password,{'attr':{\"class\":\"mb-0\"}}) }}
                                           
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(userForm.ConfirmPassword,\"Confirm Password\") }}
                                            {{ form_widget(userForm.ConfirmPassword,{'attr':{\"class\":\"mb-0\"}}) }}
                                            
                                         </div>
                                       <div class=\"col-12\">
                                            {{ form_row(userForm.Register,{'attr':{ \"label\":\"Register\" ,\"class\":\"register-button mt-0\"}}) }}
                                          
                                        </div>
                                        {{ form_end(userForm) }}
                                    </div>
                                </div>
                        
                        </div>
                   
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "utilisateurs/addUser.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/utilisateurs/addUser.html.twig");
    }
}