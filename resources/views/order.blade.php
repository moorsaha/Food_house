<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/body1.css') }}">
    <!-- adding google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Food Devery Service</title>
</head>
<body>
    <!-- sidebar -->
    <div class="sidebar">
        <!-- logo -->
        <h1 class="logo">FoodHouse</h1>


        <!-- list of menus -->
        <div class="sidebar-menus">
            <a href="#"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="#"><ion-icon name="receipt-outline"></ion-icon>Bills</a>
            <a href="#"><ion-icon name="wallet-outline"></ion-icon>Wallet</a>
            <a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a>
            <a href="#"><ion-icon name="chatbubbles-outline"></ion-icon>Contact Us</a>
            <a href="#"><ion-icon name="settings-outline"></ion-icon>Setting</a>
        </div>
        <!-- logout -->
        <div class="sidebar-logout">
            <a href="#"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
        </div>
    </div>


    <!-- main -->
    <div class="main">
        <!-- main navbar -->
        <div class="main-navbar">
            <!-- menu when appear on mobile version -->
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
            <!-- search bar -->
            <div class="search">
                <input type="text" placeholder="What do you want to eat?">
                <button class="search-btn">Search</button>
            </div>

            <!-- profile icon left side of navbar -->
            <div class="profile">
                <a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>
                <a class="user" href="#"><ion-icon name="person-outline"></ion-icon></a>
            </div>


        </div>
        <!-- main highlight -->
        <div class="main-highlight">
            <!-- title section and arrow -->
            <div class="main-header">
                <h2 class="main-title">Recommendation</h2>
                <div class="main-arrow">
                    <ion-icon class="back" name="chevron-back-circle-outline"></ion-icon>
                    <ion-icon class="next" name="chevron-forward-circle-outline"></ion-icon>
                </div>
            </div>
            <div class="highlight-wrapper">
                <div class="highlight-card">
                    <img class="highlight-img" src="{{ asset('images/Beef stake.jpg') }}" alt="image not found">
                    <div class="highlight-desc">
                        <h4>Beef Stake</h4>
                        <p>$25.20</p>
                    </div>
                </div>
                <div class="highlight-card">
                    <img class="highlight-img" src="{{ asset('images/Burger.jpg') }}" alt="image not found">
                    <div class="highlight-desc">
                        <h4>Burger</h4>
                        <p>$25.20</p>
                    </div>
                </div>
                <div class="highlight-card">
                    <img class="highlight-img" src="{{ asset('images/pizza1.jpg') }}" alt="image not found">
                    <div class="highlight-desc">
                        <h4>Pizza</h4>
                        <p>$25.20</p>
                    </div>
                </div>
                <div class="highlight-card">
                    <img class="highlight-img" src="{{ asset('images/cold drinks.jpg') }}" alt="image not found">
                    <div class="highlight-desc">
                        <h4>Cold</h4>
                        <p>$25.20</p>
                    </div>
                </div>
                <div class="highlight-card">
                    <img class="highlight-img" src="{{ asset('images/salad.jpg') }}" alt="image not found">
                    <div class="highlight-desc">
                        <h4>Salad</h4>
                        <p>$25.20</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menus -->
        <div class="main-menus">
            <!-- filter section -->
            <!-- <div class="main-filter">
                <div>
                    <h2 class="main-title">Menu <br>Catagory</h2>
                    <div class="main-arrow">
                        <ion-icon class="back" name="chevron-back-circle-outline"></ion-icon>
                        <ion-icon class="next" name="chevron-forward-circle-outline"></ion-icon>
                    </div>
                </div>
                <div class="filter-wrapper">
                    <div class="filter-car">
                        <div class="filter-icon">
                            <ion-icon name="restaurant-outline"></ion-icon>
                        </div>
                        <p>All menus</p>
                    </div>
                </div>
            </div> -->
            <!-- list of food -->
            <div class="main-detail">
                <!-- <h2 class="main-title">Your oder</h2> -->
                <div class="detail-wrapper">
                    <div class="detail-card">
                        <img class="detail-img" src="{{ asset('images/burger.jpg') }}">
                        <div class="detail-name">
                            <h4>Burger</h4>
                            <p class="price">$12</p>
                        </div>
                    </div>
                </div>
                <div class="detail-order">
                    <form action="" method="post">
                        <h3>Your order</h3><br>
                    <input class="name" type="text" placeholder="Your Name"><br><br>
                    <input class="address" type="text" placeholder="your Address"><br><br>
                    <input class="order_count" type="number" placeholder="order count"><br><br>
                    <input class="submit" type="submit" value="order">
                    <input class="reset" type="reset" value="Reset">
                    </form>
                </div>
            </div>
        </div>
        
    </div>



</body>
<!-- adding icon libraby -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>