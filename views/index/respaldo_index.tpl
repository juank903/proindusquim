<!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider">ACERCA DE PROINDUSQUIM</div></div>
            <img src="{$_layoutParams.root}public/img/acerca_de_proindusquim.jpg" style="float:right;"/>
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">VIDEO CORPORATIVO</div></div>
            <iframe width="800" height="450" src="//www.youtube.com/embed/A2Ik5poI9AQ" frameborder="0" style="float:right;"></iframe>
        </li>
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">PRINCIPALES OBJETIVOS</div></div>
            <img src="{$_layoutParams.root}public/img/principales_objetivos.jpg" style="float:right;"/>
        </li>
    </div>
        <!-- inicio script para que funcione el slider-->
        <script>
            $(document).ready(function() {
                    $("#banner_ul").zAccordion({
                            slideWidth: 900,
                            width: 1100,
                            height: 450,
                            timeout: 3000,
                            slideClass: "frame"
                    });
            });
	</script>
        <!-- fin script slider -->        
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <!--inicio sección descripción de la empresa -->
        <div id="demo">
            <div id="features">
                <div>
                    <img src="{$_layoutParams.root}views/index/img/vision.png" alt="Eddie" class="eddie" />   
                    <h2 class="subtitulo-2 verde_obscuro">MISIÓN</h2> 
                    <p>Elaboración de productos químicos industriales y servicios afines de calidad, siendo responsables con el ambiente, nuestros trabajadores y la sociedad en general.</p><br/>
                    <h2 class="subtitulo-2 verde_obscuro">VISIÓN</h2>
                    <p>Afianzarnos en el mercado nacional, como una de las mejores empresas tanto en el desarrollo como en la fabricación de productos químicos, brindando soluciones a los diversos sectores de la economía, con el compromiso del cuidado y conservación del ambiente.</p>
                </div>
                <div>
                    <img src="{$_layoutParams.root}views/index/img/politicas.png" alt="Eddie" class="eddie" />   
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
                    <!--<img src="{$_layoutParams.root}views/index/img/mision_vision_proindusquim.png" alt="Eddie" class="eddie" />-->
                    <h2 class="subtitulo-2 verde_obscuro">ACERCA DE PROINDUSQUIM</h2> 
                    <p><b class="verde_obscuro">PROINDUSQUIM S.A.</b> es una empresa dedicada a la fabricación y comercialización de productos químicos para la Industria en general, Hospitales, Instituciones y Hogar.</p>
                    <p>Inició sus actividades en febrero de 1982, teniendo siempre como meta servir a sus clientes con productos de alta calidad y tecnología desarrollada localmente y en el extranjero, dando soluciones a bajo costo, pero con calidad, durabilidad, alto rendimiento y fácil aplicación.</p>
                    <p>Contamos con 2.000 m&sup2; de instalaciones propias, en un área total de 28.000 m&sup2; que está conformada por el Parque Industrial "Requimec" al sur de la ciudad de Quito. La constante investigación de productos y mercado nos permite afrontar las innovaciones que día a día se generan para aplicarse en todas las áreas de negocio, las cuales siempre requieren de nuevas soluciones.</p>
                    <p><b class="verde_obscuro">PROINDUSQUIM S.A.</b> es una empresa dedicada a desarrollar y fabricar productos de alta calidad, así como otros servicios especiales. Hemos implementado sistemas de operación seguros, que nos comprometen a garantizar que la protección del medio ambiente, la seguridad y la salud ocupacional dentro y fuera de nuestras instalaciones, sean base de todas nuestras actividades.</p>
                </div>
                <div>
                    <img src="{$_layoutParams.root}views/index/img/objetivos.png" alt="Eddie" class="eddie" />   
                    <h2 class="subtitulo-2 verde_obscuro">NUESTROS OBJETIVOS SON</h2> <br/>
                        <ol>
                            <li style="margin-left: 100px;">Satisfacer las necesidades de nuestros clientes, proporcionando un servicio eficaz, seguro y respaldado.</li><br/>
                            <li style="margin-left: 100px;">Identificar, evaluar, controlar y minimizar los riesgos potenciales que puedan presentar nuestras actividades en instalaciones y productos, para con nuestros empleados, clientes, contratistas, transportistas y la comunidad.</li><br/>
                            <li style="margin-left: 100px;">Proteger el medio ambiente y prevenir la contaminación, desempeñando actividades y utilizando materias primas y procesos seguros que no afecten ni comprometan nuestro ecosistema.</li><br/>
                        </ol>
                </div>
                <div>
                    <img src="{$_layoutParams.root}views/index/img/mision_vision_proindusquim.png" alt="Eddie" class="eddie" />   
                    <h2 class="subtitulo-2 verde_obscuro">CERTIFICACIONES</h2> 

                </div>
             </div>
            <!-- script de funcionamiento del slider de descripción de la empresa-->
            <script type="text/javascript">		
                $(document).ready(function(){ $('#features').jshowoff(); });
            </script>
            <!-- fin script de funcionamiento del slider de descripción de la empresa-->
        </div>
        <!-- fin sección descripción de la empresa-->
        <!-- inicio sección descripción productos-->
        <div id="barra_productos">
            <div class="left-footer-productos">
                <div class="cuadro_productos">
                    <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> INSTITUCIONAL / HOGAR</div>
                    <div class="centrado bloque_titulos subtitulo-4 blanco"> ANTIHUMEDAD</div>
                    <div class="descripcion_productos">
                        <p><b class="rojo">Descripción:</b><br/>Es un Producto elaborado para absorber el exceso de humedad del ambiente, causante de moho, oxidación y daño de objetos. </p><br/>
                    </div>
                    <div class="imagen_productos">
                        <img src="{$_layoutParams.root}views/index/img/antihumedad2.jpg" />
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
                        <img src="{$_layoutParams.root}views/index/img/lavador2.jpg" />
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
                        <img src="{$_layoutParams.root}views/index/img/bio_ds302.jpg" />
                        <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                    </div>
                </div>
                    <div class="contenedor_ver_mas">
                        <a href="industrial"><div class="ver_mas">+ ver más</div></a>
                    </div>
            </div>                  
        </div>
        <!-- fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico -->
<!-- inicio de parámetros para cargar js y css-->
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}

        {if isset($_layoutParams.css) && count($_layoutParams.css)}
            {foreach item=css from=$_layoutParams.css}
                <link href="{$css}" rel="stylesheet" type="text/css">
            {/foreach}
        {/if}
<!-- fin de parámetros para cargar js y css-->