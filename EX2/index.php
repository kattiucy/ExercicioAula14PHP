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
        <p>Preço - R$147,90</p>
        <h3>Método de pagamento</h3>
        <form action="checkout.php" method="post">
            <div class="types">
                <div class="payments"><input type=radio name=pagamento value="AV"><label for="pagamento">A vista</label></div>
                <div class="payments"><input type=radio name=pagamento value="P3X"><label for="pagamento">Parcelado em 3 vezes</label></div>
                <div class="payments"><input type=radio name=pagamento value="P5X"><label for="pagamento">Parcelado em 5 vezes</label></div>
            </div>
            <input id="button" type="submit" value="Continuar">
        </form>

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

        form{
            width: 100%;
            height: 20%;
            margin-top: 2vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form .types{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            width: 100%;
        }

        form .payments{
            display: flex;
            align-items: center;
            margin: auto;
        }

        form label{
            font-size: 2rem;
            font-weight: 500;
            margin-left: 0.5vw;
        }

        form input#button{
            width: 30%;
            height: 3.5vh;
            background: #FF5733;
            box-shadow: 1px 1px 5px 0px rgba(50, 50, 50, 0.75);
            transition: 500ms;
            color: #ffffff;
            border: none;
            margin-top: 3vh;
        }

        input[type='radio']:after {
            width: 15px;
            height: 15px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: #ffffff;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 1px solid #FF5733;
        }

        input[type='radio']:checked:after {
            width: 15px;
            height: 15px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: #FF5733;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }

        form input#button:hover{
            width: 29.7%;
            background: #f0512d;
            box-shadow: none;
        }
    </style>
</body>

</html>