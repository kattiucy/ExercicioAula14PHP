<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX6</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="title">
            <h1>Tabela IMC</h1>
        </div>

        <?php
            $pes = $_POST["peso"];
            $alt = $_POST["altura"];

            $result =  $pes / ($alt * $alt);

            echo "<p>Seu IMC é " . $result . "</p>";

            if ($result < 18.5){
                echo "<style>table tr:nth-child(1){background: #FF5733;}</style>";
            }else if($result >= 18.5 && $result <= 24.9){
                echo "<style>table tr:nth-child(2){background: #FF5733;}</style>";
            }else if($result >= 25 && $result <= 29.9){
                echo "<style>table tr:nth-child(3){background: #FF5733;}</style>";
            }else if($result >= 30 && $result <= 39.9){
                echo "<style>table tr:nth-child(4){background: #FF5733;}</style>";
            }else {
                echo "<style>table tr:nth-child(5){background: #FF5733;}</style>";
            }
        ?>

        <table>
            <tr>
                <td><p>Até 18,5</p></td>
                <td><p>Abaixo do peso</p></td>
            </tr>
            <tr>
                <td><p>18,5 - 24,9</p></td>
                <td><p>Saudável</p></td>
            </tr>
            <tr>
                <td><p>25 - 29,9</p></td>
                <td><p>Sobrepeso</p></td>
            </tr>
            <tr>
                <td><p>30 - 39,9</p></td>
                <td><p>Obeso</p></td>
            </tr>
            <tr>
                <td><p>Acima de 40</p></td>
                <td><p>Extremo ou alto risco de obesidade</p></td>
            </tr>
        </table>
    </div>

    <style>
        :root {
            font-family: 'Roboto', sans-serif;
            font-size: 0.8vw;
        }

        * {
            padding: 0;
            margin: 0;
        }

        body {
            background: #FF5733;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 70px;
        }

        h1{
            font-size: 4rem;
            font-weight: 700;
            line-height: 0;
        }

        .background {
            width: 70vw;
            height: 70vh;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 1px 1px 5px 0px rgba(50, 50, 50, 0.75);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .title{
            width: 100%;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2vh;
        }

        p{
            margin-top: 3vh;
            font-size: 2rem;
        }

        table{
            width: 80%;
            margin-top: 5vh;
            text-align: center;
            border: 1px solid #FF5733;
        }

        table td{
            border: 1px solid #FF5733;
        }

        table tr td p{
            margin: 2vh;
        }

        .position{
            background: #FF5733;
        }

    </style>
</body>

</html>