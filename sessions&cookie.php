<?php

/*
███████╗███████╗███████╗███████╗██╗ ██████╗ ███╗   ██╗██╗    ███████╗     ██████╗ ██████╗  ██████╗ ██╗  ██╗██╗███████╗
██╔════╝██╔════╝██╔════╝██╔════╝██║██╔═══██╗████╗  ██║██║    ██╔════╝    ██╔════╝██╔═══██╗██╔═══██╗██║ ██╔╝██║██╔════╝
███████╗█████╗  ███████╗███████╗██║██║   ██║██╔██╗ ██║██║    █████╗      ██║     ██║   ██║██║   ██║█████╔╝ ██║█████╗  
╚════██║██╔══╝  ╚════██║╚════██║██║██║   ██║██║╚██╗██║██║    ██╔══╝      ██║     ██║   ██║██║   ██║██╔═██╗ ██║██╔══╝  
███████║███████╗███████║███████║██║╚██████╔╝██║ ╚████║██║    ███████╗    ╚██████╗╚██████╔╝╚██████╔╝██║  ██╗██║███████╗
╚══════╝╚══════╝╚══════╝╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝    ╚══════╝     ╚═════╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═╝╚═╝╚══════╝
                                                                                                                      
██╗███╗   ██╗    ██████╗ ██╗  ██╗██████╗                                                                              
██║████╗  ██║    ██╔══██╗██║  ██║██╔══██╗                                                                             
██║██╔██╗ ██║    ██████╔╝███████║██████╔╝                                                                             
██║██║╚██╗██║    ██╔═══╝ ██╔══██║██╔═══╝                                                                              
██║██║ ╚████║    ██║     ██║  ██║██║██╗                                                                               
╚═╝╚═╝  ╚═══╝    ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝                                                                               
          
Le sessioni e cookie in PHP sono strumenti fondamentali per mantenere lo stato e le informazioni degli utenti tra le diverse pagine di un sito.
*/

/*
███████╗███████╗███████╗███████╗██╗ ██████╗ ███╗   ██╗██╗    ██╗███╗   ██╗    ██████╗ ██╗  ██╗██████╗ 
██╔════╝██╔════╝██╔════╝██╔════╝██║██╔═══██╗████╗  ██║██║    ██║████╗  ██║    ██╔══██╗██║  ██║██╔══██╗
███████╗█████╗  ███████╗███████╗██║██║   ██║██╔██╗ ██║██║    ██║██╔██╗ ██║    ██████╔╝███████║██████╔╝
╚════██║██╔══╝  ╚════██║╚════██║██║██║   ██║██║╚██╗██║██║    ██║██║╚██╗██║    ██╔═══╝ ██╔══██║██╔═══╝ 
███████║███████╗███████║███████║██║╚██████╔╝██║ ╚████║██║    ██║██║ ╚████║    ██║     ██║  ██║██║     
╚══════╝╚══════╝╚══════╝╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝    ╚═╝╚═╝  ╚═══╝    ╚═╝     ╚═╝  ╚═╝╚═╝     
                                                                                                      

Le sessioni in PHP permettono di memorizzare informazioni sul server per ogni utente, utilizzando un indetificatore di 
sessione unico.
*/

// 1) AVVIARE UNA SESSIONE
/*
Per avviare le sessioni, devi prima avviarle con ' session_start() '. Questo deve essere fatto all'inizio del tuo script
prima di qualsiasi Output in HTML.
*/

session_start();

// 2) MEMORIZZARE DATI NELLA SESSIONE
/*
Puoi memorizzare i dati nella sessione utilizzando l'array superglobale '$_SESSION'
*/

$_SESSION['username'] = 'Mattia';
$_SESSION['email'] = 'mattia@example.com';

// 3) ACCEDERE AI DATI DELLA SESSIONE

/*
Puoi accedere ai dati memorizzati nella sessione in qualsiasi pagina del tuo sito, purchè la sessione sia stata avviata
*/

echo 'Username ' . $_SESSION['usernaname'];
echo 'Email ' . $_SESSION['email'];

// 4) DISTRUGGERE UNA SESSIONE

/*
Per terminare una sessione e cancellare tutti i dati associati, utilizza ' session_destroy() '
*/

session_start();
session_destroy();


/*
 ██████╗ ██████╗  ██████╗ ██╗  ██╗██╗███████╗    ██╗███╗   ██╗    ██████╗ ██╗  ██╗██████╗ 
██╔════╝██╔═══██╗██╔═══██╗██║ ██╔╝██║██╔════╝    ██║████╗  ██║    ██╔══██╗██║  ██║██╔══██╗
██║     ██║   ██║██║   ██║█████╔╝ ██║█████╗      ██║██╔██╗ ██║    ██████╔╝███████║██████╔╝
██║     ██║   ██║██║   ██║██╔═██╗ ██║██╔══╝      ██║██║╚██╗██║    ██╔═══╝ ██╔══██║██╔═══╝ 
╚██████╗╚██████╔╝╚██████╔╝██║  ██╗██║███████╗    ██║██║ ╚████║    ██║     ██║  ██║██║     
 ╚═════╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═╝╚═╝╚══════╝    ╚═╝╚═╝  ╚═══╝    ╚═╝     ╚═╝  ╚═╝╚═╝     

 I Cookie sono piccoli file di testo memorizzati sul computer dell'utente e possono essere utilizzati per memorizzare informazioni tra le visite.

*/

// 1) IMPOSTARE UN COOKIE 
/*
Puoi impostare un cookie utilizzando la funzione 'setcookie()'. I cookie devono essere impostati prma di qualsiasi Output HTML.
*/

// SINTASSI

setcookie(name, value, path, domain, secure, httponly);

// ESEMPIO

setcookie('username', 'Mario', time() + (86400 * 30), "/"); // Scade in 30 giorni

// 2) ACCEDERE AI COOKIE
/*
Puoi accedere ai cookie utlizzando l'array superglobale '$_COOKIE'
*/

if (isset($_COOKIE['username'])) {
    echo 'Username: ' . $_COOKIE['username'];
}

// 3) CANCELLARE UN COOKIE
/*
Per cancellare un cookie, imposta la sua data di scadenza nel passato
*/

setcookie('username', '', time() - 3600, "/");