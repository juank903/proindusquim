<?php /* Smarty version Smarty-3.1.8, created on 2014-05-27 06:29:06
         compiled from "/var/www/mvc2/views/ajax/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101420474853847702849869-58433352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5caa786ad9cc1916da24683551e670f4ca19cb9' => 
    array (
      0 => '/var/www/mvc2/views/ajax/index.tpl',
      1 => 1352124036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101420474853847702849869-58433352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paises' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53847702863fc9_77786127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53847702863fc9_77786127')) {function content_53847702863fc9_77786127($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input, select { margin: 0; }
</style>

<h2>Ejemplo de AJAX</h2>

<form>
    <table class="table table-bordered" style="width: 400px;">    
        <tr>
            <td style="text-align: right;">Pais:</td>
            <td>
            <select id="pais">
                <option value=""> -seleccione- </option>
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['pais'];?>
</option>

                <?php } ?>
            </select>
            </td>
        </tr>

        <tr>
            <td style="text-align: right;">Ciudad: </td>
            <td><select id="ciudad"></select></td>
        </tr>

        <tr>
            <td style="text-align: right; vertical-align: middle;">Ciudad a insertar: </td>
            <td><input type="text" id="ins_ciudad" /></td>
        </tr>
    </table>
    
    <p><button id="btn_insertar" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Insertar</button></p>
</form><?php }} ?>