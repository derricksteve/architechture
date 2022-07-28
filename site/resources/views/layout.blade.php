
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Klean - Cleaning Services Website Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	
	<link type="text/css" href="{{URL::asset('style/accueil.css')}}" 
	rel="stylesheet">
	<title></title>
</head>
<body>

	<h1 class="mt-3">Actualité à la UNE
	</h1>
	<div class="row mb-2">
		<div class="offset-11">
			<span class="" ><a href="{{route('user.login')}}"  class="btn btn-primary  text-white">Admin</a><span class="text-white">
			
		</div>
		
	</div>

	<ul class="menu">

		<li><a href="#" class="active">Accueil</a></li>
		
			@for($i=0;   $i<4;  $i++)
			<li><a href="{{route('getOne', $categories[$i]->id)}}">{{$categories[$i]->nom}}</a></li>

			@endfor
			
	
	</ul>






	<!-- Blog Start -->

	
	
	<div class="container-fluid pt-5">
		<div class="container pt-5">


			<div class="row">
				


				 @yield('body')


			</div></div></div>





			<!-- Blog End -->

		</body>
		</html>