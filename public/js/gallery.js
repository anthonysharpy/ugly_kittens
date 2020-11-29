
var staff = [["Sarah", "Robert", "Matilda", "Taylor Swift (Cat Form)", "Jack"],
            ["Sarah has been with us for just over three years now and enjoys morning coffee, Marvel movies and being single.",
            "Robert used to be a big-screen celebrity known for his gritty depictions of the hyper-masculinised lifestyle. Now he looks after cats.",
            "Yes, this is the girl from the movie Matilda, only thirty years on.",
            "It is often said that society's elite are actually a secretive race of power-hungry reptiles. This is incorrect. They are actually cats.",
            "Jack is an avid fan of movies, blogs, new-wave feminism and, of course, cats."]];

var currentteamimage = 1;
var numberofteamimages = 5;
var gallerywidth = 600;
var galleryheight = 200;

window.onload = setupGallery();

function makeImageCentreImage(image)
{
    image.style.height = galleryheight.toString().concat("px");
    image.style.width = galleryheight.toString().concat("px");
    image.style.left = ((gallerywidth*0.5)-galleryheight*0.5).toString().concat("px");
    image.style.top = "0px";
    image.style.filter = "";
}

function makeImageSmallRightImage(image)
{
    var imageheight = galleryheight*0.5;

    image.style.height = imageheight.toString().concat("px");
    image.style.width = imageheight.toString().concat("px");
    image.style.left = ((gallerywidth*0.5)+(gallerywidth*0.2)).toString().concat("px");
    image.style.top = ((galleryheight*0.5)-(imageheight*0.5)).toString().concat("px");
    image.style.filter = "opacity(25%)";
}

function makeImageSmallLeftImage(image)
{
    var imageheight = galleryheight*0.5;

    image.style.height = imageheight.toString().concat("px");
    image.style.width = imageheight.toString().concat("px");
    image.style.left = ((gallerywidth*0.5)-(gallerywidth*0.2)-imageheight).toString().concat("px");
    image.style.top = ((galleryheight*0.5)-(imageheight*0.5)).toString().concat("px");
    image.style.filter = "opacity(25%)";
}

function hideAllImages()
{
    for(var i = 0; i < numberofteamimages; i++)
    {
        var image = document.getElementById((i+1).toString()).getElementsByTagName('img')[0];
        image.style.height = "0px";
        image.style.width = "0px";
    }
}

function setupGallery()
{
    hideAllImages();
    makeImageSmallRightImage(document.getElementById("2").getElementsByTagName('img')[0])
    makeImageCentreImage(document.getElementById("1").getElementsByTagName('img')[0]);
    setupNameAndBio();
}

function onPressNextImage()
{
    if(currentteamimage == numberofteamimages) return;
    currentteamimage++;
    updateImages();
}

function onPressPreviousImage()
{
    if(currentteamimage == 1) return;
    currentteamimage--;
    updateImages();
}

function updateImages()
{
    hideAllImages();
    if(currentteamimage > 1) makeImageSmallLeftImage(document.getElementById((currentteamimage-1).toString()).getElementsByTagName('img')[0]);
    makeImageCentreImage(document.getElementById((currentteamimage).toString()).getElementsByTagName('img')[0]);
    if(currentteamimage < numberofteamimages) makeImageSmallRightImage(document.getElementById((currentteamimage+1).toString()).getElementsByTagName('img')[0]);
    setupNameAndBio();
}

function setupNameAndBio()
{
    document.getElementById('person-name').innerHTML = staff[0][currentteamimage-1];
    document.getElementById('person-description').innerHTML = staff[1][currentteamimage-1];
}