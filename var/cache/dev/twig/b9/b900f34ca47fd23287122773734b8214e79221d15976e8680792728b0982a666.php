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

/* baseFront.html.twig */
class __TwigTemplate_a0dd45e74b8fed0bfc365757d40369eb3a6df467007920a08013bec1fb8e66d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
    
<!-- index-431:41-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "   
<!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Header Area -->
            <header class=\"li-header-4\">
                <!-- Begin Header Top Area -->
                <div class=\"header-top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Top Left Area -->
                            <div class=\"col-lg-3 col-md-4\">
                                <div class=\"header-top-left\">
                                    <ul class=\"phone-wrap\">
                                        <li><span>Telephone Enquiry:</span><a href=\"#\">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class=\"col-lg-9 col-md-8\">
                                <div class=\"header-top-right\">
                                    <ul class=\"ht-menu\">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class=\"ht-setting-trigger\"><span>Setting</span></div>
                                            <div class=\"setting ht-setting\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"login-register.html\">My Account</a></li>
                                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                                    <li><a href=\"login-register.html\">Sign In</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class=\"currency-selector-wrapper\">Currency :</span>
                                            <div class=\"ht-currency-trigger\"><span>USD \$</span></div>
                                            <div class=\"currency ht-currency\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"#\">EUR €</a></li>
                                                    <li class=\"active\"><a href=\"#\">USD \$</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class=\"language-selector-wrapper\">Language :</span>
                                            <div class=\"ht-language-trigger\"><span>English</span></div>
                                            <div class=\"language ht-language\">
                                                <ul class=\"ht-setting-list\">
                                                    <li class=\"active\"><a href=\"#\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/flag-icon/1.jpg"), "html", null, true);
        echo "\" alt=\"\">English</a></li>
                                                    <li><a href=\"#\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/flag-icon/2.jpg"), "html", null, true);
        echo "\" alt=\"\">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class=\"header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Logo Area -->
                            <div class=\"col-lg-3\">
                                <div class=\"logo pb-sm-30 pb-xs-30\">
                                    <a href=\"index.html\">
                                        <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/logo/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class=\"col-lg-9 pl-0 ml-sm-15 ml-xs-15\">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action=\"#\" class=\"hm-searchbox\">
                                    <select class=\"nice-select select-search-category\">
                                        <option value=\"0\">All</option>                         
                                        <option value=\"10\">Laptops</option>                     
                                        <option value=\"17\">- -  Prime Video</option>                    
                                        <option value=\"20\">- - - -  All Videos</option>                     
                                        <option value=\"21\">- - - -  Blouses</option>                        
                                        <option value=\"22\">- - - -  Evening Dresses</option>                
                                        <option value=\"23\">- - - -  Summer Dresses</option>                     
                                        <option value=\"24\">- - - -  T-shirts</option>                       
                                        <option value=\"25\">- - - -  Rent or Buy</option>                        
                                        <option value=\"26\">- - - -  Your Watchlist</option>                     
                                        <option value=\"27\">- - - -  Watch Anywhere</option>                     
                                        <option value=\"28\">- - - -  Getting Started</option>         
                                        <option value=\"18\">- - - -  Computers</option>                      
                                        <option value=\"29\">- - - -  More to Explore</option>         
                                        <option value=\"30\">- - - -  TV &amp; Video</option>                     
                                        <option value=\"31\">- - - -  Audio &amp; Theater</option>               
                                        <option value=\"32\">- - - -  Camera, Photo </option>
                                        <option value=\"33\">- - - -  Cell Phones</option>                        
                                        <option value=\"34\">- - - -  Headphones</option>                     
                                        <option value=\"35\">- - - -  Video Games</option>                        
                                        <option value=\"36\">- - - -  Wireless Speakers</option>            
                                        <option value=\"19\">- - - -  Electronics</option>                        
                                        <option value=\"37\">- - - -  Amazon Home</option>                        
                                        <option value=\"38\">- - - -  Kitchen &amp; Dining</option>           
                                        <option value=\"39\">- - - -  Furniture</option>                      
                                        <option value=\"40\">- - - -  Bed &amp; Bath</option>                     
                                        <option value=\"41\">- - - -  Appliances</option>                 
                                        <option value=\"11\">TV &amp; Audio</option>                  
                                        <option value=\"42\">- -  Chamcham</option>                        
                                        <option value=\"45\">- - - -  Office</option>                     
                                        <option value=\"47\">- - - -  Gaming</option>                 
                                        <option value=\"48\">- - - -  Chromebook</option>                     
                                        <option value=\"49\">- - - -  Refurbished</option>                    
                                        <option value=\"50\">- - - -  Touchscreen</option>                        
                                        <option value=\"51\">- - - -  Ultrabooks</option>                     
                                        <option value=\"52\">- - - -  Blouses</option>                        
                                        <option value=\"43\">- -  Meito</option>                        
                                        <option value=\"53\">- - - -  Hard Drives</option>                        
                                        <option value=\"54\">- - - -  Graphic Cards</option>                      
                                        <option value=\"55\">- - - -  Processors (CPU)</option>  
                                        <option value=\"56\">- - - -  Memory</option>                     
                                        <option value=\"57\">- - - -  Motherboards</option>                       
                                        <option value=\"58\">- - - -  Fans &amp; Cooling</option> 
                                        <option value=\"59\">- - - -  CD/DVD Drives</option>                      
                                        <option value=\"44\">- -  XailStation</option>                        
                                        <option value=\"60\">- - - -  Sound Cards</option>                        
                                        <option value=\"61\">- - - -  Cases &amp; Towers</option>   
                                        <option value=\"62\">- - - -  Casual Dresses</option>                     
                                        <option value=\"63\">- - - -  Evening Dresses</option>       
                                        <option value=\"64\">- - - -  T-shirts</option>                       
                                        <option value=\"65\">- - - -  Tops</option>                                 
                                        <option value=\"12\">Smartphone</option>                  
                                        <option value=\"66\">- -  Camera Accessories</option>                     
                                        <option value=\"68\">- - - -  Octa Core</option>                      
                                        <option value=\"69\">- - - -  Quad Core</option>                  
                                        <option value=\"70\">- - - -  Dual Core</option>                      
                                        <option value=\"71\">- - - -  7.0 Screen</option>                     
                                        <option value=\"72\">- - - -  9.0 Screen</option>                     
                                        <option value=\"73\">- - - -  Bags &amp; Cases</option>                   
                                        <option value=\"67\">- -  Sanai</option>                     
                                        <option value=\"74\">- - - -  Batteries</option>                      
                                        <option value=\"75\">- - - -  Microphones</option>                        
                                        <option value=\"76\">- - - -  Stabilizers</option>                        
                                        <option value=\"77\">- - - -  Video Tapes</option>                        
                                        <option value=\"78\">- - - -  Memory Card Readers</option> 
                                        <option value=\"79\">- - - -  Tripods</option>           
                                        <option value=\"13\">Cameras</option>                          
                                        <option value=\"14\">headphone</option>                                
                                        <option value=\"15\">Smartwatch</option>                           
                                        <option value=\"16\">Accessories</option>
                                    </select>
                                    <input type=\"text\" placeholder=\"Enter your search key ...\">
                                    <button class=\"li-btn\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                              
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class=\"header-bottom header-sticky stick d-none d-lg-block d-xl-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class=\"hb-menu\">
                                   <nav>
                                       <ul>
                                        <li><a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li> 
                                        ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229)) {
            echo "    
                                           <li class=\"dropdown-holder\"><a href=\"#\">Reclamation</a>
                                            <ul class=\"hb-dropdown\">
                                                <li class=\"sub-dropdown-holder\"><a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("r_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "user", [], "any", false, false, false, 232), "id", [], "any", false, false, false, 232)]), "html", null, true);
            echo "\">Add Reclamation</a>
                                                </li>
                                                
                                                <li class=\"sub-dropdown-holder\"><a href=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("r_list", ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235), "id", [], "any", false, false, false, 235)]), "html", null, true);
            echo "\">Historique</a>  
                                                                                             
                                                </li>
                                            </ul>
                                        </li>
                                        ";
        }
        // line 240
        echo "      
                                        
                                          
                                           ";
        // line 243
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243)) {
            // line 244
            echo "                                           <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a></li>
                                          ";
        } else {
            // line 246
            echo "                                          
                                                <li><a href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usercompte", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "Nom", [], "any", false, false, false, 247), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "Prenom", [], "any", false, false, false, 247), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 248
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>
                                              </a>
                                          ";
        }
        // line 251
        echo "
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12\">
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
            ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 273, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 273));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 274
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 275
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 278));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 279
            echo "        <div class=\"alert alert-success\">
            ";
            // line 280
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "
            ";
        // line 284
        $this->displayBlock('body', $context, $blocks);
        // line 285
        echo "
       <!-- Begin Footer Area -->
       <div class=\"footer\">
        <!-- Begin Footer Static Top Area -->
        <div class=\"footer-static-top\">
            <div class=\"container\">
                <!-- Begin Footer Shipping Area -->
                <div class=\"footer-shipping pt-60 pb-25\">
                    <div class=\"row\">
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/1.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>Free Delivery</h2>
                                    <p>And free returns. See checkout for delivery dates.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/2.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>Safe Payment</h2>
                                    <p>Pay with the world's most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/3.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>Shop with Confidence</h2>
                                    <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/4.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>24/7 Help Center</h2>
                                    <p>Have a question? Call a Specialist or chat online.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                    </div>
                </div>
                <!-- Footer Shipping Area End Here -->
            </div>
        </div>
        <!-- Footer Static Top Area End Here -->
        <!-- Begin Footer Static Middle Area -->
        <div class=\"footer-static-middle\">
            <div class=\"container\">
                <div class=\"footer-logo-wrap pt-50 pb-35\">
                    <div class=\"row\">
                        <!-- Begin Footer Logo Area -->
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"footer-logo\">
                                <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/logo/1.jpg"), "html", null, true);
        echo "\" alt=\"Footer Logo\">
                                <p class=\"info\">
                                    We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                </p>
                            </div>
                            <ul class=\"des\">
                                <li>
                                    <span>Address: </span>
                                    6688Princess Road, London, Greater London BAS 23JK, UK
                                </li>
                                <li>
                                    <span>Phone: </span>
                                    <a href=\"#\">(+123) 123 321 345</a>
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href=\"mailto://info@yourdomain.com\">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Logo Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class=\"col-lg-2 col-md-3 col-sm-6\">
                            <div class=\"footer-block\">
                                <h3 class=\"footer-block-title\">Product</h3>
                                <ul>
                                    <li><a href=\"#\">Prices drop</a></li>
                                    <li><a href=\"#\">New products</a></li>
                                    <li><a href=\"#\">Best sales</a></li>
                                    <li><a href=\"#\">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class=\"col-lg-2 col-md-3 col-sm-6\">
                            <div class=\"footer-block\">
                                <h3 class=\"footer-block-title\">Our company</h3>
                                <ul>
                                    <li><a href=\"#\">Delivery</a></li>
                                    <li><a href=\"#\">Legal Notice</a></li>
                                    <li><a href=\"#\">About us</a></li>
                                    <li><a href=\"#\">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"footer-block\">
                                <h3 class=\"footer-block-title\">Follow Us</h3>
                                <ul class=\"social-link\">
                                    <li class=\"twitter\">
                                        <a href=\"https://twitter.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Twitter\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"rss\">
                                        <a href=\"https://rss.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"RSS\">
                                            <i class=\"fa fa-rss\"></i>
                                        </a>
                                    </li>
                                    <li class=\"google-plus\">
                                        <a href=\"https://www.plus.google.com/discover\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Google +\">
                                            <i class=\"fa fa-google-plus\"></i>
                                        </a>
                                    </li>
                                    <li class=\"facebook\">
                                        <a href=\"https://www.facebook.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Facebook\">
                                            <i class=\"fa fa-facebook\"></i>
                                        </a>
                                    </li>
                                    <li class=\"youtube\">
                                        <a href=\"https://www.youtube.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Youtube\">
                                            <i class=\"fa fa-youtube\"></i>
                                        </a>
                                    </li>
                                    <li class=\"instagram\">
                                        <a href=\"https://www.instagram.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Instagram\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Begin Footer Newsletter Area -->
                            <div class=\"footer-newsletter\">
                                <h4>Sign up to newsletter</h4>
                                <form action=\"#\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"footer-subscribe-form validate\" target=\"_blank\" novalidate>
                                   <div id=\"mc_embed_signup_scroll\">
                                      <div id=\"mc-form\" class=\"mc-form subscribe-form form-group\" >
                                        <input id=\"mc-email\" type=\"email\" autocomplete=\"off\" placeholder=\"Enter your email\" />
                                        <button  class=\"btn\" id=\"mc-submit\">Subscribe</button>
                                      </div>
                                   </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Area End Here -->
                        </div>
                        <!-- Footer Block Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->
        <div class=\"footer-static-bottom pt-55 pb-55\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <!-- Begin Footer Links Area -->
                        <div class=\"footer-links\">
                            <ul>
                                <li><a href=\"#\">Online Shopping</a></li>
                                <li><a href=\"#\">Promotions</a></li>
                                <li><a href=\"#\">My Orders</a></li>
                                <li><a href=\"#\">Help</a></li>
                                <li><a href=\"#\">Customer Service</a></li>
                                <li><a href=\"#\">Support</a></li>
                                <li><a href=\"#\">Most Populars</a></li>
                                <li><a href=\"#\">New Arrivals</a></li>
                                <li><a href=\"#\">Special Products</a></li>
                                <li><a href=\"#\">Manufacturers</a></li>
                                <li><a href=\"#\">Our Stores</a></li>
                                <li><a href=\"#\">Shipping</a></li>
                                <li><a href=\"#\">Payments</a></li>
                                <li><a href=\"#\">Warantee</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                                <li><a href=\"#\">Checkout</a></li>
                                <li><a href=\"#\">Discount</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                                <li><a href=\"#\">Policy Shipping</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links Area End Here -->
                        <!-- Begin Footer Payment Area -->
                        <div class=\"copyright text-center\">
                            <a href=\"#\">
                                <img src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/payment/1.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <!-- Footer Payment Area End Here -->
                        <!-- Begin Copyright Area -->
                        <div class=\"copyright text-center pt-25\">
                            <span><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></span>
                        </div>
                        <!-- Copyright Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Bottom Area End Here -->
    </div>
    <!-- Footer Area End Here -->
    <!-- Begin Quick View | Modal Area -->
    <div class=\"modal fade modal-wrapper\" id=\"exampleModalCenter\" >
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <div class=\"modal-inner-area row\">
                        <div class=\"col-lg-5 col-md-6 col-sm-6\">
                           <!-- Product Details Left -->
                            <div class=\"product-details-left\">
                                <div class=\"product-details-images slider-navigation-1\">
                                    <div class=\"lg-image\">
                                        <img src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/1.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/2.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/3.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/4.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/5.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/6.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                    </div>
                                </div>
                                <div class=\"product-details-thumbs slider-thumbs-1\">                                        
                                    <div class=\"sm-image\"><img src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/1.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/2.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/3.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/4.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/5.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/6.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class=\"col-lg-7 col-md-6 col-sm-6\">
                            <div class=\"product-details-view-content pt-60\">
                                <div class=\"product-info\">
                                    <h2>Today is a good day Framed poster</h2>
                                    <span class=\"product-details-ref\">Reference: demo_15</span>
                                    <div class=\"rating-box pt-20\">
                                        <ul class=\"rating rating-with-review-item\">
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"review-item\"><a href=\"#\">Read Review</a></li>
                                            <li class=\"review-item\"><a href=\"#\">Write Review</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"price-box pt-20\">
                                        <span class=\"new-price new-price-2\">\$57.98</span>
                                    </div>
                                    <div class=\"product-desc\">
                                        <p>
                                            <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                            </span>
                                        </p>
                                    </div>
                                    <div class=\"product-variants\">
                                        <div class=\"produt-variants-size\">
                                            <label>Dimension</label>
                                            <select class=\"nice-select\">
                                                <option value=\"1\" title=\"S\" selected=\"selected\">40x60cm</option>
                                                <option value=\"2\" title=\"M\">60x90cm</option>
                                                <option value=\"3\" title=\"L\">80x120cm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"single-add-to-cart\">
                                        <form action=\"#\" class=\"cart-quantity\">
                                            <div class=\"quantity\">
                                                <label>Quantity</label>
                                                <div class=\"cart-plus-minus\">
                                                    <input class=\"cart-plus-minus-box\" value=\"1\" type=\"text\">
                                                    <div class=\"dec qtybutton\"><i class=\"fa fa-angle-down\"></i></div>
                                                    <div class=\"inc qtybutton\"><i class=\"fa fa-angle-up\"></i></div>
                                                </div>
                                            </div>
                                            <button class=\"add-to-cart\" type=\"submit\">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class=\"product-additional-info pt-25\">
                                        <a class=\"wishlist-btn\" href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>Add to wishlist</a>
                                        <div class=\"product-social-sharing pt-25\">
                                            <ul>
                                                <li class=\"facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                                                <li class=\"twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                                                <li class=\"google-plus\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i>Google +</a></li>
                                                <li class=\"instagram\"><a href=\"#\"><i class=\"fa fa-instagram\"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- Quick View | Modal Area End Here -->
