<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-INO</title>
    <link rel="stylesheet" href="<?=getenv('BASE_URL');?>/assets/css/style.css">
</head>
<body>
    <main class="container">
        <div class="chave">
            <div class="button">
                On
            </div>
        </div>
    </main>

    <script src="<?=getenv('BASE_URL');?>"></script>
    <script>

        document.querySelector('.button').addEventListener('click', e => {
            e.target.classList.toggle('transform');
            if (e.target.classList.contains('transform')) {
                e.target.textContent = "Off";
                request('h');
            } else {
                request('l');
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
