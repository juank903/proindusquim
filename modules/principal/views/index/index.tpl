<!-- inicio slider en todas las páginas -->
<div id="banner_principal">
</div>
<!-- fin slider en todas las páginas-->
</div>
<!-- fin contenedor de layout de trabajo que viene del template-->
<!-- inicio contenedor noticias -->
<div id="contenedor_contenido_dinamico">
	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form>
		
		<label for="name">Username:</label>
		
		<input type="username">
		
		<label for="password">Password:</label>
		
		<!--<p><a href="#">Forgot your password?</a>-->
		
		<input type="password">
		
		<div id="lower">
		
		<!--<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>-->
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
</div>
<!-- fin contenedor noticias dinámico -->
<!-- inicio de parámetros para cargar js y css-->
        {if isset($_layoutParams.css) && count($_layoutParams.css)}
            {foreach item=css from=$_layoutParams.css}
                <link href="{$css}" rel="stylesheet" type="text/css">
            {/foreach}
        {/if}
<!-- fin de parámetros para cargar js y css-->