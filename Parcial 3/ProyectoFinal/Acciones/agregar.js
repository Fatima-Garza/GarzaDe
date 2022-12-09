

document.getElementById('btnAgregar').addEventListener('click',async()=>{
    const form = new FormData(document.getElementById('formulario'))

    await fetch('./Consultas/Agregar.php',{
        method:'POST',
        body:form
    })
    swal('Empleado añadido con éxito!','','success')
    document.getElementById('formulario').reset()
})