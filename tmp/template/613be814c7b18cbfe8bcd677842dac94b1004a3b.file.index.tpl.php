<?php /* Smarty version Smarty-3.1.8, created on 2015-01-21 17:36:40
         compiled from "C:\xampp\htdocs\proindusquim\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1747554bfd598e80bd4-51053839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613be814c7b18cbfe8bcd677842dac94b1004a3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proindusquim\\views\\index\\index.tpl',
      1 => 1421776350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747554bfd598e80bd4-51053839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54bfd598eb76e0_20741408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bfd598eb76e0_20741408')) {function content_54bfd598eb76e0_20741408($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/nuestra_empresa.jpg" style="float:right;"/>
        </li>
        <li class="frame-1">
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/acerca_de_proindusquim.jpg" style="float:right;"/>
        </li>
        <li class="frame-2">
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/principales_objetivos.jpg" style="float:right;"/>
        </li>
    </div>
        <!-- inicio script para que funcione el slider-->
        <script>
            $(document).ready(function() {
                    $("#banner_ul").zAccordion({
                            slideWidth: 900,
                            width: 1100,
                            height: 450,
                            /*timeout: 15000,*/
                            slideClass: "frame",
                            speed: 5000,
                    });
            });
	</script>
        <!-- fin script slider -->        
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio sección promocción
<div id="promocion">
    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/promocion_proindusquim.jpg" />
