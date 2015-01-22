<?php /* Smarty version Smarty-3.1.8, created on 2015-01-20 17:52:58
         compiled from "/home/proindus/public_html/views/productos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85486684754b2a0c3b11c44-85430969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9735ae776e51e9ed2656a0c0d9649b3b216ce8' => 
    array (
      0 => '/home/proindus/public_html/views/productos/index.tpl',
      1 => 1421776349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85486684754b2a0c3b11c44-85430969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b2a0c3b456f4_33082176',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2a0c3b456f4_33082176')) {function content_54b2a0c3b456f4_33082176($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider" style="margin-top:-15px;">LÍNEA INSTITUCIONAL /<br/> HOGAR</div></div><a href="institucional_hogar"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_hogar.jpg" style="float:right;"/>            
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">LÍNEA CONSTRUCCIÓN</div></div><a href="construccion"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_construccion.jpg" style="float:right;"/>            
        </li>            
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">LÍNEA AUTOMOTRIZ</div></div><a href="automotriz"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_automotriz.jpg" style="float:right;"/>            
        </li>
        <li class="frame-3">
            <div class="menu_slider frame-3"><div class="texto_menu_slider">LÍNEA INDUSTRIAL</div></div><a href="industrial"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/linea_industrial.jpg" style="float:right;"/>            
        </li>


    </div>
        <!-- inicio script para que funcione el slider-->
        <script>
            $(document).ready(function() {
                    $("#banner_ul").zAccordion({
                            slideWidth: 800,
                            width: 1100,
                            height: 450,
                            timeout: 10000,
                            slideClass: "frame",
                            speed: 6000
                    });
            });
	</script>
        <!-- fin script slider -->        
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template--><?php }} ?>