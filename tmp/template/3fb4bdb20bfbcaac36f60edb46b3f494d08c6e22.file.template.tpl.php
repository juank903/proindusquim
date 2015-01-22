<?php /* Smarty version Smarty-3.1.8, created on 2014-12-15 09:13:59
         compiled from "/home/seisnuev/public_html/proindusquim-fn/views/layout/default2/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1725604261542ec44b4a3e36-37277078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fb4bdb20bfbcaac36f60edb46b3f494d08c6e22' => 
    array (
      0 => '/home/seisnuev/public_html/proindusquim-fn/views/layout/default2/template.tpl',
      1 => 1418632817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1725604261542ec44b4a3e36-37277078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_542ec44b502ca0_09386558',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'css' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ec44b502ca0_09386558')) {function content_542ec44b502ca0_09386558($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/proindusquim.ico">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
estilos.css" rel="stylesheet" type="text/css" />
        
        <!-- librerías para galeria de videos-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1-9-1.js"></script>
        <!-- fin librerías galeria de videos-->

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
        <!-- fin de parámetros para cargar js y css-->        </head>

    <body>
        <div id="franja_superior">
            <div id="contenedor_franja_principal">
                <div id="redes_sociales">
                    <div class="icono">
                        <a href="https://www.facebook.com/pages/Proindusquim-SA/559591434078075?fref=ts"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/facebook.png" /></a>
                    </div>
                    <div class="icono">
                        <a href="https://www.youtube.com/channel/UCNvxJLl2cv2piVhSnL8me0Q"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/youtube.png" /></a>
                    </div>
                    <div class="icono">
                        <a href="https://twitter.com/Proindusquim"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/twitter.png" /></a>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- inicio layout de trabajo-->
        <div id="contenedor_principal">
            <!-- inicio encabezado-->
            <header>
                <!-- inicio menu principal-->
                <div class="menu_principal">
                    <div class="contenedor_botones_menu_principal">
                        <a class="botones_menu_principal borde_derecho" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index">EMPRESA</a>
                        <a class="botones_menu_principal borde_derecho" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
responsabilidad">RESPONSABILIDAD<br/> SOCIAL</a>                        
                        <a class="botones_menu_principal borde_derecho" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
productos">PRODUCTOS</a>
                        <a class="botones_menu_principal borde_derecho" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
desarrollos">DESARROLLOS</a>
                        <a class="botones_menu_principal" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tips_uso">TIPS DE USO</a>

                    </div>
                </div>
                <!-- fin menu principal-->
                <!-- logotipo empresa-->
                <div id="logotipo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logotipo_proindusquim.jpg" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                </div>
                <!-- cierre logotipo empresa -->
             </header>
            <!-- fin encabezado -->

                <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>

		        <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
		            <div id="_errl" class="alert alert-error">
		                <a class="close" data-dismiss="alert">x</a>
		                <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

		            </div>
		        <?php }?>

		        <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
		            <div id="_msgl" class="alert alert-success">
		                <a class="close" data-dismiss="alert">x</a>
		                <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

		            </div>
		        <?php }?>

		        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<!--        </div> -->
        <!-- fin contenedor de layout de trabajo -->
    </body>
</html><?php }} ?>