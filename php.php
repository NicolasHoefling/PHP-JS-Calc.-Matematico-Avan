<?php
// php.php

// Iniciar a sessão para armazenar matrizes e vetores
session_start();

// Definição das funções PHP
function calculateFibonacci($n) {
    $startTime = microtime(true);
    
    if (!is_numeric($n) || $n <= 0) {
        return 'Por favor, insira um número válido.';
    }

    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return "Os primeiros $n números da sequência de Fibonacci são: " . implode(', ', $fib) . ".\n\nTempo de execução: " . number_format($executionTime, 2) . " ms.";
}

function calculateFactorial($n) {
    $startTime = microtime(true);
    
    if (!is_numeric($n) || $n < 0) {
        return 'Por favor, insira um número válido.';
    }

    if ($n === 0 || $n === 1) {
        $result = '1';
    } else {
        $result = '1';
        for ($i = 2; $i <= $n; $i++) {
            $result = bcmul($result, (string)$i); // Usando BCMath para grandes números
        }
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return "O fatorial de $n é: " . $result . ".\n\nTempo de execução: " . number_format($executionTime, 2) . " ms.";
}

function generateMatrices($size) {
    $startTime = microtime(true);
    
    if (!is_numeric($size) || $size <= 0) {
        return 'Por favor, insira um tamanho válido.';
    }

    $matrixA = [];
    $matrixB = [];

    for ($i = 0; $i < $size; $i++) {
        $matrixA[$i] = [];
        $matrixB[$i] = [];
        for ($j = 0; $j < $size; $j++) {
            $matrixA[$i][$j] = rand(0, 9);
            $matrixB[$i][$j] = rand(0, 9);
        }
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    // Armazenar as matrizes na sessão para uso posterior
    $_SESSION['matrixA'] = $matrixA;
    $_SESSION['matrixB'] = $matrixB;

    return [
        'matrixA' => $matrixA,
        'matrixB' => $matrixB,
        'executionTime' => number_format($executionTime, 2)
    ];
}

function addMatrices($matrixA, $matrixB) {
    $startTime = microtime(true);
    
    if (empty($matrixA) || empty($matrixB)) {
        return 'Por favor, gere as matrizes primeiro.';
    }

    $size = count($matrixA);
    $result = [];

    for ($i = 0; $i < $size; $i++) {
        $result[$i] = [];
        for ($j = 0; $j < $size; $j++) {
            $result[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
        }
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return [
        'result' => $result,
        'executionTime' => number_format($executionTime, 2)
    ];
}

function multiplyMatrices($matrixA, $matrixB) {
    $startTime = microtime(true);
    
    if (empty($matrixA) || empty($matrixB)) {
        return 'Por favor, gere as matrizes primeiro.';
    }

    $size = count($matrixA);
    $result = [];

    for ($i = 0; $i < $size; $i++) {
        $result[$i] = [];
        for ($j = 0; $j < $size; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $size; $k++) {
                $result[$i][$j] += $matrixA[$i][$k] * $matrixB[$k][$j];
            }
        }
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return [
        'result' => $result,
        'executionTime' => number_format($executionTime, 2)
    ];
}

function generateVectors($size) {
    $startTime = microtime(true);
    
    if (!is_numeric($size) || $size <= 0) {
        return 'Por favor, insira um tamanho válido.';
    }

    $vectorA = [];
    $vectorB = [];

    for ($i = 0; $i < $size; $i++) {
        $vectorA[$i] = rand(0, 100);
        $vectorB[$i] = rand(0, 100);
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    // Armazenar os vetores na sessão para uso posterior
    $_SESSION['vectorA'] = $vectorA;
    $_SESSION['vectorB'] = $vectorB;

    return [
        'vectorA' => $vectorA,
        'vectorB' => $vectorB,
        'executionTime' => number_format($executionTime, 2)
    ];
}

function addVectors($vectorA, $vectorB) {
    $startTime = microtime(true);
    
    if (empty($vectorA) || empty($vectorB)) {
        return 'Por favor, gere os vetores primeiro.';
    }

    $size = count($vectorA);
    $result = [];

    for ($i = 0; $i < $size; $i++) {
        $result[$i] = $vectorA[$i] + $vectorB[$i];
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return [
        'result' => $result,
        'executionTime' => number_format($executionTime, 2)
    ];
}

function multiplyVectors($vectorA, $vectorB, $scalar) {
    $startTime = microtime(true);
    
    if (empty($vectorA) || empty($vectorB)) {
        return 'Por favor, gere os vetores primeiro.';
    }

    if (!is_numeric($scalar)) {
        return 'Por favor, insira um valor escalar válido.';
    }

    $size = count($vectorA);
    $result = [];

    for ($i = 0; $i < $size; $i++) {
        $result[$i] = $vectorA[$i] * $vectorB[$i] * $scalar;
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return [
        'result' => $result,
        'executionTime' => number_format($executionTime, 2)
    ];
}

function benchmarkPower($iterations) {
    $startTime = microtime(true);
    
    $base = 3;
    $exponent = 10;
    $result = pow($base, $exponent);

    for ($i = 0; $i < $iterations; $i++) {
        pow($base, $exponent);
    }

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime) * 1000;

    return "Benchmarking de $iterations iterações de $base elevado à $exponent ($result).\n\nTempo de execução: " . number_format($executionTime, 2) . " ms.";
}

// Inicializar variáveis para armazenar resultados
$fibonacciResult = '';
$factorialResult = '';
$matricesResult = '';
$addMatricesResult = '';
$multiplyMatricesResult = '';
$vectorsResult = '';
$addVectorsResult = '';
$multiplyVectorsResult = '';
$benchmarkResult = '';

// Processar requisições POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'fibonacci':
                $n = $_POST['fibonacci'] ?? 0;
                $fibonacciResult = calculateFibonacci($n);
                break;
            
            case 'factorial':
                $n = $_POST['factorial'] ?? 0;
                $factorialResult = calculateFactorial($n);
                break;
            
            case 'generate_matrices':
                $size = $_POST['matrix_size'] ?? 0;
                $matrices = generateMatrices($size);
                if (is_array($matrices)) {
                    $matrixA = $matrices['matrixA'];
                    $matrixB = $matrices['matrixB'];
                    $executionTime = $matrices['executionTime'];
                    $matricesResult = "Matriz A:\n" . implode("\n", array_map(function($row) { return implode(', ', $row); }, $matrixA)) . "\n\nMatriz B:\n" . implode("\n", array_map(function($row) { return implode(', ', $row); }, $matrixB)) . "\n\nTempo de execução: $executionTime ms.";
                } else {
                    $matricesResult = $matrices; // Mensagem de erro
                }
                break;
            
            case 'add_matrices':
                $matrixA = $_SESSION['matrixA'] ?? [];
                $matrixB = $_SESSION['matrixB'] ?? [];
                $addMatrices = addMatrices($matrixA, $matrixB);
                if (is_array($addMatrices)) {
                    $result = $addMatrices['result'];
                    $executionTime = $addMatrices['executionTime'];
                    $addMatricesResult = "Soma das Matrizes:\n" . implode("\n", array_map(function($row) { return implode(', ', $row); }, $result)) . "\n\nTempo de execução: $executionTime ms.";
                } else {
                    $addMatricesResult = $addMatrices; // Mensagem de erro
                }
                break;
            
            case 'multiply_matrices':
                $matrixA = $_SESSION['matrixA'] ?? [];
                $matrixB = $_SESSION['matrixB'] ?? [];
                $multiplyMatrices = multiplyMatrices($matrixA, $matrixB);
                if (is_array($multiplyMatrices)) {
                    $result = $multiplyMatrices['result'];
                    $executionTime = $multiplyMatrices['executionTime'];
                    $multiplyMatricesResult = "Multiplicação das Matrizes:\n" . implode("\n", array_map(function($row) { return implode(', ', $row); }, $result)) . "\n\nTempo de execução: $executionTime ms.";
                } else {
                    $multiplyMatricesResult = $multiplyMatrices; // Mensagem de erro
                }
                break;
            
            case 'generate_vectors':
                $size = $_POST['vector_size'] ?? 0;
                $vectors = generateVectors($size);
                if (is_array($vectors)) {
                    $vectorA = $vectors['vectorA'];
                    $vectorB = $vectors['vectorB'];
                    $executionTime = $vectors['executionTime'];
                    $vectorsResult = "Vetor A:\n" . implode(', ', $vectorA) . ".\n\nVetor B:\n" . implode(', ', $vectorB) . ".\n\nTempo de execução: $executionTime ms.";
                } else {
                    $vectorsResult = $vectors; // Mensagem de erro
                }
                break;
            
            case 'add_vectors':
                $vectorA = $_SESSION['vectorA'] ?? [];
                $vectorB = $_SESSION['vectorB'] ?? [];
                $addVectors = addVectors($vectorA, $vectorB);
                if (is_array($addVectors)) {
                    $result = $addVectors['result'];
                    $executionTime = $addVectors['executionTime'];
                    $addVectorsResult = "Soma dos Vetores:\n" . implode(', ', $result) . ".\n\nTempo de execução: $executionTime ms.";
                } else {
                    $addVectorsResult = $addVectors; // Mensagem de erro
                }
                break;
            
            case 'multiply_vectors':
                $vectorA = $_SESSION['vectorA'] ?? [];
                $vectorB = $_SESSION['vectorB'] ?? [];
                $scalar = $_POST['scalar'] ?? 1;
                $multiplyVectors = multiplyVectors($vectorA, $vectorB, $scalar);
                if (is_array($multiplyVectors)) {
                    $result = $multiplyVectors['result'];
                    $executionTime = $multiplyVectors['executionTime'];
                    $multiplyVectorsResult = "Multiplicação dos Vetores com escalar $scalar:\n" . implode(', ', $result) . ".\n\nTempo de execução: $executionTime ms.";
                } else {
                    $multiplyVectorsResult = $multiplyVectors; // Mensagem de erro
                }
                break;
            
            case 'benchmark':
                $iterations = $_POST['benchmark_iterations'] ?? 0;
                $benchmarkResult = benchmarkPower($iterations);
                break;
            
            default:
                // Ação desconhecida
                break;
        }
    }
}
?>
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

    <script src="https://kit.fontawesome.com/8a4e2e6b4c.js" crossorigin="anonymous"></script>

    <style>
        /* USO DAS FONTS EM */
        h1, h2, a{
            font-family: "Oswald", sans-serif;
        }
        h3, h5, label{
            font-family: 'Roboto Mono', sans-serif;
        }
        /* CORES DO PHP */
        .w3-php-input {color:rgb(0, 0, 0) !important; background-color:#6352ff !important}
        .w3-php-fundo {color:rgb(0, 0, 0) !important; background-color:#1600db5c !important}
        /* .w3-text-input {color:#ffffff !important}*/
        .w3-text-input-theme {color:rgba(255, 255, 255, 0.69) !important} 
        .w3-border-input {border-color:rgb(0, 0, 0) !important}
        .w3-hover-border-input:hover {border-color:rgb(255, 255, 255) !important}
       
        input{
            background-color: rgba(19, 0, 112, 0.58); 
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.69);
        } 
    </style>
</head>
<body class="w3-php-fundo">
<!-- MENU -->
    <?php include("menu.php"); ?>
<!-- NAV -->
    <div class="w3-bar w3-vivid-black w3-border-bottom w3-border-indigo">
        <a href="index.php" class="w3-bar-item w3-button">
            <i class="fa fa-house" style="font-size: 24px;"></i>
        </a>
        <a href="js.html" class="w3-bar-item w3-button w3-hover-amber w3-hover-text-black ">
            <i class="fa-brands fa-js" style="font-size:24px"></i>
        </a>
        <a href="php.php" class="w3-bar-item w3-button w3-hover-indigo w3-hover-text-black w3-blue">
            <i class="fa-brands fa-php" style="font-size:24px"></i>
        </a>
        <a href="relatorio.php" class="w3-bar-item w3-button w3-hover-red w3-hover-text-black">
            <i class="fa-solid fa-file-pdf" style="font-size:24px"></i>
        </a>
    </div>


    <div style="margin-left: 20%; margin-right: 20%;">
        <h2 class="w3-center w3-container">Valores em PHP</h2>

<!-- FIBONACCI -->
        <form method="post" action="php.php">
            <input type="hidden" name="action" value="fibonacci">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <label for="fibonacci">NÚMERO DE TERMOS DA SÉRIE DE FIBONACCI:</label>
                <input class="w3-animate-input w3-margin-top w3-input w3-border-bottom  w3-border-black w3-round-xlarge w3-text-input-theme" type="number" style="width: 40%;" name="fibonacci" id="fibonacci" placeholder="Ex: 50" required>
                <p></p>
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-calculator" style="color: #6352ff ;"></i> Calcular</button>
            </div>
        </form>
        <?php if ($fibonacciResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Resultado Fibonacci</h2>
                <p><?php echo nl2br(htmlspecialchars($fibonacciResult)); ?></p>
            </div>
        <?php endif; ?>

<!-- FATORIAL -->
        <form method="post" action="php.php">
            <input type="hidden" name="action" value="factorial">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <label for="factorial">FATORIAL DE:</label>
                <input class="w3-animate-input w3-margin-top w3-input w3-border-bottom  w3-border-black w3-round-xlarge w3-text-input-theme" type="number" name="factorial" id="factorial" style="width: 40%;" placeholder="Ex: 100" required>
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-calculator" style="color: #6352ff ;"></i> Calcular</button>
            </div>
        </form>
        <?php if ($factorialResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Resultado Fatorial</h2>
                <p><?php echo nl2br(htmlspecialchars($factorialResult)); ?></p>
            </div>
        <?php endif; ?>

<!-- MATRIZ -->
        <form method="post" action="php.php">
            <input type="hidden" name="action" value="generate_matrices">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <label for="matrix_size">TAMANHO DAS MATRIZES (Ex: 3 para 3x3):</label>
                <input class="w3-animate-input w3-margin-top w3-input w3-border-bottom  w3-border-black w3-round-xlarge w3-text-input-theme" type="number" name="matrix_size" id="matrix_size" style="width: 40%;" placeholder="Ex: 3" required>
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-calculator" style="color: #6352ff ;"></i> Gerar Matrizes</button>
            </div>
        </form>
        <?php if ($matricesResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Resultado Matrizes</h2>
                <p><?php echo nl2br(htmlspecialchars($matricesResult)); ?></p>
            </div>
        <?php endif; ?>


        <form method="post" action="php.php">
            <input type="hidden" name="action" value="add_matrices">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-plus"style="color: #6352ff ;"></i> Somar Matrizes</button>
            </div>
        </form>
        <?php if ($addMatricesResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Soma das Matrizes</h2>
                <p><?php echo nl2br(htmlspecialchars($addMatricesResult)); ?></p>
            </div>
        <?php endif; ?>

        <form method="post" action="php.php">
            <input type="hidden" name="action" value="multiply_matrices">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-xmark" style="color: #6352ff ;"></i> Multiplicar Matrizes</button>
            </div>
        </form>
        <?php if ($multiplyMatricesResult): ?>
            <div class="w3-container w3-row w3-php-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Multiplicação das Matrizes</h2>
                <p><?php echo nl2br(htmlspecialchars($multiplyMatricesResult)); ?></p>
            </div>
        <?php endif; ?>

<!-- VETOR -->
        <form method="post" action="php.php">
            <input type="hidden" name="action" value="generate_vectors">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <label for="vector_size">TAMANHO DOS VETORES:</label>
                <input class="w3-animate-input w3-margin-top w3-input w3-border-bottom  w3-border-black w3-round-xlarge w3-text-input-theme" type="number" name="vector_size" id="vector_size" style="width: 40%;" placeholder="Ex: 5" required>
                <p></p>
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-calculator" style="color: #6352ff ;"></i> Gerar Vetores</button>
            </div>
        </form>
        <?php if ($vectorsResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Resultado Vetores</h2>
                <p><?php echo nl2br(htmlspecialchars($vectorsResult)); ?></p>
            </div>
        <?php endif; ?>

        <form method="post" action="php.php">
            <input type="hidden" name="action" value="add_vectors">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-plus"style="color: #6352ff ;"></i> Somar Vetores</button>
            </div>
        </form>
        <?php if ($addVectorsResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Soma dos Vetores</h2>
                <p><?php echo nl2br(htmlspecialchars($addVectorsResult)); ?></p>
            </div>
        <?php endif; ?>

        <form method="post" action="php.php">
            <input type="hidden" name="action" value="multiply_vectors">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <label for="scalar">VALOR ESCALAR PARA MULTIPLICAÇÃO:</label>
                <input class="w3-animate-input w3-margin-top w3-input w3-border-bottom  w3-border-black w3-round-xlarge w3-text-input-theme" type="number" name="scalar" id="scalar" step="any" style="width: 40%;" placeholder="Ex: 2.5" required>
                <p></p>
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-xmark" style="color: #6352ff ;"></i> Multiplicar Vetores</button>
            </div>
        </form>
        <?php if ($multiplyVectorsResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Multiplicação dos Vetores</h2>
                <p><?php echo nl2br(htmlspecialchars($multiplyVectorsResult)); ?></p>
            </div>
        <?php endif; ?>

<!-- BENCHMARK -->
        <form method="post" action="php.php">
            <input type="hidden" name="action" value="benchmark">
            <div class="w3-container w3-row w3-php-input w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-black w3-hover-border-input w3-padding">
                <label for="benchmark_iterations">NÚMERO DE ITERAÇÕES PARA BENCHMARK:</label>
                <input class="w3-animate-input w3-margin-top w3-input w3-border-bottom  w3-border-black w3-round-xlarge w3-text-input-theme" type="number" name="benchmark_iterations" id="benchmark_iterations" min="1" style="width: 40%;" placeholder="Ex: 100000" required>
                <p></p>
                <button type="submit" class="w3-vivid-black w3-button w3-card-4 w3-margin-top w3-round-xlarge w3-padding w3-margin w3-hover-deep-purple"><i class="fa-solid fa-calculator" style="color: #6352ff ;"></i> Executar Benchmark</button>
            </div>
        </form>
        <?php if ($benchmarkResult): ?>
            <div class="w3-container w3-row w3-js-fundo w3-section w3-card-4 w3-border w3-bottombar w3-rightbar w3-round-xxlarge w3-border-input w3-hover-border-input w3-padding">
                <h2>Resultado Benchmark</h2>
                <p><?php echo nl2br(htmlspecialchars($benchmarkResult)); ?></p>
            </div>
        <?php endif; ?>

    </div>
</body>
</html>
