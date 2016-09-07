<h1>Listado de Categorías</h1>

<br>

<table border=1>

	<thead>

		<th>id</th>

		<th>nombre</th>

	</thead>

	<tbody>

		

	@foreach($categorias as $categoria)

		<tr>

			<td>{{ $categoria->id }}</td>

			<td>{{ $categoria->nombre }} </td>

		</tr>

​

	@endforeach

	</tbody>

</table>