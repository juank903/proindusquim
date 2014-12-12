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
                    <li><a href="https://www.youtube.com/watch?v=26MQ9a1a5Ow">Línea Construcción</a></li>
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
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">SILICON FLEXIT</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Silicona acética transparente.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Pegante y sellante de vidrio y aluminio.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo previa limpieza de la superficie con alcohol.</p><br/>
                            <p><b class="rojo">Precauciones:</b><br/>---</p><br/>
                            <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/construccion/img/no_disponible.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">20 ml</div> </div>
                        </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">FLEXIT ENSAMBLAJE COLA BLANCA</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Adhesivo para ensamblaje de alta resistencia de uso múltiple en madera, papel, cartón, etc.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Especialmente para usos de artesanía y manualidades. Puede aplicarse sobre madera, cerámica, tela, papel, cartulina, cartón, etc.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo.</p><br/>
                            <p><b class="rojo">Precauciones:</b><br/>---</p><br/>
                            <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/construccion/img/flexit2.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">320 gr</div><div class="cuadro_presentacion">1 lt</div> <div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                        </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">FLEXIT ENSAMBLAJE COLA BLANCA</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Cola blanca de uso múltiple en madera, cartón y papel, resistencia normal.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Especialmente para usos de artesanía y manualidades. Puede aplicarse sobre madera, cerámica, tela, papel, cartulina, cartón, etc.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo sin diluir.</p><br/>
                            <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/construccion/img/flexit1.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">320 gr</div><div class="cuadro_presentacion">1 lt</div> <div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                        </div>
                    </div>
                </div>
                           
            </div>
                            <div id="paginacion">
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}construccion">1</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}construccion/dos">2</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}construccion/tres">3</a>
                                </div>                 
                                <div class="actual_boton_pagina">
                                    4
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