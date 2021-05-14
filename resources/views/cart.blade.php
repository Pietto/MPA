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
    <title>traincart</title>
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
                                <a href="{{ route('user.orders') }}" class="dropdown-item w3-bar-item">{{Auth::user()->name}}</a>
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
    
    <i class="fas fa-arrow-circle-left" id='back_to_products_button' onclick='window.history.back();'></i>
    @if($products != NULL)
    
        <div class='cart_main_wrapper'>
            @foreach($products as $product)
                <? $productName = str_replace(' ', '', $product['item']['name']);
                $productName = str_replace('\'', '', $productName);?>
                
                <div class='cart_item'>
                    <a href='{{Route("product.one", ["id" => $product["item"]["id"]])}}'><img alt="{{$product['item']['name']}}_image" src="../images/products/<?=$productName?>/<?=$productName?>_1.jpg"\></a>
                    <div>
                        <h1>{{$product['item']['name']}}:</h1>
                        <h2> €{{$product['item']['price']}}</h2>
                    </div>
                    <div id='product_quantity_wrapper'>
                        <input disabled type='number' id='<?= $productName ?>_quantity_input' name='<?= $productName ?>_quantity' min='0' max='50' value="{{$product['quantity']}}">
                        <div>
                            <a href='{{Route("product.addToCart", ["id" => $product["item"]["id"]])}}'><i id='cart_quantity_arrow_up' class="cart_quantity_arrows fas fa-arrow-up"></i></a>
                            @if($product['quantity'] == 1)
                            <a href='{{Route("product.delete", ["id" => $product["item"]["id"]])}}'><i id='cart_quantity_arrow_down' class="cart_quantity_arrows fas fa-arrow-down"></i></a>
                            @else
                            <a href='{{Route("product.subtractFromCart", ["id" => $product["item"]["id"]])}}'><i id='cart_quantity_arrow_down' class="cart_quantity_arrows fas fa-arrow-down"></i></a>
                            @endif
                        </div>
                    </div>
                    <div id='cart_trash_price_wrapper'>
                        <h3>€ <?= $product['quantity']*$product['item']['price'] ?></h3>
                        <a href='{{Route("product.delete", ["id" => $product["item"]["id"]])}}'><i class="fas fa-trash"></i></a>
                    </div>
                </div>
                <!-- <p>{{$product['item']['name']}}</p>
                <p>{{$product['quantity']}}</p>
                <p>{{$totalPrice}}</p> -->
            @endforeach
        </div>
        <div class='cart_main_wrapper' id='noBackgroundImage'>

            <a onclick="return confirm('Weet u zeker dat u alle items wilt verwijderen uit uw winkelmandje?')" href='{{Route("product.deleteAll")}}'><i class="fas fa-dumpster"></i></a>

                @if(Auth::check())
                    <a id='cart_checkout_span' href="http://localhost/jaar%202/Laravel/project_A/MPA/public/orderItems">
                @else()
                    <a id='cart_checkout_span' onclick='alert("U moet eerst inloggen!")'>
                @endif
                <p>Bestelling afronden: € <?= $totalPrice ?>.</p>
                <i class="fas fa-credit-card"></i>
            </a>



        </div>
        @else
            <div class='cart_main_wrapper' id='noBackgroundImage'>
                <p id='cart_no_items'>u heeft geen items in uw karretje <a style='color: blue; text-decoration: underline;' href='{{Route("product.all")}}'>klik hier voor meer treinen</a>, tjoek tjoek!!</p>
            @if(Auth::check())

            @else
                <p>Psst! Vergeet ook niet in te loggen</p>
            @endif
            </div>
        @endif
    <? include '../resources/views/include/general/footer.php'; ?>
    <script src='../resources/js/DropDownLogic.js'></script>
</body>
</html>