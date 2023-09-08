
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
  @if (!isset($product))
    @php
      $product['course_cat'] = $product['price'] = $product['ram'] = $product['manufacturer'] = "";
    @endphp
  @endif
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">ELECTRONICS</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                   aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
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
    <form action="{{url('/product')}}" method="post">
    @csrf
    <div class="container">
        <h1 class="text-center">Electronics Product Form</h1>
        <div class="form-group">
          <label >Course Category</label>
          <select name="course_cat" class="form-control" >
           <option value="course_cat">Choose...</option>
            @foreach($cat as $row)
               <option value="{{$row->course_cat}}">{{$row->course_cat}}</option>
            @endforeach
          </select>
          <span class="text-danger">
               @error('course_cat')
                 {{$message}}
               @enderror
           </span>
        </div>
        <!-- <div class="form-group">
          <label for="">Product Name</label>
          <input type="text" name="name" id="" class="form-control" />
           <span class="text-danger">
               @error('name')
                  {{$message}}
               @enderror
          </span>
        </div> -->

        <div class="form-group">
          <label for="">Price</label>
          <input type="price" name="price" id="" class="form-control" />
          <span class="text-danger">
               @error('price')
                 {{$message}}
               @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">RAM</label>
          <input type="text" name="ram" id="" class="form-control" />
          <span class="text-danger">
               @error('ram')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">Manufacturer</label>
          <input type="text" name="manufacturer" id="" class="form-control"/>
          <span class="text-danger">
               @error('manufacturer')
                 {{$message}}
               @enderror
           </span>
        </div>
        <button class="btn btn-primary">
         Submit
        </button>
    </div>
    </form>
      
    
  </body>
</html>