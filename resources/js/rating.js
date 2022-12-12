// Global variable
const MAX_STARS = 5;
const CURR_STYLE = "px-0 py-0 border-0 bg-transparent";
var ratings = [];

function changeStar(index){
    for(var i = 1;i <= MAX_STARS;i++){
        if(i <= index) ratings[i-1].className = CURR_STYLE + " text-custom-star";
        else ratings[i-1].className = CURR_STYLE + " text-secondary";
    }
}

function handleRate(e){
    var index = e.currentTarget.value;
    changeStar(index);
    document.getElementById('input-rating').value = index;
}

document.addEventListener('DOMContentLoaded', function () {
    for(var i = 1;i <= MAX_STARS;i++){
        ratings.push(document.getElementById('rate-' + i));
        if(ratings[i-1]){
            ratings[i-1].addEventListener('click', handleRate);
        }
    }
    var el = document.getElementById('input-rating');
    if(el){
        changeStar(el.value);
    }
});