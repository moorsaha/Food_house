<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order food</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

    <div class="sidebar">
        {{-- logo --}}
        <h1 class="logo">FoodHouse</h1>

        {{-- list of menu --}}
        <div class="sidebar-menu">
            <a href="#"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="#"><ion-icon name="receipt-outline"></ion-icon>Bills</a>
            <a href="#"><ion-icon name="wallet-outline"></ion-icon>Wallet</a>
            <a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a>
            <a href="#"><ion-icon name="chatbubbles-outline"></ion-icon>Contact Us</a>
            <a href="#"><ion-icon name="settings-outline"></ion-icon>Setting</a>

        </div>
        {{-- logout --}}
        {{-- <div class="sidebar-logout">
            <a href="#"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
        </div> --}}
        <div class="sidebar-logout">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"><ion-icon name="log-out-outline"></ion-icon>Logout</button>
          </form>
        </div>

    </div>

{{-- 

    <div class="main-details">
        <h2 class="main-title">Your order</h2>
        <div class="detail-wrapper">
            <div class="detail-card">
                <img class="detail-image" src="{{ asset('images/Beef stake.jpg') }}" alt="">
            </div>
        </div>
    </div>
    
    --}}
    {{-- <div class="main-detail">
        <div class="image-adjust">
            <img src="{{ asset('images/Beef stake.jpg') }}" alt="">
        </div>
    </div> --}}

    <div class="main-body">
        <h2 class="main-title">Your order</h2>
    </div>


</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>