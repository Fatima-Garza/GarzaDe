document.getElementById('Eliminar').addEventListener('click',async()=>{
    const form = new FormData(document.getElementById('formulario'))
    await fetch('./Consultas/Eliminar.php',{
        method:'POST',
        body:form
    })
})