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
                    <li>{{ $prod_var->id }}</a></li>
                @endforeach

                @foreach(stocks as stock)
                    <li>{{ $stock-> quantity }}</li
                @endforeach            
            </ul>
    @endforeach
</ul>
</body>
</html>