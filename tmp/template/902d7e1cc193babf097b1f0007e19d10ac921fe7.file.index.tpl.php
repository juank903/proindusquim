<?php /* Smarty version Smarty-3.1.8, created on 2014-08-22 13:51:10
         compiled from "/var/www/proindusquim/views/servicios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4037023153f78efb3d9c92-33711648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902d7e1cc193babf097b1f0007e19d10ac921fe7' => 
    array (
      0 => '/var/www/proindusquim/views/servicios/index.tpl',
      1 => 1408733466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4037023153f78efb3d9c92-33711648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53f78efb439ba2_87563570',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'js' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f78efb439ba2_87563570')) {function content_53f78efb439ba2_87563570($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider">
    <ul>				
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/servicios/img/servicios_uno.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/servicios/img/servicios_dos.jpg" alt="Css Template Preview"></a></li>
    </ul>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
	</script>
</div>
<!-- fin slider en todas las páginas-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <!--inicio sección descripción de la empresa -->
        <div id="demo">
            <div id="features">
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/index/img/mision_vision_proindusquim.png" alt="Eddie" class="eddie" />   
                    <p>La Línea de Servicios Especiales mantiene nuestros estándares de calidad y seguridad, y está enfocada a aquellas áreas muy particulares de la industria.</p>
                    <p>Dentro de nuestros principales desarrollos tenemos los siguientes:</p><br/>
                    <ul>
                        <li>Formulación y desarrollo de productos y líneas.</li>
                        <li>Envasado de líquidos, geles, polvos y aerosoles.</li>
                        <li>Maquila de productos cosméticos e industriales bajo marca propia.</li>
                        <li>Envasado en cartuchos y/o tubos colapsibles de productos con alta viscosidad.</li>
                        <li>Servicio de etiquetado, codificado Ink Jet y empacado termoencogible.</li>
                        <li>Fabricación de productos a granel.</li>
                        <li>Distribución a nivel nacional de productos o líneas complementarias.</li>
                    </ul>
                </div>
            </div>
            <!-- script de funcionamiento del slider de descripción de la empresa-->
            <script type="text/javascript">		
                $(document).ready(function(){ $('#features').jshowoff(); });
            </script>
            <!-- fin script de funcionamiento del slider de descripción de la empresa-->                    
        </div>
        <!-- fin sección descripción productos-->
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