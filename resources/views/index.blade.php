<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Train Shop</title>
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
            <a>cart (0)</a>
            <a>account</a>
        </div>
    </div>

    <a href='{{Route("product.one", ["id" => 4])}}' class='black'>
        <div id='featured_offer_parent'>
            <div id='featured_offer_bottom'>
                <h1>Featured offer: ICM(m)</h1>
            </div>
        </div>
    </a>
    
    <div id='most_popular_showcase_wrapper'>
        <h1>FEATURING</h1>
        <h2>Most popular items:</h2>
            <div id='most_popular_item_1' class='most_popular_items'>
                <a href='{{Route("product.one", ["id" => 2])}}' class='black'>
                    <div class='most_popular_items_cover'>
                        <h3>ns V-IRM(m)</h3>
                        <p>'snel en efficiënt'</p>
                    </div>
                </a>
            </div>
        <div id='most_popular_item_2' class='most_popular_items'>
            <a href='{{Route("product.one", ["id" => 10])}}' class='black'>
                <div class='most_popular_items_cover'>
                    <h3>ns Mat '64</h3>
                    <p>'oude klassieker'</p>
                </div>
            </a>
        </div>
        <div id='most_popular_item_3' class='most_popular_items'>
            <a href='{{Route("product.one", ["id" => 14])}}' class='black'>
                <div class='most_popular_items_cover'>
                    <h3>mat '54')</h3>
                    <p>'oud maar goud'</p>
                </div>
            </a>
        </div>
        <div id='most_popular_item_4' class='most_popular_items'>
            <a href='{{Route("product.one", ["id" => 3])}}' class='black'>
                <div class='most_popular_items_cover'>
                    <h3>ns e-loc 1700</h3>
                    <p>'sterke loc voor allerlei doeleinden'</p>
                </div>
            </a>
        </div>
    </div>

    <a href='{{Route("product.all")}}' class='black'>
        <div class='btn btn-animation-one animated_buttons' id='view_all_products_button' >
            <span>BEKIJK ALLE PRODUCTEN</span>
        </div>
    </a>

    <div id='popular_categories_wrapper'>
        <div class='popular_categories' id='popular_category_1'>
        <a href='{{Route("category.one", ["id" => 4])}}'>
            <div class='btn btn-animation-three animated_buttons' id='view_all_emus_button'>
                <span>bekijk emu's</span>
            </div>
        </a>
            <div class='popular_items_cover'>
                <h1>Electric Multiple Units</h1>
                <p>Efficiënt en gemakkelijk in gebruik, dit type trein is zeer populair, en met goede rede.</p>
            </div>
        </div>

        <div class='popular_categories' id='popular_category_2'>
        <a href='{{Route("category.one", ["id" => 11])}}'>
            <div class='btn btn-animation-three animated_buttons' id='view_all_classics_button'>
                <span>bekijk de klassiekers!</span>
            </div>
        </a>
            <div class='popular_items_cover'>
                <h1>Klassiekers</h1>
                <p>Dit zijn de klassiekers van het Nederlandse spoor! ze hebben hun dienstjaren erop zitten, maar ze hebben hun betrouwbaarheid bewezen in hun dienstjaren.</p>
            </div>
        </div>

        <div class='popular_categories' id='popular_category_3'>
        <a href='{{Route("category.one", ["id" => 9])}}'>
            <div class='btn btn-animation-three animated_buttons' id='view_all_internationals_button'>
                <span>bekijk de internationals!</span>
            </div>
        </a>
            <div class='popular_items_cover'>
                <h1>Internationaal</h1>
                <p>Dit zijn de treinen die ook over de grens kunnen rijden, zonder functionaliteit of betrouwbaarheid op te hoeven offeren.</p>
            </div>
        </div>
    </div>

    <? include '../resources/views/include/index/about_us.php'; ?>
    <? include '../resources/views/include/index/staff_members.php'; ?>
    <? include '../resources/views/include/general/footer.php'; ?>
    <script src='../resources/js/ThemeSwitch.js'></script>
</body>
</html>