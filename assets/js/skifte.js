var hjem = document.getElementById("hjem");
var ansatte = document.getElementById("ansatte");
var bestilling = document.getElementById("bestilling");
var aktuelt = document.getElementById("aktuelt");
var hjemDiv = document.getElementById("hjemDiv");
var ansatteDiv = document.getElementById("ansatteDiv");
var bestillingDiv = document.getElementById("bestillingDiv");
var aktueltDiv = document.getElementById("aktueltDiv");
var aktuelle = document.getElementsByClassName("aktuelt");
var oppdaterHjemKnapper = document.getElementsByClassName("oppdaterHjem");
var avbrytHjemKnapper = document.getElementsByClassName("avbrytHjem");
var oppdaterAktueltKnapper = document.getElementsByClassName("oppdaterAktuelt");
var avbrytAktueltKnapper = document.getElementsByClassName("avbrytAktuelt");

for (let i = 0; i < oppdaterAktueltKnapper.length; i++) {
    oppdaterAktueltKnapper[i].addEventListener("click", function(){
        var aktuelt_innlegg_id = "aktuelt_innlegg_";
        var aktuelt_edit_id = "aktuelt_edit_";
        aktuelt_innlegg_id += oppdaterAktueltKnapper[i].getAttribute("name");
        aktuelt_edit_id += oppdaterAktueltKnapper[i].getAttribute("name");
        let innlegg = document.getElementById(aktuelt_innlegg_id);
        let edit = document.getElementById(aktuelt_edit_id);
        let height1 = innlegg.firstElementChild.clientHeight;
        let height2 = innlegg.getElementsByTagName("P")[1].clientHeight;
        console.log(innlegg.firstElementChild)
        console.log(innlegg.getElementsByTagName("P")[1])
        innlegg.style.display = "none";
        edit.style.display = "block";
        edit.getElementsByTagName("textarea")[0].style.height = height1 + "px";
        edit.getElementsByTagName("textarea")[1].style.height = height2 + "px";
        
    });
}

for (let i = 0; i < avbrytAktueltKnapper.length; i++) {
    avbrytAktueltKnapper[i].addEventListener("click", function(){
        var aktuelt_innlegg_id = "aktuelt_innlegg_";
        var aktuelt_edit_id = "aktuelt_edit_";
        aktuelt_edit_id += avbrytAktueltKnapper[i].getAttribute("name");
        aktuelt_innlegg_id += oppdaterAktueltKnapper[i].getAttribute("name");
        document.getElementById(aktuelt_innlegg_id).style.display = "block";
        document.getElementById(aktuelt_edit_id).style.display = "none";
    });
}

for (let i = 0; i < oppdaterHjemKnapper.length; i++) {
    oppdaterHjemKnapper[i].addEventListener("click", function(){
        var hjem_innlegg_id = "hjem_innlegg_";
        var hjem_edit_id = "hjem_edit_";
        hjem_innlegg_id += oppdaterHjemKnapper[i].getAttribute("name");
        hjem_edit_id += oppdaterHjemKnapper[i].getAttribute("name");
        let innlegg = document.getElementById(hjem_innlegg_id);
        let edit = document.getElementById(hjem_edit_id);
        let height1 = innlegg.firstElementChild.clientHeight;
        let height2 = innlegg.getElementsByTagName("P")[0].clientHeight;
        innlegg.style.display = "none";
        edit.style.display = "block";
        edit.getElementsByTagName("textarea")[0].style.height = height1 + "px";
        edit.getElementsByTagName("textarea")[1].style.height = height2 + "px";
        
    });
}

for (let i = 0; i < avbrytHjemKnapper.length; i++) {
    avbrytHjemKnapper[i].addEventListener("click", function(){
        var hjem_innlegg_id = "hjem_innlegg_";
        var hjem_edit_id = "hjem_edit_";
        hjem_edit_id += avbrytHjemKnapper[i].getAttribute("name");
        hjem_innlegg_id += oppdaterHjemKnapper[i].getAttribute("name");
        document.getElementById(hjem_innlegg_id).style.display = "block";
        document.getElementById(hjem_edit_id).style.display = "none";
    });
}

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");
var navbarFiller = document.getElementById("navbarFiller");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    navbarFiller.style.display = "block";
  } else {
    navbar.classList.remove("sticky");
    navbarFiller.style.display = "none";
  }
}

