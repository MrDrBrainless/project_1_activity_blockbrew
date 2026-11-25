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
      <a href="{{ route('products') }}">Products</a>
      <a href="{{ route('contact') }}" style="color: green">Contact</a>
      <a href="{{ route('about') }}">About</a>

    <h1>CONTACT US</h1>
    <h2>📍 Contact Information</h2>
    <ul>
        <li>Business Name: Block Brew Café</li>
        <li>Address: Minecraft Overworld, Block Street 123</li>
        <li>Phone Number: 123-456-7890</li>
        <li>Email: info@blockbrewcafe.com</li>
        <li>Facebook: Block Brew Café</li>
        <li>Instagram: @blockbrewcafe</li>
    </ul>

    
</body>
</html>