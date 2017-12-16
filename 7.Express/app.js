let express = require("express");
var app = express();

// "/" => "Hi there"
app.get("/", function(req,res){
    res.send("Hi there!");
});

// "/cat" => "Meow"
app.get("/cat", function(req,res){
    res.send("Hi there! Meow");
});

// "/dog" => "Bow"
app.get("/dog", function(req,res){
    console.log("someone req dog");
    res.send("Hi there! Bowww");
});

app.get("/r/:subredditName/comments/:id/:title/", function(req,res){
    //console.log(req.params);
    var subreddit = req.params.subredditName;
    res.send("Welcome to " + subreddit.toUpperCase() + " Subreddit!!");
});

app.get("*", function(req,res){
    res.send("You are a banger!!");
});

//listen to the request

app.listen(3000, function(){
    console.log("Server has started");
});

//if in case of cloud 9, process.env.PORT, process.env.IP in place of port no 