function resetAktive(){
    for (let i = 0; i < aktuelle.length; i++) {
        aktuelle[i].parentElement.parentElement.parentElement.style.display = "block";
    }
}

for (let i = 0; i < aktuelle.length; i++) {
    aktuelle[i].addEventListener("click", function(){
        let aktuellId = i;
        aktuelle[i].parentElement.parentElement.parentElement.classList.remove("welcome");
        aktuelle[i].parentElement.parentElement.parentElement.parentElement.firstElementChild.style.display = "none";
        for (let j = 0; j < aktuelle.length; j++) {
            if (j != aktuellId) {
                aktuelle[j].parentElement.parentElement.parentElement.style.display = "none";
                hjem.parentElement.parentElement.classList.remove("active");
                ansatte.parentElement.parentElement.classList.remove("active");
                bestilling.parentElement.parentElement.classList.remove("active");
                aktuelt.parentElement.parentElement.classList.remove("active");
                hjemDiv.style.display = "none";
                ansatteDiv.style.display = "none";
                bestillingDiv.style.display = "none";
            }
        }
        window.scrollTo(0, 330);
    });
}
	
hjem.addEventListener("click", setHjem);
function setHjem(){
    resetAktive()
    localStorage.setItem("page", "hjem");
    hjem.parentElement.classList.add("active");
    ansatte.parentElement.classList.remove("active");
    bestilling.parentElement.classList.remove("active");
    aktuelt.parentElement.classList.remove("active");
    hjemDiv.style.display = "block";
    aktueltDiv.style.display = "block";
    ansatteDiv.style.display = "none";
    bestillingDiv.style.display = "none";
    aktueltDiv.firstElementChild.style.display = "block";
    for (let j = 0; j < aktuelle.length; j++) {
        aktuelle[j].parentElement.parentElement.style.display = "block";
    }
    let articles = aktueltDiv.querySelectorAll(".article"); 
    for (let i = 0; i < articles.length; i++) {
        articles[i].classList.add("welcome"); 
    }
    window.scrollTo(0, 330);
}
ansatte.addEventListener("click", setAnsatte); 
function setAnsatte(){
    resetAktive()
    localStorage.setItem("page", "ansatte");
    ansatte.parentElement.classList.add("active");
    hjem.parentElement.classList.remove("active");
    bestilling.parentElement.classList.remove("active");
    aktuelt.parentElement.classList.remove("active");
    ansatteDiv.style.display = "block";
    hjemDiv.style.display = "none";
    bestillingDiv.style.display = "none";
    aktueltDiv.style.display = "none";
    window.scrollTo(0, 330);
}

bestilling.addEventListener("click", setBestilling);
function setBestilling(){
    resetAktive()
    localStorage.setItem("page", "bestilling");
    bestilling.parentElement.classList.add("active");
    hjem.parentElement.classList.remove("active");
    ansatte.parentElement.classList.remove("active");
    aktuelt.parentElement.classList.remove("active");
    bestillingDiv.style.display = "block";
    hjemDiv.style.display = "none";
    ansatteDiv.style.display = "none";
    aktueltDiv.style.display = "none";
    window.scrollTo(0, 330);
}

aktuelt.addEventListener("click", setAktuelt);
function setAktuelt(){
    resetAktive()
    localStorage.setItem("page", "aktuelt");
    aktuelt.parentElement.classList.add("active");
    hjem.parentElement.classList.remove("active");
    ansatte.parentElement.classList.remove("active");
    bestilling.parentElement.classList.remove("active");
    aktueltDiv.style.display = "block";
    hjemDiv.style.display = "none";
    ansatteDiv.style.display = "none";
    bestillingDiv.style.display = "none";
    aktueltDiv.firstElementChild.style.display = "none";
    for (let j = 0; j < aktuelle.length; j++) {
        aktuelle[j].parentElement.parentElement.style.display = "block";
    }
    let articles = aktueltDiv.querySelectorAll(".article"); 
    for (let i = 0; i < articles.length; i++) {
        articles[i].classList.remove("welcome"); 
    }
    window.scrollTo(0, 330);
}