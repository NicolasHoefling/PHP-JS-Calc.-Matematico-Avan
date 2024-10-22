function calculateFibonacci() {
    const startTime = performance.now();
    const n = parseInt(document.getElementById('fibonacci').value);
    if (isNaN(n) || n <= 0) {
        document.getElementById('fibonacciResult').innerText = 'Por favor, insira um número válido.';
        return;
    }
    let fib = [0, 1];
    for (let i = 2; i < n; i++) {
        fib[i] = fib[i - 1] + fib[i - 2];
    }
    const endTime = performance.now();
    document.getElementById('fibonacciResult').innerText = `Os primeiros ${n} números da sequência de Fibonacci são:\n${fib.join(', ')}.\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function calculateFactorial() {
    const startTime = performance.now();
    const n = parseInt(document.getElementById('factorial').value);
    if (isNaN(n) || n < 0) {
        document.getElementById('factorialResult').innerText = 'Por favor, insira um número válido.';
        return;
    }
    let result = BigInt(1);
    for (let i = 2; i <= n; i++) {
        result *= BigInt(i);
    }
    const endTime = performance.now();
    document.getElementById('factorialResult').innerText = `O fatorial de ${n} é: ${result.toString()}.\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function generateMatrices() {
    const startTime = performance.now();
    const size = parseInt(document.getElementById('matrixSize').value);
    if (isNaN(size) || size <= 0) {
        document.getElementById('matrixResult').innerText = 'Por favor, insira um tamanho válido.';
        return;
    }
    window.matrixA = Array.from({ length: size }, () => Array.from({ length: size }, () => Math.floor(Math.random() * 10)));
    window.matrixB = Array.from({ length: size }, () => Array.from({ length: size }, () => Math.floor(Math.random() * 10)));
    const endTime = performance.now();
    document.getElementById('matrixResult').innerText = `Matriz A:\n${matrixA.map(row => row.join(', ')).join('\n')}\n\nMatriz B:\n${matrixB.map(row => row.join(', ')).join('\n')}\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function addMatrices() {
    const startTime = performance.now();
    if (!window.matrixA || !window.matrixB) {
        document.getElementById('matrixResult').innerText = 'Por favor, gere as matrizes primeiro.';
        return;
    }
    const size = window.matrixA.length;
    let result = Array.from({ length: size }, () => Array(size).fill(0));
    for (let i = 0; i < size; i++) {
        for (let j = 0; j < size; j++) {
            result[i][j] = window.matrixA[i][j] + window.matrixB[i][j];
        }
    }
    const endTime = performance.now();
    document.getElementById('matrixResult').innerText = `Soma das matrizes:\n${result.map(row => row.join(', ')).join('\n')}\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function multiplyMatrices() {
    const startTime = performance.now();
    if (!window.matrixA || !window.matrixB) {
        document.getElementById('matrixResult').innerText = 'Por favor, gere as matrizes primeiro.';
        return;
    }
    const size = window.matrixA.length;
    let result = Array.from({ length: size }, () => Array(size).fill(0));
    for (let i = 0; i < size; i++) {
        for (let j = 0; j < size; j++) {
            for (let k = 0; k < size; k++) {
                result[i][j] += window.matrixA[i][k] * window.matrixB[k][j];
            }
        }
    }
    const endTime = performance.now();
    document.getElementById('matrixResult').innerText = `Multiplicação das matrizes:\n${result.map(row => row.join(', ')).join('\n')}\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function generateVectors() {
    const startTime = performance.now();
    const size = parseInt(document.getElementById('vectorSize').value);
    if (isNaN(size) || size <= 0) {
        document.getElementById('vectorResult').innerText = 'Por favor, insira um tamanho válido.';
        return;
    }
    window.vectorA = Array.from({ length: size }, () => Math.floor(Math.random() * 100));
    window.vectorB = Array.from({ length: size }, () => Math.floor(Math.random() * 100));
    const endTime = performance.now();
    document.getElementById('vectorResult').innerText = `Vetor A:\n${vectorA.join(', ')}.\n\nVetor B:\n${vectorB.join(', ')}.\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function addVectors() {
    const startTime = performance.now();
    if (!window.vectorA || !window.vectorB) {
        document.getElementById('vectorResult').innerText = 'Por favor, gere os vetores primeiro.';
        return;
    }
    const size = window.vectorA.length;
    let result = Array(size).fill(0);
    for (let i = 0; i < size; i++) {
        result[i] = window.vectorA[i] + window.vectorB[i];
    }
    const endTime = performance.now();
    document.getElementById('vectorResult').innerText = `Soma dos vetores:\n${result.join(', ')}.\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function multiplyVectors() {
    const startTime = performance.now();
    if (!window.vectorA || !window.vectorB) {
        document.getElementById('vectorResult').innerText = 'Por favor, gere os vetores primeiro.';
        return;
    }
    const scalar = parseFloat(prompt('Insira o valor escalar para multiplicação:'));
    if (isNaN(scalar)) {
        alert('Por favor, insira um valor escalar válido.');
        return;
    }
    const size = window.vectorA.length;
    let result = Array(size).fill(0);
    for (let i = 0; i < size; i++) {
        result[i] = window.vectorA[i] * window.vectorB[i] * scalar;
    }
    const endTime = performance.now();
    document.getElementById('vectorResult').innerText = `Multiplicação dos vetores com escalar ${scalar}: \n${result.join(', ')}. \n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}

function benchmarkPower(iterations) {
    const base = 3;
    const exponent = 10;
    const result = Math.pow(base, exponent);
    const startTime = performance.now();
    for (let i = 0; i < iterations; i++) {
        Math.pow(base, exponent);
    }
    const endTime = performance.now();
    document.getElementById('benchmarkResult').innerText = `Benchmarking de ${iterations} iterações de ${base} elevado à ${exponent} (${result}).\n\nTempo de execução: ${(endTime - startTime).toFixed(2)} ms.`;
}
