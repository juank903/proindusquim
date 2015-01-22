<!-- inicio slider en todas las páginas -->
<div id="slider_principal">
    <div id="banner_ul">
        <li class="frame-0">
            <div class="menu_slider frame-0"><div class="texto_menu_slider" style="margin-top:-15px;">LÍNEA INSTITUCIONAL /<br/> HOGAR</div></div><a href="institucional_hogar"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_hogar.jpg" style="float:right;"/>            
        </li>
        <li class="frame-1">
            <div class="menu_slider frame-1"><div class="texto_menu_slider">LÍNEA CONSTRUCCIÓN</div></div><a href="construccion"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_construccion.jpg" style="float:right;"/>            
        </li>            
        <li class="frame-2">
            <div class="menu_slider frame-2"><div class="texto_menu_slider">LÍNEA AUTOMOTRIZ</div></div><a href="automotriz"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_automotriz.jpg" style="float:right;"/>            
        </li>
        <li class="frame-3">
            <div class="menu_slider frame-3"><div class="texto_menu_slider">LÍNEA INDUSTRIAL</div></div><a href="industrial"><div class="ver_catalogo">ver catálogo</div></a>
            <img src="{$_layoutParams.root}public/img/linea_industrial.jpg" style="float:right;"/>            
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
<!-- fin contenedor de layout de trabajo que viene del template-->