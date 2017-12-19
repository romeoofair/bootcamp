let express = require("express");
let app = express();
app.set("view engine", "ejs");

app.get("/", function(req, res){
    res.render("landing");
});

app.get("/campgrounds", function(req,res){
    let campgrounds = [
        {name: "venice", image: "http://www.telegraph.co.uk/content/dam/Travel/Destinations/Europe/Italy/Venice/venice-restaurants-by-canal-xlarge.jpg"},
        {name: "italy", image: "https://cdn.tourradar.com/s3/tour/original/79329_51048c99.jpg"},
        {name: "st Petersberg", image: "http://static2.businessinsider.com/image/55f1b6509dd7cc25008b969b-1200/st-petersburg-savior-of-spilt-blood-chruch.jpg"}
    ]
    res.render("campgrounds", {campgrounds: campgrounds});
});

app.listen(3000, function(){
    console.log("YelpCampServer is running");
});