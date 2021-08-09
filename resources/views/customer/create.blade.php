<h1>Add New Customers</h1>
<form action="/customers" method="post">
	<div>
	<label for="name">Name</label>
	<input type="text" name="name" autocomplete="off">
	@error('name') <p>{{ $message }}</p> @enderror
</div>
<div>
	<label for="email">Email</label>
	<input type="text" name="email" autocomplete="off">
	@error('email') <p>{{ $message }}</p> @enderror
</div>

	@csrf
	<button>Add new Customer</button>	
	</form>