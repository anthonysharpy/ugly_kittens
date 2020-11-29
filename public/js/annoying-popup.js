function saveTimeOpened()
{
    var t = new Date().getTime();
    document.cookie = "kittentimefirstvisited=".concat(t);
}

function haveShownPopup()
{
    return document.cookie.substr(document.cookie.indexOf("kittenshownpopup=")+17, 1) == "1";
}

function saveHaveShownPopup()
{
    document.cookie = "kittenshownpopup=1";
}

function showPopup()
{
    document.getElementsByClassName("annoying-popup-background")[0].style.display = "block";
}

function closePopup()
{
    document.getElementsByClassName("annoying-popup-background")[0].style.display = "none";
}

function timeSinceVisited() // in milliseconds
{
    var endpos;

    endpos = document.cookie.indexOf(";", document.cookie.indexOf("kittentimefirstvisited=")+23);
    if(endpos == -1) endpos = document.cookie.length-1; // if it's the last cookie then there won't be a semicolon so we have to fallbackt to just getting the length as the end position

    var str_timevisited = document.cookie.substring(document.cookie.indexOf("kittentimefirstvisited=")+23, endpos);

    var timenow = new Date().getTime();
    
    return timenow - parseInt(str_timevisited);
}

function checkShouldShowAnnoyingPopup()
{
    if(!haveShownPopup() && timeSinceVisited() > 5000)
    {
        saveHaveShownPopup();
        showPopup();
    }
}

var flashon = false;

function toggleFlash()
{
    if(flashon) document.getElementsByClassName("annoying-popup-border")[0].style.backgroundColor = "red"; 
    else document.getElementsByClassName("annoying-popup-border")[0].style.backgroundColor = "rgb(211, 211, 211, 1)";

    flashon = !flashon;

    console.log("hi");
}

function initialisePopup()
{
    if(window.location.pathname == "/") document.cookie = "kittenshownpopup=0";// reset when we go to home because why not

    saveTimeOpened();    
    setInterval(checkShouldShowAnnoyingPopup, 3000);
    setInterval(toggleFlash, 250);
}

document.onload = initialisePopup();
