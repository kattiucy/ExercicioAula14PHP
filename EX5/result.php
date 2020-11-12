<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX2</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="title">
            <h1>Melhor Combustível</h1>
        </div>
        <?php
            $gas = $_POST["gasolina"];
            $alc = $_POST["alcool"];

            $result = ($gas * 70)/100;

            if ($alc <= $result){
                echo "<p>O melhor combustível neste caso é o Álcool</p>";
            }else {
                echo "<p>O melhor combustível neste caso é a Gasolina</p>";
            }

        ?>
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
            margin-top: 5vh;
            font-size: 2rem;
        }

    </style>
</body>

</html>