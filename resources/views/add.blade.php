<html>
    <head>
        <title>Add Products</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        @if (Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif

        @if (Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        <div class="container" style="margin-top:100px">
            <div class="col-md-5" style="margin:auto;">
                <h1 class="text-center">Enter Product Below</h1>
                @if ($errors->any())
                   @foreach ($errors->all() as $err)
                     <li>{{ $err }}</li>
                   @endforeach
                @endif
            <form action="insert" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                </div>

                <div class="mb-3">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter Price ">
                </div>

                <div class="mb-3">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Enter Category">
                </div>

                <button type="submit" class="btn btn-success">Add Product</button>
            </form>

        </div>

    </div>



    </body>
</html>
