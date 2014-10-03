<?php /* Smarty version Smarty-3.1.8, created on 2014-10-01 05:43:46
         compiled from "/var/www/proindusquim/views/error/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:676113522542bdae22a3524-17127081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e70765ee136cc90eb727ce9d80ccf674bbd44bf' => 
    array (
      0 => '/var/www/proindusquim/views/error/index.tpl',
      1 => 1335211940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676113522542bdae22a3524-17127081',
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
  'unifunc' => 'content_542bdae241e165_34105176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542bdae241e165_34105176')) {function content_542bdae241e165_34105176($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a><?php }} ?>