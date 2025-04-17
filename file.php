<?php

/*
 ██████╗ ███████╗███████╗████████╗██╗ ██████╗ ███╗   ██╗███████╗    ██████╗ ███████╗██╗    ███████╗██╗██╗     ███████╗    
██╔════╝ ██╔════╝██╔════╝╚══██╔══╝██║██╔═══██╗████╗  ██║██╔════╝    ██╔══██╗██╔════╝██║    ██╔════╝██║██║     ██╔════╝    
██║  ███╗█████╗  ███████╗   ██║   ██║██║   ██║██╔██╗ ██║█████╗      ██║  ██║█████╗  ██║    █████╗  ██║██║     █████╗      
██║   ██║██╔══╝  ╚════██║   ██║   ██║██║   ██║██║╚██╗██║██╔══╝      ██║  ██║██╔══╝  ██║    ██╔══╝  ██║██║     ██╔══╝      
╚██████╔╝███████╗███████║   ██║   ██║╚██████╔╝██║ ╚████║███████╗    ██████╔╝███████╗██║    ██║     ██║███████╗███████╗    
 ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝    ╚═════╝ ╚══════╝╚═╝    ╚═╝     ╚═╝╚══════╝╚══════╝    
       
La gestione dei file in PHP ti permette di leggere, scrivere, creare e manipolare file sul server. 
Questo è utile per una varietà di applicazioni, come la gestione di contenuti, la registrazione di log, e l'archiviazione di dati.
Ecco una guida dettagliata su come lavorare con i file in PHP. 
*/

/*
 █████╗ ██████╗ ███████╗██████╗ ████████╗██╗   ██╗██████╗  █████╗     ██████╗ ██╗    ██╗   ██╗███╗   ██╗    ███████╗██╗██╗     ███████╗
██╔══██╗██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██║   ██║██╔══██╗██╔══██╗    ██╔══██╗██║    ██║   ██║████╗  ██║    ██╔════╝██║██║     ██╔════╝
███████║██████╔╝█████╗  ██████╔╝   ██║   ██║   ██║██████╔╝███████║    ██║  ██║██║    ██║   ██║██╔██╗ ██║    █████╗  ██║██║     █████╗  
██╔══██║██╔═══╝ ██╔══╝  ██╔══██╗   ██║   ██║   ██║██╔══██╗██╔══██║    ██║  ██║██║    ██║   ██║██║╚██╗██║    ██╔══╝  ██║██║     ██╔══╝  
██║  ██║██║     ███████╗██║  ██║   ██║   ╚██████╔╝██║  ██║██║  ██║    ██████╔╝██║    ╚██████╔╝██║ ╚████║    ██║     ██║███████╗███████╗
╚═╝  ╚═╝╚═╝     ╚══════╝╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝    ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═══╝    ╚═╝     ╚═╝╚══════╝╚══════╝
                       
Per lavorare con un file, devi prima aprirlo utilizzando la funzione fopen().
Questa funzione richiede due parametri: il nome del file e la modalità di apertura.
*/

/*
Modalita di Apertura : 

- 'r': Lettura. Il puntatore del file inizia all'inizio del file.
- 'r+': Lettura e scrittura. Il puntatore del file inizia all'inizio del file.
- 'w': Scrittura. Cancella il contenuto del file o crea un nuovo file se non esiste.
- 'w+': Lettura e scrittura. Cancella il contenuto del file o crea un nuovo file se non esiste.
- 'a': Scrittura. Il puntatore del file è alla fine del file. Crea un nuovo file se non esiste.
- 'a+': Lettura e scrittura. Il puntatore del file è alla fine del file. Crea un nuovo file se non esiste.

*/ 

// Esempio di Apertura 

$file = fopen("esempio.txt", "r");
if ($file) {
    echo "File aperto con successo.<br>";
} else {
    echo "Errore nell'apertura del file.<br>";
}

/*
██╗     ███████╗████████╗████████╗██╗   ██╗██████╗  █████╗     ██████╗ ██╗    ███████╗██╗██╗     ███████╗
██║     ██╔════╝╚══██╔══╝╚══██╔══╝██║   ██║██╔══██╗██╔══██╗    ██╔══██╗██║    ██╔════╝██║██║     ██╔════╝
██║     █████╗     ██║      ██║   ██║   ██║██████╔╝███████║    ██║  ██║██║    █████╗  ██║██║     █████╗  
██║     ██╔══╝     ██║      ██║   ██║   ██║██╔══██╗██╔══██║    ██║  ██║██║    ██╔══╝  ██║██║     ██╔══╝  
███████╗███████╗   ██║      ██║   ╚██████╔╝██║  ██║██║  ██║    ██████╔╝██║    ██║     ██║███████╗███████╗
╚══════╝╚══════╝   ╚═╝      ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝    ╚═════╝ ╚═╝    ╚═╝     ╚═╝╚══════╝╚══════╝
   
Dopo aver aperto un file, puoi leggerne il contenuto utilizzando diverse funzioni.
*/

