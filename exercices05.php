<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 05</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(255, 255, 255);
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .page-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .content-exercices-05-php {
            margin-top: 20px;
            font-family: Arial, sans-serif;
            font-size: 20px;
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(3, 144, 238, 0.8);
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            width: calc(7% - 10px);
            display: block;
            padding: 10px;
            margin-right: 10px;
            margin-top: 10px;
            border-radius: 20px;
        }
        button {
            padding: 10px 15px;
            background-color:rgb(29, 142, 247);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color:rgb(31, 88, 114);
            transition: background-color 0.3s ease, transform 0.3s ease;
            transform: scale(1.05);
        }
        p {
            margin-top: 10px;
            font-size: 18px;
        }
        
    </style>
</head>
<body>
    <header class="page-title">
        <h1>Exercicios 05 - PHP</h1>
        <p>Exercicios sobre operadores aritiméticos que foram estudados na aula 05 do curso básico de PHP</p>
    </header>
    <div class="content-exercices-05-php">
        <form>
            <h2>Exercicio 1</h2>
            <p>Crie um script PHP que calcule a soma de dois números e exiba o resultado.</p>
            <input type="number" name="num1" placeholder="Insira um número" required>
            <input type="number" name="num2" placeholder="Insira um número" required>
            <button type="submit">Calcular Soma</button>
        </form>
        <?php
            if (isset($_GET['num1']) && isset($_GET['num2'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $soma = $num1 + $num2;
                echo("<h3>Resultado da soma: $soma</h3>");
            }
        ?>
    </div>
    <div class="content-exercices-05-php">
        <form>
            <h2>Exercicio 02</h2>
            <p>Crie um script PHP que calcule a subtração de dois números e exiba o resultado.</p>
            <input type="number" name="num3" placeholder="Insira um número" Required>
            <input type="number" name="num4" placeholder="Insira um número" Required>
            <button type="submit">Calcular Subtração</button>
        </form>
        <?php
            if (isset($_GET['num3']) && isset($_GET['num4'])) {
                $num3 = $_GET['num3'];
                $num4 = $_GET['num4'];
                $subtracao = $num3 - $num4;
                echo("<h3>Resultado da subtração: $subtracao</h3>");
            }
        ?>
    </div>
    <div class="content-exercices-05-php">
        <form>
            <h2>Exercicio 03</h2>
            <p>Crie um script PHP que calcule a divisão de dois números e exiba o resultado.</p>
            <input type="number" name="num5" placeholder="Insira um número" Required>
            <input type="number" name="num6" placeholder="Insira um número" Required>
            <button type="submit">Calcular Divisão</button>
        </form>
        <?php
            if (isset($_GET['num5']) && isset($_GET['num6'])) {
                $num5 = $_GET['num5'];
                $num6 = $_GET['num6'];
                if ($num6 != 0) {
                    $divisao = $num5 / $num6;
                    $divisao = number_format($divisao, 2); // Limita a 2 casas decimais
                    echo("<h3>Resultado da divisão: $divisao</h3>");
                } else {
                    echo("<h3>Erro: Divisão por zero não é permitida.</h3>");
                }
            }
        ?>
    </div>
    <div class="content-exercices-05-php">
        <form>
            <h2>Exercicio 04</h2>
            <p>Crie um script em PHP para multiplicar dois números e exiba o resultado.</p>
            <input type="number" name="num7" placeholder="Insira um número" Required>
            <input type="number" name="num8" placeholder="Insira um número" Required>
            <button type="submit">Calcular Multiplicação</button>
        </form>
        <?php
            if (isset($_GET['num7']) && isset($_GET['num8'])) {
                $num7 = $_GET['num7'];
                $num8 = $_GET['num8'];
                $multiplicacao = $num7 * $num8;
                echo("<h3>Resultado da multiplicação: $multiplicacao</h3>");
            }
        ?>
    </div>
    <div class="content-exercices-05-php">
        <form>
            <h2>Exercicio 05</h2>
            <p>Crie um script em PHP para mostrar o resto da divisão de dois números.</p>
            <input type="number" name="num9" placeholder="Insira um número" Required>
            <input type="number" name="num10" placeholder="Insira um número" Required>
            <button type="submit">Calcular Resto</button>
        </form>
        <?php
            if (isset ($_GET['num9']) && isset($_GET['num10'])) {
                $num9 = $_GET['num9'];
                $num10 = $_GET['num10'];
                if ($num10 != 0) {
                    $resto = $num9 % $num10;
                    echo("<h3>Resultado do resto da divisão: $resto</h3>");
                } else {
                    echo("<h3>Erro: Divisão por zero não é permitida.</h3>");
                }
            }
        ?>
    </div>
</body>
</html>
