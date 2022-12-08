document.getElementById('btnAgregar').addEventListener('click',async()=>{
    const form = new FormData(document.getElementById('formulario'))
    const res =await fetch('./Consultas/Agregar.php',{
        method:'POST',
        body:form
    })
})