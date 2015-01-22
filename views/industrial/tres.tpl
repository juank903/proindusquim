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
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">CREMIX</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Crema desengrasante de manos con efecto humectante y desinfectante con fragancia a naranja.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>Uso directo.<br/> Para retirarla utilice papel, paño o enjuague con agua.</p><br/>
                                <p><a href="{$_layoutParams.root}public/files/industrial_fichas/CREMIX.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/industrial/img/cremix_grande.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">350 gr</div><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">REGULADOR pH ALCALINO EN POLVO</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Aditivo alcalinízante elevador de pH</p><br/>
                                <p><b class="rojo">Usos:</b><br/>Regulación de aguas ácidas de piscinas y piletas decorativas.<br/> Regula el pH Manteniéndolo entre 6,5 - 7, rango óptimo para evitar resequedad de la piel e irritación de los ojos.</p><br/>
                                <p><b class="rojo">Aplicación:</b><br/>Solicitar ficha técnica e instrucciones de uso al fabricante.</p><br/>
                                <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/industrial/img/no_disponible.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div> <div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">REGULADOR pH ÁCIDO EN POLVO</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Aditivo acificante reductor de ph</p><br/>
                                <p><b class="rojo">Usos:</b><br/>Regulación de aguas alcalinas en piscinas y piletas decorativas. Regula el pH. Manteniéndolo entre 6,5 - 7, rango óptimo para evitar resequedad de la piel e irritación de los ojos.</p><br/>
                                <p><b class="rojo">Aplicación:</b><br/>Solicitar ficha técnica e instrucciones de uso al fabricante.</p><br/>
                                <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/industrial/img/no_disponible.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div> <div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">CLORO EN PASTILLAS TRICOLOR 90%</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">(Diclorocianurato al 90%)</b><br/>
                                <p><b class="rojo">Descripción:</b><br/>Cloro en pastillas para mantener desinfectada el agua, libre de bacterias y microrganismos peligrosos para la salud humana.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>En piscinas y piletas.</p><br/>
                                <p><b class="rojo">Aplicación:</b><br/> Colocar una pastilla en la rejilla de rebalse.</p><br/>
                                <p><a href="{$_layoutParams.root}public/files/piscinas_fichas/CLORO_EN_PASTILLAS_TRICOLORO.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/industrial/img/no_disponible.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>                                
            </div>
            <div id="paginacion">
                <div class="boton_pagina">
                    <a href="{$_layoutParams.root}industrial">1</a>
                </div>
                <div class="boton_pagina">
                    <a href="{$_layoutParams.root}industrial/dos">2</a>
                </div>
                <div class="actual_boton_pagina">
                    3
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