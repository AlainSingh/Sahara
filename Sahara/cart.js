function addCart(x){
    pQuantity[x]++;
}

function removeCart(x){
    pQuantity[x] = 0;
}

function handleCart(i){
    if(pQuantity[i] > 0){
        document.getElementById("demo" + i).innerHTML = pName[i] + ":  $" + pPrice[i]*pQuantity[i] + "   ";
        
        //Add Delete Button
        var btn = document.createElement("BUTTON");
        btn.innerHTML = "Remove";
        btn.className = "btn btn-danger btn-sm";
        btn.onclick = function(){
          document.getElementById("demo" + i).innerHTML = "";
          removeCart(i);
          console.log(pQuantity);
          saveCache();
        };
        document.getElementById("demo" + i).appendChild(btn);
        
        var btnPlus = document.createElement("BUTTON");
        btnPlus.innerHTML = "+";
        btnPlus.className = "btn btn-primary btn-sm";
        btnPlus.onclick = function(){
          addCart(i);
          console.log(pQuantity);
          saveCache();
        }
        document.getElementById("demo" + i).appendChild(btnPlus);
        var btnMinus = document.createElement("Button");
        btnMinus.innerHTML = "-";
        btnMinus.className = "btn btn-warning btn-sm";
        btnMinus.onclick = function(){
          pQuantity[i]--;
          console.log(pQuantity);
          saveCache();
        }
        document.getElementById("demo" + i).appendChild(btnMinus);
      }
}