let colors = generateRandomColors(6);

var squares = document.querySelectorAll(".square");
var pickedColor = pickColor();
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message")

colorDisplay.textContent = pickedColor;

for(var i=0;i<squares.length;i++)
{
    squares[i].style.backgroundColor=colors[i];

    squares[i].addEventListener("click", function() {
        var clickedColor = this.style.backgroundColor;
        if(clickedColor === pickedColor) {
            messageDisplay.textContent = "Correct";
            changeColors(clickedColor);
        } else {
            this.style.backgroundColor = "#232323"; 
            messageDisplay.textContent = "try again";
        }
    });
}

function changeColors(color) {
    for(var i=0;i<squares.length; i++ ){
        squares[i].style.backgroundColor= color;
    }
} 

function pickColor() {
    var random= Math.floor(Math.random()*colors.length+ 1);
    return colors[random];
}

function generateRandomColors(n) {
    
}