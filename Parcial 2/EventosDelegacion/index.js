/*var elem = document.getElementById("cont");
elem.addEventListener("click", cambiarCaja);
function cambiarCaja(evento) {
  console.log(evento);
  if (document.getElementById(evento.target.id).classList.contains("caja")) {
    document.getElementById(evento.target.id);
  }
}*/

var contenedor = document.querySelector("#cont");
contenedor.addEventListener("click", (e) => {
  e.target.classList.toggle("cajarosa");
});
