<!DOCTYPE html>
<html>
 @include('partesEsquema.cabecera')
<body>
    @include('partesEsquema.header')
 
	<!-- ============================================= -->
	<!-- ============================================= -->
	<!-- NUESTRO CUERPO -->
	
   <main>	
	<div class="row">
		<div class="col-md-10"><!-- Columna principal -->
			<!-- ============================================= -->
			<!-- ============================================= -->
			<!-- NAVBAR -->

	
			<!-- ============================================= -->
			<!-- ============================================= -->
			<!-- CARRUSEL -->
	
	        	@include('partesEsquema.carrusel')
	
			<!-- ============================================= -->
			<!-- ============================================= -->
			<!-- Productos -->

	        	@yield('content')
	
		</div><!-- cierre Columna principal -->
		<div class="col-md-2"><!-- Columna con Lista de productos y noticias-->
			<div class="row">
			
	        	@include('partesEsquema.aside')
	 
			</div>
		
	        	@include('partesEsquema.article')
	 
		</div><!-- Columna con nuestro menu y la noticia -->
	</div><!-- Cierre ROW con la lista de productos y noticia -->
</main>
 		

  	<!-- FOOTER -->
  	
    @include('partesEsquema.footer');
 
	
</body>
</html>