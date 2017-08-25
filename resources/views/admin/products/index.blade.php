<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
            padding: 30px
        }
    </style>
</head>
<body>
<h1>Products</h1>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Preguntas</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td><a href="/admin/products/{{$product->id}}">{{ $product->text}}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<button class="btn btn-primary"><a href="/admin/products/create">Create product</a></button>
</body>
</html>