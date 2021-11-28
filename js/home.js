function carttoggle() {
    console.log("Clicked")
    document.getElementsByClassName("shopping-cart")
};


document.querySelector(".minus-btn1").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn2").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn3").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn4").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn5").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn6").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn7").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn8").setAttribute("disabled", "disabled");
document.querySelector(".minus-btn9").setAttribute("disabled", "disabled");

var valueCount1, valueCount2, valueCount3, valueCount4, valueCount5, valueCount6, valueCount7, valueCount8, valueCount9;

var price1 = document.getElementById("price1").innerText;
var quantity1 = document.getElementById("quantity1").value;
var price2 = document.getElementById("price2").innerText;
var quantity2 = document.getElementById("quantity2").value;
var price3 = document.getElementById("price3").innerText;
var quantity3 = document.getElementById("quantity3").value;
var price4 = document.getElementById("price4").innerText;
var quantity4 = document.getElementById("quantity4").value;
var price5 = document.getElementById("price5").innerText;
var quantity5 = document.getElementById("quantity5").value;
var price6 = document.getElementById("price6").innerText;
var quantity6 = document.getElementById("quantity6").value;
var price7 = document.getElementById("price7").innerText;
var quantity7 = document.getElementById("quantity7").value;
var price8 = document.getElementById("price8").innerText;
var quantity8 = document.getElementById("quantity8").value;
var price9 = document.getElementById("price9").innerText;
var quantity9 = document.getElementById("quantity9").value;


function priceTotal1() {
    var total =valueCount1* price1;
    document.getElementById("price1").innerText  = total;
}

function priceTotal2() {
    var total =valueCount2* price2;
    document.getElementById("price2").innerText  = total;
}

function priceTotal3() {
    var total =valueCount3* price3;
    document.getElementById("price3").innerText  = total;
}

function priceTotal4() {
    var total =valueCount4* price4;
    document.getElementById("price4").innerText  = total;
}

function priceTotal5() {
    var total =valueCount5* price5;
    document.getElementById("price5").innerText  = total;
}

function priceTotal6() {
    var total =valueCount6* price6;
    document.getElementById("price6").innerText  = total;
}

function priceTotal7() {
    var total =valueCount7* price7;
    document.getElementById("price7").innerText  = total;
}

function priceTotal8() {
    var total =valueCount8* price8;
    document.getElementById("price8").innerText  = total;
}

function priceTotal9() {
    var total =valueCount9* price9;
    document.getElementById("price9").innerText  = total;
}


document.querySelector(".plus-btn1").addEventListener("click",function() {
    valueCount1 = document.getElementById("quantity1").value;

    valueCount1++;
    
    document.getElementById("quantity1").value = valueCount1;    

    if(valueCount1 > 1){
        document.querySelector(".minus-btn1").removeAttribute("disabled");
        document.querySelector(".minus-btn1").classList.remove("disabled");
    }

    if(valueCount1 == 40){
        document.querySelector(".plus-btn1").setAttribute("disabled", "disabled");
    }

    priceTotal1(valueCount1)

});

document.querySelector(".plus-btn2").addEventListener("click",function() {
    valueCount2 = document.getElementById("quantity2").value;    
    
    valueCount2++;
        
    document.getElementById("quantity2").value = valueCount2;    

    if(valueCount2 > 1){
        document.querySelector(".minus-btn2").removeAttribute("disabled");
        document.querySelector(".minus-btn2").classList.remove("disabled");
    }

    if(valueCount2 == 40){
        document.querySelector(".plus-btn2").setAttribute("disabled", "disabled");
    }

    priceTotal2(valueCount2)

});

document.querySelector(".plus-btn3").addEventListener("click",function() {
    valueCount3 = document.getElementById("quantity3").value;    
    
    valueCount3++;
        
    document.getElementById("quantity3").value = valueCount3;    

    if(valueCount3 > 1){
        document.querySelector(".minus-btn3").removeAttribute("disabled");
        document.querySelector(".minus-btn3").classList.remove("disabled");
    }

    if(valueCount3 == 40){
        document.querySelector(".plus-btn3").setAttribute("disabled", "disabled");
    }

    priceTotal3(valueCount3)

});

