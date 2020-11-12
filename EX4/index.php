<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX4</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="title">
            <h1>Conversor de temperatura</h1>
        </div>
        <form action="result.php" method="post">
            <label for="temperatura">Digite a temperatura (celsius)</label>
            <input type="text" name="temperatura" required placeholder="0.0">
            <input id="button" type="submit" value="Enviar">
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
            margin-top: 5vh;
        }

        form{
            width: 100%;
            height: 20%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 5vh;
        }

        form label{
            font-size: 2rem;
            font-weight: 500;
            margin-bottom: 2vh;
        }

        form input{
            width: 40%;
            height: 3vh;
            border: 1px solid #FF5733;
            border-radius: 3px;
            margin-bottom: 2vh;
            padding-left: 0.26vw;
        }

        form input#button{
            width: 30%;
            height: 3.5vh;
            background: #FF5733;
            box-shadow: 1px 1px 5px 0px rgba(50, 50, 50, 0.75);
            transition: 500ms;
            color: #ffffff;
        }

        form input#button:hover{
            width: 29.7%;
            background: #f0512d;
            box-shadow: none;
        }
    </style>
</body>

</html>