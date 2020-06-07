var button = document.getElementById('filter-on-off');
var filterOn = true;
var infoOn = false;
//document.getElementById("filter-button").addEventListener("click", toggleFilter);
var prevScrollpos = window.pageYOffset;

function goTop() {
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("goto").style.opacity = "0";
    } else {
        document.getElementById("goto").style.opacity = "1";
    }
    prevScrollpos = currentScrollPos;
}

function toggleFilter() {
    if (filterOn == false) {
        document.getElementById("filter-box").style.display = "none";
        filterOn = true;
        document.getElementById('filter-on-off').style.borderBottom = "none";
        document.getElementById('filter-on-off').style.borderTop = "1.5vh solid black";
        console.log("hey");

    } else {
        document.getElementById("filter-box").style.display = "block";
        filterOn = false;
        document.getElementById('filter-on-off').style.borderBottom = "1.5vh solid black";
        document.getElementById('filter-on-off').style.borderTop = "none";
        console.log("ho");

    }
}

function info() {
    if (infoOn == false) {
        document.getElementById("dark").style.display = "flex";
        infoOn = true;
    } else {
        document.getElementById("dark").style.display = "none";
        infoOn = false;
    }

}