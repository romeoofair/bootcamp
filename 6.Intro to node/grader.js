let sum = 0;
function average(scores){
    scores.forEach(score => {
        sum+= score;
    });
    let avg= sum/scores.length;
    return Math.round(avg);
}

let scores = [90, 98, 89, 100, 100, 86, 94];

console.log(average(scores));
