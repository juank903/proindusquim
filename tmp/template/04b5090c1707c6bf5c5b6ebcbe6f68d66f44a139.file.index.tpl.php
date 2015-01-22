<?php /* Smarty version Smarty-3.1.8, created on 2015-01-21 21:04:15
         compiled from "C:\xampp\htdocs\proindusquim\views\tips_uso\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3171654c0063f917292-36631074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04b5090c1707c6bf5c5b6ebcbe6f68d66f44a139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proindusquim\\views\\tips_uso\\index.tpl',
      1 => 1421776350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3171654c0063f917292-36631074',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54c0063f951c25_22620228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0063f951c25_22620228')) {function content_54c0063f951c25_22620228($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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