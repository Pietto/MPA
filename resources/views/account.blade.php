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

        <div id='account_orders_wrapper'>
            <div id='orders_wrapper'>
                <h1>Bestellingen:</h1>
                @foreach($orders as $order)
                    <? $totalPrice = 0; ?>
                    <p>bestellings id: <?= rand(1000, 10000) ?>TRN{{$order->id}}, <br> besteld op: {{$order->created_at}}.</p>
                    <div class='order' id='order_{{$order->id}}'>
                        @foreach($order->order as $item)

                            <?
                                $productName = str_replace(' ', '', $item->product['name']);
                                $productName = str_replace('\'', '', $productName);
                            ?>

                            <? $totalPrice = $item['product_quantity'] * $item->product['price'] ?>

                            <a href='{{Route("product.one", ["id" => $item->product["id"]])}}'><h2>{{$item->product['name']}} ({{$item->product['fullname']}})</h2></a>
                            <br>
                            <a href='{{Route("product.one", ["id" => $item->product["id"]])}}'><img alt="{{$item->product['name']}}_product_image" src="../images/products/<?= $productName ?>/<?= $productName ?>_1.jpg"></a>
                            <div class='product_details'>
                                <p>{{$item['product_quantity']}}x €{{$item->product['price']}}: €<?= $totalPrice ?></p>
                            </div>
                            <?php 
                                $totalPrice = $totalPrice + $item->product['price'] * $item['product_quantity'];
                            ?>
                        @endforeach
                    <h3>Bestelling totaalprijs: €{{$totalPrice}}</h3>
                    </div>
                @endforeach
            </div>
        </div>

    <br><br><br><br><br>
    <? include '../resources/views/include/general/footer.php'; ?>
    <script src='../resources/js/DropDownLogic.js'></script>
</body>
</html>