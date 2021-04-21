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

    <script src="<?=getenv('BASE_URL');?>/assets/js/Request.js"></script>
    <script src="<?=getenv('BASE_URL');?>/assets/js/Ino.js"></script>
    <script>
        let base_url = '<?=getenv("BASE_URL");?>'; 
        let ino = new Ino(base_url);
        ino.init();
    </script>
</body>
</html>
