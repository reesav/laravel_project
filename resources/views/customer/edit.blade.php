<h1>Edit Customers</h1>
<form action="/customers/" method="post">
<div>
	<label for="name">Name</label>
	<input type="text" name="name" autocomplete="off" value='{{ $customer->name}}'>
	@error('name') <p>{{ $message }}</p> @enderror
</div>
<div>
	<label for="email">Email</label>
	<input type="text" name="email" autocomplete="off" value='{{ $customer->email}}'>
	@error('email') <p>{{ $message }}</p> @enderror
</div>

	@csrf
	<button>Save</button>	
	</form>