<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/app.css">
    <link rel="stylesheet" href="../../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>categories</title>
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
<<<<<<< HEAD
            <a href='{{Route("product.shoppingCart")}}'>cart (0)</a>
=======
            <a>cart (0)</a>
>>>>>>> main
            <a>account</a>
        </div>
    </div>

    <div id='products_categories_showcase'>
        <div id='products_categories_wrapper'>
            <!-- <div id='products_cat_1' class='products_categories_category'>
                <h1>Intercity</h1>
                <p>bliep bloep deze zijn snel lol</h1>
            </div> -->
            <!-- <script>
                var category_names = ['locomotief', 'Multiple_Unit', 'sprinter', 'intercity', 'internationaal', 'rijtuigen', 'multysysteem', 'klassiekers'];
                var category_desc = ['Losse locomotieven', 'Reizigerstreinen met cabine\'s aan voor- en achterkant', 'Sprintertreinen. Licht, snel en gemakelijke in/uit stap', 'Snelle treinen met hoge capaciteit', 'Deze werkpaarden kunnen ook over de grens toeteren', 'Losse rijtuigen voor een variabele opbouw, zonder comfort op te offeren', 'Deze treinen hebben meerdere beveiligingssystemen, ideaal voor over de grens', 'Deze klassiekers hebben hun betrouwbaarheid al bewezen. Nu op naar hun volgende eigenaar'];
                const categories_amount = 8;
                for(i=0; i<categories_amount; i++){
                    document.write(
                    "<div id='products_cat_" + [i+1] + "' class='products_categories_category' style='background-image= url(`" + '/MPA/images/categories/Multiple_Unit_1.jpg' + "`)'>" +
                        "<h1>" + category_names[i] + "</h1>" +
                        "<p>" + category_desc[i] + "</h1>" +
                    "</div>"
                    );
                }
                // products_cat_1.style.color = 'blue';
                // console.log([products_cat_1]);
            </script> -->
            <? foreach($categories as $category){ ?>
                <a href='{{Route("category.one", ["id" => $category->id])}}'>
                    <div id='category_div_{{$category->id}}' class='products_categories_category' style="background-image: url('../../images/categories/{{$category->name}}_1.jpg');">
                        <h1>{{$category->name}}</h1>
                        <p>{{$category->description}}</p>
                    </div>
                </a>
            <? } ?>
        </div>
    </div>

    <div id='footer'>
        <div id='footer_wrapper_1'>
            <h1>Contact:</h1>
            <p id='contact_1'>0123456789</p>
            <p id='contact_2'>Domain@domain.com</p>
            <p id='contact_3'>Spoorstraat 186, Watergraafsmeer</p>
            <p id='contact_4'>1744 ns</p>

            <p id='contact_5'>Wil jij ook de hele dag met treinen werken? check onze vacature’s! <a href='https://www.youtube.com/'><span>IkWilWerkenBij@domain.com</span></a><p>

            <h2>Volg ons ook op social media:</h3>
        </div>
        <div id='footer_wrapper_2'>
            <div class="hexagon-wrapper">
                <div class="hexagon">
                    <i onclick='window.open("https://www.facebook.com/")' class="fab fa-facebook"></i>
                </div>
                </div>
                <div class="hexagon-wrapper">
                <div class="hexagon">
                    <i onclick='window.open("https://twitter.com/?lang=nl")'class="fab fa-twitter"></i>
                </div>
                </div>
                <div class="hexagon-wrapper">
                <div class="hexagon">
                    <i onclick='window.open("https://www.instagram.com/")'class="fab fa-instagram"></i>
                </div>
            </div>
        </div>

    </div>

    <script src='../../resources/js/ThemeSwitch.js'></script>
</body>
</html>