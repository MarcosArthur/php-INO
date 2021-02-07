<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPINO</title>

    <style>
        * {margin: 0px; padding: 0px; box-sizing: border-box;}
        .container {background: #2ecc71; width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center;}
        .chave {width: 40%; height: 43vh; background: #ecf0f1; border-radius: 180px; display: flex; overflow: hidden; align-items: center; }
        .button {width: 50%;  height: 100%; transition: all .2s; background: #27ae60; border-radius: 48%;cursor: pointer; color: white; display: flex;align-items: center; justify-content: center;}
        .button.nome {transform: translateX(100%)}
    </style>
</head>
<body>
    <main class="container">
        <div class="chave">
            <div class="button">
                On
            </div>
        </div>
    </main>
    <script>
        document.querySelector('.button').addEventListener('click', e => {
            e.target.classList.toggle('nome');
            if (e.target.classList.contains('nome')) {
                e.target.textContent = "Off";
                request('off');
            } else {
                request('on');
                e.target.textContent = "On";
            }

        })

        function request(status) {
            let form = new FormData();

            form.append("state", status);
            fetch(`./state`, {
                method: "POST",
                body:form
            })
            .then(response => response.json())
            .then(response => {
                if (response.sucess) {

                }
            });
        }
    </script>
</body>
</html>