document.querySelector(".plus-btn4").addEventListener("click",function() {
    valueCount4 = document.getElementById("quantity4").value;    
    
    valueCount4++;
        
    document.getElementById("quantity4").value = valueCount4;    

    if(valueCount4 > 1){
        document.querySelector(".minus-btn4").removeAttribute("disabled");
        document.querySelector(".minus-btn4").classList.remove("disabled");
    }

    if(valueCount4 == 40){
        document.querySelector(".plus-btn4").setAttribute("disabled", "disabled");
    }

    priceTotal4(valueCount4)

});

document.querySelector(".plus-btn5").addEventListener("click",function() {
    valueCount5 = document.getElementById("quantity5").value;    
    
    valueCount5++;
        
    document.getElementById("quantity5").value = valueCount5;    

    if(valueCount5 > 1){
        document.querySelector(".minus-btn5").removeAttribute("disabled");
        document.querySelector(".minus-btn5").classList.remove("disabled");
    }

    if(valueCount5 == 40){
        document.querySelector(".plus-btn5").setAttribute("disabled", "disabled");
    }

    priceTotal5(valueCount5)

});

document.querySelector(".plus-btn6").addEventListener("click",function() {
    valueCount6 = document.getElementById("quantity6").value;    
    
    valueCount6++;
        
    document.getElementById("quantity6").value = valueCount6;    

    if(valueCount6 > 1){
        document.querySelector(".minus-btn6").removeAttribute("disabled");
        document.querySelector(".minus-btn6").classList.remove("disabled");
    }

    if(valueCount6 == 40){
        document.querySelector(".plus-btn6").setAttribute("disabled", "disabled");
    }

    priceTotal6(valueCount6)

});

document.querySelector(".plus-btn7").addEventListener("click",function() {
    valueCount7 = document.getElementById("quantity7").value;    
    
    valueCount7++;
        
    document.getElementById("quantity7").value = valueCount7;    

    if(valueCount7 > 1){
        document.querySelector(".minus-btn7").removeAttribute("disabled");
        document.querySelector(".minus-btn7").classList.remove("disabled");
    }

    if(valueCount7 == 40){
        document.querySelector(".plus-btn7").setAttribute("disabled", "disabled");
    }

    priceTotal7(valueCount7)

});

document.querySelector(".plus-btn8").addEventListener("click",function() {
    valueCount8 = document.getElementById("quantity8").value;    
    
    valueCount8++;
        
    document.getElementById("quantity8").value = valueCount8;    

    if(valueCount8 > 1){
        document.querySelector(".minus-btn8").removeAttribute("disabled");
        document.querySelector(".minus-btn8").classList.remove("disabled");
    }

    if(valueCount8 == 40){
        document.querySelector(".plus-btn8").setAttribute("disabled", "disabled");
    }

    priceTotal8(valueCount8)

});

document.querySelector(".plus-btn9").addEventListener("click",function() {
    valueCount9 = document.getElementById("quantity9").value;    
    
    valueCount9++;
        
    document.getElementById("quantity9").value = valueCount9;    

    if(valueCount9 > 1){
        document.querySelector(".minus-btn9").removeAttribute("disabled");
        document.querySelector(".minus-btn9").classList.remove("disabled");
    }

    if(valueCount9 == 40){
        document.querySelector(".plus-btn9").setAttribute("disabled", "disabled");
    }

    priceTotal9(valueCount9)

});

document.querySelector(".minus-btn1").addEventListener("click",function() {                    
    valueCount1 = document.getElementById("quantity1").value;    
    console.log("quantity", valueCount1)    

    valueCount1--;

    document.getElementById("quantity1").value = valueCount1;    

    if(valueCount1 == 1){
        document.querySelector(".minus-btn1").setAttribute("disabled", "disabled");
    }

    if(valueCount1 < 40){
        document.querySelector(".plus-btn1").removeAttribute("disabled");
        document.querySelector(".plus-btn1").classList.remove("disabled");
    }

    priceTotal1(valueCount1)
});                

