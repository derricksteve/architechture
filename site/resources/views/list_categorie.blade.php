@extends('layout_admin')

@section('body')
<h1 class="text-center mt-2">Liste des Catégories</h1>
<div class="row mb-2 mt-2 offset-1">
	<div class="offset-10">
		<span class="" ><a href="{{route('categorie.create')}}"  class="btn btn-primary  text-white">Ajouter Categorie</a><span class="text-white">
			
		</div>
		<table class="table ml-2">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">Nom</th>
					
					


				</tr>
			</thead>
			<tbody>
				<tr>

					@foreach($categories as $value)

					<tr>
						
						<td>{{$value->id }}</td>
						<td>{{$value->nom }}</td>
						
						
						<td> <a href="{{route('categorie.update',$value->id)}}" class="btn btn-primary ">Modifier</a> <a href="{{route('categorie.delete',$value->id)}}" class="btn btn-danger ">Suprimer</a>  </td>

					</tr>

					@endforeach
				</tbody>
			</table>
		</div>

			@endsection