/*
fread()
Legge un numero specificato di byte da un file.
*/

$file = fopen("esempio.txt", "r");
$contenuto = fread($file, filesize("esempio.txt"));
echo $contenuto;
fclose($file);

/*
fgets()
Legge una riga dal file.
*/

$file = fopen("esempio.txt", "r");
while (!feof($file)) {
    $linea = fgets($file);
    echo $linea . "<br>";
}
fclose($file);

/*
file_get_contents()
Legge l'intero file in una stringa. È un modo semplice per leggere file di piccole dimensioni.
*/

$contenuto = file_get_contents("esempio.txt");
echo $contenuto;


/*
███████╗ ██████╗██████╗ ██╗████████╗████████╗██╗   ██╗██████╗  █████╗     ██████╗ ██╗    ███████╗██╗██╗     ███████╗
██╔════╝██╔════╝██╔══██╗██║╚══██╔══╝╚══██╔══╝██║   ██║██╔══██╗██╔══██╗    ██╔══██╗██║    ██╔════╝██║██║     ██╔════╝
███████╗██║     ██████╔╝██║   ██║      ██║   ██║   ██║██████╔╝███████║    ██║  ██║██║    █████╗  ██║██║     █████╗  
╚════██║██║     ██╔══██╗██║   ██║      ██║   ██║   ██║██╔══██╗██╔══██║    ██║  ██║██║    ██╔══╝  ██║██║     ██╔══╝  
███████║╚██████╗██║  ██║██║   ██║      ██║   ╚██████╔╝██║  ██║██║  ██║    ██████╔╝██║    ██║     ██║███████╗███████╗
╚══════╝ ╚═════╝╚═╝  ╚═╝╚═╝   ╚═╝      ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝    ╚═════╝ ╚═╝    ╚═╝     ╚═╝╚══════╝╚══════╝
       
Per scrivere su un file, puoi utilizzare fwrite() o file_put_contents().
*/

/*
fwrite()
Scrive una stringa in un file aperto.
*/

$file = fopen("esempio.txt", "w");
fwrite($file, "Ciao, mondo!\n");
fwrite($file, "Questa è una nuova riga.");
fclose($file);

/*
file_put_contents()
Scrive una stringa in un file. Se il file esiste, il contenuto viene sovrascritto.
*/

file_put_contents("esempio.txt", "Ciao, mondo!\nQuesta è una nuova riga.");


/*
 ██████╗██╗  ██╗██╗██╗   ██╗███████╗██╗   ██╗██████╗  █████╗     ██████╗ ██╗    ███████╗██╗██╗     ███████╗
██╔════╝██║  ██║██║██║   ██║██╔════╝██║   ██║██╔══██╗██╔══██╗    ██╔══██╗██║    ██╔════╝██║██║     ██╔════╝
██║     ███████║██║██║   ██║███████╗██║   ██║██████╔╝███████║    ██║  ██║██║    █████╗  ██║██║     █████╗  
██║     ██╔══██║██║██║   ██║╚════██║██║   ██║██╔══██╗██╔══██║    ██║  ██║██║    ██╔══╝  ██║██║     ██╔══╝  
╚██████╗██║  ██║██║╚██████╔╝███████║╚██████╔╝██║  ██║██║  ██║    ██████╔╝██║    ██║     ██║███████╗███████╗
 ╚═════╝╚═╝  ╚═╝╚═╝ ╚═════╝ ╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝    ╚═════╝ ╚═╝    ╚═╝     ╚═╝╚══════╝╚══════╝
                                           
Dopo aver finito di lavorare con un file, è importante chiuderlo utilizzando 'fclose()' per liberare le risorse.
*/

fclose($file);


// Piccolo esempio di come aggiunmgere del contenuto, in un file già pieno 

function insertLine($filename, $lineNumber, $newLine) {
    $lines = file($filename);
    if ($lineNumber > 0 && $lineNumber <= count($lines)) {
        array_splice($lines, $lineNumber - 1, 0, $newLine . "\n");
        var_dump($lines);
        file_put_contents($filename, implode('', $lines));
        return true;
    }
    return false; // Riga non valida
}

$filename = 'esempio.txt';
$lineNumber = 8;
$newLine = "Voglio vivire in una favola";

if (insertLine($filename, $lineNumber, $newLine)) {
    echo "Testo aggiunto con successo.";
} else {
    echo "Riga non valida.";
}

echo "il testo è stato aggiunto con successo";