<!-- inicio slider en todas las páginas -->
<div id="slider">
    <ul>				
        <li ><img src="{$_layoutParams.root}/views/responsabilidad/img/acompanamiento_producto.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="{$_layoutParams.root}/views/responsabilidad/img/seguridad_salud.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="{$_layoutParams.root}/views/responsabilidad/img/seguridad_procesos.jpg" alt="Css Template Preview"></a></li> 
        <li ><img src="{$_layoutParams.root}/views/responsabilidad/img/preparacion_emergencias.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="{$_layoutParams.root}/views/responsabilidad/img/proteccion_ambiental.jpg" alt="Css Template Preview"></a></li>
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
                    <img src="{$_layoutParams.root}views/index/img/mision_vision_proindusquim.png" alt="Eddie" class="eddie" />   
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
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}

        {if isset($_layoutParams.css) && count($_layoutParams.css)}
            {foreach item=css from=$_layoutParams.css}
                <link href="{$css}" rel="stylesheet" type="text/css">
            {/foreach}
        {/if}
<!-- fin de parámetros para cargar js y css-->