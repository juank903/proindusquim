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
                        <div class="centrado bloque_titulos subtitulo-4 blanco">LAVAVAJILLAS LIMÓN</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Con fragancia limón para vajilla y cristalería.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Vajilla en general.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Una pequeña cantidad produce una alta espuma.</p><br/>
                            <p><b class="rojo">Precauciones:</b><br/>Utilizar Guantes de caucho.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_LIMON.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/lava_vajillas.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">4 lt</div></div>
                        </div>
                    </div>
                </div> 
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">POLVO LIMPIADOR</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Limpiador desengrasante en polvo. No raya.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>Ollas, utensilios y equipos de cocina.</p><br/>
                                <p><b class="rojo">Dilución:</b><br/>Uso directo, luego humedecer con agua y limpiar.</p><br/>
                                <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_POLVO.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/institucional_hogar/img/polvo_limpiador.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 gr</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">VIRUTA LÍQUIDA</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Limpiador para pisos encerados, elimina suciedad acumulada. Evita el uso de rasqueteador de acero.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Pisos de madera no lacada, vinil y caucho.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_VIRUTA_LIQUIDA.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/viruta.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">1 lt</div><div class="cuadro_presentacion">4 lt</div></div>
                        </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">X-30 Aroma (Varias Fragancias)</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Desinfectante concentrado con fragancia y base de Amonios Cuaternarios.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Pisos, baños, lavabos e higiénicos.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Como desinfectante diluir 1 parte con 20 partes de agua. Como sanitizante diluir 1 parte con 40 partes de agua.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_X-30_AROMA_CALIPTTO.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/x30_grande.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div></div>
                        </div>
                    </div>
                </div>                            
            </div>
                            <div id="paginacion">
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar">1</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/dos">2</a>
                                </div>
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/tres">3</a>
                                </div>
                                <div class="actual_boton_pagina">
                                    4
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