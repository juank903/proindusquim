<?php /* Smarty version Smarty-3.1.8, created on 2014-12-11 14:56:48
         compiled from "C:\xampp\htdocs\proindusquim\views\productos\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128035489a2a02ecfb0-21087729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79bfe0364480564f9c7063747b22e37fefda42b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proindusquim\\views\\productos\\index.tpl',
      1 => 1418305696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128035489a2a02ecfb0-21087729',
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
  'unifunc' => 'content_5489a2a0327943_84230572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489a2a0327943_84230572')) {function content_5489a2a0327943_84230572($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider">LÍNEA AUTOMOTRIZ</div></div><a href="automotriz"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_automotriz.jpg" style="float:right;"/>            
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">LÍNEA INDUSTRIAL</div></div><a href="industrial"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_industrial.jpg" style="float:right;"/>            
        </li>
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">LÍNEA CONSTRUCCIÓN</div></div><a href="construccion"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_construccion.jpg" style="float:right;"/>            
        </li>
        <li class="frame-3">
            <div class="menu_slider frame-3"><div class="texto_menu_slider">LÍNEA INSTITUCIONAL / HOGAR</div></div><a href="institucional_hogar"><div class="ver_catalogo">ver catálogo</div></a>
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
            <div id="barra_iconos">
                <div class="cuadrado">
                    <a href="automotriz"><div class="boton_icono boton_automotriz"></div></a>
                    <a href="industrial"><div class="boton_icono boton_industrial"></div></a>
                    <a href="construccion"><div class="boton_icono boton_construccion"></div></a>                      
                    <a href="institucional_hogar"><div class="boton_icono boton_hogar"></div></a>  
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