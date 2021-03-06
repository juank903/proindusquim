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
                        <div class="centrado bloque_titulos subtitulo-4 blanco">X-30 PLUS</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Es un desinfectante concentrado con efecto bactericida, fungicida, virucida y desodorizante, formulado con Amonios Cuaternarios.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Limpieza y desinfección de pisos, paredes, baños, cocinas y habitaciones, lavabos e higiénicos.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo aplicando con paño o esponja.</p><br/>
                            <p><b class="rojo">Precauciones:</b><br/>Utilizar guantes de caucho.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_X-30_PLUS.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/x30_plus.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">1 lt</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                        </div>
                    </div>
                </div> 
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">LUSTRA MUEBLES</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Aceite protector siliconado con fragancia naranja</p><br/>
                                <p><b class="rojo">Usos:</b><br/>Muebles de madera en general y lacados.</p><br/>
                                <p><b class="rojo">Dilución:</b><br/>Uso directo.</p><br/>
                                <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="{$_layoutParams.root}views/institucional_hogar/img/lustra_muebles.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 ml</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">DESTAPOL 100</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Destapador alcalino líquido.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Desagües, lavabos y sanitarios en general.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo.</p><br/>
                            <p><b class="rojo">Precauciones:</b><br/>Producto de uso delicado.<br/>Leer bien las instrucciones antes de utilizar.<br/>Utilizar guantes de caucho.</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/institucional_fichas/KRIK_DESTAPOL.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/destapol.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">1/2 lt</div><div class="cuadro_presentacion">1 lt</div></div>
                        </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">MATOX</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Insecticida líquido, base agua-alcohol.</p><br/>
                            <p><b class="rojo">Usos:</b><br/>Superficies y ambientes con presencia de insectos rastreros y voladores.</p><br/>
                            <p><b class="rojo">Dilución:</b><br/>Uso directo con atomizador</p><br/>
                            <p><b class="rojo">FICHA TÉCNICA NO DISPONIBLE</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/institucional_hogar/img/matox.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">1 lt</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
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
                                <div class="boton_pagina">
                                    <a href="{$_layoutParams.root}institucional_hogar/cuatro">4</a>
                                </div>
                                <div class="actual_boton_pagina">
                                    5
                                </div>                                

                            </div>                              
        </div>
        <!-- fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico -->