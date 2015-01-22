<?php /* Smarty version Smarty-3.1.8, created on 2015-01-06 21:33:13
         compiled from "/home/seisnuev/public_html/proindusquim-fn/views/automotriz/tres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1920612142548b34471787f0-67202423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c99b2b0509028bbbffd829098462d51271ed9a4c' => 
    array (
      0 => '/home/seisnuev/public_html/proindusquim-fn/views/automotriz/tres.tpl',
      1 => 1420567766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920612142548b34471787f0-67202423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_548b344719bb72_52951254',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548b344719bb72_52951254')) {function content_548b344719bb72_52951254($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
<div id="banner_principal">
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
    <!-- inicio noticias página principal -->
    <div id="noticias_proindusquim">
        <div id="barra_productos">
            <!-- inicio sección descripción productos izquierda-->
            <div id="barra_productos_izquierda">
                <ul class="youtube-videogallery">
                    <li><a href="https://www.youtube.com/watch?v=F6lq2HDBs14">Línea Automotriz</a></li>
                </ul>
                <!-- Inicio script funcionamiento videos -->
                <script>
                    
                    $(document).ready(function(){
                        $("ul.youtube-videogallery").youtubeVideoGallery( {plugin:'fancybox'} );
                    });
                    
                </script>
                <!--Fin script funcionamiento videos-->                
            </div>    
            <!-- inicio sección descripción productos derecha-->
            <div id="barra_productos_derecha">
                <div class="left-footer-productos">
                    <div class="cuadro_productos">
                        <div class="centrado bloque_titulos subtitulo-4 blanco">CREMIX</div>
                        <div class="descripcion_productos">
                            <p><b class="rojo">Descripción:</b><br/>Crema desengrasante de manos con efecto humectante y desinfectante con fragancia a naranja.</p><br/>
                            <p><b class="rojo">Aplicación:</b><br/>Uso directo.<br/>Para retirarla utilice papel, paño o enjuague con agua</p><br/>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/automotriz_fichas/CREMIX_FCF.pdf"><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                        </div>
                        <div class="imagen_productos">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/automotriz/img/cremix_grande.jpg" />
                            <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">350 gr</div><div class="cuadro_presentacion">500 ml</div><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                        </div>
                    </div>                   
                                           
                </div>

            </div>
            <div id="paginacion">
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
automotriz">1</a>
                </div>
                <div class="boton_pagina">
                   <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
automotriz/dos">2</a>
                </div>
                <div class="actual_boton_pagina">
                    3
                </div>                
                
            </div>                              
        </div>
        <!-- fin sección descripción productos-->
    </div>
</div>
<!-- fin contenedor noticias dinámico -->
<!-- inicio menú íconos -->
<div id="menu_iconos">
    <!-- inicio sección descripción productos-->
    <div id="barra_productos">
        <div id="barra_iconos">
            <div class="cuadrado">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
automotriz"><div class="boton_icono boton_automotriz"></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial"><div class="boton_icono boton_industrial"></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construccion"><div class="boton_icono boton_construccion"></div></a>                      
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
institucional_hogar"><div class="boton_icono boton_hogar"></div></a>  
            </div>    
        </div>            
    </div>
    <!-- fin sección descripción productos-->
</div> <?php }} ?>