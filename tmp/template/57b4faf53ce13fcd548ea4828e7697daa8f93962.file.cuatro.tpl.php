<?php /* Smarty version Smarty-3.1.8, created on 2015-01-21 05:28:29
         compiled from "/home/proindus/public_html/views/industrial/cuatro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26992310454b934b4978ee6-66956808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b4faf53ce13fcd548ea4828e7697daa8f93962' => 
    array (
      0 => '/home/proindus/public_html/views/industrial/cuatro.tpl',
      1 => 1421776349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26992310454b934b4978ee6-66956808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b934b4a39026_40243399',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b934b4a39026_40243399')) {function content_54b934b4a39026_40243399($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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
                    
                    $(document).ready(function(){
                        $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'fancybox'} );
                    });
                    
                </script>
                <!--Fin script funcionamiento videos-->                
            </div>    
            <!-- inicio sección descripción productos derecha-->
            <div id="barra_productos_derecha">
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">CLORO EN POLVO TRICLORO 90%</div>
                            <div class="descripcion_productos">
                                 <p><b class="rojo">(Hipoclorito de calcio 65%-70% o Tricloro Cianurato)</b><br/>
                                <p><b class="rojo">Descripción:</b><br/>Cloro granular para mantener desinfectada el agua, libre de bacterias y microrganismos peligrosos para la salud humana.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>En piscinas, piletas, cisternas de agua potable. </p><br/>
                                <p><b class="rojo">Aplicación:</b><br/>Añadir 2g. por m3 de agua, 3 veces a la semana en piscinas y 1 vez por semana en cisternas.</p><br/>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/piscinas_fichas/CLORO_EN_POLVO.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/industrial/img/no_disponible.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div> <div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">ALGICIDA LÍQUIDO</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Aditivo base Amonios Cuaternarios que evita la formación de algas adheridas  a la cerámica, emporado, tuberías y equipos de recirculación, permitiendo un mejor funcionamiento de los equipos y obteniéndose un agua trasparente y cristalina.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>En piscinas y piletas.</p><br/>
                                <p><b class="rojo">Aplicación:</b><br/>Añadir directamente 1 litro por cada 100m3 de agua. (10 ml. por cada m3)</p><br/>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/piscinas_fichas/CLORO_EN_POLVO.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/industrial/img/no_disponible.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div> <div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>
                               
            </div>
            <div id="paginacion">
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial">1</a>
                </div>
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial/dos">2</a>
                </div>
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial/tres">3</a>
                </div>                
                <div class="actual_boton_pagina">
                    4
                </div>                
            </div>                                  
        </div>
        <!-- fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico --><?php }} ?>