<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <footer>
        <div class="row">
          <div class="col">
            <img src="{{ asset('images/food.jpg') }}" alt="" class="logo">
            <p>welcome to our site</p>
          </div>
          <div class="col">
            <h3>office info</h3>
            <p>Mirpur 10</p>
            <p>Dhaka, Bangladesh, 1205</p>
            <p class="email-address">food_house@gmail.com</p>
            <p>Phone: 92242345</p>
          </div>
          <div class="col">
            <h3>Links</h3>
            <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Contracts</a></li>
            </ul>
          </div>
          <div class="col">
            <h3>FeedBack</h3>
            <form>
              <input type="text" placeholder="Enter your feeling">
              <input type="submit" value="submit" class="submit">
            </form>
          </div>
        </div>
    </footer> 
</body>
</html>