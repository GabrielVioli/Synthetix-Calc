<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IA Avançada</title>
    <link rel="stylesheet" href="{{ asset('css/calculator.css') }}">
    <link rel="icon" type="image/png" href=" {{ asset('icons/calcular.png') }}">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>

    <script>
        MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']],
                displayMath: [['$$', '$$'], ['\\[', '\\]']]
            }
        };
    </script>

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>

<div class="calculator">
    <form action="{{ route('calculate') }}" method="POST">
        @csrf
        <input type="text" name="expression" id="display" class="display" placeholder="Digite ou monte a expressão" required autocomplete="off" autofocus>

        <div class="keyboard">
            <button type="button" class="btn-key btn-advanced" onclick="insert('√()')">√</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('d/dx()')">d/dx</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('∫()')">∫</button>
            <button type="button" class="btn-key btn-action" onclick="clearDisplay()">C</button>

            <button type="button" class="btn-key btn-advanced" onclick="insert('sen()')">sen</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('cos()')">cos</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('tan()')">tan</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('^')">^</button>

            <button type="button" class="btn-key" onclick="insert('7')">7</button>
            <button type="button" class="btn-key" onclick="insert('8')">8</button>
            <button type="button" class="btn-key" onclick="insert('9')">9</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('/')">÷</button>

            <button type="button" class="btn-key" onclick="insert('4')">4</button>
            <button type="button" class="btn-key" onclick="insert('5')">5</button>
            <button type="button" class="btn-key" onclick="insert('6')">6</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('*')">×</button>

            <button type="button" class="btn-key" onclick="insert('1')">1</button>
            <button type="button" class="btn-key" onclick="insert('2')">2</button>
            <button type="button" class="btn-key" onclick="insert('3')">3</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('-')">-</button>

            <button type="button" class="btn-key" onclick="insert('0')">0</button>
            <button type="button" class="btn-key" onclick="insert('.')">.</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('(')">(</button>
            <button type="button" class="btn-key btn-advanced" onclick="insert('+')">+</button>
        </div>

        <button type="submit" class="btn-submit">Calcular</button>
    </form>

    @if(session('result'))
        <div class="result">
            <strong>Resultado:</strong> {!! Str::markdown(session('result')) !!}
        </div>
    @endif
</div>

<script>
    function insert(value) {
        const display = document.getElementById('display');
        display.value += value;
        display.focus();
    }

    function clearDisplay() {
        document.getElementById('display').value = '';
        document.getElementById('display').focus();
    }
</script>

</body>
</html>
