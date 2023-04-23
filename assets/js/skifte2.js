var avbrytAktueltAdd = document.getElementById("avbrytAktueltAdd");
var addAktuelt = document.getElementById("addAktuelt");
var avbrytAnsatteAdd = document.getElementById("avbrytAnsatteAdd");
var addAnsatte = document.getElementById("addAnsatte");
var avbrytBestillingAdd = document.getElementById("avbrytBestillingAdd");
var addBestilling = document.getElementById("addBestilling");
var footerfooter = document.getElementsByClassName("footerfooter");
var avbrytLogin = document.getElementById("avbrytLogin");
var oppdaterKontakt = document.getElementById("oppdaterKontakt");
var avbrytKontakt = document.getElementById("avbrytSidebar");
var oppdaterApningstider = document.getElementById("oppdaterApningstider");
var avbrytApningstider = document.getElementById("avbrytApningstider");
var oppdaterAnsatteKnapper = document.getElementsByClassName("oppdaterAnsatte");
var avbrytAnsatteKnapper = document.getElementsByClassName("avbrytAnsatte");
var oppdaterBestillingKnapper = document.getElementsByClassName("oppdaterBestilling");
var avbrytBestillingKnapper = document.getElementsByClassName("avbrytBestilling");
var avbrytHjemAdd = document.getElementById("avbrytHjemAdd");
var addHjem = document.getElementById("addHjem");

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

oppdaterApningstider.addEventListener("click", function(){
  var apningstider_innlegg_id = "apningstider_innlegg_";
  var apningstider_edit_id = "apningstider_edit_";
  apningstider_innlegg_id += oppdaterApningstider.getAttribute("name");
  apningstider_edit_id += avbrytApningstider.getAttribute("name");
  let innlegg = document.getElementById(apningstider_innlegg_id);
  let edit = document.getElementById(apningstider_edit_id);
  let height1 = innlegg.getElementsByClassName("text1")[0].clientHeight;
  innlegg.style.display = "none";
  edit.style.display = "block";
  edit.getElementsByTagName("textarea")[0].style.height = height1 + "px";
});

avbrytApningstider.addEventListener("click", function(){
  var apningstider_innlegg_id = "apningstider_innlegg_";
  var apningstider_edit_id = "apningstider_edit_";
  apningstider_edit_id += avbrytApningstider.getAttribute("name");
  apningstider_innlegg_id += oppdaterApningstider.getAttribute("name");
  document.getElementById(apningstider_edit_id).style.display = "none";
  document.getElementById(apningstider_innlegg_id).style.display = "block";
});

oppdaterKontakt.addEventListener("click", function(){
  console.log("oppdater")
  var sidebar_innlegg_id = "sidebar_innlegg_";
  var sidebar_edit_id = "sidebar_edit_";
  sidebar_innlegg_id += oppdaterKontakt.getAttribute("name");
  sidebar_edit_id += avbrytSidebar.getAttribute("name");
  let innlegg = document.getElementById(sidebar_innlegg_id);
  let edit = document.getElementById(sidebar_edit_id);
  let height1 = innlegg.getElementsByClassName("text1")[0].clientHeight;
  let height2 = innlegg.getElementsByClassName("text2")[0].clientHeight;
  innlegg.style.display = "none";
  edit.style.display = "block";
  edit.getElementsByTagName("textarea")[0].style.height = height1 + "px";
  edit.getElementsByTagName("textarea")[1].style.height = height2 + "px";
});

avbrytSidebar.addEventListener("click", function(){
  var sidebar_innlegg_id = "sidebar_innlegg_";
  var sidebar_edit_id = "sidebar_edit_";
  sidebar_edit_id += avbrytSidebar.getAttribute("name");
  sidebar_innlegg_id += oppdaterKontakt.getAttribute("name");
  document.getElementById(sidebar_edit_id).style.display = "none";
  document.getElementById(sidebar_innlegg_id).style.display = "block";
});

footerfooter[0].addEventListener("click", function(){
    document.getElementsByClassName("loginContainer")[0].style.display = "block";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        if (divs[i].getAttribute("id") != "noblur") {
            divs[i].classList.add("blur");
        }
    }
});

avbrytLogin.addEventListener("click", function(){
    document.getElementsByClassName("loginContainer")[0].style.display = "none";
    let divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove("blur");
    }
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