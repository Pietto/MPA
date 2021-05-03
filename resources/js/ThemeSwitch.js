// this page controls the switch between light- and darkmode
// a totally unnessecery function but i added it nontheless

// var darkMode describes whether its current mode is either dark or light (default)
var darkMode = false;

/* on clicking the switchbutton in the header function switchTheme(@param1) is activated;
** the if/else statement determents whether the mode is dark or light, and swithces it to the opposite
** first a few simple items get changed from color
** function switchThemeAdvanced(@param2) switches all more 'complicated' attributes for an less complicated code
** darkmode is switched now, so var darkMode can be switched too
** and lastly, logging to the console that the mode has been switched
** @param1 ('breaking) prevents breaking: when accidentally a parameter has been fed with switchTheme('here), it will follow up to the else, on which the function will re-activate without changing any properties (by going into the first if statement). this prevents breaking the code.
** @param2 states whether it should be change to dark or lightmode, again for simplicity
*/

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

/* switchThemeAdvanced(@param1) switched the more advanced properties of the page, this has been made a seperate page for simplicity's sake
** the first if/else statement checks whether it should be changed to light, or darkmode
** the next, nested if/else statement checks the document title, in order not to change the wrong properties of a page (each page has unique divisions etc.)
** changing coloros unsues, for loops are implemented where needed
** bottom else statement rules out any errors when given wrong parameter above
** @param1 ('mode') defines whether it should be changed to light, or darkmode
*/ 

function switchThemeAdvanced(mode){
    if(mode == 'dark'){
        if(document.title == 'Train Shop'){
            featured_offer_bottom.style.background = 'linear-gradient(0deg, rgba(25,25,25,.9) 50%, rgba(25,25,25,.20) 100%)';
            themeSwitchButton.setAttribute('data-sm-link-text', 'Darkmode');
            featured_offer_bottom.style.color = 'white';
            for(i=0; i<4; i++){
                document.getElementsByClassName("most_popular_items_cover")[i].style.backgroundColor = 'rgba(20, 20, 20, .5)';
            }
        }else if(document.title =='categories'){
            console.log('no extra darkmode switches')
        }
    }else if(mode == 'light'){
        if(document.title == 'Train Shop'){
            featured_offer_bottom.style.background = 'linear-gradient(0deg, rgba(255,255,255,.9) 50%, rgba(255,255,255,.20) 100%)';
            themeSwitchButton.setAttribute('data-sm-link-text', 'Lightmode');
            for(i=0; i<4; i++){
                document.getElementsByClassName("most_popular_items_cover")[i].style.backgroundColor = 'rgba(255, 255, 255, .5)';
            }
        }else if(document.title =='categories'){
            console.log('no extra darkmode switches')
        }
    }else{
        console.log('error: mode "' + mode + '" not recornised');
    }
}