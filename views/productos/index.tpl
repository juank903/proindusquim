<!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider">LÍNEA AUTOMOTRIZ</div></div><a href="automotriz"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_automotriz.jpg" style="float:right;"/>            
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">LÍNEA INDUSTRIAL</div></div><a href="industrial"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_industrial.jpg" style="float:right;"/>            
        </li>
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">LÍNEA CONSTRUCCIÓN</div></div><a href="construccion"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_construccion.jpg" style="float:right;"/>            
        </li>
        <li class="frame-3">
            <div class="menu_slider frame-3"><div class="texto_menu_slider">LÍNEA INSTITUCIONAL / HOGAR</div></div><a href="institucional_hogar"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_hogar.jpg" style="float:right;"/>            
        </li>
    </div>
        <!-- inicio script para que funcione el slider-->
        <script>
            $(document).ready(function() {
                    $("#banner_ul").zAccordion({
                            slideWidth: 800,
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
        <!-- inicio sección descripción productos-->
        <div id="barra_productos">
            <div id="barra_iconos">
                <div class="cuadrado">
                    <a href="automotriz"><div class="boton_icono boton_automotriz"></div></a>
                    <a href="industrial"><div class="boton_icono boton_industrial"></div></a>
                    <a href="construccion"><div class="boton_icono boton_construccion"></div></a>                      
                    <a href="institucional_hogar"><div class="boton_icono boton_hogar"></div></a>  
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