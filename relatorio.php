<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- links w3 -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- W3 CSS COLORS -->    
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-signal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<!-- FONTS GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        /* USO DAS FONTS EM */
        h1, h2, a, li,p{
            font-family: "Oswald", sans-serif;
        }
        h4, h3, h5, label{
            font-family: 'Roboto Mono', sans-serif;
        }
        li, p{
            font-size: 19px;
        }
        /* CORES DO JS */
        .w3-js-input {color:rgb(0, 0, 0) !important; background-color:#e3c100 !important}
        .w3-js-fundo {color:rgb(0, 0, 0) !important; background-color:#ffe32c4a !important}
        .w3-php-input {color:rgb(0, 0, 0) !important; background-color:#6352ff !important}
        .w3-php-fundo {color:rgb(0, 0, 0) !important; background-color:#1600db5c !important}
        /* .w3-text-input {color:#ffffff !important}*/
        /* .w3-text-input {color:#ffffff !important}
        .w3-text-input-theme {color:rgb(0, 0, 0) !important} */
        .w3-border-input {border-color:rgb(0, 0, 0) !important}
        .w3-hover-border-input:hover {border-color:rgb(255, 255, 255) !important}

        input::placeholder {
            color: rgb(81, 81, 81);
        } 
        
        /* Estilizando o contêiner do iframe */
        .pdf-container {
            width: 100%; /* Largura total da página */
            height: 100vh; /* Altura total da viewport */
            border: none; /* Sem borda */
        }
        .pdf-wrapper {
            margin: 20px 0; /* Margem acima e abaixo do iframe */
        }
    
    </style>
</head>
<body>

<!-- MENU -->
    <?php include("menu.php"); ?>

<!-- NAV -->
<div class="w3-bar w3-vivid-black w3-border-bottom w3-border-red">
        <a href="index.php" class="w3-bar-item w3-button">
            <i class="fa fa-house" style="font-size: 24px;"></i>
        </a>
        <a href="js.html" class="w3-bar-item w3-button w3-hover-amber w3-hover-text-black ">
            <i class="fa-brands fa-js" style="font-size:24px"></i>
        </a>
        <a href="php.php" class="w3-bar-item w3-button w3-hover-indigo w3-hover-text-black">
            <i class="fa-brands fa-php" style="font-size:24px"></i>
        </a>
        <a href="relatorio.php" class="w3-bar-item w3-button w3-hover-red w3-hover-text-black w3-blue">
            <i class="fa-solid fa-file-pdf" style="font-size:24px"></i>
        </a>
    </div>

    <h1 class="w3-center">Visualizador de PDF no Navegador</h1>
    
    <div class="pdf-wrapper ">
        <iframe src="relatorio php vs js.pdf" class="pdf-container"></iframe>
    </div>
    
    <!-- Fallback para navegadores que não suportam iframe -->
    <!-- <object data="relatorio php vs js.pdf" type="application/pdf" class="pdf-container">
        <p>Seu navegador não suporta PDFs. Baixe o <a href="relatorio php vs js.pdf">PDF aqui</a>.</p>
    </object> -->
</body>
</html>