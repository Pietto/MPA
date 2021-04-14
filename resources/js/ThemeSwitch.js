var darkMode = false;

function switchTheme(breaking){
    if(breaking == true){

    }else{
        if(darkMode == false){
            document.body.style.backgroundColor = 'black';
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
        featured_offer_bottom.style.background = 'linear-gradient(0deg, rgba(0,0,0,.9) 50%, rgba(0,0,0,.20) 100%)';
        themeSwitchButton.setAttribute('data-sm-link-text', 'Darkmode');

    }else if(mode == 'light'){
        featured_offer_bottom.style.background=  'linear-gradient(0deg, rgba(255,255,255,.9) 50%, rgba(255,255,255,.20) 100%)';
        themeSwitchButton.setAttribute('data-sm-link-text', 'Lightmode');
    }else{
        console.log('error: mode "' + mode + '" not recornised');
    }
}