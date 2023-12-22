<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/body1.css') }}">
   
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Food Devery Service</title>
</head>
<body>
   
    <div class="sidebar">
        
        <h1 class="logo">FoodHouse</h1>


       
        <div class="sidebar-menus">
            <a href="{{ url('/home') }}"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="#"><ion-icon name="receipt-outline"></ion-icon>Bills</a>
            <a href="#"><ion-icon name="wallet-outline"></ion-icon>Wallet</a>
            <a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a>
            <a href="#"><ion-icon name="chatbubbles-outline"></ion-icon>Contact Us</a>
            <a href="#"><ion-icon name="settings-outline"></ion-icon>Setting</a>
        </div>
        
        <div class="sidebar-logout">
            <a href="#"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
        </div>
    </div>


   
    <div class="main">
        
        <div class="main-navbar">
            
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
            
            <div class="search">
                <input type="text" placeholder="What do you want to eat?">
                <button class="search-btn">Search</button>
            </div>

            
            <div class="profile">
                <a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>
                <a class="user" href="#"><ion-icon name="person-outline"></ion-icon></a>
            </div>


        </div>
        
        <div class="main-highlight">
           
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
        
        <div class="main-menus">
            
            <div class="main-detail">
                
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

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>