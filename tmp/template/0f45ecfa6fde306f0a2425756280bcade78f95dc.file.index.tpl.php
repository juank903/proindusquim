<?php /* Smarty version Smarty-3.1.8, created on 2014-05-27 06:29:05
         compiled from "/var/www/mvc2/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174315466153847701eaf174-46804554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f45ecfa6fde306f0a2425756280bcade78f95dc' => 
    array (
      0 => '/var/www/mvc2/views/acl/index.tpl',
      1 => 1352154970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174315466153847701eaf174-46804554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53847701ed0553_84579114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53847701ed0553_84579114')) {function content_53847701ed0553_84579114($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>