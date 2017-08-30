<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Stock</title>
</head>
<body>
	@if(count($errors))
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
	@endif
	<h1>Create Stocks</h1>
    <div>
    <form action="/admin/stocks/store" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<label for="prodVarId">Product Variant Id</label>
		<input type="text" name="question" placeholder= "Product Variant Id" value="" required id="prodVarId">
		<br>
		<label for="quantity">Quantity</label>
		<input type="number" name="quantity" placeholder="Quantity" value="" required>
		<br>
		<button id="submit" class="buttonRegistro" align="center" type="submit">Submit</button>
		<button class="buttonRegistro" type="reset">Delete</button>
    </form>
    	
    </div>

</body>
</html>