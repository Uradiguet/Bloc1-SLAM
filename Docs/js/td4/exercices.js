'use strict'

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX1 : Background-color

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const $=(id)=>document.getElementById(id);

const addEvt=function (type,id,listener){
    const elm=$(id);
    elm && elm.addEventListener(type,listener);
};

addEvt("click","bt-bg", function() {
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    const randomFontColor = Math.floor(Math.random()*16777215).toString(16);
    document.body.style.backgroundColor = "#" + randomColor;
    document.body.style.color = "#" + randomFontColor;
});

addEvt("click","bt-bg2", function(){
    const color = document.$("select-color").value;
    document.body.style.backgroundColor=color;
})


//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX2 : Add-select

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

addEvt("click","bt-add",function(){
    document.querySelectorAll(".liste").forEach(
    (elm)=>{
        const tagName=elm.tagName=="Select"?"option":"li";
    const li=document.createElement("li");
    li.innerText=$("selected-text").value;
    elm.appendChild(li);
    }  
    );
});


//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX3

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------


const addition=()=>{
    const nombre1=parseFloat($("number1").value);
    const nombre2=parseFloat($("number2").value);
    const resultat=nombre1+nombre2;
    $("resultat").textContent=resultat;
};
addEvt("click", "calcul", addition);

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX4

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const SelectImage=()=>{
    const ImageSelector=$("imageSelector");
    const DisplayedImage=$("displayedImage");

    const selectedValue=ImageSelector.value;
    DisplayedImage.src=selectedValue;
};
addEvt("change", "imageSelector", SelectImage);

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX5

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const afficherAlerte=()=>{
    alert("0100 1011 1000 1010 0001 0010 0110 1111 1110 0000 1100 0011");
    alert("Vous étiez pourtant prévenu !");
};
addEvt("mouseover", "titre", afficherAlerte);

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX6

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

function Horloge(){
    const horlogeElement=$('horloge');
    const maintenant=new Date();
    const heures=maintenant.getHours().toString().padStart(2, '0');
    const minutes=maintenant.getMinutes().toString().padStart(2, '0');
    const secondes=maintenant.getSeconds().toString().padStart(2, '0');
    const heureActuelle=`${heures}:${minutes}:${secondes}`;
    horlogeElement.textContent=heureActuelle;
}
setInterval(Horloge, 1000);
Horloge();

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX7

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

addEvt('click', 'boutonSupprimer', function () {
    const confirmation=confirm("Voulez-vous supprimer cet élément ?");
    if (confirmation){
        const elementASupprimer = $('boutonSupprimer');
        elementASupprimer.parentNode.removeChild(elementASupprimer);
        alert("L'élément a été supprimé.");
    } else{
        alert("L'élément n'a pas été supprimé.");
    }
});

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX8

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const cacherOuAfficherTexte=()=>{
    const checkbox=$("checkbox");
    const texte=$("texte");
    if(checkbox.checked){
        texte.style.display = "block";
    } else{
        texte.style.display = "none";
    }
};
addEvt("change", "checkbox", cacherOuAfficherTexte);

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

//EX9

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------

const envoyerFormulaire=(e)=>{
    e.preventDefault();
    const nom = $("nom").value;
    const email = $("email").value;
    const message = $("message").value;
    console.log("Nom :", nom);
    console.log("E-mail :", email);
    console.log("Message :", message);
};
addEvt("submit", "contactForm", envoyerFormulaire);