document.querySelector(".minus-btn2").addEventListener("click",function() {                        
    valueCount2 = document.getElementById("quantity2").value;
    console.log("quantity", valueCount2)    

    valueCount2--;
    
    document.getElementById("quantity2").value = valueCount2;

    if(valueCount2 == 1){
        document.querySelector(".minus-btn2").setAttribute("disabled", "disabled");
    }

    if(valueCount2 < 40){
        document.querySelector(".plus-btn2").removeAttribute("disabled");
        document.querySelector(".plus-btn2").classList.remove("disabled");
    }

    priceTotal2(valueCount2)
});  

document.querySelector(".minus-btn3").addEventListener("click",function() {                        
    valueCount3 = document.getElementById("quantity3").value;
    console.log("quantity", valueCount3)    

    valueCount3--;
    
    document.getElementById("quantity3").value = valueCount3;

    if(valueCount3 == 1){
        document.querySelector(".minus-btn3").setAttribute("disabled", "disabled");
    }

    if(valueCount3 < 40){
        document.querySelector(".plus-btn3").removeAttribute("disabled");
        document.querySelector(".plus-btn3").classList.remove("disabled");
    }

    priceTotal3(valueCount3)
});

document.querySelector(".minus-btn4").addEventListener("click",function() {                        
    valueCount4 = document.getElementById("quantity4").value;
    console.log("quantity", valueCount4)    

    valueCount4--;
    
    document.getElementById("quantity4").value = valueCount4;

    if(valueCount4 == 1){
        document.querySelector(".minus-btn4").setAttribute("disabled", "disabled");
    }

    if(valueCount4 < 40){
        document.querySelector(".plus-btn4").removeAttribute("disabled");
        document.querySelector(".plus-btn4").classList.remove("disabled");
    }

    priceTotal4(valueCount4)
});      

document.querySelector(".minus-btn5").addEventListener("click",function() {                        
    valueCount5 = document.getElementById("quantity5").value;
    console.log("quantity", valueCount5)    

    valueCount5--;
    
    document.getElementById("quantity5").value = valueCount5;

    if(valueCount5 == 1){
        document.querySelector(".minus-btn5").setAttribute("disabled", "disabled");
    }

    if(valueCount5 < 40){
        document.querySelector(".plus-btn5").removeAttribute("disabled");
        document.querySelector(".plus-btn5").classList.remove("disabled");
    }

    priceTotal5(valueCount5)
});      

document.querySelector(".minus-btn6").addEventListener("click",function() {                        
    valueCount6 = document.getElementById("quantity6").value;
    console.log("quantity", valueCount6)    

    valueCount6--;
    
    document.getElementById("quantity6").value = valueCount6;

    if(valueCount6 == 1){
        document.querySelector(".minus-btn6").setAttribute("disabled", "disabled");
    }

    if(valueCount6 < 40){
        document.querySelector(".plus-btn6").removeAttribute("disabled");
        document.querySelector(".plus-btn6").classList.remove("disabled");
    }

    priceTotal6(valueCount6)
});      

document.querySelector(".minus-btn7").addEventListener("click",function() {                        
    valueCount7 = document.getElementById("quantity7").value;
    console.log("quantity", valueCount7)    

    valueCount7--;
    
    document.getElementById("quantity7").value = valueCount7;

    if(valueCount7 == 1){
        document.querySelector(".minus-btn7").setAttribute("disabled", "disabled");
    }

    if(valueCount7 < 40){
        document.querySelector(".plus-btn7").removeAttribute("disabled");
        document.querySelector(".plus-btn7").classList.remove("disabled");
    }

    priceTotal7(valueCount7)
});  

document.querySelector(".minus-btn8").addEventListener("click",function() {                        
    valueCount8 = document.getElementById("quantity8").value;
    console.log("quantity", valueCount8)    

    valueCount8--;
    
    document.getElementById("quantity8").value = valueCount8;

    if(valueCount8 == 1){
        document.querySelector(".minus-btn8").setAttribute("disabled", "disabled");
    }

    if(valueCount8 < 40){
        document.querySelector(".plus-btn8").removeAttribute("disabled");
        document.querySelector(".plus-btn8").classList.remove("disabled");
    }

    priceTotal8(valueCount8)
});

