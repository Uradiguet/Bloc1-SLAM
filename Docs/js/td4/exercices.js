'use strict'

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX1 : Background-color

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const $=function(id){
    return document.getElementById(id)
}

const bt = $("bt-bg");
bt.addEventListener("click", function f() {
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    const randomFontColor = Math.floor(Math.random()*16777215).toString(16);
    document.body.style.backgroundColor = "#" + randomColor;
    document.body.style.color = "#" + randomFontColor;
});

document.getElementById("bt-bg2").addEventListener("click", function(){
    const color = document.getElementById("select-color").value;
    document.body.style.backgroundColor=color;
})

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX2 : Add-select

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const add = $("bt-add");
add.addEventListener("click", function(){
    document.querySelectorAll(".list").forEach(
        (elm)=>{
            const li = document.createElement(elm.tagName=="SELECT"?"option":"li");
            li.innerText=$("select-text").value;
            elm.appendChild(li);
    });
});


//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX3

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------






































/*

$("bt-clear").addEventListener("click", function(){
    document.body.innerHTML="";
});

$("bt-dom").addEventListener("click", function(){
    const h2=document.createElement("h2");
    h2.innerText=("SOUS TITRE AJOUTÉ DYNAMIQUEMENT");
    $("content").appendChild(h2);
    const img = document.createElement("img");
    img.src="https://static.wikia.nocookie.net/joueur-du-grenier/images/4/43/David_Good.jpg/revision/latest/scale-to-width-down/1200?cb=20200629174229&path-prefix=fr"
    img.style.width="200px";
    $("content").appendChild(img);
});

*/