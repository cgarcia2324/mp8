var fs =4;

function p(){
    fs = fs-0.5;
    document.getElementById("t").style.fontSize=(fs+"rem");
    //alert(fs+" rem");
}
function m(){
    fs = fs;
    document.getElementById("t").style.fontSize=(fs+"rem");
    //alert(fs+" rem");
}
function g(){
    fs = fs+0.5;
    document.getElementById("t").style.fontSize=(fs+"rem");
    //alert(fs+" rem");
}
document.getElementById("p").addEventListener("click", p);
document.getElementById("m").addEventListener("click", m);
document.getElementById("g").addEventListener("click", g);