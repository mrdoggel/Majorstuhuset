var hjem = document.getElementById("hjem");
var ansatte = document.getElementById("ansatte");
var bestilling = document.getElementById("bestilling");
var aktuelt = document.getElementById("aktuelt");
var hjemDiv = document.getElementById("hjemDiv");
var ansatteDiv = document.getElementById("ansatteDiv");
var bestillingDiv = document.getElementById("bestillingDiv");
var aktueltDiv = document.getElementById("aktueltDiv");
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
        let articles = aktueltDiv.querySelectorAll(".article"); 
        for (let i = 0; i < articles.length; i++) {
            articles[i].classList.add("welcome"); 
        }
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
        let articles = aktueltDiv.querySelectorAll(".article"); 
        for (let i = 0; i < articles.length; i++) {
            articles[i].classList.remove("welcome"); 
        }
    });