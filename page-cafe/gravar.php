<?php
//print_r($_FILE['arquivo']);
$nomedoarquivo = $_FILES['arquivo']['name'];
$arquivos = $_FILES['arquivo']['tmp_name'];
$salvar = 'img/'.$nomedoarquivo;
$novonome = 'imagem1.jpg';
if(move_uploaded_file($arquivos, $salvar)){
    echo "arquivo salvo";
}else{echo"arquivo não carregado";
}

?>