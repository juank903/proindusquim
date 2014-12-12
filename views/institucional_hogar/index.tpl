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
                    <li><a href="https://www.youtube.com/watch?v=y7huzbW6mWc">Línea Institucional / Hogar</a></li>
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
                        <div class="centrado bloque_titulos subtitulo-4 blanco">ANTIHUMEDAD</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Es un Producto elaborado para absorber el exceso de humedad del ambiente, causante de moho, oxidación y daño de objetos.</p><br/>
                            <p><b class="rojo">Precauciones:</b><br/>Para su uso lea las instrucciones del envase.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_ANTIHUMEDAD.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/antihumedad.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">190 gr</div></div>
                        </div>
                    </div>
                </div> 
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">AROMA ELIMINA OLORES</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Producto líquido atóxico que elimina malos olores a nivel doméstico, industria alimenticia y hospitales. Elimina principalmente olores originados por descomposición de material orgánico y también concentración de olores como alimentos y tabaco.</p><br/>
                                <p><b class="rojo">Dilución:</b><br/>uso directo sin diluir.</p><br/>
                                <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_ELIMINA_MALOS_OLORES.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/institucional_hogar/img/elimina_olores.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">1 lt</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">AROMA AMBIENTAL</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Aromatizador de Ambientes.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Áreas en general, baños, cuartos, closets, ascensores.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>uso directo sin diluir.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_AROMA_BIO_LAVANDA.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/aromabio.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">1 lt</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div></div>
                        </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">CARPET FOAM</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/> Champú de alfombras y tapicería para uso manual o con máquina.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Alfombras, tapetes y tapices.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Manualmente 1 con 9 partes de agua. Máquina 1 con 20 partes de agua.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_CARPET_FOAM.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/carpet_foam.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">1 lt</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div></div>
                        </div>
                    </div>
                </div>                            
            </div>
                            <div id="paginacion">
                                <div class="actual_boton_pagina">
                                    1
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/dos">2</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/tres">3</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/cuatro">4</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/cinco">5</a>
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