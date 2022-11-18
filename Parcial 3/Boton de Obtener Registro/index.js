window.onload = () => {

    const boton = document.querySelector('#btnCargarDatos');

    boton.addEventListener('click', async() => {
        alert('Hola mundo');
        const data = await fetch('./data.php');
        const datos = await data.json();
        console.log(datos);

        document.querySelector('#InputData').value = datos.Nombre;
    })


}