
let navmenu = document.getElementsByClassName("nav-menu");
let ul = document.getElementsByTagName("ul");
let li = document.getElementsByTagName("li");


window.onload=function(){
    let bouton = document.getElementsByClassName('navbar');
    let nav = document.getElementsByClassName('nav-toggle');
    bouton.onclick = function(e){
        if(nav.style.display ==="block"){
            nav.style.display = "none";
        }else{
            nav.style.display = "block";
        }
    };
};