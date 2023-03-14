<?php
//creo la funzione "generaPasword" per generarla
function generaPassword($lunghezza) {
    //caratteri per generare la password
    $caratteri = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+|:<>?,./";
    $password = "";
    //creo un ciclo per generare la password casuale
    for ($i=0; $i < $lunghezza; $i++) { 
        $password .= $caratteri[rand(0, strlen($caratteri) -1)];
    }
    //ritorno la password generata
    return $password;
}
?>