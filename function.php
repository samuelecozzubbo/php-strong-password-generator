<?php
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