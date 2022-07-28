@extends('layout_admin')

@section('body')
<h1 class="text-center mt-2">Gerez Les Articles</h1>
<div class="row mb-2 mt-2 offset-1">
	<div class="offset-10">
		<span class="" ><a href="{{route('article.admin.create')}}"  class="btn btn-primary  text-white">Ajouter article</a><span class="text-white">
			
		</div>
		<table class="table ml-2">
			<thead class="thead-dark">
				<tr>
				
					<th scope="col">Titre</th>
					<th scope="col">Contenue</th>

					<th scope="col">Catégorie</th>
					<th scope="col">Action</th>


				</tr>
			</thead>
			<tbody>
				<tr>

					@foreach($articles as $value)

					<tr>
						
					
						<td>{{$value->titre }}</td>
						<td>{{$value->contenue }}</td>
						<td>{{$value->categorie->nom }}</td>
						<td> <a href="{{route('article.admin.show',$value->id)}}" class="btn btn-primary ">Modifier</a> <a href="{{route('article.admin.delete',$value->id)}}" class=" mt-1 btn btn-danger ">Suprimer</a>  </td>

					</tr>

					@endforeach
				</tbody>
			</table>
		</div>

			@endsection