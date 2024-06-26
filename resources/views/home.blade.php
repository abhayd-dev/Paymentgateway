<!doctype html>
<html lang="en">
  <head>
    <title>Form JS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{{-- css link --}}
<link rel="stylesheet" href="{{ 'css/style.css'  }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     
<div class="container">
    <div class="row">
        <div class="col-sm-12 bg">
            <div class="col-sm-6 mx-auto mt-4 mb-4 p-4">
            <h1 class="text-white">Person Details For Payment</h1>
            <form action="{{ url('/store') }}" method="post" class="text-white">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter Your Name">
        
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

             </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email"
                    placeholder="Enter Your email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
             </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="mobile" class="form-control" id="mobile" name="mobile"
                    placeholder="Enter Your mobile">
                    @error('mobile')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
             </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city"
                    placeholder="Enter Your city">
                    @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
             </div>
             <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Pay Now</button> 
         </div>
          
             </form>
            </div>
        </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>