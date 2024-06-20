function previewFile(inputId, imgId) {
    var input = document.getElementById(inputId); // Captura o elemento input pelo ID
    var file = input.files[0]; // Captura o arquivo selecionado

    var reader = new FileReader(); // Inicializa o FileReader

    reader.onload = function(e) {
        // Quando o arquivo é carregado, atualiza a imagem na pré-visualização
        document.getElementById(imgId).setAttribute('src', e.target.result);
    };

    // Verifica se foi selecionado um arquivo
    if (file) {
        reader.readAsDataURL(file);
    } else {
        document.getElementById(imgId).setAttribute('src', '#');
    }
}
