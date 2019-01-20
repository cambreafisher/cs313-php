function congrats () {
    document.getElementById("result").innerHTML = "That sounds amazing!";
}
function showDiv(divID) {
    let x = document.getElementById(divID);
    if (x.style.display === 'none') {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}