function mostrar_categoria(categoria) {
    let elementos = document.getElementsByClassName('produto');
    console.log(elementos);
    for (let i=0; i<elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:inline-block";
        else
            elementos[i].style = "display:none";
    }
}

let mostrar_todos =()=>{
    let elementos = document.getElementsByClassName('produto');
    for(let i=0; i<elementos.length; i++) {
        elementos[i].style = "display:inline-block";
    }
}

let aumentar = (imagem) => {
    console.log(imagem);
    if(imagem.width == 280)
        imagem.width = 120;
    else
        imagem.width = 280;
}