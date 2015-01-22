<?php /* Smarty version Smarty-3.1.8, created on 2015-01-20 17:53:06
         compiled from "/home/proindus/public_html/views/tips_uso/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118243548954b6c73eaa21e3-02198785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0dce7441d8dd81006d46aadf46631dd51b27943' => 
    array (
      0 => '/home/proindus/public_html/views/tips_uso/index.tpl',
      1 => 1421776349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118243548954b6c73eaa21e3-02198785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54b6c73eaee552_14680792',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6c73eaee552_14680792')) {function content_54b6c73eaee552_14680792($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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