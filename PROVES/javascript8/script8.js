function sol(){
    document.body.style.background="yellow";
    document.getElementById("lluna").style.background="yellow";
}
function lluna(){
    document.body.style.background="black";
    document.getElementById("lluna").style.background="black";
}
document.getElementById("sol").addEventListener("click", sol);
document.getElementById("lluna").addEventListener("click", lluna);