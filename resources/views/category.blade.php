<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/app.css">
    <link rel="stylesheet" href="../../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>products</title>
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
            <img id='header_logo' alt='company logo' src='../../images/logo/logo_plain.png'/>
        </div>
            
        <div id='head_wrapper_right'>
            <a onclick='switchTheme()' class="btn2 btn-animation-four" id='themeSwitchButton' data-sm-link-text="Lightmode" target="_blank"><span>Mode</span></a>
            <a>cart (0)</a>
            <a>account</a>
        </div>
    </div>


    {{$category[0]->id}}, {{$category[0]->name}}
    <br>
    <!-- {{$products[0]->id}}, {{$products[0]->name}} -->
    <br>
    
    <!-- @foreach ($products as $product)
        {{$product}}<br><br>
    @endforeach -->

    <div id='products_wrapper'>
        <? foreach($products as $product){ ?>
            <a href='{{Route("product.one", ["id" => $product->id])}}'><div id='product_{{$product->name}}' class='products_product_wrapper'>
                <h1>{{$product->name}}</h1>
                <p id='p{{$product->id}}'>{{$product->description}}</p>
            </div></a>
        <? } ?>
    </div>




    <? include '../resources/views/include/general/footer.php'; ?>
    <script src='../../resources/js/ThemeSwitch.js'></script>
    <script>
        var parent = document.getElementById("products_wrapper");
        var length = parent.getElementsByClassName("products_product_wrapper").length;
        for(i=0; i<length; i++){
            var str = document.getElementsByClassName('products_product_wrapper')[i].id;
            var res = str.replace('product_', '');
            res = res.replace('\'', '');
            res = res.replace(' ', '');
            res = res.replace(' ', '');
            res = res.replace('(m)', 'm');
            document.getElementById(str).style.backgroundImage = 'url(../../images/products/'+ res +'/'+ res +'_1.jpg)';
        }
    </script>

</body>
</html>