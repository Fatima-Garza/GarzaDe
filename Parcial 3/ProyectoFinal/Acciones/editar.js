document.getElementById('btnEditar').addEventListener('click',async()=>{
    const form = new FormData(document.getElementById('formulario'))
   await fetch('./Consultas/Editar.php',{
        method:'POST',
        body:form
    })
    
})