<p>Hola Mundo!</p>


<h1>Listado de Topicos</h1>

<br>

<table border=1>

	<thead>

		<th>id</th>

		<th>titulo</th>

	</thead>

	<tbody>

	@foreach($topicos as $topico)

		<tr>

			<td>{{ $topico->id }}</td>

			<td>{{ $topico->titulo }} </td>

			<td>{{ $topico->descripcion }} </td>
			
			<td>{{ $topico->acciones }} </td>
			
			<td>{{ $topico->tags }} </td>

		</tr>

​

	@endforeach

	

	</tbody>

</table>