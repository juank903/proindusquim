<!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider">LÍNEA AUTOMOTRIZ</div></div>
            <img src="{$_layoutParams.root}public/img/linea_automotriz.jpg" style="float:right;"/>            
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">LÍNEA INDUSTRIAL</div></div>
            <img src="{$_layoutParams.root}public/img/linea_industrial.jpg" style="float:right;"/>            
        </li>
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">LÍNEA CONSTRUCCIÓN</div></div>
            <img src="{$_layoutParams.root}public/img/linea_construccion.jpg" style="float:right;"/>            
        </li>
        <li class="frame-3">
            <div class="menu_slider frame-3"><div class="texto_menu_slider">LÍNEA INSTITUCIONAL / HOGAR</div></div>
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
            <div class="left-footer-productos">
                <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> INSTITUCIONAL / HOGAR</div>
                <div class="centrado bloque_titulos subtitulo-4 blanco"> ANTIHUMEDAD</div>
                <div class="descripcion_productos">
                    <p><b class="rojo">Descripción:</b><br/>Es un Producto elaborado para absorber el exceso de humedad del ambiente, causante de moho, oxidación y daño de objetos. </p><br/>
                </div>
                <div class="imagen_productos">
                    <img src="{$_layoutParams.root}views/index/img/antihumedad2.jpg" />
                    <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                </div>
                <div class="contenedor_ver_mas">
                    <div class="ver_mas">+ ver más</div>
                </div>
            </div>
            <div class="left-footer-productos">
                <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> CONSTRUCCIÓN</div>
                <div class="centrado bloque_titulos subtitulo-4 blanco"> LAVADOR 50</div>
                <div class="descripcion_productos">
                    <p><b class="rojo">Descripción:</b><br/>Desincrustante ácido para cemento y salitre.</p><br/>
                </div>
                <div class="imagen_productos">
                    <img src="{$_layoutParams.root}views/index/img/antihumedad2.jpg" />
                    <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                </div>
                <div class="contenedor_ver_mas">
                    <div class="ver_mas">+ ver más</div>
                </div>
            </div>  
            <div class="left-footer-productos">
                <div class="centrado bloque_titulos_superior subtitulo-4 blanco"> INDUSTRIAL</div>
                <div class="centrado bloque_titulos subtitulo-4 blanco"> DS-30 BIO</div>
                <div class="descripcion_productos">
                    <p><b class="rojo">Descripción:</b><br/>Limpiador desengrasante multiuso alta biodegradabilidad.</p><br/>
                </div>
                <div class="imagen_productos">
                    <img src="{$_layoutParams.root}views/index/img/antihumedad2.jpg" />
                    <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">10 l</div></div>
                </div>
                <div class="contenedor_ver_mas">
                    <div class="ver_mas">+ ver más</div>
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