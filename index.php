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
        .w3-js-fundo {color:rgb(0, 0, 0) !important; background-color:#e3c02786 !important}
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
    </style>
</head>
<body>

<!-- MENU -->
    <?php include("menu.php"); ?>

<!-- NAV -->
    <div class="w3-bar w3-vivid-black">
        <a href="index.php" class="w3-bar-item w3-button w3-blue">
            <i class="fa fa-house" style="font-size: 24px;"></i>
        </a>
        <a href="js.html" class="w3-bar-item w3-button w3-hover-amber w3-hover-text-black">
            <i class="fa-brands fa-js" style="font-size:24px"></i>
        </a>
        <a href="php.php" class="w3-bar-item w3-button w3-hover-indigo w3-hover-text-black">
            <i class="fa-brands fa-php" style="font-size:24px"></i>
        </a>
        <a href="relatorio.php" class="w3-bar-item w3-button w3-hover-red w3-hover-text-black">
            <i class="fa-solid fa-file-pdf" style="font-size:24px"></i>
        </a>
    </div>

<!-- CONTEUDO -->
   

    <div class="w3-row">
        <div class="w3-half w3-border-top w3-border-yellow">
            <div class="w3-card">
                <img src="img/js.jpg" style="width:100%">
                    <div class="w3-container w3-js-fundo">
                        <h3>Eficiência de Execução</h3>
                        <p><strong>JavaScript (Lado do Cliente):</strong></p>
                        <ul>
                            <li>Execução no navegador: As operações são realizadas no navegador do usuário. A eficiência depende da máquina do usuário e do navegador utilizado.</li>
                            <li>Desempenho variável: Como a performance depende do dispositivo do usuário, pode haver grandes variações. Computadores mais antigos ou com menos recursos podem ter dificuldades em realizar cálculos complexos.</li>
                            <li>Conexão e Latência: Opera independentemente da conexão de rede, evitando latência de rede nas operações.</li>
                        </ul>
                        <h3>Tempo de Desenvolvimento</h3>
                        <p><strong>JavaScript (Lado do Cliente):</strong></p>
                        <ul>
                            <li>Interatividade: JS é ideal para criar interfaces interativas e fornecer feedback imediato ao usuário sem precisar recarregar a página.</li>
                            <li>Complexidade: Cálculos complexos podem ser mais difíceis de implementar e depurar no navegador.</li>
                            <li>Bibliotecas e Frameworks: Existem muitas bibliotecas e frameworks, como WebAssembly, que ajudam a melhorar o desempenho para cálculos pesados.</li>
                        </ul>
                        <p></p>
                        <p></p>
                        <button class="w3-margin w3-border w3-border-yellow w3-black w3-hover-yellow w3-btn w3-round-xlarge"><a style="text-decoration:none" href="js.html">UTILIZAR JS</button></a>
                    </div>
            </div>
        </div>
        <div class="w3-half w3-border-top w3-border-blue">
            <div class="w3-card">
                <img src="img/php.jpg" style="width:100%">
                    <div class="w3-container w3-php-fundo" >
                        <h3>Eficiência de Execução</h3>
                        <p><strong>PHP (Lado do Servidor):</strong></p>
                        <ul>
                            <li>Execução no servidor: As operações são realizadas no servidor, o que geralmente possui recursos mais robustos comparado ao dispositivo de um usuário médio.</li>
                            <li>Desempenho constante: A performance é mais previsível, pois depende dos recursos do servidor e não varia com o dispositivo do usuário.</li>
                            <li>Escalabilidade: Pode ser escalado vertical ou horizontalmente para lidar com uma maior carga de processamento.</li>
                        </ul>
                        <h3>Tempo de Desenvolvimento</h3>
                        <p><strong>PHP (Lado do Servidor):</strong></p>
                        <ul>
                            <li>Simplicidade: PHP é uma linguagem de script de fácil aprendizado e uso para tarefas do lado do servidor.</li>
                            <li>Bibliotecas: PHP tem diversas bibliotecas poderosas para cálculos matemáticos e manipulação de matrizes, como GMP para grandes números.</li>
                            <li>Menos Interatividade: PHP não pode manipular a interface diretamente, então as operações do lado do cliente devem ser combinadas com AJAX ou outra tecnologia para fornecer feedback em tempo real.</li>
                        </ul>
                        <button class="w3-margin w3-border w3-border-blue w3-indigo w3-border-black w3-hover-deep-purple w3-btn w3-round-xlarge" ><a style="text-decoration:none" href="php.php">UTILIZAR PHP</button></a>
                    </div>
            </div>
        </div>
    </div>
    <div class="w3-container w3-vivid-black">
        <h4 class="">Site criado com foco em operações que envolvem cálculos escalonáveis, vetores, matrizes e cálculos de performance computacional e etc. O objetivo é realizar operações tanto no lado do cliente (usando JavaScript) quanto no lado do servidor (usando PHP), comparando a eficiência de execução e o tempo de desenvolvimento em cada ambiente. </h4>
        <h4 class="">O sistema deverá calcular:
            <p>•	Soma e multiplicação de grandes matrizes</p>
            <p>•	Operações com vetores multidimensionais</p>
            <p>•	Cálculos de séries matemáticas</p>
            <p>•	Derivadas e integrais numéricas</p>
            <p>•	Simulações de performance</p>
        </h4>   
    </div>
</body>
</html>