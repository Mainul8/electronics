<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">ELECTRONICS</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                   aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/home')}}" style="color:white">Home</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/product')}}" style="color:white">Products</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/product/view')}}" style="color:white">Product Information</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

<div class="container">
   <form action="" class="col-12">
        <button class="btn btn-primary d-inline-block m-2">Search</button>
        <a href="{{url('/product/view')}}">
        <button class="btn btn-primary d-inline-block m-2" type="button">Reset</button>
        </a>
        </form>
        <a href="{{route('product.index')}}">
          <button class="btn btn-primary d-inline-block m-2 float-right">Add </button>
        </a>
        <table class="table">
        <thead>
            <tr>
                <th>Course Category</th>
                <th>Price</th>
                <th>RAM</th>
                <th>Manufacturer</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr scope="row">
                <td>{{ $product->course_cat}}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->ram }}</td>
                <td>{{ $product->manufacturer }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
   </div>
   

  </body>
</html>