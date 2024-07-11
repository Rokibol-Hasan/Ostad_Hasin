<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <menu> 
        <li><a href="/">Home</a></li>
        <li><a href="/loginform">Login Form</a></li>
        <li><a href="/form">Normal Form</a></li>
        <li><a href="/contact">Contact Form</a></li>
    </menu>

    {{ $slot }}

</body>
</html>