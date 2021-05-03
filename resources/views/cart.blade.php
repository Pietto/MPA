<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/app.css">
    <link rel="stylesheet" href="../../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>JE MOEDER KOPEN</title>
</head>
<body>
    bliep bloep sex op de stoep<br>
    krik krak neuken op een tak<br>

    @if($products != NULL)
        @foreach($products as $product)
            <p>{{$product['item']['name']}}</p>
            <p>{{$product['quantity']}}</p>
            <p>{{$totalPrice}}</p>
        @endforeach
    @endif


    NO ITEMS BITCH (r17)
</body>
</html>