<?php 

/*
 ██████╗██╗ ██████╗██╗     ██╗
██╔════╝██║██╔════╝██║     ██║
██║     ██║██║     ██║     ██║
██║     ██║██║     ██║     ██║
╚██████╗██║╚██████╗███████╗██║
 ╚═════╝╚═╝ ╚═════╝╚══════╝╚═╝
 
Consentono di eseguire blocchi di codice e di ripetere operazioni. 
*/

// Il ciclo ' while ' esegue un blocco di codice finchè una condizione è vera.

//SINTASSI 

$i = 1;

while ($i <= 5) {

    echo "numero i: $i \n";

    $i++;

}

//-----------------------------------------------------------------------------------------------------------------------------------------------------

// Il ciclo ' do-while ' è simile a ' while ', ma esegue il blocco di codice almeno una volta
// poichè la condizione viene verificata alla fine.

echo "\n";

//SINTASSI

$y = 1;

do {

    echo "numero y: $y \n";

    $y++;

} while ($y <= 5);

//-----------------------------------------------------------------------------------------------------------------------------------------------------

// Il ciclo ' for ' è utile quando conosci il numero di iterazioni da eseguire.

echo "\n";

//SINTASSI

for ( $x = 1; $x <= 5; $x++) {

    echo "numero x: $x \n";

}

//-----------------------------------------------------------------------------------------------------------------------------------------------------

// Il ciclo ' foreach ' è specefico per iterare su array.

echo "\n";

//SINTASSI

$frutti = ['mela', 'pera', 'banana'];

foreach ($frutti as $frutto) {

    echo "frutto: $frutto \n";
    
}