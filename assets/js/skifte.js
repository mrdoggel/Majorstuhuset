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
var oppdaterAnsatteKnapper = document.getElementsByClassName("oppdaterAnsatte");
var avbrytAnsatteKnapper = document.getElementsByClassName("avbrytAnsatte");
var oppdaterBestillingKnapper = document.getElementsByClassName("oppdaterBestilling");
var avbrytBestillingKnapper = document.getElementsByClassName("avbrytBestilling");
var avbrytHjemAdd = document.getElementById("avbrytHjemAdd");
var addHjem = document.getElementById("addHjem");
var avbrytAktueltAdd = document.getElementById("avbrytAktueltAdd");
var addAktuelt = document.getElementById("addAktuelt");
var avbrytAnsatteAdd = document.getElementById("avbrytAnsatteAdd");
var addAnsatte = document.getElementById("addAnsatte");
var avbrytBestillingAdd = document.getElementById("avbrytBestillingAdd");
var addBestilling = document.getElementById("addBestilling");
var footerfooter = document.getElementsByClassName("footerfooter");

footerfooter[0].addEventListener("click", function(){
    alert("yep")
});

addAnsatte.addEventListener("click", function(){
    document.getElementsByClassName("addContainerAnsatte")[0].style.display = "block";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        if (divs[i].getAttribute("id") != "noblur") {
            divs[i].classList.add("blur");
        }
    }
});

avbrytAnsatteAdd.addEventListener("click", function(){
    document.getElementsByClassName("addContainerAnsatte")[0].style.display = "none";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove("blur");
    }
});

addBestilling.addEventListener("click", function(){
    document.getElementsByClassName("addContainerBestilling")[0].style.display = "block";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        if (divs[i].getAttribute("id") != "noblur") {
            divs[i].classList.add("blur");
        }
    }
});

avbrytBestillingAdd.addEventListener("click", function(){
    document.getElementsByClassName("addContainerBestilling")[0].style.display = "none";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove("blur");
    }
});

addAktuelt.addEventListener("click", function(){
    document.getElementsByClassName("addContainerAktuelt")[0].style.display = "block";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        if (divs[i].getAttribute("id") != "noblur") {
            divs[i].classList.add("blur");
        }
    }
});

avbrytAktueltAdd.addEventListener("click", function(){
    document.getElementsByClassName("addContainerAktuelt")[0].style.display = "none";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove("blur");
    }
});

addHjem.addEventListener("click", function(){
    document.getElementsByClassName("addContainer")[0].style.display = "block";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        if (divs[i].getAttribute("id") != "noblur") {
            divs[i].classList.add("blur");
        }
    }
});

avbrytHjemAdd.addEventListener("click", function(){
    document.getElementsByClassName("addContainer")[0].style.display = "none";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove("blur");
    }
});

for (let i = 0; i < oppdaterBestillingKnapper.length; i++) {
    oppdaterBestillingKnapper[i].addEventListener("click", function(){
        var bestilling_innlegg_id = "bestilling_innlegg_";
        var bestilling_edit_id = "bestilling_edit_";
        bestilling_innlegg_id += oppdaterBestillingKnapper[i].getAttribute("name");
        bestilling_edit_id += oppdaterBestillingKnapper[i].getAttribute("name");
        let innlegg = document.getElementById(bestilling_innlegg_id);
        let edit = document.getElementById(bestilling_edit_id);
        console.log(innlegg)
        console.log(innlegg.getElementsByTagName("H2")[0])
        let height1 = innlegg.getElementsByTagName("H2")[0].clientHeight;
        let height2 = innlegg.getElementsByTagName("P")[0].clientHeight;
        innlegg.style.display = "none";
        edit.style.display = "block";
        edit.getElementsByTagName("textarea")[0].style.height = height1 + "px";
        edit.getElementsByTagName("textarea")[1].style.height = height2 + "px";
    });
}

