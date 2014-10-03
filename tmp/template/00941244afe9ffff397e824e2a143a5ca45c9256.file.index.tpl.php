<?php /* Smarty version Smarty-3.1.8, created on 2014-09-01 10:58:35
         compiled from "/var/www/proindusquim/views/tips_uso/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204444092853ff4c8b15e018-61446415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00941244afe9ffff397e824e2a143a5ca45c9256' => 
    array (
      0 => '/var/www/proindusquim/views/tips_uso/index.tpl',
      1 => 1409584882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204444092853ff4c8b15e018-61446415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ff4c8b1c0431_45381275',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'js' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ff4c8b1c0431_45381275')) {function content_53ff4c8b1c0431_45381275($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="banner_principal">
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <!-- inicio sección videos-->
        <div id="contenedor_barra_videos">
            <div id="barra_videos">
                <ul class="youtube-videogallery">
                    <li><a href="https://www.youtube.com/watch?v=L-VK6xxWheA">Cómo usar impermeabilizante</a></li>
                    <li><a href="https://www.youtube.com/watch?v=7DvNkr8DKyM">Nuevos Productos</a></li>
                    <li><a href="https://www.youtube.com/watch?v=adyvCjuvtd4">Línea Hospitalaria</a></li>
                </ul>
            </div>
        </div>
        <!-- fin sección videos-->
        <!-- Inicio script funcionamiento videos -->
        <script>
            
            $(document).ready(function(){
                $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'fancybox'} );
            });
            
        </script>
        <!--Fin script funcionamiento videos -->
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