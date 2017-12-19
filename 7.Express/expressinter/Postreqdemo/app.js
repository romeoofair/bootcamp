let express = require("express");
let app = express();
var bodyParser = require("body-parser");

app.use(bodyParser.urlencoded({extended: true}));
app.set("view engine", "ejs");

let friends=["Tony", "Mirinda", "fanta", "pepsi", "cola"];

app.get("/",function(req, res){
    res.render("home");
});

app.get("/friends", function(req,res){
    res.render("friends",{friends: friends});
});

app.post("/addFriend", function(req,res){
    let newFriend = req.body.newfriend;
    friends.push(newFriend);
    res.redirect("/friends");
});

app.listen(3000, function(){
    console.log("server has been started!!");
});