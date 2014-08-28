<?php /* Smarty version Smarty-3.1.8, created on 2014-08-28 16:41:53
         compiled from "/var/www/proindusquim/views/productos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13156422653ff3ed5095f90-18596511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc3e9fc8f249db6d8b8d6feb55018e36551d2d5d' => 
    array (
      0 => '/var/www/proindusquim/views/productos/index.tpl',
      1 => 1409262109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13156422653ff3ed5095f90-18596511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ff3ed51759e8_68802132',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'js' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ff3ed51759e8_68802132')) {function content_53ff3ed51759e8_68802132($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider">LÍNEA AUTOMOTRIZ</div></div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_automotriz.jpg" style="float:right;"/>            
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">LÍNEA INDUSTRIAL</div></div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_industrial.jpg" style="float:right;"/>            
        </li>
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">LÍNEA CONSTRUCCIÓN</div></div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_construccion.jpg" style="float:right;"/>            
        </li>
        <li class="frame-3">
            <div class="menu_slider frame-3"><div class="texto_menu_slider">LÍNEA INSTITUCIONAL / HOGAR</div></div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_hogar.jpg" style="float:right;"/>            
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
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/antihumedad2.jpg" />
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
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/antihumedad2.jpg" />
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
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/antihumedad2.jpg" />
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