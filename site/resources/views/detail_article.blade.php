@extends('layout',$categories)


@section('body')

<div class="container-fluid ">
	<div class="container">


		<div class="row">
			



			<div class="col-lg-10 col-md-10 mb-5">
				<div class="position-relative mb-4">
					<img class="img-fluid rounded w-100" src="{{URL::asset('img/test.jpg')}}" alt="">
					<div class="blog-date">
						<h4 class="font-weight-bold mb-n1">01</h4>
						<small class="text-white text-uppercase">Jan</small>
					</div>
				</div>

				<h5 class="font-weight-medium">  <a  class="text-dark"> {{  $article->titre    }} </a>         </h5>

				<p class="container">{{$article->contenue }}</p>


			</div>




			


		</div>

	</div>
</div>





@endsection