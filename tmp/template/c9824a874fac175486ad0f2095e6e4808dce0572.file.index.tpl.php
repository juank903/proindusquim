<?php /* Smarty version Smarty-3.1.8, created on 2014-10-21 14:50:30
         compiled from "/var/www/proindusquim/modules/principal/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:378094895543ef9a9da8d53-62041257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9824a874fac175486ad0f2095e6e4808dce0572' => 
    array (
      0 => '/var/www/proindusquim/modules/principal/views/index/index.tpl',
      1 => 1413921027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '378094895543ef9a9da8d53-62041257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_543ef9a9dec490_08040994',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543ef9a9dec490_08040994')) {function content_543ef9a9dec490_08040994($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->

<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form>
		
		<label for="name">Username:</label>
		
		<input type="username">
		
		<label for="password">Password:</label>
		
		<!--<p><a href="#">Forgot your password?</a>-->
		
		<input type="password">
		
		<div id="lower">
		
		<!--<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>-->
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
</div>
<!-- fin contenedor noticias dinámico -->
<!-- inicio de parámetros para cargar js y css-->
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