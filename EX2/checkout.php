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
            <h1>Malbec Desodorante Colônia 100ml</h1>
        </div>
        <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRaotvP7oMEDduc1SWu3JV73xrwOe5tGeCcn9kYRXrGslnek9V3BdJvvWpeiMeeT3GPrvGq9Sx71yjcgN-cxBJ5un2RC5EuRijyAq80lab0zL-lUYXt56lQ&usqp=CAE" alt="">
        <h3>Preço final do produto</h3>
        <?php
            $var = $_POST["pagamento"];
            $preco = 147.90;

            if ($var == "AV"){
                $result = $preco - ($preco * 5 / 100);
                echo "<p>O preço final do produto é R$" . $result . "</p>";
            }else if ($var == "P3X"){
                $result = $preco + ($preco * 10 / 100);
                echo "<p>O preço final do produto é R$" . $result . " - 3X de R$ ";

                $result = $result / 3;
                echo $result . "</P>";
            }else {
                $result = $preco + ($preco * 20 / 100);
                echo "<p>O preço final do produto é R$" . $result . " - 5X de R$ ";
                
                $result = $result / 5;
                echo $result . "</P>";
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

        img{
            margin-top: 2vh;
            height: 40%;
        }

        p{
            margin-top: 5vh;
            font-size: 2rem;
        }

        h3{
            margin-top: 1vh;
            font-size: 3rem;
        }
    </style>
</body>

</html>