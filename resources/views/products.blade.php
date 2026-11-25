<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Block Brew Café!</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    
</head>
<body>
    <img src="{{ asset('img/logo.png') }}" width="120" alt="Block Brew Café Logo">
      <a href="{{ route('index') }}">Home</a>
      <a href="{{ route('products') }}" style="color: green">Products</a>
      <a href="{{ route('contact') }}">Contact</a>
      <a href="{{ route('about') }}">About</a>

    <h1 class="minecraft-font">☕ Our Featured Products!</h1>

    <img src="{{ asset('img/pro1.png') }}" width="300" alt="Creeper Mocha">
    <h4>1. Creeper Mocha ₱149.00</h4>
    <p>A rich and creamy chocolate coffee topped with whipped cream and chocolate drizzle. Perfect for chocolate and coffee lovers!</p>

    <img src="{{ asset('img/pro2.png') }}" width="300" alt="Diamond Americano">
    <h4>2. Diamond Americano ₱119.00</h4>
    <p>A smooth and refreshing iced espresso mixed with water and ice. A perfect energy boost for your next adventure!</p>
    
    <img src="{{ asset('img/pro3.png') }}" width="300" alt="Ender Pearl Latte">
    <h4>3. Slime Matcha ₱139.00</h4>
    <p>A refreshing and creamy matcha drink with a delicious earthy flavor and a smooth, sweet finish.</p> 

</body>
</html>