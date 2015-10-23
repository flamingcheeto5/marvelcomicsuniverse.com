/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 //Set up an associative array
 //The keys represent the size of the cake
 //The values represent the cost of the cake i.e A 10" cake cost's $35
 var movie_prices = new Array();
 movie_prices["Iron Man"]=20;
 movie_prices["Iron Man 2"]=25;
 movie_prices["Iron Man 3"]=35;
 movie_prices["Avengers"]=75;
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var media_prices= new Array();
 media_prices["Select Media"]=0;
 media_prices["Blu-Ray"]=25;
 media_prices["Digital"]=5;
 media_prices["DVD"]=15;

 
	 
	 
// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
function getCakeSizePrice()
{  
    var cakeSizePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the cake the user Chooses name=selectedCake":
    var selectedCake = theForm.elements["selectedmovie"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedCake.length; i++)
    {
        //if the radio button is checked
        if(selectedCake[i].checked)
        {
            //we set cakeSizePrice to the value of the selected radio button
            //i.e. if the user choose the 8" cake we set it to 25
            //by using the movie_prices array
            //We get the selected Items value
            //For example movie_prices["Round8".value]"
            cakeSizePrice = movie_prices[selectedCake[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the cakeSizePrice
    return cakeSizePrice;
}

//This function finds the filling price based on the 
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example media_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = media_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

//candlesPrice() finds the candles price based on a check box selection
function candlesPrice()
{
    var candlePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["includecandles"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=5;
    }
    //finally we return the candlePrice
    return candlePrice;
}

function insciptionPrice()
{
    //This local variable will be used to decide whether or not to charge for the inscription
    //If the user checked the box this value will be 20
    //otherwise it will remain at 0
    var inscriptionPrice=0;
    //Get a refernce to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includeinscription"
    var includeInscription = theForm.elements["includeinscription"];
    //If they checked the box set inscriptionPrice to 20
    if(includeInscription.checked==true){
        inscriptionPrice=20;
    }
    //finally we return the inscriptionPrice
    return inscriptionPrice;
}


function taxAdd() {


    return taxAdd; 
}


function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getCakeSizePrice() + getFillingPrice() + candlesPrice() + insciptionPrice();


    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the Cake $"+cakePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
