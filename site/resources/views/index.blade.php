@extends('layout',$categories)

<?php 
function  return_text($text){
	if(  strlen($text)>90 ) return substr($text, 0,90);
	return $text;
}

 function returnImage($type_ ,$i){
	if($type_=="Sport") return 'img/imagesp'.$i.'.jpg';
	if($type_=="Santé") return 'img/images'.$i.'.jpg';
	if($type_=="Education") return 'img/imageedu'.$i.'.jpg';
	if($type_=="Politique") return 'img/imagep'.$i.'.jpg';


}
?>

@section('body')

<div class="container-fluid pt-5">
	<div class="container pt-5">


		<div class="row">
			<?php for($i=1; $i <=sizeof($articles); $i++) { 
				$imgs=returnImage($articles[$i-1]->categorie->nom,$i);

				if($i%4==0){ echo "</div></div></div><div class='container pt-5'><div class='container pt-5'><div class='row'> "; }   ?> 

				<div class="col-lg-4 col-md-6 mb-5">
					<div class="position-relative mb-4">
						<img class="img-fluid rounded w-100" src="{{URL::asset($imgs)}}" alt="">
						<div class="blog-date">
							<h4 class="font-weight-bold mb-n1">01</h4>
							<small class="text-white text-uppercase">Jan</small>
						</div>
					</div>

					<h5 class="font-weight-medium">  <a href="{{route('detail',$articles[$i-1]->id)}}" class="text-dark"><?php echo $articles[$i-1]->titre; ?> </a>         </h5>

					<p class="container"><?php echo  return_text( $articles[$i-1]->contenue) ?> 
					<?php if( strlen($articles[$i-1]->contenue)!=strlen(return_text( $articles[$i-1]->contenue)))
					echo "....<a style='color: black;' href='#'>voir</a></p>"; ?>

				</div>




			<?php }?>


		</div>

	</div>
</div>

@endsection
