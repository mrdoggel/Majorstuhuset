document.addEventListener("DOMContentLoaded", function(event) { 
    switch(localStorage.getItem('page')) {
    case "home":
      setHjem(); 
      break;
    case "ansatte":
      setAnsatte();
      break;
    case "bestilling":
      setBestilling();
      break;
    case "aktuelt":
      setAktuelt();
      break;
  }
   var scrollpos = localStorage.getItem('scrollpos');
   if (scrollpos) window.scrollTo(0, scrollpos);
 });

window.onbeforeunload = function(e) {
  localStorage.setItem('scrollpos', window.scrollY);
};