const qty = document.getElementById("quantity");
let counter = qty.innerText;
const cartInput = document.getElementById("cartInput");
let currCart = cartInput.innerHTML;
let meal1 = 0, meal2 = 0, meal3 = 0, meal4 = 0, meal5 = 0, meal6 = 0;
var xmlhttp;
if(window.XMLHttpRequest){
    xmlhttp= new XMLHttpRequest;
}else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
function increment() {
    counter++;
    qty.innerText = counter;
}

function decrement() {
    if (counter > 1) {
        counter--;
        qty.innerText = counter;
    }
}

function addtocart() {
        currCart = parseInt(currCart) + parseInt(counter);
        cartInput.innerHTML = currCart;
}

document.onload = setTimeout(hiderev,0)
function hiderev(){
    document.register.style.marginLeft= "3000px";
}

function showRev(){
    document.register.style.height = "auto";  
    document.register.style.marginLeft = 0;
}

function errorMsg() {
    var error = document.getElementById("error")
    if (document.register.opinion.value.length==0) 
    {
        error.innerHTML = "<span style='color: red;'>"+
                    "Please type your review</span>"
    }
    else
    error.innerHTML = "";
    if(document.getElementById("customerName").value == "" && document.register.opinion.value.length!=0)
    {
        document.getElementById("customerName").value = 'Customer';
    }
}

function countChar(obj){
    document.getElementById("textcount").innerHTML = obj.value.length;
}
function hideError(){
    document.getElementById("error").innerHTML = "";
}

function incrementDish1() {
    let meal1;

    this.meal1 = meal1++;
   
    incrementCart();
}
function incrementDish2() {
    let meal2;
    this.meal2 = meal2++;
    meal2++;
    incrementCart();
}
function incrementDish3() {
    let meal3;

    this.meal3 = meal3++;
    incrementCart();
  
}
function incrementDish4() {
    let meal4;

    this.meal4 = meal4++;
    incrementCart();
}
function incrementDish5() {
    let meal5;

    this.meal5 = meal5++;
    incrementCart();
}
function incrementDish6() {
    let meal6;

    this.meal6 = meal6++;
    incrementCart();
}


function incrementCart() {
    currCart++;
    cartInput.innerHTML = currCart;
}

function calcCart() {
    if (meal1 > 0) {
        document.getElementById("dish1").classList.add("showMeals");
        document.getElementById("qty1").innerHTML = meal1;
    }
    if (meal2 > 0) {
        document.getElementById("dish2").classList.add("showMeals");
        document.getElementById("qty2").innerHTML = meal2;
    }
    if (meal3 > 0) {
        document.getElementById("dish3").classList.add("showMeals");
        document.getElementById("qty3").innerHTML = meal3;
    }
    if (meal4 > 0) {
        document.getElementById("dish4").classList.add("showMeals");
        document.getElementById("qty4").innerHTML = meal4;
    }
    if (meal5 > 0) {
        document.getElementById("dish5").classList.add("showMeals");
        document.getElementById("qty5").innerHTML = meal5;
    }
    if (meal6 > 0) {
        document.getElementById("dish6").classList.add("showMeals");
        document.getElementById("qty6").innerHTML = meal6;
    }

    let total = Number(meal1 * 23.9 + meal2 * 25.9 + meal3 * 27.5 + meal4 * 32.9 + meal5 * 19.4 + meal6 * 28.5).toFixed(1);
    document.getElementById("totalPrice").innerHTML = total;
}


function resetCart() {
    meal1 = meal2 = meal3 = meal4 = meal5 = meal6 = 0;
    document.getElementById("dish1").classList.remove("showMeals");
    document.getElementById("dish2").classList.remove("showMeals");
    document.getElementById("dish3").classList.remove("showMeals");
    document.getElementById("dish4").classList.remove("showMeals");
    document.getElementById("dish5").classList.remove("showMeals");
    document.getElementById("dish6").classList.remove("showMeals");

    document.getElementById("totalPrice").innerHTML = total = 0;
    cartInput.innerHTML = currCart = 0;
}

// function showReviews(){
//     xmlhttp.open("GET","ajax_info.txt", true);
//     xmlhttp.send();

//     try(xmlhttp.responseTextry {
        
//     } catch (error) {
//         document.getElementById("re").
//     })
// } 