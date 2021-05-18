if (document.addEventListener) {
    document.addEventListener("DOMContentLoaded", function() {
        loaded();
    });
} else if (document.attachEvent) {
    document.attachEvent("onreadystatechange", function() {
        loaded();
    });
}

function loaded() {

    setInterval(loop, 400);

}

var x = 0;

var titleText = ["H","Ho","Hom","Home","Home |","Home | C","Home | Ch","Home | Cha","Home | Chao","Home | Chaos","Home | ChaosS","Home | ChaosSc","Home | ChaosSch",
    "Home | ChaosSchw","Home | ChaosSchwe","Home | ChaosSchwei","Home | ChaosSchwein","Home | ChaosSchwe"
    ,"Home | ChaosSchw","Home | ChaosSch","Home | ChaosSc","Home | ChaosS","Home | Chaos","Home | Chao","Home | Cha","Home | Ch","Home | C","Home |","Home","Hom","Ho","H"];
function loop() {

    document.getElementsByTagName("title")[0].innerHTML = titleText[x++%titleText.length];

}
