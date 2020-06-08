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

    } else {
        document.getElementById("filter-box").style.display = "block";
        filterOn = false;
        document.getElementById('filter-on-off').style.borderBottom = "1.5vh solid black";
        document.getElementById('filter-on-off').style.borderTop = "none";

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
var idArray = ["one", "two", "three", "four", "five", "six"];

function cackle() {
    idArray.forEach(loadQuestion);
}

function loadQuestion(item, index) {
    var qblock = document.getElementById(item);
    qblock.innerHTML = "<h3>" + questions[index].question + "</h3>";
    questions[index].list.forEach(questionList);

    function questionList(x, y) {
        qblock.innerHTML += "<h4>" + x.prop + "</h4>" + "<input placeholder='Insert number from 1 to 5...' max='5' min='1' type='number' class='" + y + "'></input>";
    }
}
var grabNumber;
var results = [{ value: 0, type: "Tactician", meaning: "Lorem Ipsum" }, { value: 0, type: "Storyteller", meaning: "Lorem Ipsum" }, { value: 0, type: "Roleplayer", meaning: "Lorem Ipsum" }, { value: 0, type: "Fiction-Forward", meaning: "Lorem Ipsum" }, { value: 0, type: "Chance-Forward", meaning: "Lorem Ipsum" }, { value: 0, type: "Numbers-Forward", meaning: "Lorem Ipsum" }];
var filled = false;

function displayType() {
    results.forEach(calcScores);
    var high = results.filter(function(el) {
        return el.value >= 21;
    })
    var mid = results.filter(function(el) {
        return el.value < 21 &&
            el.value >= 15;
    })
    var low = results.filter(function(el) {
        return el.value < 10;
    })
    var miss = results.filter(function(el) {
        return isNaN(el.value);
    })

    calcResults();


    function calcResults() {
        if (miss.length == 0) {
            $('html, body').animate({ scrollTop: 0 }, 500);
            $('#test-form').animate({ opacity: 0 }, 250);
            $('#test-form').animate({ height: 0 }, 250);
            setTimeout(mainAction, 750);

            function mainAction() {
                if (high.length > 2) {
                    document.getElementById('test-results').innerHTML += "<p>You are very varied in your player type. You have a high match with the following categories: </p>";
                    high.forEach(function(i, x) { if (x != (high.length - 1)) { document.getElementById('test-results').innerHTML += "<div class='result-title'>" + i.type + ", </div>" } else { document.getElementById('test-results').innerHTML += "<div class='result-title'>" + i.type + "</div>" } })
                } else if (high.length == 2) {
                    document.getElementById('test-results').innerHTML += "<p>There are two player types which really seem to speak to you. First is <b>'" + high[0].type + "'</b>. What this player type means is " + high[0].meaning + ". Then there is <b>'" + high[1].type + "'</b>. This means " + high[1].meaning + ".</p>";

                } else if (high.length == 2) {
                    document.getElementById('test-results').innerHTML += "<p>There are two player types which really seem to speak to you. First is <b>'" + high[0].type + "'</b>. What this player type means is " + high[0].meaning + ". Then there is <b>'" + high[1].type + "'</b>. This means " + high[1].meaning + ".</p>";
                } else if (high.length == 1) {
                    document.getElementById('test-results').innerHTML += "<p>There is one player type that's at the forefront of your results and that is <b>'" + high[0].type + "'</b>. What this player type means is " + high[0].meaning + ".";
                } else {
                    document.getElementById('test-results').innerHTML += "<p>Well, no player type really jumps out for you, but that's fine. It doesn't mean you aren't passionate towards any game, just that you share your passion around. These player types scored best for you:</p>";
                    mid.forEach(function(i, x) { if (x != (mid.length - 1)) { document.getElementById('test-results').innerHTML += "<div class='result-title'>" + i.type + ", </div>" } else { document.getElementById('test-results').innerHTML += "<div class='result-title'>" + i.type + "</div>" } })

                }
                if (low.length > 1) {
                    document.getElementById('test-results').innerHTML += "<p>There are at least two types of player that you absolutely aren't, namely '<b>" + low[0].type + "</b>' and '<b>" + low[1].type + "</b>'. No sweat about it. Everybody has things they don't like as much as others.</p>";
                } else if (low.length == 1) {
                    document.getElementById('test-results').innerHTML += "<p>There is at least one type of player that you absolutely aren't and that is <b>'" + low[0].type + "'</b>. What this player type means is " + low[0].meaning + ". Did you expect that? This test is not definitive, so if you think the result was wrong then so be it. As long as you enjoy the games you play.</p>";
                }
                if (high.length == 0 && mid.length == 0 && low.length == 0) {
                    document.getElementById('test-results').innerHTML += "<p>It almost seems like you tried to get this result. You don't seem opposed to any type, but you also don't fall within any of them. It's definitely curious. It just means that you can't be defined, which is kind of cool. You are definitely quite unique.</p>";
                }
                document.getElementById('test-form').style.display = "none";
                document.getElementById('test-results').style.display = "block";
            }
        } else {
            document.getElementById('submitter').innerHTML = "Fill in more";
            $('#submitter').animate({ left: "-10px" }, 75, "linear");
            $('#submitter').animate({ left: "10px" }, 75, "linear");
            $('#submitter').animate({ left: "0px" }, 75, "linear");
            setTimeout(function() { document.getElementById('submitter').innerHTML = "Submit Test"; }, 2500);
        }

    }

    function calcScores(item, index) {
        var endResult = 0;
        grabNumber = document.getElementsByClassName(index);
        grabNumber = Array.from(grabNumber);
        grabNumber.forEach(valueCalc);
        item.value = endResult;

        function valueCalc(a, b) {
            var temp;
            if (parseInt(a.value, 10) < 1) {
                temp = 1;
            } else if (parseInt(a.value, 10) > 5) {
                temp = 5;
            } else {
                temp = parseInt(a.value, 10);
            }
            endResult = endResult + temp;
        }
    }
}