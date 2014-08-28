<?php /* Smarty version Smarty-3.1.8, created on 2014-08-28 10:36:12
         compiled from "/var/www/proindusquim/views/layout/default/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60071752853f36654cc0757-16221647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af0816df698bbad91e369d57897a506ad457a8ee' => 
    array (
      0 => '/var/www/proindusquim/views/layout/default/template.tpl',
      1 => 1409240167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60071752853f36654cc0757-16221647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53f36654d56105_31145904',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f36654d56105_31145904')) {function content_53f36654d56105_31145904($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
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
        
        <!-- librerías para el slider principal-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1-6-4.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.easing.min-1-3.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.zaccordion.js"></script>
        <!-- fin librerías slider principal-->
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
    </head>

    <body>
        <div id="franja_superior">
        </div>
        <!-- inicio layout de trabajo-->
        <div id="contenedor_principal">
            <!-- inicio encabezado-->
            <header>
                <!-- inicio menu principal-->
                <div class="menu_principal">
                    <div class="contenedor_botones_menu_principal">
                        <a class="botones_menu_principal" href="index">EMPRESA</a>
                        <a class="botones_menu_principal" href="productos">PRODUCTOS</a>
                        <a class="botones_menu_principal" href="responsabilidad">RESPONSABILIDAD<br/> SOCIAL</a>
                        <a class="botones_menu_principal" href="servicios">SERVICIOS</a>
                        <a class="botones_menu_principal" href="tips_uso">TIPS DE USO</a>

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
        <!-- inicio footer-->
        <footer>
            <div id="contenedor_footer">
                <div id="left-footer">
                    <div id="contenedor_logotipos" class="centrado" style="margin-bottom:20px;">
                        <img class="centrado" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logotipo_proindusquim_p.jpg" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                    </div>
                    <div class="subtitulo-3 verde_obscuro centrado">PROINDUSQUIM S.A.</div> <p class="centrado">Es una empresa dedicada a la fabricación y comercialización de productos químicos.</p>
                    <div id="contenedor_logotipos" class="centrado" style="margin-bottom:20px;">
                        <img class="centrado" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/responsible-care.png" title= "PROINDUSQUIM líder en productos químicos" alt="PROINDUSQUIM líder en productos químicos"/>
                    </div>
                </div>
                <div id="left-footer">
                    <div class="subtitulo-3 verde_obscuro centrado">INFORMACIÓN DE CONTACTO</div>
                    <p class="centrado">Conjunto Industrial "REQUIMEC"</p>
                    <p class="centrado">Av. Teniente Hugo Ortíz y Balzar</p>
                    <p class="centrado">Panamericana Sur Km. 4</p>
                    <p class="centrado">PBX: 593.2 2671.015 / 2671.740</p><br/>

                    <div class="subtitulo-3 verde_obscuro centrado">Correos Electrónicos:</div>
                    <p class="centrado">Información General: info@proindusquim.com</p><br/>
                    <p class="centrado">Gerencia General: ggeneral@proindusquim.com</p><br/>
                    <p class="centrado">Gerencia de Producción: investigacion@proindusquim.com</p><br/>
                    <p class="centrado">Facturación y Ventas: facturacion@proindusquim.com</p><br/>
                </div>
                <div id="left-footer">
                    <div class="subtitulo-3 verde_obscuro">DÉJANOS TU MENSAJE</div>
                    <form>
                       <div class="caja_1">
                           <div class="etiqueta_formulario">NOMBRE:</div><input type="text" class="estilo_input"  name="nombre"/>
                       </div>
                       <div class="caja_1">
                            <div class="etiqueta_formulario">TELÉFONO:</div><input type="text" class="estilo_input"  name="nombre"/>
                       </div>
                       <div class="caja_1">
                            <div class="etiqueta_formulario">EMAIL:</div><input class="estilo_input" type="text" name="nombre"/>
                       </div>
                       <div class="caja_2">
                            <div class="etiqueta_formulario">MENSAJE:</div><textarea class="estilo_textarea" name="nombre"/></textarea>
                       </div>
                       <button type="button" class="estilo_button">ENVIAR</button>
                    </form>
                </div>

                <div id="foot">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/responsible_care_collage_proindusquim.jpg" />
                </div>
            </div>
        </footer>
        <!-- fin footer-->
    </body>
</html><?php }} ?>