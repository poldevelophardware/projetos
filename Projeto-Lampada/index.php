<?php
require_once '../pages/header.php';
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <main>
        <div class="alert alert-danger" role="alert">
            Acender, Apagar ou Quebrar Lampada!
            Tenha a disposição sua escolha.
            Somente um Botão.
        </div>
        <img src="img/acessa.jpg" alt="" id="imgLamp">
        <button type="button" class="btn btn-outline-success" id="lampOnOf">Acender</button>

    </main>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>