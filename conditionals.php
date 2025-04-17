<?php

/* 
███████╗████████╗██████╗ ██╗   ██╗████████╗████████╗██╗   ██╗██████╗ ███████╗          
██╔════╝╚══██╔══╝██╔══██╗██║   ██║╚══██╔══╝╚══██╔══╝██║   ██║██╔══██╗██╔════╝          
███████╗   ██║   ██████╔╝██║   ██║   ██║      ██║   ██║   ██║██████╔╝█████╗            
╚════██║   ██║   ██╔══██╗██║   ██║   ██║      ██║   ██║   ██║██╔══██╗██╔══╝            
███████║   ██║   ██║  ██║╚██████╔╝   ██║      ██║   ╚██████╔╝██║  ██║███████╗          
╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝      ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝          
                                                                                       
 ██████╗ ██████╗ ███╗   ██╗██████╗ ██╗███████╗██╗ ██████╗ ███╗   ██╗ █████╗ ██╗     ██╗
██╔════╝██╔═══██╗████╗  ██║██╔══██╗██║╚══███╔╝██║██╔═══██╗████╗  ██║██╔══██╗██║     ██║
██║     ██║   ██║██╔██╗ ██║██║  ██║██║  ███╔╝ ██║██║   ██║██╔██╗ ██║███████║██║     ██║
██║     ██║   ██║██║╚██╗██║██║  ██║██║ ███╔╝  ██║██║   ██║██║╚██╗██║██╔══██║██║     ██║
╚██████╗╚██████╔╝██║ ╚████║██████╔╝██║███████╗██║╚██████╔╝██║ ╚████║██║  ██║███████╗██║
 ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚═════╝ ╚═╝╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝╚═╝
                               
Consentono di eseguire blocchi di codice al verificarsi di determinate condizioni.
*/

// ' if ' consente di eseguire un blocco di codice solo se una condizione è vera.
// Si può estendere con ' eleseif ' o ' else ' per gestire più condizioni.

//SINTASSI

$numero = 5;

if ( $numero < 3) {

    echo 'il numero è minore di 3';

} elseif ( $numero > 10) {

    echo 'il numero è maggiore di 10';

} else {

    echo 'il numero è compreso tra 3 e 10';

}

// La struttura ' switch ' è utile quando hai molte condizioni da verificare, rispetto a una singola variabile.

echo "\n";

//SINTASSI

$giorno = 'mercoledì';

switch ($giorno) {

    case 'lunedi':

        echo 'Inizio della settimana :(';

        break;

    case 'mercoledì':

        echo 'siamo a mercoledì :|';

        break;

    case 'venerdi':

        echo 'quasi weekend !!';

        break;

    default:

        echo 'buona giornata';

}