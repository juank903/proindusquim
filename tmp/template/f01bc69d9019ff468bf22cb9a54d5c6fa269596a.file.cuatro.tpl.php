<?php /* Smarty version Smarty-3.1.8, created on 2014-12-11 21:17:14
         compiled from "C:\xampp\htdocs\proindusquim\views\industrial\cuatro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48765489fbca550d84-19930359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01bc69d9019ff468bf22cb9a54d5c6fa269596a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proindusquim\\views\\industrial\\cuatro.tpl',
      1 => 1418305694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48765489fbca550d84-19930359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'js' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5489fbca5f1028_34797194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489fbca5f1028_34797194')) {function content_5489fbca5f1028_34797194($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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
                                <p><b class="rojo">Descripción:</b><br/>Cloro granular para mantener desinfectada el agua, libre de bacterias y microrganismos peligrosos para la salud humana.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>En piscinas, piletas, cisternas de agua potable. Añadir 2g. por m3 de agua, 3 veces a la semana en piscinas y 1 vez por semana en cisternas.</p><br/>
                                <p><b class="rojo">Dilución:</b><br/>---</p><br/>
                                <p><b class="rojo">Precauciones:</b><br/>---</p><br/>
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
                                <p><b class="rojo">Usos:</b><br/>En piscinas y piletas. Añadir directamente 1 litro por cada 100m3 de agua. (10 ml por cada m3)</p><br/>
                                <p><b class="rojo">Dilución:</b><br/>---</p><br/>
                                <p><b class="rojo">Precauciones:</b><br/>---</p><br/>
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
<!-- fin contenedor noticias dinámico -->
<!-- inicio menú íconos -->
<div id="menu_iconos">
    <!-- inicio sección descripción productos-->
    <div id="barra_productos">
        <div id="barra_iconos">
            <div class="cuadrado">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
automotriz"><div class="boton_icono boton_automotriz"></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial"><div class="boton_icono boton_industrial"></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construccion"><div class="boton_icono boton_construccion"></div></a>                      
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
institucional_hogar"><div class="boton_icono boton_hogar"></div></a>  
            </div>    
        </div>            
    </div>
    <!-- fin sección descripción productos-->
</div> 
<!-- inicio de parámetros para cargar js y css-->
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])){?>
            <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
                <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" rel="stylesheet" type="text/css">
            <?php } ?>
        <?php }?>
<!-- fin de parámetros para cargar js y css--><?php }} ?>