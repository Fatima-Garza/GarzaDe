/*window.onload = function () {
  document.getElementById("btnmenu").addEventListener("click", function () {
    console.log("click en el boton, exito");
    document.getElementsByClassName("sidebar")[0].classList.toggle("escondido");
  });
};*/

window.onload = function () {
  const btnAjax = document.querySelector("#btnajax");
  const btnReset = document.querySelector("#btnreset");

  btnAjax.addEventListener("click", () => {
    var solicitud = new XMLHttpRequest();
    solicitud.onreadystatechange = function () {
      if (solicitud.readyState == 4 && solicitud.status == 200) {
        document.getElementById("Hola").innerHTML = solicitud.responseText;
      }
    };
    solicitud.open("GET", "01_cargarArchivo.txt", true);
    solicitud.send();
  });
  btnReset.addEventListener("click", () => {
    document.querySelector("#Hola").innerHTML = "Este es un Header nivel 2";
  });
};