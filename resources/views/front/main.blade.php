<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>@yield('title')</title>

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon/rs.png') }}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/rs.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/rs.png') }}" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ecicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/countdownTimer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo11.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('assets/css/backgrounds/bg-4.css') }}" />

    <!-- PhonePe Checkout Script -->
    <script src="https://mercury.phonepe.com/web/bundle/checkout.js"></script>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <style>
      #modalProductPrice {
        font-weight: bold;
        font-size: 1.25rem;
        color: #28a745;
    }

    #modalProductDescription {
        font-size: 1rem;
        color: #6c757d;
    }

    #modalProductName {
        font-size: 1.5rem;
        color: #343a40;
    }

    .modal-body {
        padding: 2rem;
    }

     .img-fluid {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    /* Image size control */
    #modalProductImage {
        max-width: 100%; /* Ensure it doesn't overflow */
        max-height: 250px; /* Limiting height */
        object-fit: contain; /* Preserve aspect ratio */
    }

    @media (max-width: 576px) {
        .modal-dialog {
            max-width: 90%;
        }

        .modal-content {
            padding: 15px;
        }

        .btn-primary {
            font-size: 1.1rem;
        }
    }


    /* modal */
       /* Center modal vertically and horizontally */
       .modal-dialog-centered {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100%;
    }

    .custom-modal-content {
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #f8f9fa;
        padding: 20px;
    }

    /* Modal body styling */
    .modal-body {
        font-family: Arial, sans-serif;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 10px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Error message styling */
    .text-danger {
        font-size: 0.875rem;
        margin-top: 5px;
    }


</style>

</head>


<body>



@include('front.includes.header')


@yield('content')

<!-- Login Modal -->
<!-- Modal HTML -->
<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header p-3 border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="fw-bold text-center mb-4">Login To Access More Features</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                </form>
                <p class="text-muted text-center mt-3">Don't have an account? <a href="{{url('register')}}" class="fw-semibold text-primary text-decoration-underline">Signup</a></p>
            </div>
        </div>
    </div>
</div>




@include('front.includes.footer')












<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/countdownTimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nouislider.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/infiniteslidev2.js') }}"></script>
<script src="{{ asset('assets/js/plugins/click-to-call.js') }}"></script>
<script src="{{ asset('assets/js/demo-11.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>

<!-- Main Js -->
<script src="{{ asset('assets/js/vendor/index.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>



    <!-- <script>
      $(document).ready(function() {
        $('[data-bs-toggle="modal"]').on('click', function() {
          var price = $(this).data('price');
          $('#productPriceInput').val(price);
        });
      });

        $("#phonepeButton").click(function (e) {
            e.preventDefault();
        
            var phone = $("#phonenumber").val();
            var price = $("#productPriceInput").val();
        
            if (phone === "" || price === "") {
                alert("Phone number and price are required.");
                return;
            }
        
            $.ajax({
                url: '/phonepe_api/phonepe_token.php',
                method: 'POST',
                data: {
                    phonenumber: phone,
                    productPrice: price
                },
                success: function (response) {
                    var responseData = JSON.parse(response);
                    var tokenUrl = responseData.data.instrumentResponse.redirectInfo.url;
        
                    window.PhonePeCheckout.transact({
                        tokenUrl: tokenUrl,
                        callback: function (response) {
                            console.log(response);
                            if (response === 'USER_CANCEL') {
                                alert('Payment cancelled by user.');
                            } else if (response === 'CONCLUDED') {
                                alert('Payment completed successfully.');
                            } else {
                                alert('Payment status: ' + response);
                            }
                        }
                    });
                },
                error: function (xhr, status, error) {
                    alert('Error initiating payment: ' + error);
                }
            });
        });

    </script> -->



<!-- JavaScript for Razorpay -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('staticBackdrop');
    var userDetailsForm = document.getElementById('userDetailsForm');
    var paymentForm = document.getElementById('paymentForm');

    // Modal show event
    modal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        document.getElementById('modalProductName').textContent = button.getAttribute('data-name');
        document.getElementById('modalProductDescription').textContent = button.getAttribute('data-description');
        document.getElementById('modalProductPrice').textContent = 'Rs.' + button.getAttribute('data-price');
        document.getElementById('modalProductImage').src = button.getAttribute('data-image');
        document.getElementById('productId').value = button.getAttribute('data-id');
        document.getElementById('productName').value = button.getAttribute('data-name');
        document.getElementById('productPrice').value = button.getAttribute('data-price');
        document.getElementById('productImage').value = button.getAttribute('data-image');
        
        // Reset forms
        userDetailsForm.style.display = 'block';
        paymentForm.style.display = 'none';
        userDetailsForm.reset();
    });

    // Handle user details form submission
    userDetailsForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Store user details in hidden fields
        document.getElementById('userName').value = document.getElementById('name').value;
        document.getElementById('userEmail').value = document.getElementById('email').value;
        document.getElementById('userPhone').value = document.getElementById('phone').value;
        document.getElementById('userAddress').value = document.getElementById('address').value;

        // Hide user details form and show payment button
        userDetailsForm.style.display = 'none';
        paymentForm.style.display = 'block';
    });
});

    function initiateRazorpay() {
        console.log("Initiating Razorpay...");

        // Use correct URL with Laravel route helper
        fetch("{{ url('create-razorpay-order') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({amount: document.getElementById('productPrice').value * 100}) // Convert to paisa
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Debug to see response from server
            
            if (data.order_id) {
                var options = {
                    "key": "{{ env('RAZORPAY_API_KEY') }}", // Razorpay API Key
                    "amount": data.amount,
                    "currency": "INR",
                    "order_id": data.order_id,
                    "handler": function (response) {
                        // Send payment details to backend for storing
                        storePaymentDetails(response);
                    }
                };
                var rzp = new Razorpay(options);
                rzp.open();
            } else {
                console.error("Failed to create Razorpay order");
            }
        })
        .catch(error => console.error("Error in Razorpay setup:", error));
    }

    // Update your storePaymentDetails function to include user details
function storePaymentDetails(response) {
    const paymentData = {
        payment_id: response.razorpay_payment_id,
        order_id: response.razorpay_order_id,
        signature: response.razorpay_signature,
        product_name: document.getElementById('productName').value,
        product_price: document.getElementById('productPrice').value,
        image: document.getElementById('productImage').value,
        user_name: document.getElementById('userName').value,
        user_email: document.getElementById('userEmail').value,
        user_phone: document.getElementById('userPhone').value,
        user_address: document.getElementById('userAddress').value
    };

    // Send payment details to the backend
    fetch("{{ url('store-payment-details') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(paymentData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Payment successful! Payment recorded.');
        } else {
            alert('Error recording payment.');
        }
    })
    .catch(error => console.error("Error storing payment details:", error));
}
</script>

 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if user is logged in
        @guest
            setTimeout(function() {
                $('#loginModal').modal('show');
            }, 10000); // Show modal after 10 seconds (10000 milliseconds)
        @endguest
    });
</script>




    
</body>
</html>