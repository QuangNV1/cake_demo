<?php

/* C:\Users\OM-CASO\Desktop\mailRegister\vendor\cakephp\bake\src\Template\Bake\Layout\default.twig */
class __TwigTemplate_47afc01b2b65373f126fac0c343ef13175683d3c2d0fe06ae1ce351001276025 extends Twig_Template
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
        $__internal_9feea8f0ab0bd53d7ec5459b5b2c5c70d99654cbcd53145a85de3d7749c8f6ab = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_9feea8f0ab0bd53d7ec5459b5b2c5c70d99654cbcd53145a85de3d7749c8f6ab->enter($__internal_9feea8f0ab0bd53d7ec5459b5b2c5c70d99654cbcd53145a85de3d7749c8f6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\Users\\OM-CASO\\Desktop\\mailRegister\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig"));

        // line 16
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "content"), "method");
        
        $__internal_9feea8f0ab0bd53d7ec5459b5b2c5c70d99654cbcd53145a85de3d7749c8f6ab->leave($__internal_9feea8f0ab0bd53d7ec5459b5b2c5c70d99654cbcd53145a85de3d7749c8f6ab_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Users\\OM-CASO\\Desktop\\mailRegister\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "C:\\Users\\OM-CASO\\Desktop\\mailRegister\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig", "");
    }
}
