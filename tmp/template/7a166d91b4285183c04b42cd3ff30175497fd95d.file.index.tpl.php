<?php /* Smarty version Smarty-3.1.8, created on 2014-11-18 16:43:14
         compiled from "/var/www/proindusquim/views/industrial/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3951090135404ac2f52c4c1-58017364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a166d91b4285183c04b42cd3ff30175497fd95d' => 
    array (
      0 => '/var/www/proindusquim/views/industrial/index.tpl',
      1 => 1416346990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3951090135404ac2f52c4c1-58017364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5404ac2f595392_31296641',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5404ac2f595392_31296641')) {function content_5404ac2f595392_31296641($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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
                    <li><a href="https://www.youtube.com/watch?v=a2bZN4qZnE8">Línea Industrial</a></li>
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
                        <div class="centrado bloque_titulos subtitulo-4 blanco">DETERCLEAN 500</div>
                            <div class="descripcion_productos">
                                <p><b class="rojo">Descripción:</b><br/>Detergente liquido concentrado biodegradable.</p><br/>
                                <p><b class="rojo">Usos:</b><br/>Lavado de superficies y equipos alimenticios e industriales.</p><br/>
                                <p><b class="rojo">Dilución:</b><br/>Limpieza extra fuerte 1:5 (1 con 5 partes de agua)</p><br/>
                                <p><b class="rojo">Precauciones:</b><br/>Limpieza normal-suave 1:40  (1 con 40 partes de agua)</p><br/>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/industrial_fichas/DETERCLEAN_500.pdf""><b class="rojo">DESCARGAR FICHA TÉCNICA</b></a></p><br/>
                            </div>
                            <div class="imagen_productos">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/industrial/img/no_disponible.jpg" />
                                <div class="valores_presentacion"><b class="bloque_titulos blanco">Presentación:</b><br/><div class="cuadro_presentacion">4 lt</div><div class="cuadro_presentacion">20 lt</div><div class="cuadro_presentacion">220 lt</div></div>
                            </div>
                    </div>
                </div>
                            
            </div>
            <div id="paginacion">
                <div class="actual_boton_pagina">
                    1
                </div>
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial/dos">2</a>
                </div>
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial/tres">3</a>
                </div>
                <div class="boton_pagina">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
industrial/cuatro">4</a>
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