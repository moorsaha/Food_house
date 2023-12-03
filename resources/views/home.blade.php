<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Food House</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
</nav> --}}
 
    {{-- <div class="container">
       <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div> --}}















    
            {{-- starting new code here --}}
        {{-- sidebar --}}
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





      {{-- main --}}
      <div class="main">
        {{-- main navbar --}}
        <div class="main-navbar">
          {{-- menu when appear on mobile version --}}
          <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
          {{-- search bar --}}
          <div class="search">
            <input type="text" placeholder="What you want to eat?">
            <button class="search-btn">Search</button>
          </div>
          {{-- profile icon on leftside of navbar --}}
          <div class="profile">
            <a class="cart" href="#"><ion-icon name="cart-outline"></ion-icon></a>
            <a class="user" href="#"><ion-icon name="person-outline"></ion-icon></a>
          </div>
        </div>
        {{-- main heightlight --}}
        <div class="main-highlight">
          {{-- title section and arrow --}}
          <div class="main-header">
            <h2 class="main-title">Recomendations</h2>
            <div class="main-arrow">
              <ion-icon class="back" name="chevron-back-circle-outline"></ion-icon>
              <ion-icon class="next" name="chevron-forward-circle-outline"></ion-icon>
            </div>
          </div>
          {{-- highlight menu --}}
          <div class="highlight-wrapper">
            <div class="highlight-card">
              <img class="highlight-img" src="{{ asset('images/salad.jpg') }}" alt="no image found">
              <div class="highlight-desc">
                <h4>Fresh Salad</h4>
                <p>$30.23</p>
              </div>
            </div>
            <div class="highlight-card">
              <img class="highlight-img" src="{{ asset('images/coffee.jpg') }}" alt="no image found">
              <div class="highlight-desc">
                <h4>Coffee</h4>
                <p>$10.50</p>
              </div>
            </div>
            <div class="highlight-card">
              <img class="highlight-img" src="{{ asset('images/Beef stake.jpg') }}" alt="no image found">
              <div class="highlight-desc">
                <h4>Beef Steak</h4>
                <p>$150.00</p>
              </div>
            </div>
            <div class="highlight-card">
              <img class="highlight-img" src="{{ asset('images/Burger.jpg') }}" alt="no image found">
              <div class="highlight-desc">
                <h4>Burger</h4>
                <p>$15.60</p>
              </div>
            </div>
          </div>
        </div>
        {{-- main menu/order --}}
        <div class="main-menus">
          {{-- filter section --}}
          <div class="main-filter">
            <div>
              <h2 class="main-title">Menu <br>Category</h2>
              <div class="main-arrow">
                <ion-icon class="back-menus" name="chevron-back-circle-outline"></ion-icon>
                <ion-icon class="next-menus" name="chevron-forward-circle-outline"></ion-icon>
              </div>
            </div>
            <div class="filter-wrapper">
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="restaurant-outline"></ion-icon>
                </div>
                <p>All Menus</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="fast-food-outline"></ion-icon>
                </div>
                <p>Burger</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="pizza-outline"></ion-icon>
                </div>
                <p>Pizza</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="wine-outline"></ion-icon>
                </div>
                <p>Cold drinks</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="ice-cream-outline"></ion-icon>
                </div>
                <p>Ice cream</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="cafe-outline"></ion-icon>
                </div>
                <p>Coffee</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="fish-outline"></ion-icon>
                </div>
                <p>Seafood</p>
              </div>
              <div class="filter-card">
                <div class="filter-icon">
                  <ion-icon name="nutrition-outline"></ion-icon>
                </div>
                <p>Healthy</p>
              </div>
            </div>
          </div>
          <hr class="divider">
          {{-- list of food menus --}}
          <div class="main-details">
            <h2 class="main-title">Choose Order</h2>
            <div class="detail-wrapper">
              <div class="detail-card">
                <img class="detail-img" src="{{ asset('images/Sea food.jpg') }}" alt="no image found">
                <div class="detail-desc">
                  <div class="detail-name">
                    <h4>Shrimp Soup</h4>
                    <p class="detail-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam esse tempora velit officiis.</p>
                    <p class="price">$200.00</p>
                  </div>
                  <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                </div>
              </div>
              <div class="detail-card">
                <img class="detail-img" src="{{ asset('images/pizza1.jpg') }}" alt="no image found">
                <div class="detail-desc">
                  <div class="detail-name">
                    <h4>Pizza</h4>
                    <p class="detail-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa soluta libero suscipit.</p>
                    <p class="price">$12.34</p>
                  </div>
                  <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                </div>
              </div>
              <div class="detail-card">
                <img class="detail-img" src="{{ asset('images/cold drinks.jpg') }}" alt="no image found">
                <div class="detail-desc">
                  <div class="detail-name">
                    <h4>cold drinks</h4>
                    <p class="detail-sub">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat asperiores voluptate voluptas.</p>
                    <p class="price">$9.30</p>
                  </div>
                  <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                </div>
              </div>
              <div class="detail-card">
                <img class="detail-img" src="{{ asset('images/burger1.jpg') }}" alt="no image found">
                <div class="detail-desc">
                  <div class="detail-name">
                    <h4>Burger</h4>
                    <p class="detail-sub">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus vitae deserunt.</p>
                    <p class="price">$5.30</p>
                  </div>
                  <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                </div>
              </div>
              
              <div class="detail-card">
                <img class="detail-img" src="{{ asset('images/coffee1.jpg') }}" alt="no images found">
                <div class="detail-desc">
                  <div class="detail-name">
                    <h4>Hot coffee</h4>
                    <p class="detail-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus maiores obcaecati sunt.</p>
                    <p class="price">$5.00</p>
                  </div>
                  <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                </div>
              </div>
              
              <div class="detail-card">
                <img class="detail-img" src="{{ asset('images/salad.jpg') }}" alt="no images found">
                <div class="detail-desc">
                  <div class="detail-name">
                    <h4>Fresh salad</h4>
                    <p class="detail-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui fuga suscipit quia.</p>
                    <p class="price">$30.23</p>
                  </div>
                  <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>


</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>