<?php /* Smarty version Smarty-3.1.8, created on 2015-01-11 14:24:09
         compiled from "/home/proindus/public_html/web/views/tips_uso/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89513237254b28789a3a566-94587318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be064ff4cb8f1a7a5d35277b3e67ac5cde1485cb' => 
    array (
      0 => '/home/proindus/public_html/web/views/tips_uso/index.tpl',
      1 => 1418305696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89513237254b28789a3a566-94587318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b28789a63118_97885731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b28789a63118_97885731')) {function content_54b28789a63118_97885731($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="banner_principal">
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <!-- inicio sección videos-->
        <div id="contenedor_barra_videos">
            <div id="barra_videos">
                <ul class="youtube-videogallery">
                    <li><a href="https://www.youtube.com/watch?v=L-VK6xxWheA">Cómo usar impermeabilizante</a></li>
                    <li><a href="https://www.youtube.com/watch?v=7DvNkr8DKyM">Nuevos Productos</a></li>
                    <li><a href="https://www.youtube.com/watch?v=adyvCjuvtd4">Línea Hospitalaria</a></li>
                </ul>
            </div>
        </div>
        <!-- fin sección videos-->
        <!-- Inicio script funcionamiento videos -->
        <script>
            
            $(document).ready(function(){
                $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'fancybox'} );
            });
            
        </script>
        <!--Fin script funcionamiento videos -->
    </div>
</div>
<!-- fin contenedor noticias dinámico --><?php }} ?>