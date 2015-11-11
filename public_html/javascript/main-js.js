/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 //Set up an associative array
 //The keys represent the movie options
 //The values represent the cost of the movie
 var movie_prices = new Array();
 movie_prices["Iron Man"]=20;
 movie_prices["Iron Man 2"]=25;
 movie_prices["Iron Man 3"]=35;
 movie_prices["Avengers"]=75;
 
 //Set up an associative array 
 //The keys represent the media type
 //The value represents the cost of the media 
 //Use this this array when the user selects a media from the form
 var media_prices= new Array();
 media_prices["Select-Media"]=0;
 media_prices["Blu-Ray"]=25;
 media_prices["Digital"]=5;
 media_prices["DVD"]=15;

 
	 
	 
// getMovieSelectionPrice() finds the price based on the movie selection.
// Here, takes the user's selection from radio button selection
function getMovieSelectionPrice()
{  
    var moviePrice=0;
    //Get a reference to the form id="movieform"
    var theForm = document.forms["movieform"];
    //Get a reference to the movie the user Chooses name=selectedMovie":
    var selectedMovie = theForm.elements["selectedmovie"];
    //Here since there are 4 radio buttons selectedMovie.length = 4
    //Loop through each radio buttons
    for(var i = 0; i < selectedMovie.length; i++)
    {
        //if the radio button is checked
        if(selectedMovie[i].checked)
        {
            //set moviePrice to the value of the selected radio button
            //Gets the selected Items value
            //For example movie_prices["Avengers".value]"
            moviePrice = movie_prices[selectedMovie[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the moviePrice
    return moviePrice;
}

//This function finds the media price based on the 
//drop down selection
function getMediaPrice()
{
    var mediaTypePrice=0;
    //Get a reference to the form id="movieform"
    var theForm = document.forms["movieform"];
    //Get a reference to the select id="media"
     var selectedMedia = theForm.elements["media"];
     
    //set getMedia Price equal to value user chose
    //For example media_prices["DVD".value] would be equal to 3
    mediaTypePrice = media_prices[selectedMedia.value];

    //finally we return mediaTypePrice
    return mediaTypePrice;
}

//shippingPrice() finds the shipping price based on a check box selection
function shippingPrice()
{
    var includeShippingPrice=0;
    //Get a reference to the form id="movieform"
    var theForm = document.forms["movieform"];
    //Get a reference to the checkbox id="includeshipping"
    var includeShipping = theForm.elements["includeshipping"];

    //If they checked the box set includeShippingPrice to 5
    if(includeShipping.checked==true)
    {
        includeShippingPrice=5;
    }
    //finally we return the includeShippingPrice
    return includeShippingPrice;
}

function internationalShipping()
{
    //This local variable will be used to decide whether or not to charge for the int. shipping
    //If the user checked the box this value will be 20 otherwise it will remain at 0
    var internationalShippingPrice=0;
    //Get a refernce to the form id="movieform"
    var theForm = document.forms["movieform"];
    //Get a reference to the checkbox id="includeinternationalshipping"
    var includeInternationalShipping = theForm.elements["includeinternationalshipping"];
    //If they checked the box set internationalShippingPrice to 20
    if(includeInternationalShipping.checked==true){
        internationalShippingPrice=20;
    }
    //finally we return the internationalShippingPrice
    return internationalShippingPrice;
}

function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var moviePrice = getMovieSelectionPrice() + getMediaPrice() + shippingPrice() + internationalShipping();


    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the Movie $"+moviePrice;

}

function submitButton() 
{
    // Sumbit button display 
    window.alert("Thanks for your order!");
    location.reload(true);
    }

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
