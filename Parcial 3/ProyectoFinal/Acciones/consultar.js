document.getElementById('consultar-Emp').addEventListener('click',async()=>{
    const form = new FormData(document.getElementById('formulario'))
    const res =await fetch('./Consultas/consultar.php',{
        method:'POST',
        body:form
    })
    let data= await res.json()
    console.log(data)

})

