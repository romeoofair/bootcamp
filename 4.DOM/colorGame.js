let numSquares = 6;
var colors=[];
var pickedColor;
var squares = document.querySelectorAll(".square");
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message")
var h1 = document.querySelector("h1");
var resetButton = document.querySelector("#reset");
let modeButtons = document.querySelectorAll(".mode");

init();

function init() {
    
    setUpModeButtons();
    setUpSquares();
    reset();
}

function setUpSquares(){
    for(var i=0;i<squares.length;i++)
    {    
        squares[i].addEventListener("click", function() {
            var clickedColor = this.style.backgroundColor;
            if(clickedColor === pickedColor) {
                messageDisplay.textContent = "Correct";
                changeColors(clickedColor);
                resetButton.textContent = "Play again";
                h1.style.backgroundColor = clickedColor;
                 
            } else {
                this.style.backgroundColor = "#232323"; 
                messageDisplay.textContent = "try again";
            }
        });
    }
}

function setUpModeButtons(){
    for(i=0;i<modeButtons.length;i++)
    {
        modeButtons[i].addEventListener("click",function() {
            modeButtons[0].classList.remove("selected");
            modeButtons[1].classList.remove("selected");
            this.classList.add("selected");
    
            this.textContent === "Easy" ? numSquares=3:numSquares=6;
            reset();
        });        
    }
}

function reset() {
    colors = generateRandomColors(numSquares);
    pickedColor = pickColor();
    colorDisplay.textContent = pickedColor;
    resetButton.textContent = "New Colors";
    messageDisplay.textContent = "";
    
    for(var i=0;i<squares.length;i++)
    {
        if(colors[i])
        {
            squares[i].style.display="block";
            squares[i].style.backgroundColor=colors[i];        
        }else {
            squares[i].style.display = "none";
        }
    }    
    h1.style.backgroundColor= "steelblue";
}
    
/*easyBtn.addEventListener("click", function() {
    hardBtn.classList.remove("selected");
    this.classList.add("selected");
    numSquares = 3;
    colors = generateRandomColors(numSquares);
    pickedColor= pickColor();
    colorDisplay.textContent = pickedColor;
    for(let i=0; i<squares.length;i++) {
        if(colors[i]) {
            squares[i].style.backgroundColor = colors[i];            
        }else {
            squares[i].style.display = "none";
        }
    }
});

hardBtn.addEventListener("click", function() {
    easyBtn.classList.remove("selected");
    this.classList.add("selected");
    numSquares = 6;
    colors = generateRandomColors(numSquares);
    pickedColor= pickColor();
    colorDisplay.textContent = pickedColor;
    for(let i=0; i<squares.length;i++) {
          squares[i].style.backgroundColor = colors[i];  
          squares[i].style.display = "block";
    }
});
*/            

resetButton.addEventListener("click", function() {
    reset();
});

colorDisplay.textContent = pickedColor;

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
    var arr = [];
    for(var i=0; i<n; i++)
    {
        arr.push(randomColor());
    }
    return arr;
}

function randomColor() {
    var r=Math.floor(Math.random()* 256);
    var g=Math.floor(Math.random()* 256);
    var b=Math.floor(Math.random()* 256);
    return "rgb("+r+", "+ g+", "+b+")";
}