</div>
<!-- Body Wrapper End Here -->


";
        // line 629
        $this->displayBlock('javascripts', $context, $blocks);
        // line 672
        echo "</body>

<!-- index-431:47-->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>ProTECH</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome Stars-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-stars.css"), "html", null, true);
        echo "\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/meanmenu.css"), "html", null, true);
        echo "\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <!-- Slick Carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <!-- Jquery-ui CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
    <!-- Venobox CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/venobox.css"), "html", null, true);
        echo "\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Helper CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/helper.css"), "html", null, true);
        echo "\">
    <!-- Main Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
    <!-- Modernizr js -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("s/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "j\"></script>
</head>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 284
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 629
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 630
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Ajax Mail js -->
<script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax-mail.js"), "html", null, true);
        echo "\"></script>
<!-- Meanmenu js -->
<script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.meanmenu.min.js"), "html", null, true);
        echo "\"></script>
<!-- Wow.min js -->
<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slick Carousel js -->
<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<!-- Owl Carousel-2 js -->
<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- Magnific popup js -->
<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Isotope js -->
<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<!-- Imagesloaded js -->
<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<!-- Mixitup js -->
<script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Countdown -->
<script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- Counterup -->
<script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Waypoints -->
<script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<!-- Barrating -->
<script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.barrating.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery-ui -->
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Venobox -->
<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/venobox.min.js"), "html", null, true);
        echo "\"></script>
<!-- Nice Select js -->
<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- ScrollUp js -->
<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<!-- Main/Activator js -->
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1043 => 670,  1038 => 668,  1033 => 666,  1028 => 664,  1023 => 662,  1018 => 660,  1013 => 658,  1008 => 656,  1003 => 654,  998 => 652,  993 => 650,  988 => 648,  983 => 646,  978 => 644,  973 => 642,  968 => 640,  963 => 638,  958 => 636,  953 => 634,  948 => 632,  942 => 630,  932 => 629,  913 => 284,  900 => 45,  895 => 43,  890 => 41,  885 => 39,  880 => 37,  875 => 35,  870 => 33,  865 => 31,  860 => 29,  855 => 27,  850 => 25,  845 => 23,  840 => 21,  835 => 19,  830 => 17,  825 => 15,  820 => 13,  817 => 12,  807 => 11,  788 => 8,  774 => 672,  772 => 629,  691 => 551,  687 => 550,  683 => 549,  679 => 548,  675 => 547,  671 => 546,  664 => 542,  658 => 539,  652 => 536,  646 => 533,  640 => 530,  634 => 527,  601 => 497,  461 => 360,  435 => 337,  419 => 324,  403 => 311,  387 => 298,  372 => 285,  370 => 284,  367 => 283,  358 => 280,  355 => 279,  350 => 278,  341 => 275,  338 => 274,  334 => 273,  310 => 251,  304 => 248,  296 => 247,  293 => 246,  287 => 244,  285 => 243,  280 => 240,  271 => 235,  265 => 232,  259 => 229,  255 => 228,  149 => 125,  125 => 104,  121 => 103,  64 => 48,  62 => 11,  58 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
    
<!-- index-431:41-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    {% block title %}<title>ProTECH</title> {% endblock %}
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('images/favicon.png')}}\">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel=\"stylesheet\" href=\"{{asset('css/material-design-iconic-font.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\">
    <!-- Font Awesome Stars-->
    <link rel=\"stylesheet\" href=\"{{asset('css/fontawesome-stars.css')}}\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/meanmenu.css')}}\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
    <!-- Slick Carousel CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/slick.css')}}\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
    <!-- Jquery-ui CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery-ui.min.css')}}\">
    <!-- Venobox CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/venobox.css')}}\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/nice-select.css')}}\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\">
    <!-- Helper CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/helper.css')}}\">
    <!-- Main Style CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('style.css')}}\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/responsive.css')}}\">
    <!-- Modernizr js -->
    <script src=\"{{asset('s/vendor/modernizr-2.8.3.min.js')}}j\"></script>
