@extends('layout_admin')

@section('body')
<h1 class="text-center mt-2">Liste des utilisateurs</h1>
<div class="row mb-2 mt-2 offset-1">
	<div class="offset-10">
		<span class="" ><a href="{{route('user.create')}}"  class="btn btn-primary  text-white">Ajouter Utilisateur</a><span class="text-white">
			
		</div>
		<table class="table ml-2">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">Nom</th>
					<th scope="col">Role</th>
					<th scope="col">Action</th>


				</tr>
			</thead>
			<tbody>
				<tr>

					@foreach($users as $value)

					<tr>
						
						<td>{{$value->id }}</td>
						<td>{{$value->name }}</td>
						<td>{{$value->type_user->nom_type }}</td>
						<td> <a href="{{route('user.update',$value->id)}}" class="btn btn-primary ">Modifier</a> <a href="{{route('user.delete',$value->id)}}" class="btn btn-danger ">Suprimer</a>  </td>

					</tr>

					@endforeach
				</tbody>
			</table>
		</div>

			@endsection