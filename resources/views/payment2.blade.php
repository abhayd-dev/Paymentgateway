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
      
    @if(Session::has('amount'))
    <div class="container">
        <form action="/pay" method="POST">
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <input type="hidden" custom="Hidden Element" name="hidden">
            <script>
                var options = {
                    "key": "examplekey",
                    "amount": "{{ Session::get('amount') }}",
                    "currency": "INR",
                    "order_id": "{{ Session::get('order_id') }}",
                    "contact": "{{ Session::get('mobile') }}",
                    "description": "{{ Session::get('name') }}",
                    "image": "https://papayacoders.in/wp-content/uploads/2023/06/papayacoders-logo-e1686920327207.png.webp",
                    "handler": function (response){
                        window.location.href = "http://localhost:8000/index";
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response){
                  
                });
                
                window.onload = function() {
                    rzp1.open();
                }
            </script>
        </form>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
