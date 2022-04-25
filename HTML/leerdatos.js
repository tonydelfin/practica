function leeDatos(){
    let nombre = document.getElementById("nombre").value;
    var numero=  Number(document.getElementById("numero").value);

    console.log(nombre);
    console.log(numero);
    
    for(var i= 0;i<numero;i++){
    
        var newDiv = document.createElement("p");
        var newContent = document.createTextNode(nombre);
        
        newDiv.appendChild(newContent); 
        document.getElementById("respuesta").appendChild(newDiv)
    }
    
}