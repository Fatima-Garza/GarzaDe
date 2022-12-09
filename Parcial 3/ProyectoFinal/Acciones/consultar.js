

document.getElementById('consultar-Emp').addEventListener('click',async()=>{
    const form = new FormData(document.getElementById('formulario'))
    const res =await fetch('./Consultas/consultar.php',{
        method:'POST',
        body:form
    })
 
    let data= await res.json()
    //console.log(data)
    

    $('#NombreEmpleado').val(data.nombre)
    $('#ApellidoPa').val(data.ApellidoPa)
    $('#ApellidoMa').val(data.ApellidoMa)
    $('#FechaDeNac').val(data.FechaDeNac)
    $('#Edad').val(data.Edad)
    $('#Direccion').val(data.Direccion)
    $('#Colonia').val(data.Colonia)
    $('#Postal').val(data.CodigoP)
    $('#Correo').val(data.Correo)
    $('#NumeroCel').val(data.NumeroCel)
    $('#Curp').val(data.Curp)
    $('#Rfc').val(data.Rfc)
    $('#FechaDeIng').val(data.FechaDeIng)
    $('#Puesto').val(data.Puesto)
    $('#Area').val(data.Area)
    $('#Salario').val(data.Salario)
})

