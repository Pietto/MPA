// this page controls the switch between light- and darkmode

var darkMode = false;
var popularItemsCover = document.getElementsByClassName("most_popular_items_cover")

function switchTheme(breaking){
    if(breaking == true){

    }else{
        if(darkMode == false){
            document.body.style.backgroundColor = 'rgb(20,20,20)';
            document.body.style.color = 'white';
            switchThemeAdvanced('dark');
            darkMode = true;
            console.log('switched to dark mode');
            breaking = false;
        }else if (darkMode == true){
            document.body.style.backgroundColor = '#FEF8F8';
            document.body.style.color = 'black';
            switchThemeAdvanced('light');
            darkMode = false;
            console.log('switched to light mode');
            breaking = false;
        }else{
            console.log('error: darkmode ('+darkMode+') not recornized');
            switchTheme(true);
        }
    }

}

function switchThemeAdvanced(mode){
    if(mode == 'dark'){
        if(document.title == 'index'){
            featured_offer_bottom.style.background = 'linear-gradient(0deg, rgba(25,25,25,.9) 50%, rgba(25,25,25,.20) 100%)';
            themeSwitchButton.setAttribute('data-sm-link-text', 'Darkmode');
            for(i=0; i<4; i++){
                popularItemsCover[i].style.backgroundColor = 'rgba(20, 20, 20, .5)';
            }
        }else if(document.title =='products'){
            console.log('no extra darkmode switches')
        }
    }else if(mode == 'light'){
        if(document.title == 'index'){
            featured_offer_bottom.style.background=  'linear-gradient(0deg, rgba(255,255,255,.9) 50%, rgba(255,255,255,.20) 100%)';
            themeSwitchButton.setAttribute('data-sm-link-text', 'Lightmode');
            for(i=0; i<4; i++){
                popularItemsCover[i].style.backgroundColor = 'rgba(255, 255, 255, .5)';
            }
        }else if(document.title =='products'){
            console.log('no extra darkmode switches')
        }
    }else{
        console.log('error: mode "' + mode + '" not recornised');
    }
}