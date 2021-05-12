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
    <title>{{$product[0]->name}} kopen</title>
</head>
<body>
    <?
        $productName = str_replace(' ', '', $product[0]->name);
        $productName = str_replace('\'', '', $productName);

        $traction = '';
        if($product[0]->traction == 'electric'){
            $traction = 'elektrisch';
        }else if($product[0]->traction == 'diesel-electric'){
            $traction = 'diesel-elektrisch';
        }else if($product[0]->traction == 'diesel'){
            $traction = 'diesel';
        }else if($product[0]->traction == null){
            $traction = 'n.v.t.';
        }

        $seats = '';
        if($product[0]->seats == null){
            $seats = 'n.v.t.';
        }else{
            $seats = $product[0]->seats;
        }

        $voltage = '';
        if($product[0]->voltage == null){
            $voltage = 'n.v.t.';
        }else{
            $voltage = $product[0]->voltage;
        }
    ?>
    <div id='header_wrapper'>
        <div id='head_wrapper_left'>
            <a href='/jaar%202/Laravel/project_A/MPA/public/'>home</a>
            <a>about</a>
            <a href='{{Route("product.all")}}'>products</a>
            <a href='{{Route("category.all")}}'>categories</a>
        </div>
        <div id='head_wrapper_center'>
            <img id='header_logo' alt='company logo' src='../../images/logo/logo_plain.png'/>
        </div>
        <div id='head_wrapper_right'>
            <a onclick='switchTheme()' class="btn2 btn-animation-four" id='themeSwitchButton' data-sm-link-text="Lightmode" target="_blank"><span>Mode</span></a>
            <a href='{{Route("product.shoppingCart")}}'>cart</a>
            <a>account</a>
        </div>
    </div>
    
    <i class="fas fa-arrow-circle-left" id='back_to_products_button' onclick='window.history.back();'></i>

    <div class="w3-content w3-display-container" style="max-width:70vw">
        <h1 id='product_name'>{{$product[0]->name}} ({{$product[0]->fullname}})</h1>
        <img class="mySlides" src="../../images/products/<?= $productName?>/<?= $productName?>_1.jpg">
        <img class="mySlides" src="../../images/products/<?= $productName?>/<?= $productName?>_2.jpg">
        <img class="mySlides" src="../../images/products/<?= $productName?>/<?= $productName?>_3.jpg">
        <img class="mySlides" src="../../images/products/<?= $productName?>/<?= $productName?>_4.jpg">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
        </div>
    </div>
    <div id='product_price_wrapper'>
        <a href='{{Route("product.addToCart", ["id" => $product[0]->id])}}'><h1>{{$product[0]->name}}: €{{$product[0]->price}}</h1></a>
    </div>

    <div id='product_info_wrapper'>
        <p>{{$product[0]->description}}</p>
        <div class='product_info_subwrapper' id='product_info_subwrapper_1'>
            <p><b>volledige naam:</b> {{$product[0]->variant}}</p>
            <p><b>afkorting:</b> {{$product[0]->name}}</p>
            <p><b>topsnelheid:</b> {{$product[0]->topspeed}} kmp/h</p>
            <p><b>lengte:</b> {{$product[0]->length}} meter</p>
            <p><b>bakken:</b> {{$product[0]->coaches}} <? if($product[0]->coaches == 1){echo 'bak';}else if($product[0]->coaches == 0){echo 'n.v.t.';}else{echo 'bakken';} ?></p>
            <p><b>zitplaatsen:</b> <?= $seats ?></p>
        </div>
        <div class='product_info_subwrapper' id='product_info_subwrapper_2'>
            <p><b>naam+afkorting:</b> {{$product[0]->fullname}} ({{$product[0]->name}})</p>
            <p><b>tractie:</b> <?= $traction ?></p>
            <p><b>tractievoltage:</b> <?= $voltage ?></p>
            <p><b>beveiligingssysteem:</b> {{$product[0]->system}}</p>
            <p><b>fabrikant:</b> {{$product[0]->manufacturer}}</p>
            <p><b>gewicht:</b> {{$product[0]->weight}} ton</p>
            <p><b>koppeling:</b> {{$product[0]->coupling}} </p>
        </div>
    </div>

    <? include '../resources/views/include/general/footer.php'; ?>
    <script src='../../resources/js/ThemeSwitch.js'></script>
    <script src='../../resources/js/SlideLogic.js'></script>
</html>