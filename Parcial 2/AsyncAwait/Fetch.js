const generarGato = document.querySelector(".btnGenerarGato");
const imagenGato = document.querySelector(".ImagenGato");

generarGato.addEventListener("click", () => {
  fetch("https://cataas.com/cat").then((data) => {
    imagenGato.src = data.url;
    console.log(data);
  });
});
