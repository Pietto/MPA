<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <div id='cart_main_wrapper'>
        @if($products != NULL)
            @foreach($products as $product)
                <? $productName = str_replace(' ', '', $product['item']['name']);
                $productName = str_replace('\'', '', $productName);?>
                
                <div class='cart_item'>
                    <img alt="{{$product['item']['name']}}_image" src="../images/products/<?=$productName?>/<?=$productName?>_1.jpg"\>
                    <h1>{{$product['item']['name']}}</h1>
                    <h2>{{$product['item']['price']}}</h2>
                    <input type='number' id='<?= $productName ?>_quantity_input' name='<?= $productName ?>_quantity' min='0' max='50' value="{{$product['quantity']}}">
                    <h3>{{$totalPrice}}</h3>
                    <i class="fas fa-trash"></i>


                </div>
                <!-- <p>{{$product['item']['name']}}</p>
                <p>{{$product['quantity']}}</p>
                <p>{{$totalPrice}}</p> -->
            @endforeach
            <i class="fas fa-dumpster"></i>
        @endif
    </div>



    NO ITEMS BITCH (r17)
</body>
</html>