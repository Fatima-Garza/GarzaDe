window.onload = function () {
  document.getElementById("btnmenu").addEventListener("click", function () {
    console.log("click en el boton, exito");
    document.getElementsByClassName("sidebar")[0].classList.toggle("escondido");
  });
};
