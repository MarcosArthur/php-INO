<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $erros['errocode']; ?></title>
    <style>
        * {margin: 0px;padding: 0px;}
        body {width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center;}
        p {padding: 30px; font-size: 30px; border: solid 2px red;}
    </style>
</head>
<body>
    
    <p class="error"><?= $erros['errocode']; ?></p>
    
</body>
</html>