<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ES">
    <head>
    	
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="{$_layoutParams.root}public/img/proindusquim.ico">
        <link href="{$_layoutParams.ruta_css}estilos.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.root}public/css/main_genericos.css" rel="stylesheet" type="text/css" />
	        
        <!-- librerías para el slider principal-->
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1-6-4.js"></script>
	<script src="{$_layoutParams.root}public/js/jquery.easing.min-1-3.js"></script>
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.zaccordion.js"></script>
        <!-- fin librerías slider principal-->
        
<script>
$(document).ready(function() {
	$('#showlogin').click(function() {
	  $('#loginpanel').slideToggle('slow', function() {
		  $("#triangle_down").toggle(); 
		  $("#triangle_up").toggle();
	  });
	});
 });
</script>

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
        
    </head>

    <body>
        <div id="franja_superior">
            <div id="contenedor_franja_principal">
                <div id="redes_sociales">
                    <div class="icono">
                        <a href="https://www.facebook.com/pages/Proindusquim-SA/559591434078075?fref=ts"><img src="{$_layoutParams.root}public/img/facebook.png" /></a>
                    </div>
                    <div class="icono">
                        <a href="https://www.youtube.com/channel/UCNvxJLl2cv2piVhSnL8me0Q"><img src="{$_layoutParams.root}public/img/youtube.png" /></a>
                    </div>
                    <div class="icono">
                        <a href="https://twitter.com/Proindusquim"><img src="{$_layoutParams.root}public/img/twitter.png" /></a>
                        
                        <div id="login" style="float:right; margin-left:20px;">
				<a href="#" id="showlogin" style="color:white; font-size:1.5em;">
					Contáctenos
					<span id="triangle_down">&#9660;</span>
					<span id="triangle_up" style="display:none;">&#9650;</span>	
				</a>
						
				<div id="loginpanel" style="display:none; position:absolute; margin-left:-120px; margin-top:2px; box-shadow: 3px 3px 15px #000; padding:20px; background:#3c9455; z-index:100; border-radius:10px; ">
                    
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
			</div>                    
     
                    </div>                    
                </div>
            </div>
        </div>
        <!-- inicio layout de trabajo-->
        <div id="contenedor_principal">
            <!-- inicio encabezado-->
            <header>
                <!-- inicio menu principal-->
                <div class="menu_principal">
                    <div class="contenedor_botones_menu_principal">
                        <a class="botones_menu_principal borde_derecho" href="{$_layoutParams.root}index">EMPRESA</a>
                        <a class="botones_menu_principal borde_derecho" href="{$_layoutParams.root}responsabilidad">RESPONSABILIDAD<br/> SOCIAL</a>
                        <a class="botones_menu_principal borde_derecho" href="{$_layoutParams.root}productos">PRODUCTOS</a>
                        <a class="botones_menu_principal borde_derecho" href="{$_layoutParams.root}desarrollos">DESARROLLOS</a>
                        <a class="botones_menu_principal borde_derecho" href="{$_layoutParams.root}maquila">MAQUILA</a>
                        <a class="botones_menu_principal " href="{$_layoutParams.root}tips_uso"> PROMOCIONES Y<br/>TIPS DE USO</a>

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


<!--        </div> -->
        <!-- fin contenedor de layout de trabajo -->
        <!-- inicio footer-->
        <footer>
            <div id="contenedor_footer">
                <div id="left-footer" class="margen_add">
                    <div id="contenedor_logotipos" class="centrado" style="margin-bottom:20px;">
                        <img class="centrado" src="{$_layoutParams.root}public/img/logotipo_proindusquim_p.jpg" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                    </div>
                    <div class="subtitulo-3 verde_obscuro centrado">PROINDUSQUIM S.A.</div> <p class="centrado">Es una empresa dedicada a la fabricación y comercialización de productos químicos.</p><br/>
                    <div id="contenedor_logotipos" class="centrado" style="margin-bottom:20px; margin-left:-30px;">
                        <img class="centrado" src="{$_layoutParams.root}public/img/responsible-care.png" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                    </div>
                </div>
                <div id="left-footer" style="width:500px">
                    <div class="subtitulo-3 verde_obscuro centrado">INFORMACIÓN DE CONTACTO</div>
                    <p class="centrado">Conjunto Industrial "REQUIMEC"</p>
                    <p class="centrado">Av. Teniente Hugo Ortíz y Balzar</p>
                    <p class="centrado">Panamericana Sur Km. 4</p>
                    <p class="centrado">PBX: (593 2) 2671 740 / 2671 015</p>
                    <p class="centrado">Quito - Ecuador</p><br/>                    

                    <div class="subtitulo-3 verde_obscuro centrado">Correos Electrónicos:</div>
                    <p class="centrado">Información General: info@proindusquim.com</p><br/>
                    <p class="centrado">Gerencia General: gerenciageneral@proindusquim.com</p><br/>
                    <p class="centrado">Subgerencia Administrativa: subgadministrativa@proindusquim.com</p><br/>
                    <p class="centrado">Gerencia de Producción: gproduccion@proindusquim.com</p><br/>
                    <p class="centrado">Dirección Comercial: dcomercial@proindusquim.com</p><br/>
                </div>
                <div id="left-footer">
                    <div class="subtitulo-3 verde_obscuro">CONTÁCTENOS</div>
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

                <!--<div id="foot">
                    <img src="{$_layoutParams.root}public/img/responsible_care_collage_proindusquim.jpg" />
                </div>-->
            </div>
        </footer>
        <!-- fin footer-->
    </body>
</html>