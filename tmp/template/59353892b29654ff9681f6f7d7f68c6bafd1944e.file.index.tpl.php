<?php /* Smarty version Smarty-3.1.8, created on 2014-05-27 06:29:17
         compiled from "/var/www/mvc2/modules/usuarios/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2425907835384770d4df236-92634303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59353892b29654ff9681f6f7d7f68c6bafd1944e' => 
    array (
      0 => '/var/www/mvc2/modules/usuarios/views/registro/index.tpl',
      1 => 1352118922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2425907835384770d4df236-92634303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5384770d4f01e2_81466644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384770d4f01e2_81466644')) {function content_5384770d4f01e2_81466644($_smarty_tpl) {?><h2>Registro</h2>

<div class="well span5">
    <form name="form1" method="post" action="" class="form">
        <input type="hidden" value="1" name="enviar" />

        <p>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Usuario: </label>
            <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Email: </label>
            <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Password: </label>
            <input type="password" name="pass" />
        </p>

        <p>
            <label>Confirmar: </label>
            <input type="password" name="confirmar" />
        </p>    

        <p>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </p>
    </form>
</div><?php }} ?>