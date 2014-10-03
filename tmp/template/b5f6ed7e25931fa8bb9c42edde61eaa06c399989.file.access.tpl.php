<?php /* Smarty version Smarty-3.1.8, created on 2014-10-01 09:31:34
         compiled from "/var/www/proindusquim/views/error/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1721463761542c1046eeef85-92226521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f6ed7e25931fa8bb9c42edde61eaa06c399989' => 
    array (
      0 => '/var/www/proindusquim/views/error/access.tpl',
      1 => 1335211934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721463761542c1046eeef85-92226521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_542c1047116e86_27120065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c1047116e86_27120065')) {function content_542c1047116e86_27120065($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>