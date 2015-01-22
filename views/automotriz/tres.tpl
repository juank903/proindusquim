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
                    <li><a href="https://www.youtube.com/watch?v=F6lq2HDBs14">Línea Automotriz</a></li>
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
                            <p><b class="rojo">Aplicación:</b><br/>Uso directo.<br/>Para retirarla utilice papel, paño o enjuague con agua</p><br/>
                            <p><a href="{$_layoutParams.root}public/files/automotriz_fichas/CREMIX_FCF.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="{$_layoutParams.root}views/automotriz/img/cremix_grande.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">350 gr</div><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                        </div>
                    </div>                   
                                           
                </div>

            </div>
            <div id="paginacion">
                <div class="boton_pagina">
                    <a href="{$_layoutParams.root}automotriz">1</a>
                </div>
                <div class="boton_pagina">
                   <a href="{$_layoutParams.root}automotriz/dos">2</a>
                </div>
                <div class="actual_boton_pagina">
                    3
                </div>                
                
            </div>                              
        </div>
        <!-- fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico -->