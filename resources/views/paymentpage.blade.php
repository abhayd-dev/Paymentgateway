m<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment Link</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var options = {
                "key": "examplekey", 
                "amount": "1000", 
                "currency": "INR",
                "name": "Papaya Coders",
                "description": "Test Transaction",
                "image": "https://papayacoders.in/wp-content/uploads/2023/06/papayacoders-logo-e1686920327207.png.webp", 
                "handler": function (response) {
                    alert("Payment successful. Payment ID: " + response.razorpay_payment_id);
                    window.location.href = 'http://127.0.0.1:8000/';
                },
                "prefill": {
                    "name": "Abhay Dwivedi",
                    "email": "abhay@example.com",
                    "contact": "9087654321"
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>
</body>
</html>