document.querySelector(".minus-btn9").addEventListener("click",function() {                        
    valueCount9 = document.getElementById("quantity9").value;
    console.log("quantity", valueCount9)    

    valueCount9--;
    
    document.getElementById("quantity9").value = valueCount9;

    if(valueCount9 == 1){
        document.querySelector(".minus-btn9").setAttribute("disabled", "disabled");
    }

    if(valueCount9 < 40){
        document.querySelector(".plus-btn9").removeAttribute("disabled");
        document.querySelector(".plus-btn9").classList.remove("disabled");
    }

    priceTotal9(valueCount9)
});      

var total = 0

function addTotal(num) {    
    total += num

    console.log(total)
}

function subTotal(num) {    
    total -= num

    console.log(total)
}

var  addItemid = 0;
let item_list;
function addToCart(item) {    
    addItemid += 1;
    var selectedItem = document.createElement('div');
    selectedItem.classList.add('cartImg');
    selectedItem.setAttribute('id', addItemid);
    var img = document.createElement('img');
    img.setAttribute('src',item.children[0].currentSrc);
    var title = document.createElement('div');
    title.innerText = item.children[2].children[0].innerText;
    var quantity = document.createElement('div');
    quantity.innerText = item.children[2].children[2].children[0].children[1].children[1].value;
    var total = document.createElement('span');
    total.innerText = item.children[2].children[2].children[1].children[1].children[0].children[1].innerText;
    var delBtn = document.createElement('button');
    delBtn.innerText = 'Delete';
    delBtn.setAttribute('onclick','del('+addItemid+')');
    var cartItems = document.getElementById('cart-title');
    selectedItem.append(img);
    selectedItem.append(title);
    selectedItem.append(quantity);
    selectedItem.append(total);
    selectedItem.append(delBtn);
    cartItems.append(selectedItem);
    
    item_list.push("title")

    var num = parseInt(selectedItem.children[3].innerText)    
    

    checkitem(addItemid)

    addTotal(num) 
}


function checkitem(item) {
    var selectedItem = document.getElementById(item); 
    console.log(item_list)
    // if( selectedItem.children[1].innerText === "Salt") {
    //     console.log("item in cart")
    // }
}

// function del(item) {
//     var selectedItem = document.getElementById(item);
//     var num = parseInt(selectedItem.children[3].innerText)    
//     subTotal(num) 
//     document.getElementById(item).remove();
// }


//             let itemarr = [1,2,3,4,5,6,7,8,9];
//             let arrayLength = itemarr.length;                                
//             for(i=1;i < arrayLength+1;i++) {

//                 const  id = ["price" + i, "quantity" + i, "plus-btn" + i, "minus-btn" + i]                

//                 console.log("btn", id[0])

//                 checker(id);
//             }

//             function checker () {
//                 var price = document.getElementById(id[0]).innerText;
//                 console.log("price",price)                

//                 var quantity = document.getElementById(id[1]).value;
//                 console.log("quantity",quantity)

//                 function priceTotal(e) {
//                     var total = e * price;
//                     document.getElementById(id[0]).innerText  = total;
//                 }

//                 document.querySelector('.'+id[2]).addEventListener("click",function() {
//                     valueCount = document.getElementById(id[1]).value;
//                     console.log("quantity", valueCount)
                    

//                     valueCount++;
                    
//                     document.getElementById(id[1]).value = valueCount;

//                     if(valueCount > 1){
//                         document.querySelector('.'+id[3]).removeAttribute("disabled");
//                         document.querySelector('.'+id[3]).classList.remove("disabled");
//                     }

//                     if(valueCount == 40){
//                         document.querySelector('.'+id[2]).setAttribute("disabled", "disabled");
//                     }

//                     priceTotal(valueCount)

//                 });

//                 document.querySelector('.'+id[3]).addEventListener("click",function() {                    
//                     valueCount = document.getElementById(id[1]).value;
//                     console.log("quantity", valueCount)

//                     valueCount--;

//                     document.getElementById(id[1]).value = valueCount 

//                     if(valueCount == 1){
//                         document.querySelector('.'+id[3]).setAttribute("disabled", "disabled");
//                     }

//                     if(valueCount < 40){
//                         document.querySelector('.'+id[2]).removeAttribute("disabled");
//                         document.querySelector('.'+id[2]).classList.remove("disabled");
//                     }

//                     priceTotal(valueCount)
//                 });   
//             }             
                           