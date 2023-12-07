<?php include $_SERVER['DOCUMENT_ROOT']."/assets/header.php";?>
<?php 
echo 
$_SERVER['DOCUMENT_ROOT']?>

<style>
 .intro {
    height: 60px;
    padding: 25px
px
;
    background: violet;
}
p {
    margin: 10px 0;
    text-align: left;
    font-size: 16px;
}
#preguntas-frecuentes {
    margin-top: 0;
    margin-bottom: 24px !important;
    font-size: 36px !important;
    line-height: 1.2;
    color: var(--main);
    font-weight: 700;
}
div p {
    color: #1f73b7;
    font-weight: 700;
    display: flex;
    -webkit-justify-content: space-between;
    -moz-justify-content: space-between;
    justify-content: space-between;
    margin-bottom: 5px;
}
</style>
    <section id="home">
        <h1 class="h1home">Angel Eduardo Martínez Vázquez</h1>
       <p class="day">¿Qué día es hoy? <?php echo date("d/m/y");?></p>
        <!--Este es un comentario
        <div title="Este es un div">Este es un div</div>
        <img src="/Imagenes/descarga ejemplo html.jpg">
        <p><strong style="color: blueviolet;">Prueba de parrafo</strong></p>
        <div>
            <div>Esto es un div solo</div>
        <div>Esto es un div<span>con un espan dentro</span></div>
    </div>-->
     <picture> <img src="/Imagenes/angel-martinez-seo.jpg" alt="estrategia SEO" title="Consultor SEO"> </picture>
      <p class="angel">Hola soy Angel consultor SEO me especializo en generar estrategias digitales para <strong>el posicionamiento web</strong> con el objetivo que tu negocio se rentable</p>
      <table>
        <tr>
            <th>Nombre de  herramienta</th>
            <th>Funcion para SEO</th>
            <th>Precio</th>
        </tr>
        <td class="intro dos"> Semrush</td>
        <td class="intro tres">Funciona para realizar investigación de  sitios web</td>
        <td class="intro dos">$ US 400</td>
      </table>
    </section>
    <section id="preguntas-frecuentes">
        <h2>Preguntas frecuentes sobre SEO</h2>
        <details>
            <summary>¿Qué es SEO?</summary>
            <p>Es una estrategia utilizada para el posicionamiento en los sitios web</p>
          </details>
    </section>
    <section> 
        <video width="320" height="240" controls poster="/Imagenes/oso-trucha.jpg">
            <source src="/video/oso-cazando.mp4" type="video/mp4">
            <source src="/video/oso-cazando.mp4" type="video/ogg">
            Your browser does not support the video tag.
          </video>
    </section>
    <section>
        <h2 class="intro">Probado un poco de las mieles del SEO</h2>
        <p>Es importante saber lo bueno que se tiene en el  mundo del SEO</p>
    </section>
    <div>
        <p>Parrafo 1 para una prueba</p>
        <div>Parrafo 2 para otra prueba</div>
    </div>
    <section>
        <h2>Prueba de algunos estilos</h2>
        <P class="intro">Prueba 1</P>
        <p class="intro">Prueba 2</p>
    </section>
    <div>
        <h3>Prueba de un h3</h3>
        <span><p>La prueba más complicada es cuando no se intenta nada</p></span>
    </div>
    <div>
    /* ¿Esto es correcto? */
    <?php
    $seo = "Posicionamiento de medios de pago";
    if ($seo =="Posicionmiento orgánico") {
        echo "$seo";
    }
   else {
    echo 'Entonces no es posicionamiento orgánico';
   }
    ?>
    </diV>
   <?php
    $variable = "Esto es";
    echo "$variable"." una prueba de la variable". ' $variable';
    ?>

    <?php include $_SERVER['DOCUMENT_ROOT']."/assets/footer.php";?>