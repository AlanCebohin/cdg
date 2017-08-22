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
<h4>{{ $products->title }}</h4>

<ul>
    @foreach($products as $product)
        <li><a href="/front/index/{{ $products->id }}">{{ $product->text }}</a></li>
            <ul>
                @foreach(products_variants as $prod_var)
                    <li>{{ $prod_var->variant1_type, variant1_value, variant2_type, variant2_value, variant3_type, variant3_value, price }}</a>
                    </li>
                @endforeach

                <ul>
                @if(!stock->quantity > 0)
                    <p>¡No hay stock!</p>
                @else
                    <p>¡En stock!</p>
                @endif
                </ul>          
            </ul>
</ul>
</body>
</html>