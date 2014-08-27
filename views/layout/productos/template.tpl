<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="{$_layoutParams.ruta_css}estilos.css" rel="stylesheet" type="text/css" />
        
        <!-- librerías para el slider principal-->
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1-4-4.js"></script>
	<script src="{$_layoutParams.root}public/js/jquery.easing.min-1-3.js"></script>
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.zaccordion.js"></script>
        <!-- fin librerías slider principal-->
        <!-- inicio script para que funcione el slider-->
        <script>
            $(document).ready(function() {
                    $("#banner_ul").zAccordion({
                            slideWidth: 700,
                            width: 900,
                            height: 300,
                            timeout: 3000,
                            slideClass: "frame"
                    });
            });
	</script>
        <!-- fin script slider -->
        
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        
        <script src="{$js}" type="text/javascript"></script>
        
        {/foreach}
        {/if}
        
        
    </head>

    <body>
        <!-- inicio layout de trabajo-->
        <div id="contenedor_principal">
            <!-- inicio encabezado-->
            <header>
                <!-- inicio menu principal-->
                <div class="menu_principal">
                    <div class="contenedor_botones_menu_principal">
                        <div class="botones_menu_principal">EMPRESA</div>
                        <div class="botones_menu_principal">PRODUCTOS</div>
                        <div class="botones_menu_principal">RESPONSABILIDAD SOCIAL</div>
                        <div class="botones_menu_principal">CERTIFICACIONES</div>
                        <div class="botones_menu_principal">SERVICIOS</div>
                        <div class="botones_menu_principal">TIPS DE USO</div>

                    </div>
                </div>
                <!-- fin menu principal-->
                <!-- logotipo empresa-->
                <div id="logotipo">
                    <img src="{$_layoutParams.root}public/img/logotipo_proindusquim.jpg" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                </div>
                <!-- cierre logotipo empresa -->
             </header>
         <!-- fin encabezado -->
            <!-- inicio slider en todas las páginas -->
            <div id="slider_principal">
                <div id="banner_ul">
                    <li class="frame-0">
                        <div class="menu_slider frame-0"><div class="texto_menu_slider">VIDEO CORPORATIVO</div></div>
			<iframe width="600" height="300" src="//www.youtube.com/embed/A2Ik5poI9AQ" frameborder="0" style="float:right;"></iframe>
                    </li>
                    <li class="frame-1">
                        <div class="menu_slider frame-1"><div class="texto_menu_slider">ACERCA DE PROINDUSQUIM</div></div>
                        <img src="{$_layoutParams.root}public/img/acerca_de_proindusquim.jpg" style="float:right;"/>
                    </li>
                    <li class="frame-2">
                        <div class="menu_slider frame-2"><div class="texto_menu_slider">PRINCIPALES OBJETIVOS</div></div>
                        <img src="{$_layoutParams.root}public/img/principales_objetivos.jpg" style="float:right;"/>
                    </li>
                </div>
            </div>
            <!-- fin slider en todas las páginas-->
            <!-- inicio contenido dinámico -->
            <div id="contenedor_contenido_dinamico">
                <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>

		        {if isset($_error)}
		            <div id="_errl" class="alert alert-error">
		                <a class="close" data-dismiss="alert">x</a>
		                {$_error}
		            </div>
		        {/if}

		        {if isset($_mensaje)}
		            <div id="_msgl" class="alert alert-success">
		                <a class="close" data-dismiss="alert">x</a>
		                {$_mensaje}
		            </div>
		        {/if}

		        {include file=$_contenido}
            </div>
            <!-- fin contenido dinámico -->
        </div>
        <!-- fin contenedor de layout de trabajo -->
        <!-- inicio footer-->
        <footer>
            <div id="left-footer">
                <div id="contenedor_logotipos" class="centrado" style="margin-bottom:20px;">
                    <img class="centrado" src="{$_layoutParams.root}public/img/logotipo_proindusquim_p.jpg" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                </div>
                <div class="subtitulo-3 verde_obscuro centrado">PROINDUSQUIM S.A.</div> <p class="centrado">Es una empresa dedicada a la fabricación y comercialización de productos químicos.</p>
                <div id="contenedor_logotipos" class="centrado" style="margin-bottom:20px;">
                    <img class="centrado" src="{$_layoutParams.root}public/img/responsible-care.png" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                </div>
            </div>
            <div id="left-footer">
                <div class="subtitulo-3 verde_obscuro centrado">INFORMACIÓN DE CONTACTO</div>
                <p class="centrado">Conjunto Industrial "REQUIMEC"</p>
                <p class="centrado">Av. Teniente Hugo Ortíz y Balzar</p>
                <p class="centrado">Panamericana Sur Km. 4</p>
                <p class="centrado">PBX: 593.2 2671.015 / 2671.740</p><br/>

                <div class="subtitulo-3 verde_obscuro centrado">Correos Electrónicos:</div>
                <p class="centrado">Información General: info@proindusquim.com</p><br/>
                <p class="centrado">Gerencia General: ggeneral@proindusquim.com</p><br/>
                <p class="centrado">Gerencia de Producción: investigacion@proindusquim.com</p><br/>
                <p class="centrado">Facturación y Ventas: facturacion@proindusquim.com</p><br/>
            </div>
            <div id="left-footer">
                <div class="subtitulo-3 verde_obscuro">DÉJANOS TU MENSAJE</div>
                <form>
                   <div class="caja_1">
                       <div class="etiqueta_formulario">NOMBRE:</div><input type="text" class="estilo_input"  name="nombre"/>
                   </div>
                   <div class="caja_1">
                        <div class="etiqueta_formulario">TELÉFONO:</div><input type="text" class="estilo_input"  name="nombre"/>
                   </div>
                   <div class="caja_1">
                        <div class="etiqueta_formulario">EMAIL:</div><input class="estilo_input" type="text" name="nombre"/>
                   </div>
                   <div class="caja_2">
                        <div class="etiqueta_formulario">MENSAJE:</div><textarea class="estilo_textarea" name="nombre"/></textarea>
                   </div>
                   <button type="button" class="estilo_button">ENVIAR</button>
                </form>
            </div>
            
            <div id="foot">
                <img src="{$_layoutParams.root}public/img/responsible_care_collage_proindusquim.jpg" />
            </div>
            
        </footer>
        <!-- fin footer-->
    </body>
</html>