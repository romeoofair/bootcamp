let ps1 = ps2 =0;
pc1= document.getElementById("p1");
pc2 =document.getElementById("p2");
winScore= document.querySelector("p span");
numInput = document.querySelector("input");
let gameOver = false;

document.getElementById("pb1").addEventListener("click",function() {
    if(ps1 <winScoren && gameOver == false) {
    ps1++;
    pc1.innerHTML= ps1;  

    if(ps1 == winScoren){
        document.getElementById("p1").style.color= "green";
        gameOver= true;
    } 
    }  
});

document.getElementById("pb2").addEventListener("click",function() {
    if(ps2 <winScoren && gameOver== false) {
    ps2++;
    pc2.innerHTML= ps2;  

    if(ps2 == winScoren){
        document.getElementById("p2").style.color= "green";
        gameOver=true;
    } 
    }  
});

function reset() {
    ps1=ps2=0;
    gameOver= false;
    pc1.innerHTML=pc2.innerHTML=ps1;
    pc1.style.color=pc2.style.color ="black";
}

document.getElementById("reset").addEventListener("click", function() {
   reset();
});

numInput.addEventListener("change", function() {
    winScore.textContent = this.value;
    winScoren= this.value;
    reset();
});