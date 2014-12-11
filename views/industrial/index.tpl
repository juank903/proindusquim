<!-- inicio slider en todas las páginas -->
<div id="banner_principal">
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <div id="barra_productos">
            <!-- inicio sección descripción productos izquierda-->
            <div id="barra_productos_izquierda">
                <ul class="youtube-videogallery">
                    <li><a href="https://www.youtube.com/watch?v=a2bZN4qZnE8">Línea Industrial</a></li>
                </ul>
                <!-- Inicio script funcionamiento videos -->
                <script>
                    {literal}
                    $(document).ready(function(){
                        $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'fancybox'} );
                    });
                    {/literal}
                </script>
                <!--Fin script funcionamiento videos-->                
            </div>    
            <!-- inicio sección descripción productos derecha-->
            <div id="barra_productos_derecha">
                <div class="left-footer-productos">
                    {foreach item=producto from=}
                        <div class="cuadro_productos">
                            <div class="centrado bloque_titulos subtitulo-4 blanco">DETERCLEAN 500</div>
                                <div class="descripcion_productos">
                                    <p><b class="rojo">Descripción:</b><br/>Detergente liquido concentrado biodegradable.</p><br/>
                                    <p><b class="rojo">Usos:</b><br/>Lavado de superficies y equipos alimenticios e industriales.</p><br/>
                                    <p><b class="rojo">Dilución:</b><br/>Limpieza extra fuerte 1:5 (1 con 5 partes de agua)</p><br/>
                                    <p><b class="rojo">Precauciones:</b><br/>Limpieza normal-suave 1:40  (1 con 40 partes de agua)</p><br/>
                                    <p><a href="{$_layoutParams.root}public/files/industrial_fichas/DETERCLEAN_500.pdf""><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                                </div>
                                <div class="imagen_productos">
                                    <img src="{$_layoutParams.root}views/industrial/img/no_disponible.jpg" />
                                    <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                                </div>
                        </div>
                    {/for}
                </div>
                            
            </div>
            <div id="paginacion">
                <div class="actual_boton_pagina">
                    1
                </div>
                <div class="boton_pagina">
                    <a href="{$_layoutParams.root}industrial/dos">2</a>
                </div>
                <div class="boton_pagina">
                    <a href="{$_layoutParams.root}industrial/tres">3</a>
                </div>
                <div class="boton_pagina">
                    <a href="{$_layoutParams.root}industrial/cuatro">4</a>
                </div>                 
                
            </div>                                  
        </div>
        <!-- fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico -->
<!-- inicio menú íconos -->
<div id="menu_iconos">
    <!-- inicio sección descripción productos-->
    <div id="barra_productos">
        <div id="barra_iconos">
            <div class="cuadrado">
                <a href="{$_layoutParams.root}automotriz"><div class="boton_icono boton_automotriz"></div></a>
                <a href="{$_layoutParams.root}industrial"><div class="boton_icono boton_industrial"></div></a>
                <a href="{$_layoutParams.root}construccion"><div class="boton_icono boton_construccion"></div></a>                      
                <a href="{$_layoutParams.root}institucional_hogar"><div class="boton_icono boton_hogar"></div></a>  
            </div>    
        </div>            
    </div>
    <!-- fin sección descripción productos-->
</div>