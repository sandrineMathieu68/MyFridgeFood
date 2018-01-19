<?php

/* energy.html */
class __TwigTemplate_4b8886b5bf33f6aa69883841ffa0a2e6d12d629b4ed6f93d27e7710b92263fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "energy.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<title>Calculer la calorie des aliments !</title>
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
    <div class=\"row pag\">
        <div class=\"search col s12 m12 l12\">
            <form class=\"filters\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/search\" method=\"post\">
                <div class=\"input-field l12\">
                    <i class=\"material-icons prefix\">search</i>
                    <input type=\"search\" maxlength=\"80\" size=\"80\" name=\"search\" id=\"autocomplete-input\" class=\"autocomplete searched\">
                    <label for=\"autocomplete-input\">Rechercher un produit</label>
                </div>
            </form>
            <button type=\"button\" class=\"btn yellow accent-1 grey-text reset\">Reset</button>
        </div>
        <div class=\"col s12 m8 l8 yellow lighten-5\">
            <form class=\"filters hide-on-small-only center-align\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/energy/letter\" method=\"post\">
                <ul class=\"pagination\">
                    <li class=\"active\">
                        <button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"a\">A</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"b\">B</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"c\">C</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"d\">D</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"e\">E</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"f\">F</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"g\">G</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"h\">H</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"i\">I</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"j\">J</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"k\">K</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"l\">L</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"m\">M</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"n\">N</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"o\">O</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"p\">P</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"q\">Q</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"r\">R</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"s\">S</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"t\">T</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"u\">U</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"v\">V</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"w\">W</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"x\">X</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"y\">Y</button></li>
                    <li><button type=\"submit\" name=\"letter\" class=\"lettre waves-effect yellow accent-1 grey-text\" value=\"z\">Z</button></li>
                </ul>
            </form>
            <div class=\"col s12 l12\">
                <div id=\"products\">
                    <div class=\"searching-panel row\">
                    </div>
                </div>
            </div>
            <div class=\"col s8 l12\">
                <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["locate"] ?? null), "html", null, true);
        echo "/MyFridgeFood/energy/category\" class=\"filters\" method=\"post\">
                    <div class=\"input-field\">
                        <select name=\"category\" id=\"cat\">
                       <option value=\"\" disabled selected>Sélectionner une catégorie</option>
                       <option class=\"cat\" value=\"Compléments alimentaires\">Compléments alimentaires</option>
                       <option class=\"cat\" value=\"Filet-de-boeuf\">Filet-de-boeuf</option>
                       <option class=\"cat\" value=\"Poissons et viandes et oeufs\">Poissons et viandes et oeufs</option>
                       <option class=\"cat\" value=\"Pains\">Pains</option>
                       <option class=\"cat\" value=\"Viandes\">Viandes</option>
                       <option class=\"cat\" value=\"Terrines\">Terrines</option>
                       <option class=\"cat\" value=\"Glaces\">Glaces</option>
                       <option class=\"cat\" value=\"Plats préparés\">Plats préparés</option>
                       <option class=\"cat\" value=\"Aliments et boissons à base de végétaux\">Aliments et boissons à base de végétaux</option>
                       <option class=\"cat\" value=\"Sodas\">Sodas</option>
                       <option class=\"cat\" value=\"Sodas aux fruits\">Sodas aux fruits</option>
                       <option class=\"cat\" value=\"Chocolats\">Chocolats</option>
                       <option class=\"cat\" value=\"Produits à tartiner\">Produits à tartiner</option>
                       <option class=\"cat\" value=\"Chips et frites\">Chips et frites</option>
                       <option class=\"cat\" value=\"Sablés\">Sablés</option>
                       <option class=\"cat\" value=\"Biscuits\">Biscuits</option>
                       <option class=\"cat\" value=\"Cookies\">Cookies</option>
                       <option class=\"cat\" value=\"Gâteaux\">Gâteaux</option>
                       <option class=\"cat\" value=\"Pâtisseries\">Pâtisseries</option>
                       <option class=\"cat\" value=\"Petit-déjeuners\">Petit-déjeuners</option>
                       <option class=\"cat\" value=\"Bonbons\">Bonbons</option>
                       <option class=\"cat\" value=\"Boissons\">Boissons</option>
                       <option class=\"cat\" value=\"Thés\">Thés</option>
                       <option class=\"cat\" value=\"Soupes\">Soupes</option>
                       <option class=\"cat\" value=\"Sirops\">Sirops</option>
                       <option class=\"cat\" value=\"Snacks sucrés\">Snacks sucrés</option>
                       <option class=\"cat\" value=\"Epicerie\">Epicerie</option>
                       <option class=\"cat\" value=\"Surgelés\">Surgelés</option>
                       <option class=\"cat\" value=\"Fromages de vache\">Fromages de vache</option>
                       <option class=\"cat\" value=\"Légumes frais\">Légumes frais</option>
                       <option class=\"cat\" value=\"Salades composées\">Salades composées</option>
                       <option class=\"cat\" value=\"Crêpes et galettes\">Crêpes et galettes</option>
                       <option class=\"cat\" value=\"Sandwichs\">Sandwichs</option>
                       <option class=\"cat\" value=\"Matières grasses\">Matières grasses</option>
                       <option class=\"cat\" value=\"Fruits à coques\">Fruits à coques</option>
                       <option class=\"cat\" value=\"Riz\">Riz</option>
                       <option class=\"cat\" value=\"Condiments\">Condiments</option>
                       <option class=\"cat\" value=\"Confitures\">Confitures</option>
                   </select>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"col s3 m4 l3 refrigerateur yellow accent-1 hide-on-med-and-down\">
            <div class=\"header-ref\">Mon refrigerateur</div>
            <div class=\"article_list empty\"></div>
        </div>
        <div class=\"col s12 m4 l3 center-align\" id=\"graphique\">

        </div>
    </div>
</div>
";
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        echo "<script type=\"text/javascript\">
    \$('.reset').click(function() {
        alphabet(\"default\");
        originalPie();
        \$('.article_list').html('');
        listCalories = [];
        x = 0;
        CalorieUtilise = 0;
        utilise = 0;
        besoinRestant = 0;
    });
    alphabet(\"default\");
    originalPie();
</script>
";
    }

    public function getTemplateName()
    {
        return "energy.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 112,  160 => 111,  99 => 55,  58 => 17,  45 => 7,  40 => 4,  37 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "energy.html", "/home/kevinv/public/MyFridgeFood/view/energy.html");
    }
}
