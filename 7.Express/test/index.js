let express = require("express");
var app = express();

app.get("/", function(req,res){
    res.send("The pig says 'Oink'");
});

app.get("/speak/:animal", function(req,res){
    let animal = req.params.animal.toLowerCase();
    let sounds = {
        pig : "Oink",
        cow : "Moo",
        dog : "Woof",
        cat : "I hate you human",
        goldfish: "..."
    }
    
    res.send("The " + animal + " says '" + sounds[animal] + "'");
        
});

app.get("/repeat/:message/:times", function(req, res){
    let message = req.params.message;
    let times= Number(req.params.times);
    var result = "";
    for(var i=0; i<times; i++) {
        result += "message ";
    }
    res.send(result);
});

app.get("*", function(req,res){
    res.send("Now you are in nothing");
});

app.listen(3000, function(){
    console.log("Server is running!!!");
});