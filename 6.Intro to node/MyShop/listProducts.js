var faker = require("faker");

for (let index = 0; index < 10; index++) {
    console.log(faker.commerce.productName()+ " - "+ faker.commerce.price());    
}
