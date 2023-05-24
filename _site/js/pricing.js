pricePerPage = 50;

var hosting_prices= new Array();
hosting_prices["None"]=0;
hosting_prices["basic"]=10;
hosting_prices["analytics"]=30;
hosting_prices["marketing"]=100;

//This function finds the page price based on the
//drop down selection
function getPages()
{
    var pages=0;
    //Get a reference to the form id="pricing-form"
    var pricingForm = document.forms["pricing-form"];
    //Get a reference to the input id="pages"
     var quantity = pricingForm.elements["pages"];
    
    if (quantity.value !="") 
    {
        
        pages = parseInt(quantity.value);
    }

    //finally we return pages
    return pages;
}

//This function finds the hosting price based on the
//drop down selection
function getHostingPrice()
{
    var hostingPrice=0;
    //Get a reference to the form id="pricing-form"
    var pricingForm = document.forms["pricing-form"];
    //Get a reference to the select id="hosting"
     var selectedHosting = pricingForm.elements["hosting"];
 
    //set hostingPrice equal to value user chose
    hostingPrice = hosting_prices[selectedHosting.value];

    return hostingPrice;
}

//databasePrice() finds the database price based on a check box selection
function getDatabasePrice()
{
    var databasePrice=0;
    //Get a reference to the form id="pricing-form"
    var pricingForm = document.forms["pricing-form"];
    //Get a reference to the checkbox id="database"
    var database = pricingForm.elements["database"];
 
    //If they checked the box set databasePrice to 5
    if(database.checked==true)
    {
        databasePrice= database.value;
    }

    return databasePrice;
}

function getCopywritingPrice()
{
    var copywritingPrice=0;
    //Get a reference to the form id="pricing-form"
    var pricingForm = document.forms["pricing-form"];
    //Get a reference to the checkbox id="copywriting"
    var copywriting = pricingForm.elements["copywriting"];
 
    //If they checked the box set copywritingPrice to 5
    if(copywriting.checked==true)
    {
        copywritingPrice= copywriting.value;
    }
    
    return copywritingPrice;
}

function getTotal() {
    var totalPages = parseInt(getPages());
    var totalCopywriting = parseInt(getCopywritingPrice());
    var totalDatabase = parseInt(getDatabasePrice());

    var totalPrice = (totalPages * (pricePerPage + totalCopywriting) + 50) + totalDatabase;
    document.getElementById('total-cost').innerHTML = "Total cost = $"+totalPrice;
}

function getHostingTotal() {
    var totalHosting = parseInt(getHostingPrice());

    document.getElementById('monthly-cost').innerHTML = "Monthly cost = $"+totalHosting;
}