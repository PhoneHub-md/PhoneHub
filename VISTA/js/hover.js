const elements = document.querySelectorAll(".nav");

elements.forEach(element => {
  element.addEventListener("mouseover", nav);
});

elements.forEach(element => {
  element.addEventListener("mouseout", nav2);
});




function nav(e){
    var boton = e.target;
    boton.style.color="white";
    
    
}

function nav2(e){
  var boton = e.target;
  boton.style.color="lightgray";
}
