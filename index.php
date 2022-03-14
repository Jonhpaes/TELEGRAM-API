<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonhpaes BotSydel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .max-width {
            max-width: 800px;
            width: 100%;
        }

        body {
            background-image: linear-gradient(to bottom , #13070C, #252627, #565857);
            background-attachment: fixed;
        }

        .box {
            margin: 0 auto;
            padding: 10px;
            margin-top: 10%;
            text-align: center;
            background-color: #3d3d3d;
            border-radius: 10px;
        }

        .box h1 {
            color: #fff;
        }

        textarea {
            padding: 7px;
            width: 100%;
            height: 100px;
            border-radius: 10px;
        }

        .bttn {
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="max-width box">
        <h1>Jonhpaes BotSydel</h1>

        <textarea clas="form-control" placeholder="Insira a sua mensagem aqui." id="txtMensagem"></textarea>

        <button type="button" class="bttn btn-success w-100" id="btnEnviar">Enviar</button>
    </div>

    <script src="script.js"></script>
</body>

</html>