for (let i = 0; i < avbrytBestillingKnapper.length; i++) {
    avbrytBestillingKnapper[i].addEventListener("click", function(){
        var bestilling_innlegg_id = "bestilling_innlegg_";
        var bestilling_edit_id = "bestilling_edit_";
        bestilling_edit_id += avbrytBestillingKnapper[i].getAttribute("name");
        bestilling_innlegg_id += oppdaterBestillingKnapper[i].getAttribute("name");
        document.getElementById(bestilling_edit_id).style.display = "none";
        document.getElementById(bestilling_innlegg_id).style.display = "block";
    });
}

for (let i = 0; i < oppdaterAnsatteKnapper.length; i++) {
    oppdaterAnsatteKnapper[i].addEventListener("click", function(){
        var ansatte_innlegg_id = "ansatte_innlegg_";
        var ansatte_edit_id = "ansatte_edit_";
        ansatte_innlegg_id += oppdaterAnsatteKnapper[i].getAttribute("name");
        ansatte_edit_id += oppdaterAnsatteKnapper[i].getAttribute("name");
        let innlegg = document.getElementById(ansatte_innlegg_id);
        let edit = document.getElementById(ansatte_edit_id);
        let height1 = innlegg.getElementsByTagName("H2")[0].clientHeight;
        let height2 = innlegg.getElementsByTagName("P")[0].clientHeight;
        let height3 = innlegg.getElementsByTagName("P")[1].clientHeight;
        console.log(innlegg.firstElementChild.firstElementChild)
        console.log(innlegg.getElementsByTagName("P")[1])
        innlegg.style.display = "none";
        edit.style.display = "block";
        edit.getElementsByTagName("textarea")[0].style.height = height1 + "px";
        edit.getElementsByTagName("textarea")[1].style.height = height2 + "px";
        edit.getElementsByTagName("textarea")[2].style.height = height3 + "px";
    });
}

for (let i = 0; i < avbrytAnsatteKnapper.length; i++) {
    avbrytAnsatteKnapper[i].addEventListener("click", function(){
        var ansatte_innlegg_id = "ansatte_innlegg_";
        var ansatte_edit_id = "ansatte_edit_";
        ansatte_edit_id += avbrytAnsatteKnapper[i].getAttribute("name");
        ansatte_innlegg_id += oppdaterAnsatteKnapper[i].getAttribute("name");
        document.getElementById(ansatte_innlegg_id).style.display = "block";
        document.getElementById(ansatte_edit_id).style.display = "none";
    });
}

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

for (let i = 0; i < aktuelle.length; i++) {
    aktuelle[i].addEventListener("click", function(){
        let aktuellId = i;
        aktuelle[i].parentElement.parentElement.classList.remove("welcome");
        aktuelle[i].parentElement.parentElement.parentElement.firstElementChild.style.display = "none";
        for (let j = 0; j < aktuelle.length; j++) {
            if (j != aktuellId) {
                aktuelle[j].parentElement.parentElement.style.display = "none";
                hjem.parentElement.classList.remove("active");
                ansatte.parentElement.classList.remove("active");
                bestilling.parentElement.classList.remove("active");
                aktuelt.parentElement.classList.remove("active");
                hjemDiv.style.display = "none";
                ansatteDiv.style.display = "none";
                bestillingDiv.style.display = "none";
            }
        }
        window.scrollTo(0, 330);
    });
}
	
hjem.addEventListener("click", function(){
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
});
ansatte.addEventListener("click", function(){
    ansatte.parentElement.classList.add("active");
    hjem.parentElement.classList.remove("active");
    bestilling.parentElement.classList.remove("active");
    aktuelt.parentElement.classList.remove("active");
    ansatteDiv.style.display = "block";
    hjemDiv.style.display = "none";
    bestillingDiv.style.display = "none";
    aktueltDiv.style.display = "none";
    window.scrollTo(0, 330);
});

bestilling.addEventListener("click", function(){
    bestilling.parentElement.classList.add("active");
    hjem.parentElement.classList.remove("active");
    ansatte.parentElement.classList.remove("active");
    aktuelt.parentElement.classList.remove("active");
    bestillingDiv.style.display = "block";
    hjemDiv.style.display = "none";
    ansatteDiv.style.display = "none";
    aktueltDiv.style.display = "none";
    window.scrollTo(0, 330);
});

aktuelt.addEventListener("click", function(){
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
});