</head>
        {% endblock %}
   
<!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Header Area -->
            <header class=\"li-header-4\">
                <!-- Begin Header Top Area -->
                <div class=\"header-top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Top Left Area -->
                            <div class=\"col-lg-3 col-md-4\">
                                <div class=\"header-top-left\">
                                    <ul class=\"phone-wrap\">
                                        <li><span>Telephone Enquiry:</span><a href=\"#\">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class=\"col-lg-9 col-md-8\">
                                <div class=\"header-top-right\">
                                    <ul class=\"ht-menu\">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class=\"ht-setting-trigger\"><span>Setting</span></div>
                                            <div class=\"setting ht-setting\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"login-register.html\">My Account</a></li>
                                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                                    <li><a href=\"login-register.html\">Sign In</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class=\"currency-selector-wrapper\">Currency :</span>
                                            <div class=\"ht-currency-trigger\"><span>USD \$</span></div>
                                            <div class=\"currency ht-currency\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"#\">EUR €</a></li>
                                                    <li class=\"active\"><a href=\"#\">USD \$</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class=\"language-selector-wrapper\">Language :</span>
                                            <div class=\"ht-language-trigger\"><span>English</span></div>
                                            <div class=\"language ht-language\">
                                                <ul class=\"ht-setting-list\">
                                                    <li class=\"active\"><a href=\"#\"><img src=\"{{asset('images/menu/flag-icon/1.jpg')}}\" alt=\"\">English</a></li>
                                                    <li><a href=\"#\"><img src=\"{{asset('images/menu/flag-icon/2.jpg')}}\" alt=\"\">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class=\"header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Logo Area -->
                            <div class=\"col-lg-3\">
                                <div class=\"logo pb-sm-30 pb-xs-30\">
                                    <a href=\"index.html\">
                                        <img src=\"{{asset('images/menu/logo/2.jpg')}}\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class=\"col-lg-9 pl-0 ml-sm-15 ml-xs-15\">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action=\"#\" class=\"hm-searchbox\">
                                    <select class=\"nice-select select-search-category\">
                                        <option value=\"0\">All</option>                         
                                        <option value=\"10\">Laptops</option>                     
                                        <option value=\"17\">- -  Prime Video</option>                    
                                        <option value=\"20\">- - - -  All Videos</option>                     
                                        <option value=\"21\">- - - -  Blouses</option>                        
                                        <option value=\"22\">- - - -  Evening Dresses</option>                
                                        <option value=\"23\">- - - -  Summer Dresses</option>                     
                                        <option value=\"24\">- - - -  T-shirts</option>                       
                                        <option value=\"25\">- - - -  Rent or Buy</option>                        
                                        <option value=\"26\">- - - -  Your Watchlist</option>                     
                                        <option value=\"27\">- - - -  Watch Anywhere</option>                     
                                        <option value=\"28\">- - - -  Getting Started</option>         
                                        <option value=\"18\">- - - -  Computers</option>                      
                                        <option value=\"29\">- - - -  More to Explore</option>         
                                        <option value=\"30\">- - - -  TV &amp; Video</option>                     
                                        <option value=\"31\">- - - -  Audio &amp; Theater</option>               
                                        <option value=\"32\">- - - -  Camera, Photo </option>
                                        <option value=\"33\">- - - -  Cell Phones</option>                        
                                        <option value=\"34\">- - - -  Headphones</option>                     
                                        <option value=\"35\">- - - -  Video Games</option>                        
                                        <option value=\"36\">- - - -  Wireless Speakers</option>            
                                        <option value=\"19\">- - - -  Electronics</option>                        
                                        <option value=\"37\">- - - -  Amazon Home</option>                        
                                        <option value=\"38\">- - - -  Kitchen &amp; Dining</option>           
                                        <option value=\"39\">- - - -  Furniture</option>                      
                                        <option value=\"40\">- - - -  Bed &amp; Bath</option>                     
                                        <option value=\"41\">- - - -  Appliances</option>                 
                                        <option value=\"11\">TV &amp; Audio</option>                  
                                        <option value=\"42\">- -  Chamcham</option>                        
                                        <option value=\"45\">- - - -  Office</option>                     
                                        <option value=\"47\">- - - -  Gaming</option>                 
                                        <option value=\"48\">- - - -  Chromebook</option>                     
                                        <option value=\"49\">- - - -  Refurbished</option>                    
                                        <option value=\"50\">- - - -  Touchscreen</option>                        
                                        <option value=\"51\">- - - -  Ultrabooks</option>                     
                                        <option value=\"52\">- - - -  Blouses</option>                        
                                        <option value=\"43\">- -  Meito</option>                        
                                        <option value=\"53\">- - - -  Hard Drives</option>                        
                                        <option value=\"54\">- - - -  Graphic Cards</option>                      
                                        <option value=\"55\">- - - -  Processors (CPU)</option>  
                                        <option value=\"56\">- - - -  Memory</option>                     
                                        <option value=\"57\">- - - -  Motherboards</option>                       
                                        <option value=\"58\">- - - -  Fans &amp; Cooling</option> 
                                        <option value=\"59\">- - - -  CD/DVD Drives</option>                      
                                        <option value=\"44\">- -  XailStation</option>                        
                                        <option value=\"60\">- - - -  Sound Cards</option>                        
                                        <option value=\"61\">- - - -  Cases &amp; Towers</option>   
                                        <option value=\"62\">- - - -  Casual Dresses</option>                     
                                        <option value=\"63\">- - - -  Evening Dresses</option>       
                                        <option value=\"64\">- - - -  T-shirts</option>                       
                                        <option value=\"65\">- - - -  Tops</option>                                 
                                        <option value=\"12\">Smartphone</option>                  
                                        <option value=\"66\">- -  Camera Accessories</option>                     
                                        <option value=\"68\">- - - -  Octa Core</option>                      
                                        <option value=\"69\">- - - -  Quad Core</option>                  
                                        <option value=\"70\">- - - -  Dual Core</option>                      
                                        <option value=\"71\">- - - -  7.0 Screen</option>                     
                                        <option value=\"72\">- - - -  9.0 Screen</option>                     
                                        <option value=\"73\">- - - -  Bags &amp; Cases</option>                   
                                        <option value=\"67\">- -  Sanai</option>                     
                                        <option value=\"74\">- - - -  Batteries</option>                      
                                        <option value=\"75\">- - - -  Microphones</option>                        
                                        <option value=\"76\">- - - -  Stabilizers</option>                        
                                        <option value=\"77\">- - - -  Video Tapes</option>                        
                                        <option value=\"78\">- - - -  Memory Card Readers</option> 
                                        <option value=\"79\">- - - -  Tripods</option>           
                                        <option value=\"13\">Cameras</option>                          
                                        <option value=\"14\">headphone</option>                                
                                        <option value=\"15\">Smartwatch</option>                           
                                        <option value=\"16\">Accessories</option>
                                    </select>
                                    <input type=\"text\" placeholder=\"Enter your search key ...\">
                                    <button class=\"li-btn\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                              
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class=\"header-bottom header-sticky stick d-none d-lg-block d-xl-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class=\"hb-menu\">
                                   <nav>
                                       <ul>
                                        <li><a href=\"{{path('home')}}\">Home</a></li> 
                                        {% if  app.user %}    
                                           <li class=\"dropdown-holder\"><a href=\"#\">Reclamation</a>
                                            <ul class=\"hb-dropdown\">
                                                <li class=\"sub-dropdown-holder\"><a href=\"{{ path('r_add', {id:app.user.id}) }}\">Add Reclamation</a>
                                                </li>
                                                
                                                <li class=\"sub-dropdown-holder\"><a href=\"{{path('r_list', {value:app.user.id}) }}\">Historique</a>  
                                                                                             
                                                </li>
                                            </ul>
                                        </li>
                                        {% endif %}      
                                        
                                          
                                           {% if not app.user %}
                                           <li><a href=\"{{path('login')}}\">Login</a></li>
                                          {% else %}
                                          
                                                <li><a href=\"{{path(\"usercompte\",{'id':app.user.id}) }}\">{{app.user.Nom}},{{app.user.Prenom}}</a></li>
                                                <li><a href=\"{{path('logout')}}\">Logout</a></li>
                                              </a>
                                          {% endif %}

                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12\">
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
            {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

            {% block body %} {% endblock %}

       <!-- Begin Footer Area -->
       <div class=\"footer\">
        <!-- Begin Footer Static Top Area -->
        <div class=\"footer-static-top\">
            <div class=\"container\">
                <!-- Begin Footer Shipping Area -->
                <div class=\"footer-shipping pt-60 pb-25\">
                    <div class=\"row\">
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"{{asset('images/shipping-icon/1.png')}}\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>Free Delivery</h2>
                                    <p>And free returns. See checkout for delivery dates.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"{{asset('images/shipping-icon/2.png')}}\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>Safe Payment</h2>
                                    <p>Pay with the world's most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"{{asset('images/shipping-icon/3.png')}}\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>Shop with Confidence</h2>
                                    <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                            <div class=\"li-shipping-inner-box\">
                                <div class=\"shipping-icon\">
                                    <img src=\"{{asset('images/shipping-icon/4.png')}}\" alt=\"Shipping Icon\">
                                </div>
                                <div class=\"shipping-text\">
                                    <h2>24/7 Help Center</h2>
                                    <p>Have a question? Call a Specialist or chat online.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                    </div>
                </div>
                <!-- Footer Shipping Area End Here -->
            </div>
        </div>
        <!-- Footer Static Top Area End Here -->
        <!-- Begin Footer Static Middle Area -->
        <div class=\"footer-static-middle\">
            <div class=\"container\">
                <div class=\"footer-logo-wrap pt-50 pb-35\">
                    <div class=\"row\">
                        <!-- Begin Footer Logo Area -->
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"footer-logo\">
                                <img src=\"{{asset('images/menu/logo/1.jpg')}}\" alt=\"Footer Logo\">
                                <p class=\"info\">
                                    We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                </p>
                            </div>
                            <ul class=\"des\">
                                <li>
                                    <span>Address: </span>
                                    6688Princess Road, London, Greater London BAS 23JK, UK
                                </li>
                                <li>
                                    <span>Phone: </span>
                                    <a href=\"#\">(+123) 123 321 345</a>
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href=\"mailto://info@yourdomain.com\">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Logo Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class=\"col-lg-2 col-md-3 col-sm-6\">
                            <div class=\"footer-block\">
                                <h3 class=\"footer-block-title\">Product</h3>
                                <ul>
                                    <li><a href=\"#\">Prices drop</a></li>
                                    <li><a href=\"#\">New products</a></li>
                                    <li><a href=\"#\">Best sales</a></li>
                                    <li><a href=\"#\">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class=\"col-lg-2 col-md-3 col-sm-6\">
                            <div class=\"footer-block\">
                                <h3 class=\"footer-block-title\">Our company</h3>
                                <ul>
                                    <li><a href=\"#\">Delivery</a></li>
                                    <li><a href=\"#\">Legal Notice</a></li>
                                    <li><a href=\"#\">About us</a></li>
                                    <li><a href=\"#\">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"footer-block\">
                                <h3 class=\"footer-block-title\">Follow Us</h3>
                                <ul class=\"social-link\">
                                    <li class=\"twitter\">
                                        <a href=\"https://twitter.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Twitter\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"rss\">
                                        <a href=\"https://rss.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"RSS\">
                                            <i class=\"fa fa-rss\"></i>
                                        </a>
                                    </li>
                                    <li class=\"google-plus\">
                                        <a href=\"https://www.plus.google.com/discover\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Google +\">
                                            <i class=\"fa fa-google-plus\"></i>
                                        </a>
                                    </li>
                                    <li class=\"facebook\">
                                        <a href=\"https://www.facebook.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Facebook\">
                                            <i class=\"fa fa-facebook\"></i>
                                        </a>
                                    </li>
                                    <li class=\"youtube\">
                                        <a href=\"https://www.youtube.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Youtube\">
                                            <i class=\"fa fa-youtube\"></i>
                                        </a>
                                    </li>
                                    <li class=\"instagram\">
                                        <a href=\"https://www.instagram.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Instagram\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Begin Footer Newsletter Area -->
                            <div class=\"footer-newsletter\">
                                <h4>Sign up to newsletter</h4>
                                <form action=\"#\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"footer-subscribe-form validate\" target=\"_blank\" novalidate>
                                   <div id=\"mc_embed_signup_scroll\">
                                      <div id=\"mc-form\" class=\"mc-form subscribe-form form-group\" >
                                        <input id=\"mc-email\" type=\"email\" autocomplete=\"off\" placeholder=\"Enter your email\" />
                                        <button  class=\"btn\" id=\"mc-submit\">Subscribe</button>
                                      </div>
                                   </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Area End Here -->
                        </div>
                        <!-- Footer Block Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->
        <div class=\"footer-static-bottom pt-55 pb-55\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <!-- Begin Footer Links Area -->
                        <div class=\"footer-links\">
                            <ul>
                                <li><a href=\"#\">Online Shopping</a></li>
                                <li><a href=\"#\">Promotions</a></li>
                                <li><a href=\"#\">My Orders</a></li>
                                <li><a href=\"#\">Help</a></li>
                                <li><a href=\"#\">Customer Service</a></li>
                                <li><a href=\"#\">Support</a></li>
                                <li><a href=\"#\">Most Populars</a></li>
                                <li><a href=\"#\">New Arrivals</a></li>
                                <li><a href=\"#\">Special Products</a></li>
                                <li><a href=\"#\">Manufacturers</a></li>
                                <li><a href=\"#\">Our Stores</a></li>
                                <li><a href=\"#\">Shipping</a></li>
                                <li><a href=\"#\">Payments</a></li>
                                <li><a href=\"#\">Warantee</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                                <li><a href=\"#\">Checkout</a></li>
                                <li><a href=\"#\">Discount</a></li>
                                <li><a href=\"#\">Refunds</a></li>
                                <li><a href=\"#\">Policy Shipping</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links Area End Here -->
                        <!-- Begin Footer Payment Area -->
                        <div class=\"copyright text-center\">
                            <a href=\"#\">
                                <img src=\"{{asset('images/payment/1.png')}}\" alt=\"\">
                            </a>
                        </div>
                        <!-- Footer Payment Area End Here -->
                        <!-- Begin Copyright Area -->
                        <div class=\"copyright text-center pt-25\">
                            <span><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></span>
                        </div>
                        <!-- Copyright Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Bottom Area End Here -->
    </div>
    <!-- Footer Area End Here -->
    <!-- Begin Quick View | Modal Area -->
    <div class=\"modal fade modal-wrapper\" id=\"exampleModalCenter\" >
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <div class=\"modal-inner-area row\">
                        <div class=\"col-lg-5 col-md-6 col-sm-6\">
                           <!-- Product Details Left -->
                            <div class=\"product-details-left\">
                                <div class=\"product-details-images slider-navigation-1\">
                                    <div class=\"lg-image\">
                                        <img src=\"{{asset('images/product/large-size/1.jpg')}}\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"{{asset('images/product/large-size/2.jpg')}}\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"{{asset('images/product/large-size/3.jpg')}}\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"{{asset('images/product/large-size/4.jpg')}}\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"{{asset('images/product/large-size/5.jpg')}}\" alt=\"product image\">
                                    </div>
                                    <div class=\"lg-image\">
                                        <img src=\"{{asset('images/product/large-size/6.jpg')}}\" alt=\"product image\">
                                    </div>
                                </div>
                                <div class=\"product-details-thumbs slider-thumbs-1\">                                        
                                    <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/1.jpg')}}\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/2.jpg')}}\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/3.jpg')}}\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/4.jpg')}}\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/5.jpg')}}\" alt=\"product image thumb\"></div>
                                    <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/6.jpg')}}\" alt=\"product image thumb\"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class=\"col-lg-7 col-md-6 col-sm-6\">
                            <div class=\"product-details-view-content pt-60\">
                                <div class=\"product-info\">
                                    <h2>Today is a good day Framed poster</h2>
                                    <span class=\"product-details-ref\">Reference: demo_15</span>
                                    <div class=\"rating-box pt-20\">
                                        <ul class=\"rating rating-with-review-item\">
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                            <li class=\"review-item\"><a href=\"#\">Read Review</a></li>
                                            <li class=\"review-item\"><a href=\"#\">Write Review</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"price-box pt-20\">
                                        <span class=\"new-price new-price-2\">\$57.98</span>
                                    </div>
                                    <div class=\"product-desc\">
                                        <p>
                                            <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                            </span>
                                        </p>
                                    </div>
                                    <div class=\"product-variants\">
                                        <div class=\"produt-variants-size\">
                                            <label>Dimension</label>
                                            <select class=\"nice-select\">
                                                <option value=\"1\" title=\"S\" selected=\"selected\">40x60cm</option>
                                                <option value=\"2\" title=\"M\">60x90cm</option>
                                                <option value=\"3\" title=\"L\">80x120cm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"single-add-to-cart\">
                                        <form action=\"#\" class=\"cart-quantity\">
                                            <div class=\"quantity\">
                                                <label>Quantity</label>
                                                <div class=\"cart-plus-minus\">
                                                    <input class=\"cart-plus-minus-box\" value=\"1\" type=\"text\">
                                                    <div class=\"dec qtybutton\"><i class=\"fa fa-angle-down\"></i></div>
                                                    <div class=\"inc qtybutton\"><i class=\"fa fa-angle-up\"></i></div>
                                                </div>
                                            </div>
                                            <button class=\"add-to-cart\" type=\"submit\">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class=\"product-additional-info pt-25\">
                                        <a class=\"wishlist-btn\" href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>Add to wishlist</a>
                                        <div class=\"product-social-sharing pt-25\">
                                            <ul>
                                                <li class=\"facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                                                <li class=\"twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                                                <li class=\"google-plus\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i>Google +</a></li>
                                                <li class=\"instagram\"><a href=\"#\"><i class=\"fa fa-instagram\"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- Quick View | Modal Area End Here -->
