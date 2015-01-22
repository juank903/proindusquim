<?php /* Smarty version Smarty-3.1.8, created on 2014-12-12 18:24:38
         compiled from "/home/seisnuev/public_html/proindusquim-fn/views/tips_uso/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:930487079542ec44b506596-85885529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad224698375d7559bd07762c1ac620c24fbef3ba' => 
    array (
      0 => '/home/seisnuev/public_html/proindusquim-fn/views/tips_uso/index.tpl',
      1 => 1418305696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930487079542ec44b506596-85885529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_542ec44b524580_41183341',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ec44b524580_41183341')) {function content_542ec44b524580_41183341($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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