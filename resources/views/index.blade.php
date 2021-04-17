<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>index</title>
</head>
<body>
    <div id='header_wrapper'>
        <div id='head_wrapper_left'>
            <a>home</a>
            <a>about</a>
            <a>bundles</a>
            <a href='{{Route("product.all")}}'>categories</a>
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

    <div id='featured_offer_parent'>
        <div id='featured_offer_bottom'>
            <h1>Featured offer: ICM(m)</h1>
        </div>
    </div>
    <div id='most_popular_showcase_wrapper'>
        <h1>FEATURING</h1>
        <h2>Most popular items:</h2>
        <div id='most_popular_item_1' class='most_popular_items'><div class='most_popular_items_cover'>
            <h3>ns V-IRM(m)</h3>
            <p>'snel en efficiënt'</p>
        </div></div>
        <div id='most_popular_item_2' class='most_popular_items'><div class='most_popular_items_cover'>
            <h3>ns Mat '64</h3>
            <p>'oude klassieker'</p>
        </div></div>
        <div id='most_popular_item_3' class='most_popular_items'><div class='most_popular_items_cover'>
            <h3>ns ICM(m)</h3>
            <p>'snel en comfortabel'</p>
        </div></div>
        <div id='most_popular_item_4' class='most_popular_items'><div class='most_popular_items_cover'>
            <h3>ns e-loc 1700</h3>
            <p>'sterke loc voor allerlei doeleinden'</p>
        </div></div>
    </div>

    <div class='btn btn-animation-one animated_buttons' id='view_all_products_button' onclick="alert('This part hasn\'t been coded in yet')">
        <span>BEKIJK ALLE PRODUCTEN</span>
    </div>

    <div id='popular_categories_wrapper'>
        <div class='popular_categories' id='popular_category_1'>
            <div class='btn btn-animation-three animated_buttons' id='view_all_emus_button' onclick="alert('This part hasn\'t been coded in yet')">
                <span>bekijk emu's</span>
            </div>

            <div class='popular_items_cover'>
                <h1>Electric Multiple Units</h1>
                <p>Efficiënt en gemakkelijk in gebruik, dit type trein is zeer populair, en met goede rede.</p>
            </div>
        </div>

        <div class='popular_categories' id='popular_category_2'>
            <div class='btn btn-animation-three animated_buttons' id='view_all_classics_button' onclick="alert('This part hasn\'t been coded in yet')">
                <span>bekijk de klassiekers!</span>
            </div>

            <div class='popular_items_cover'>
                <h1>Klassiekers</h1>
                <p>Dit zijn de klassiekers van het Nederlandse spoor! ze hebben hun dienstjaren erop zitten, maar ze hebben hun betrouwbaarheid bewezen in hun dienstjaren.</p>
            </div>
        </div>

        <div class='popular_categories' id='popular_category_3'>
            <div class='btn btn-animation-three animated_buttons' id='view_all_internationals_button' onclick="alert('This part hasn\'t been coded in yet')">
                <span>bekijk de internationals!</span>
            </div>

            <div class='popular_items_cover'>
                <h1>Internationaal</h1>
                <p>Dit zijn de treinen die ook over de grens kunnen rijden, zonder functionaliteit of betrouwbaarheid op te hoeven offeren.</p>
            </div>
        </div>
    </div>

    <div id='info_wrapper'>
        <div id='about_us_text' class='info_text_wrapper'>
            <h1>OVER ONS</h1>
            <h2>RANDOM TEXT</h2>
            <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
        </div>
        <div id='about_us_img' class='info_img_wrapper'></div>

        <div id='location_img' class='info_img_wrapper'></div>
        <div id='location_text' class='info_text_wrapper'>
            <h1>NOG WAT INFO</h1>
            <h2>WAAR ZIJN WIJ WERKZAAM</h2>
            <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
        </div>

        <div id='satisfaction_text' class='info_text_wrapper'>
            <h1>WAT VINDEN JULLIE VAN ONS</h1>
            <h2>KLANT TEVREDENHEID</h2>
            <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
        </div>
        <div id='satisfaction_img' class='info_img_wrapper'></div>
    </div>

    <div id='staff_wrapper'>
        <h1>Wie werken er in ons team?</h2>
        <h2>ieder zijn steentje</h2>
        <div id='staff_img_wrapper'>
            <div class='staff_members' id='staff_member_1'></div>
            <h3 class='staff_name_1'>Michelle</h3>
            <h4 class='staff_name_1'>communication and administration</h4>
            <div class='staff_members' id='staff_member_2'></div>
            <h3 class='staff_name_2'>Chandler</h3>
            <h4 class='staff_name_2'>Marketing and supplier</h4>
            <div class='staff_members' id='staff_member_3'></div>
            <h3 class='staff_name_3'>Jonathan</h3>
            <h4 class='staff_name_3'>adviseur en programmeur</h4>
            <div class='staff_members' id='staff_member_4'></div>
            <h3 class='staff_name_4'>Duncan</h3>
            <h4 class='staff_name_4'>machinist en CEO</h4>
            <div class='staff_members' id='staff_member_5'></div>
            <h3 class='staff_name_5'>Sonic</h3>
            <h4 class='staff_name_5' id='hedge_function'>office hedghehog</h4>
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

    <script src='../resources/js/ThemeSwitch.js'></script>
</body>
</html>