</div>
<!-- Body Wrapper End Here -->


{% block javascripts %}
<script src=\"{{asset('js/vendor/jquery-1.12.4.min.js')}}\"></script>
<!-- Popper js -->
<script src=\"{{asset('js/vendor/popper.min.js')}}\"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
<!-- Ajax Mail js -->
<script src=\"{{asset('js/ajax-mail.js')}}\"></script>
<!-- Meanmenu js -->
<script src=\"{{asset('js/jquery.meanmenu.min.js')}}\"></script>
<!-- Wow.min js -->
<script src=\"{{asset('js/wow.min.js')}}\"></script>
<!-- Slick Carousel js -->
<script src=\"{{asset('js/slick.min.js')}}\"></script>
<!-- Owl Carousel-2 js -->
<script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
<!-- Magnific popup js -->
<script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
<!-- Isotope js -->
<script src=\"{{asset('js/isotope.pkgd.min.js')}}\"></script>
<!-- Imagesloaded js -->
<script src=\"{{asset('js/imagesloaded.pkgd.min.js')}}\"></script>
<!-- Mixitup js -->
<script src=\"{{asset('js/jquery.mixitup.min.js')}}\"></script>
<!-- Countdown -->
<script src=\"{{asset('js/jquery.countdown.min.js')}}\"></script>
<!-- Counterup -->
<script src=\"{{asset('js/jquery.counterup.min.js')}}\"></script>
<!-- Waypoints -->
<script src=\"{{asset('js/waypoints.min.js')}}\"></script>
<!-- Barrating -->
<script src=\"{{asset('js/jquery.barrating.min.js')}}\"></script>
<!-- Jquery-ui -->
<script src=\"{{asset('js/jquery-ui.min.js')}}\"></script>
<!-- Venobox -->
<script src=\"{{asset('js/venobox.min.js')}}\"></script>
<!-- Nice Select js -->
<script src=\"{{asset('js/jquery.nice-select.min.js')}}\"></script>
<!-- ScrollUp js -->
<script src=\"{{asset('js/scrollUp.min.js')}}\"></script>
<!-- Main/Activator js -->
<script src=\"{{asset('js/main.js')}}\"></script>
{% endblock %}
</body>

<!-- index-431:47-->
</html>
", "baseFront.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/baseFront.html.twig");
    }
}
