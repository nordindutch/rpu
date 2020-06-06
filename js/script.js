var button = document.getElementById('filter-on-off');
var filterOn = true;
//document.getElementById("filter-button").addEventListener("click", toggleFilter);

function toggleFilter() {
    if (filterOn == false) {
        document.getElementById("filter-box").style.display = "none";
        filterOn = true;
        document.getElementById('filter-on-off').style.borderBottom = "1.5vh solid black";
        document.getElementById('filter-on-off').style.borderTop = "none";
        console.log("hey");

    } else {
        document.getElementById("filter-box").style.display = "block";
        filterOn = false;
        document.getElementById('filter-on-off').style.borderBottom = "none";
        document.getElementById('filter-on-off').style.borderTop = "1.5vh solid black";
        console.log("ho");

    }
}