<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <title>orders</title>
</head>
<body>
    <div id='header_wrapper'>
        <div id='head_wrapper_left'>
            <a href='/jaar%202/Laravel/project_A/MPA/public/'>home</a>
            <a>about</a>
            <a href='{{Route("product.all")}}'>products</a>
            <a href='{{Route("category.all")}}'>categories</a>
        </div>
        <div id='head_wrapper_center'>
            <img id='header_logo' alt='company logo' src='../images/logo/logo_plain.png'/>
        </div>
        <div id='head_wrapper_right'>
            <a onclick='switchTheme()' class="btn2 btn-animation-four" id='themeSwitchButton' data-sm-link-text="Lightmode" target="_blank"><span>Mode</span></a>
            <a href='{{Route("product.shoppingCart")}}'>cart</a>
            <div class="w3-dropdown-click">
                <a onclick="dropDown()" class="dropdownButton">account</a>
                <div id="Demo" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-opacity">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href='' class="dropdown-item w3-bar-item">{{Auth::user()->name}}</a>
                                <a href="{{ route('user.kill') }}" class="dropdown-item w3-bar-item">Uitloggen</a>
                                <form id="logout-form" action="http://localhost/jaar%202/Laravel/project_A/MPA/public/logout" method="POST" class="d-none"><input type="hidden" name="_token" value="sfhh5t43nRlFlqm3umHXxPeF1rQRzScFEwjJ6fE1"></form>
                            @else
                                <a href="{{ route('login') }}" class="dropdown-item w3-bar-item w3-button">Inloggen</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="dropdown-item w3-bar-item w3-button">Registreren</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @foreach($orders as $order)
        @foreach($order->order as $item)
        
        {{$item->product['name']}}

        @endforeach
    @endforeach



    <? include '../resources/views/include/general/footer.php'; ?>
</body>
</html>