<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link rel="shortcut icon" href="{$_layoutParams.root}public/img/proindusquim.ico">
        <link href="{$_layoutParams.ruta_css}estilos.css" rel="stylesheet" type="text/css" />
        
        <!-- librerías para galeria de videos-->
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1-9-1.js"></script>
        <!-- fin librerías galeria de videos-->

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
        <!-- fin de parámetros para cargar js y css-->        </head>

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
                        <a class="botones_menu_principal borde_derecho" href="index">EMPRESA</a>
                        <a class="botones_menu_principal borde_derecho" href="productos">PRODUCTOS</a>
                        <a class="botones_menu_principal borde_derecho" href="responsabilidad">RESPONSABILIDAD<br/> SOCIAL</a>
                        <a class="botones_menu_principal borde_derecho" href="desarrollos">DESARROLLOS</a>
                        <a class="botones_menu_principal" href="tips_uso">TIPS DE USO</a>

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
    </body>
</html>