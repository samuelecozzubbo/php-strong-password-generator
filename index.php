<?php
if(isset($_GET["number"])){
    $Password_lenght = $_GET["number"];
}else{
    $Password_lenght = 0;
}
require_once __DIR__ . '/function.php';


include __DIR__ . '/partials/head.php';
?>

<body>
    <div class="wrapper">
        <header class="container">
            <h1>STRONG PASSWORD GENERATOR</h1>
            <h2>Genera una password sicura</h2>
            <div class="password-display">
                <div>Generare una password compresa fra 8 e 32</div>
                <div><?php echo generatePassword($Password_lenght) ?></div>
            </div>
        </header>
        <main class="container app">
            <form action="index.php" method="get">
                <div class="password-lenght flex">
                    <div>Lunghezza password:</div>
                    <input type="number" name='number' min="8" max="32">
                </div>
                <div class="buttons flex">
                    <button type="submit">Invia</button>
                    <button type="reset">Annulla</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>