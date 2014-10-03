<!-- inicio slider en todas las páginas -->
<div id="slider">
    <ul>				
        <li ><img src="{$_layoutParams.root}/views/desarrollos/img/servicios_uno.jpg" alt="Css Template Preview"></a></li>
        <li ><img src="{$_layoutParams.root}/views/desarrollos/img/servicios_dos.jpg" alt="Css Template Preview"></a></li>
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
                    <img src="{$_layoutParams.root}views/desarrollos/img/hecho_ecuador.png" alt="Eddie" class="eddie" />   
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