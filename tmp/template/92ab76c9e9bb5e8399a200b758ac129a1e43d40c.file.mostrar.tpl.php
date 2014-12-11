<?php /* Smarty version Smarty-3.1.8, created on 2014-10-21 16:46:22
         compiled from "/var/www/proindusquim/modules/principal/views/index/mostrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21432158985446be48ae6155-70418243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ab76c9e9bb5e8399a200b758ac129a1e43d40c' => 
    array (
      0 => '/var/www/proindusquim/modules/principal/views/index/mostrar.tpl',
      1 => 1413927155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21432158985446be48ae6155-70418243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5446be48b100a1_59266329',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5446be48b100a1_59266329')) {function content_5446be48b100a1_59266329($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="banner_principal">
</div>
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