<?php
if(isset($_GET["number"])){
    $Password_lenght = $_GET["number"];
}else{
    $Password_lenght = 0;
}
/* var_dump($Password_lenght); */

function generatePassword($Password_lenght){
/* ARRAY PER LA GENERAZIONE DELLA PASSWORD */
    $lowercase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $uppercase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $symbols = ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='];

    $ArrayWithAllCharacter = array_merge($lowercase, $uppercase, $numbers, $symbols);
    shuffle($ArrayWithAllCharacter);
    /* Generazione password */
    $randomPassword='';
    for ($i=1 ; $i <= $Password_lenght ; $i++){
        /* var_dump($ArrayWithAllCharacter[$i]); */
        $randomPassword .= $ArrayWithAllCharacter[$i];
    }
    return $randomPassword;
/* echo $randomPassword; */
}




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