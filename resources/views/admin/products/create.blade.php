<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <style>
        body {padding: 30px}
        form {background-color: #f3f3f3; padding: 20px;}
    </style>
</head>
<body>
    @if(count($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Add Product</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="categories">Category</label>
                        <input type="number" name="categories" id="categories" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="created_by">Created By</label>
                        <input type="text" name="created_by" id="created_by" class="form-control">
                    </div>
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>