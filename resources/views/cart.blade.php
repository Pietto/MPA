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
            <a>account</a>
        </div>
    </div>
    
    <i class="fas fa-arrow-circle-left" id='back_to_products_button' onclick='window.history.back();'></i>
    
    <div id='cart_main_wrapper'>
        @if($products != NULL)
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
                            <a href='{{Route("product.subtractFromCart", ["id" => $product["item"]["id"]])}}'><i id='cart_quantity_arrow_down' class="cart_quantity_arrows fas fa-arrow-down"></i></a>
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
            <h4>€ <?= $totalPrice ?></h4>
            <i onclick='confirm("Weet u zeker dat u uw hele winkelmandje wilt legen?")' class="fas fa-dumpster"></i>
            @else
                <p id='cart_no_items'>there are no items to be displayed... <a style='color: blue; text-decoration: underline;' href='{{Route("product.all")}}'>click here to get some!</a> choo choo!!</p>
        @endif
    </div>

    <? include '../resources/views/include/general/footer.php'; ?>

</body>
</html>