<?php /* Smarty version Smarty-3.1.8, created on 2015-01-06 21:57:56
         compiled from "/home/seisnuev/public_html/proindusquim-fn/views/responsabilidad/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:423703531542ec4476cf193-75246651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab000e547bb9081d0d478bdec7f05da0550ced59' => 
    array (
      0 => '/home/seisnuev/public_html/proindusquim-fn/views/responsabilidad/index.tpl',
      1 => 1420581473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '423703531542ec4476cf193-75246651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_542ec4476fb3d2_75942335',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ec4476fb3d2_75942335')) {function content_542ec4476fb3d2_75942335($_smarty_tpl) {?><!-- inicio slider en todas las páginas -->
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
views/responsabilidad/img/responsible_care.png" alt="Eddie" class="eddie" />   
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
                <div>
<h2>SISTEMA INTEGRADO DE GESTIÓN (SIG)</h2>

<p>PROINDUSQUIM S.A., tiene como meta servir a sus clientes con productos de alta calidad con  tecnología desarrollada localmente y en el exterior, lo que permite brindar soluciones a bajo costo pero con calidad, durabilidad, alto rendimiento con productos de  fácil aplicación.</p>
<p>Dentro  de  este  contexto ha  decido implementar y certificar un  Sistema Integrado de  Gestión bajo las Normas internacionales ISO 9001: 2008, ISO 14001: 2004 y OHSAS 18001: 2007.</p><br/>
<table style="border: solid 1px black; margin: 50px auto">
<tr><td style="border: solid 1px black; padding:5px">GESTION</td><td style="border: solid 1px black; padding:5px" >NORMA  INTERNACIONAL</td></tr>
<tr><td style="border: solid 1px black; padding:5px">Calidad</td><td style="border: solid 1px black; padding:5px"> ISO  9001</td></tr>
<tr><td style="border: solid 1px black; padding:5px">Ambiente</td><td style="border: solid 1px black; padding:5px"> ISO  14001</td></tr>
<tr><td style="border: solid 1px black; padding:5px">Prevención de Riesgos Laborales</td><td style="border: solid 1px black; padding:5px"> OHSAS  18001</td></tr>
</table>


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