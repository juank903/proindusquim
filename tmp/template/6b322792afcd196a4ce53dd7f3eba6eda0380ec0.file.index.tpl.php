<?php /* Smarty version Smarty-3.1.8, created on 2014-08-22 13:49:08
         compiled from "/var/www/proindusquim/views/responsabilidad/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21688321353f760b0545f54-94905348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b322792afcd196a4ce53dd7f3eba6eda0380ec0' => 
    array (
      0 => '/var/www/proindusquim/views/responsabilidad/index.tpl',
      1 => 1408733338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21688321353f760b0545f54-94905348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53f760b05b7677_82067216',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'js' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f760b05b7677_82067216')) {function content_53f760b05b7677_82067216($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider">
    <ul>				
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/responsabilidad/img/acompanamiento_producto.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/responsabilidad/img/seguridad_salud.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/responsabilidad/img/seguridad_procesos.jpg" alt="Css Template Preview"></a></li> 
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/responsabilidad/img/preparacion_emergencias.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/responsabilidad/img/proteccion_ambiental.jpg" alt="Css Template Preview"></a></li>
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
                    <p>En 1999, la Asociación de Productores Químicos del Ecuador - APROQUE, Organización de Derecho Privado sin fines de lucro, inicia la coordinación en el país del Proceso Responsible Care,con la finalidad de fomentar el desarrollo industrial y empresarial con un alto nivel de eficacia basada en el principio de sostenibilidad.</p>
                    <p>Responsible Care , es una iniciativa voluntaria de la industria química global, hacia la mejora continua de la gestión ambiental, seguridad y salud en el trabajo, fomentando la comunicación con sus grupos de interés sobre sus produtos y procesos.</p>
                    <p>Es también un referente ético que permite la creación de productos que contribuyen a un mañana sostenible.</p>
                    <p>El Proceso Responsible Care , se basa en el desarrollo y contínua evaluación de las prácticas comprendidas en los siguientes códigos:</p><br/>
                    <ul>
                        <li>Seguridad de Procesos.</li>
                        <li>Protección Ambiental.</li>
                        <li>Preaparación de la Comunidad para respuestas en Emergencia.</li>
                        <li>Distribución y Transporte.</li>
                        <li>Seguridad y Salud de los trabajadores.</li>
                        <li>Acompañamiento del Producto.</li>
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