</div>
fin sección promoción -->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <!--inicio sección descripción de la empresa -->
               <!-- inicio sección descripción productos derecha-->        
        <div id="demo">
            <div id="features">
                
                <div>
            <!-- inicio sección descripción productos izquierda-->

                <ul class="youtube-videogallery eddie" style="height:240px">
                    <li><a href="https://www.youtube.com/embed/A2Ik5poI9AQ">Video Corporativo</a></li>
                </ul>
                <!-- Inicio script funcionamiento videos -->
                <script>
                    
                    $(document).ready(function(){
                        $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'fancybox'} );
                    });
                    
                </script>
                <!--Fin script funcionamiento videos-->                

            <!-- inicio sección descripción productos derecha-->                         
                    <h2 class="subtitulo-2 verde_obscuro">MISIÓN</h2> 
                    <p>Elaboración de productos químicos industriales y servicios afines de calidad, siendo responsables con el ambiente, nuestros trabajadores y la sociedad en general.</p><br/>
                    <h2 class="subtitulo-2 verde_obscuro">VISIÓN</h2>
                    <p>Afianzarnos en el mercado nacional, como una de las mejores empresas tanto en el desarrollo como en la fabricación de productos químicos, brindando soluciones a los diversos sectores de la economía, con el compromiso del cuidado y conservación del ambiente.</p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/politicas.png" alt="Eddie" class="eddie2" /></br>   
                    <h2 class="subtitulo-2 verde_obscuro">POLÍTICAS</h2> 
                    <p><b class="verde_obscuro">PROINDUSQUIM S.A.</b> es una empresa dedicada a desarrollar, elaborar y comercializar productos químicos y cosméticos de alta calidad, así como servicios especiales de manufactura. El cumplimiento de las normativas y requisitos legales  vigentes y otros requisitos, al igual que los sistemas de operación seguros implementados, nos comprometen a garantizar el mejoramiento continuo en:<br/><br/>
                        <ul>
                            <li style="margin-left: 100px;">La satisfacción de los requisitos y necesidades de nuestros clientes.</li>
                            <li style="margin-left: 100px;">La  prevención y protección del medio ambiente en todas nuestras actividades.</li>
                            <li style="margin-left: 100px;">La seguridad y salud de nuestros trabajadores, transportistas, contratistas, socios comerciales y comunidad inmediata.</li>
                        </ul>
                    </p>                    
                </div>
            

                <div>
                    <!--<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/mision_vision_proindusquim.png" alt="Eddie" class="eddie" />-->
                    <h2 class="subtitulo-2 verde_obscuro">ACERCA DE PROINDUSQUIM</h2> 
                    <p><b class="verde_obscuro">PROINDUSQUIM S.A.</b> es una empresa dedicada a la fabricación y comercialización de productos químicos para la Industria en general, Hospitales, Instituciones y Hogar.</p>
                    <p>Inició sus actividades en febrero de 1982, teniendo siempre como meta servir a sus clientes con productos de alta calidad y tecnología desarrollada localmente y en el extranjero, dando soluciones a bajo costo, pero con calidad, durabilidad, alto rendimiento y fácil aplicación.</p>
                    <p>Contamos con 2.000 m&sup2; de instalaciones propias, en un área total de 28.000 m&sup2; que está conformada por el Conjunto Industrial "Requimec" al sur de la ciudad de Quito. La constante investigación de productos y mercado nos permite afrontar las innovaciones que día a día se generan para aplicarse en todas las áreas de negocio, las cuales siempre requieren de nuevas soluciones.</p>
                    <p><b class="verde_obscuro">PROINDUSQUIM S.A.</b> es una empresa dedicada a desarrollar y fabricar productos de alta calidad, así como otros servicios especiales. Hemos implementado sistemas de operación seguros, que nos comprometen a garantizar que la protección del medio ambiente, la seguridad y la salud ocupacional dentro y fuera de nuestras instalaciones, sean base de todas nuestras actividades.</p>
                </div>
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/objetivos.png" alt="Eddie" class="eddie" />   
                    <h2 class="subtitulo-2 verde_obscuro">NUESTROS OBJETIVOS SON</h2> <br/>
                        <ol>
                            <li style="margin-left: 100px;">Satisfacer las necesidades de nuestros clientes, proporcionando un servicio eficaz, seguro y respaldado.</li><br/>
                            <li style="margin-left: 100px;">Identificar, evaluar, controlar y minimizar los riesgos potenciales que puedan presentar nuestras actividades en instalaciones y productos, para con nuestros empleados, clientes, contratistas, transportistas y la comunidad.</li><br/>
                            <li style="margin-left: 100px;">Proteger el medio ambiente y prevenir la contaminación, desempeñando actividades y utilizando materias primas y procesos seguros que no afecten ni comprometan nuestro ecosistema.</li><br/>
                        </ol>
                    <!--<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/hecho_ecuador.png" alt="Eddie" class="eddie" />-->
                    <h2 class="subtitulo-2 verde_obscuro">La Línea de Servicios Especiales </h2><br/>
                    <p>Mantiene nuestros estándares de calidad y seguridad, y está enfocada a aquellas áreas muy particulares de la industria.</p>
                    <p>Dentro de nuestros principales desarrollos tenemos los siguientes:</p><br/>
                    <ul style="margin-left:50px;">
                        <li>Formulación y desarrollo de productos y líneas.</li>
                        <li>Envasado de líquidos, geles, polvos y aerosoles.</li>
                        <li>Maquila de productos cosméticos e industriales bajo marca propia.</li>
                        <li>Envasado en cartuchos y/o tubos colapsibles de productos con alta viscosidad.</li>
                        <li>Servicio de etiquetado, codificado Ink Jet y empacado termoencogible.</li>
                        <li>Fabricación de productos a granel.</li>
                        <li>Distribución a nivel nacional de productos o líneas complementarias.</li>
                    </ul>                        
                </div>
             </div>
            <!-- script de funcionamiento del slider de descripción de la empresa-->
            <script type="text/javascript">		
                $(document).ready(function(){ $('#features').jshowoff(); });
            </script>
            <!-- fin script de funcionamiento del slider de descripción de la empresa-->
        </div>
        <!-- fin sección descripción de la empresa-->
        <!-- inicio sección descripción productos
        <div id="barra_productos">
            <div class="left-footer-productos">
                <div class="cuadro_productos">
                    <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> INSTITUCIONAL / HOGAR</div>
                    <div class="centrado bloque_titulos subtitulo-4 blanco"> ANTIHUMEDAD</div>
                    <div class="descripcion_productos">
                        <p><b class="rojo">Descripción:</b><br/>Es un Producto elaborado para absorber el exceso de humedad del ambiente, causante de moho, oxidación y daño de objetos. </p><br/>
                    </div>
                    <div class="imagen_productos">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/antihumedad2.jpg" />
                        <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                    </div>
                </div>
                    <div class="contenedor_ver_mas">
                        <a href="institucional_hogar"><div class="ver_mas">+ ver más</div></a>
                    </div>    
            </div>
            <div class="left-footer-productos">
                <div class="cuadro_productos">
                    <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> CONSTRUCCIÓN</div>
                    <div class="centrado bloque_titulos subtitulo-4 blanco"> LAVADOR 50</div>
                    <div class="descripcion_productos">
                        <p><b class="rojo">Descripción:</b><br/>Desincrustante ácido para cemento y salitre.</p><br/>
                    </div>
                    <div class="imagen_productos">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/lavador2.jpg" />
                        <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                    </div>
                </div>
                    <div class="contenedor_ver_mas">
                        <a href="construccion"><div class="ver_mas">+ ver más</div></a>
                    </div>
            </div>  
            <div class="left-footer-productos">
                <div class="cuadro_productos">                
                    <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> INDUSTRIAL</div>
                    <div class="centrado bloque_titulos subtitulo-4 blanco"> DS-30 BIO</div>
                    <div class="descripcion_productos">
                        <p><b class="rojo">Descripción:</b><br/>Limpiador desengrasante multiuso alta biodegradabilidad.</p><br/>
                    </div>
                    <div class="imagen_productos">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/bio_ds302.jpg" />
                        <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                    </div>
                </div>
                    <div class="contenedor_ver_mas">
                        <a href="industrial"><div class="ver_mas">+ ver más</div></a>
                    </div>
            </div>                  
        </div>
        fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico --><?php }} ?>