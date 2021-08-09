<h1>Customer Detail List</h1>
<a href="/customers/create">Add New</a>
<table border="1px">
	<tr>
		<th>Name</th>
	    <th>Action</th>
	 </tr>
@forelse($customers as $customer)
	 <tr>   		
 <td><a href="/customers/{{ $customer->id }}"> {{ $customer->name }}</a></td>
 <td><a href="/customers/{{$customer->id}}/edit">Edit</a></td>
 <td> <form action="/customers/{{ $customer->id }}" method="post">
   		@method('DELETE')
   		@csrf
   		<button>DELETE</button>
   	</form></td>
</tr>
  	
@empty
  <p>NO </p>   
@endforelse  
 </table>   