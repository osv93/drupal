<?php

/* themes/laboratorio_drupal/templates/page.html.twig */
class __TwigTemplate_546178a72b6c286e650b79b5b4ec0df1c17e40101b1724ec54085d753f456df9 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

  <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">


  <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\">
  <link href=\"print.css\" type=\"text/css\" rel=\"stylesheet\">



  <title>Examen parcial1-UNA</title>
</head>
<body>
\t<!--Contenedor principal que define un tamaño para hacer el scroll-->
\t<div class=\"wrapper\">\t
  ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t\t<header>
      ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "myheader", array()), "html", null, true));
        echo "
      <div class=\"container-fluid\">
        <div class=\"navbar-header modified-titulo\" >
          <!--<a class=\"navbar-brand\" href=\"#\">WebSiteName</a>-->
          <h3 class=\"navbar-brand\">UNA WEB [ Luis Osvaldo Aguero Perez - 115360385]</h3>
        </div>
        <ul class=\"nav navbar-nav navbar-right hidden-print\">
         <li class=\"menuHome\"><a href=\"#\">HOME</a></li>
         <li class=\"menuAbout\"><a href=\"#\">ABOUT</a></li>
         <li class=\"menuCourses\"><a href=\"#\">COURSES</a></li>
         <li><a href=\"#\">CONTACT</a></li>
       </ul>
     </div>
   </header>
   <div class=\"containerImg\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "img1", array()), "html", null, true));
        echo "<img class=\"img-responsive hidden-print\" src=\"./themes/laboratorio_drupal/images/imagen.png\" alt=\"img1\"></div>

   <!--Contenedor de las secciones de la página-->
   <div class=\"row\">
    <div class=\"col-md-5\">
      <article>
        <section class=\"sectionMain\">
         <h2>Main Section</h2>
         <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.   
          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.               
        </p>
        <p>
          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.                     
          In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. 
        </p> 
      </section>
    </article>
  </div>
  <div class=\"col-md-3\">
    <section class=\"SubSectionCenter\">
      <h2>Sub-section Center</h2>
      <p id=\"textoCuadro\">
       A <b>paragrap</b> of <span>text</span> with an <a href=\"#\">unassigned link</a>.
       <br>
       A <i>second row</i> of <s>text</s> with a <a class=\"sinDecoracion\" href=\"#\">web link</a>
     </p>

     <!--Imagen-->
     <img class=\"img-responsive hidden-print\" src=\"./themes/laboratorio_drupal/images/imagen2.png\" alt=\"img2\">
     <p>
       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
     </p>
     <p>
       Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
     </p>
   </section>
 </div>
 <div class=\"col-md-3\">
  <section class=\"SubSectionRight\">

    <h2>Sub-Section Right</h2>
    <p>
     We open at <span>10:00</span> every morning.
   </p>
   <p>
     Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
   </p>   
   <section class=\"SubSubSection\">
     <h3>Sub-Sub-section</h3>
     <p>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
    </p>

    <img class=\"img-responsive hidden-print\" src=\"./themes/laboratorio_drupal/images/imagen2.png\" alt=\"img3\">
    <section class=\"SubSubSubSection\">
      <h4>Sub-Sub-Sub-section</h4>
      <p>
       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
     </p>
   </section>
 </section>
</section>
</div>



</div>
</div>
<!--El pie de página-->
<footer>
";
        // line 111
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
  <div class=\"lineaFooter\"></div>
  <div class=\"Footer\">
   <nav>
    <ul class=\"\">
     <li class=\"menuHome\"><a href=\"#\">HOME</a></li>
     <li class=\"menuAbout\"><a href=\"#\">ABOUT</a></li>
     <li class=\"menuCourses\"><a href=\"#\">COURSES</a></li>
     <li><a href=\"#\">CONTACT</a></li>
   </ul>
 </nav>
</div>
Copyright &copy; 2017. Curso de Programacion Web
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/laboratorio_drupal/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 111,  85 => 35,  68 => 21,  63 => 19,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/laboratorio_drupal/templates/page.html.twig", "C:\\Users\\Osvaldo\\Documents\\GitHub\\drupal\\themes\\laboratorio_drupal\\templates\\page.html.twig");
    }
}
