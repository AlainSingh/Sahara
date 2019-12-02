

function saveCache(){
//Save variables to cache
localStorage.setItem("pId", JSON.stringify(pId));
localStorage.setItem("pName", JSON.stringify(pName));
localStorage.setItem("pPrice", JSON.stringify(pPrice));
localStorage.setItem("pDetails", JSON.stringify(pDetails));
localStorage.setItem("pQuantity", JSON.stringify(pQuantity));

}

//initializes global variables
var pId;
var pName ;
var pPrice;
var pDetails;
var pQuantity;

function getCache(){
//Retrieve variables from cache
 pId = JSON.parse(localStorage.getItem("pId"));
 pName = JSON.parse(localStorage.getItem("pName"));
 pPrice = JSON.parse(localStorage.getItem("pPrice"));
 pDetails = JSON.parse(localStorage.getItem("pDetails"));
 pQuantity = JSON.parse(localStorage.getItem("pQuantity"));
//window.alert(pName[0]);
}
