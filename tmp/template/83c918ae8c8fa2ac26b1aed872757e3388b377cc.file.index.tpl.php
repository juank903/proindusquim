<?php /* Smarty version Smarty-3.1.8, created on 2015-01-21 20:57:41
         compiled from "C:\xampp\htdocs\proindusquim\views\desarrollos\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3219454c004b5096c26-64588479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83c918ae8c8fa2ac26b1aed872757e3388b377cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proindusquim\\views\\desarrollos\\index.tpl',
      1 => 1421776350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3219454c004b5096c26-64588479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54c004b50f09b9_72402689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c004b50f09b9_72402689')) {function content_54c004b50f09b9_72402689($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider">
    <ul>				
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/desarrollos/img/servicios_uno.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/desarrollos/img/servicios_dos.jpg" alt="Css Template Preview"></a></li>
    </ul>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true,
                                speed: 5000
			});
		});	
	</script>
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <!--inicio sección descripción de la empresa -->
        <div id="demo">
            <div id="features">
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/desarrollos/img/hecho_ecuador.png" alt="Eddie" class="eddie" />   
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
                <div class="contenido_pendiente">
                </div>
                <div class="contenido_pendiente">
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
<!-- fin contenedor noticias dinámico --><?php }} ?>