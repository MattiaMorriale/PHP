<?php 

/*
██████╗  █████╗ ████████╗ █████╗ ██████╗  █████╗ ███████╗███████╗    ██╗███╗   ██╗    ██████╗ ██╗  ██╗██████╗ 
██╔══██╗██╔══██╗╚══██╔══╝██╔══██╗██╔══██╗██╔══██╗██╔════╝██╔════╝    ██║████╗  ██║    ██╔══██╗██║  ██║██╔══██╗
██║  ██║███████║   ██║   ███████║██████╔╝███████║███████╗█████╗      ██║██╔██╗ ██║    ██████╔╝███████║██████╔╝
██║  ██║██╔══██║   ██║   ██╔══██║██╔══██╗██╔══██║╚════██║██╔══╝      ██║██║╚██╗██║    ██╔═══╝ ██╔══██║██╔═══╝ 
██████╔╝██║  ██║   ██║   ██║  ██║██████╔╝██║  ██║███████║███████╗    ██║██║ ╚████║    ██║     ██║  ██║██║     
╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝╚═════╝ ╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝╚═╝  ╚═══╝    ╚═╝     ╚═╝  ╚═╝╚═╝     
  
interagire con un database è una parte fondamentale dello sviluppo web, poichè consente di memorizzare, recuperare 
e manipolare dati in modo persistente. In PHP, ci sono diversi modi per connettersi a un database, ma i più comuni
sono i PDO (PHP DATA OBJECTS) e MySQL. 
*/

// CONNESSIONE A UN DATABASE MySQL

/*
 1) Utilizzo di PDO
    il PDO è un interfaccia per accedere a diversi database in PHP. E' flessibile e supporta la preparazione delle
    dichiarazioni, che aiuta a prevenire le SQL injection.
*/

// Connessione al database

try {

    $dsn = 'mysql:host=localhost;dbname=nome_database';
    $username = 'nome_utente';
    $password = 'password';

    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    $pdo = new PDO($dsn, $username, $password, $options);

    echo "Connessione riuscita!";

} catch (PDOException $e) {

    echo "Errore di connessione: " . $e->getMessage();

}

/*
 2) Utilizzo di MySQLi
    MySQLi è un estenzione specifica per MySQL e offre sia un'interfaccia procedurale che orientata agli oggetti
*/

// Connessione al Database (procedurale)

$conn = mysqli_connect('localhost', 'nome_utente', 'password', 'nome_database');

if (!$conn) {

    die("Connessione fallita: " . mysqli_connect_error());
}

echo "Connessione riuscita!";

// Connessione al Database (OOP)

$conn = new mysqli('localhost', 'nome_utente', 'password', 'nome_database');

if ($conn->connect_error) {

    die("Connessione fallita: " . $conn->connect_error);

}

echo "Connessione riuscita!";


/*
███████╗███████╗███████╗ ██████╗██╗   ██╗███████╗██╗ ██████╗ ███╗   ██╗███████╗    ██████╗ ██╗    
██╔════╝██╔════╝██╔════╝██╔════╝██║   ██║╚══███╔╝██║██╔═══██╗████╗  ██║██╔════╝    ██╔══██╗██║    
█████╗  ███████╗█████╗  ██║     ██║   ██║  ███╔╝ ██║██║   ██║██╔██╗ ██║█████╗      ██║  ██║██║    
██╔══╝  ╚════██║██╔══╝  ██║     ██║   ██║ ███╔╝  ██║██║   ██║██║╚██╗██║██╔══╝      ██║  ██║██║    
███████╗███████║███████╗╚██████╗╚██████╔╝███████╗██║╚██████╔╝██║ ╚████║███████╗    ██████╔╝██║    
╚══════╝╚══════╝╚══════╝ ╚═════╝ ╚═════╝ ╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝    ╚═════╝ ╚═╝    
                                                                                                  
 ██████╗ ██╗   ██╗███████╗██████╗ ██╗   ██╗    ███████╗ ██████╗ ██╗                               
██╔═══██╗██║   ██║██╔════╝██╔══██╗╚██╗ ██╔╝    ██╔════╝██╔═══██╗██║                               
██║   ██║██║   ██║█████╗  ██████╔╝ ╚████╔╝     ███████╗██║   ██║██║                               
██║▄▄ ██║██║   ██║██╔══╝  ██╔══██╗  ╚██╔╝      ╚════██║██║▄▄ ██║██║                               
╚██████╔╝╚██████╔╝███████╗██║  ██║   ██║       ███████║╚██████╔╝███████╗                          
 ╚══▀▀═╝  ╚═════╝ ╚══════╝╚═╝  ╚═╝   ╚═╝       ╚══════╝ ╚══▀▀═╝ ╚══════╝                          
                                                                                                  
*/

// 1) Query di selezione

// PDO

$stmt = $pdo->query("SELECT * FROM utenti");

while ($row = $stmt->fetch()) {

    echo $row['nome'] . "<br>";

}

// MySQLi (procedurale)

$result = mysqli_query($conn, "SELECT * FROM utenti");

while ($row = mysqli_fetch_assoc($result)) {

    echo $row['nome'] . "<br>";

}

// MySQLi (OOP)

$result = $conn->query("SELECT * FROM utenti");

while ($row = $result->fetch_assoc()) {

    echo $row['nome'] . "<br>";

}

// 2) Query di inserimento

// PDO

$sql = "INSERT INTO utenti (nome, email) VALUES (:nome, :email)";

$stmt = $pdo->prepare($sql);

$stmt->execute(['nome' => 'Mario', 'email' => 'mario@example.com']);

// MySQLi (procedurale)

$sql = "INSERT INTO utenti (nome, email) VALUES ('Mario', 'mario@example.com')";

if (mysqli_query($conn, $sql)) {

    echo "Nuovo record creato con successo";

} else {

    echo "Errore: " . $sql . "<br>" . mysqli_error($conn);

}

// MySQLi (OOP)

$sql = "INSERT INTO utenti (nome, email) VALUES ('Mario', 'mario@example.com')";

if ($conn->query($sql) === TRUE) {

    echo "Nuovo record creato con successo";

} else {

    echo "Errore: " . $sql . "<br>" . $conn->error;

}


/*
██████╗ ██████╗ ███████╗██╗   ██╗███████╗███╗   ██╗███████╗██╗ ██████╗ ███╗   ██╗███████╗    ██████╗ ███████╗██╗     ██╗     ███████╗    
██╔══██╗██╔══██╗██╔════╝██║   ██║██╔════╝████╗  ██║╚══███╔╝██║██╔═══██╗████╗  ██║██╔════╝    ██╔══██╗██╔════╝██║     ██║     ██╔════╝    
██████╔╝██████╔╝█████╗  ██║   ██║█████╗  ██╔██╗ ██║  ███╔╝ ██║██║   ██║██╔██╗ ██║█████╗      ██║  ██║█████╗  ██║     ██║     █████╗      
██╔═══╝ ██╔══██╗██╔══╝  ╚██╗ ██╔╝██╔══╝  ██║╚██╗██║ ███╔╝  ██║██║   ██║██║╚██╗██║██╔══╝      ██║  ██║██╔══╝  ██║     ██║     ██╔══╝      
██║     ██║  ██║███████╗ ╚████╔╝ ███████╗██║ ╚████║███████╗██║╚██████╔╝██║ ╚████║███████╗    ██████╔╝███████╗███████╗███████╗███████╗    
╚═╝     ╚═╝  ╚═╝╚══════╝  ╚═══╝  ╚══════╝╚═╝  ╚═══╝╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝    ╚═════╝ ╚══════╝╚══════╝╚══════╝╚══════╝    
                                                                                                                                         
███████╗ ██████╗ ██╗         ██╗███╗   ██╗     ██╗███████╗ ██████╗████████╗██╗ ██████╗ ███╗   ██╗                                        
██╔════╝██╔═══██╗██║         ██║████╗  ██║     ██║██╔════╝██╔════╝╚══██╔══╝██║██╔═══██╗████╗  ██║                                        
███████╗██║   ██║██║         ██║██╔██╗ ██║     ██║█████╗  ██║        ██║   ██║██║   ██║██╔██╗ ██║                                        
╚════██║██║▄▄ ██║██║         ██║██║╚██╗██║██   ██║██╔══╝  ██║        ██║   ██║██║   ██║██║╚██╗██║                                        
███████║╚██████╔╝███████╗    ██║██║ ╚████║╚█████╔╝███████╗╚██████╗   ██║   ██║╚██████╔╝██║ ╚████║                                        
╚══════╝ ╚══▀▀═╝ ╚══════╝    ╚═╝╚═╝  ╚═══╝ ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝                                        
      
Le SQL injection sono un tipo di attacco in cui un utente malintenzionato può eseguire comandi SQL arbitrari sul tuo database. 
È importante utilizzare dichiarazioni preparate per prevenire questo tipo di attacco.
*/

// PDO

$sql = "SELECT * FROM utenti WHERE email = :email";

$stmt = $pdo->prepare($sql);

$stmt->execute(['email' => 'mario@example.com']);

$utente = $stmt->fetch();

// MySQLi (procedurale)

$stmt = mysqli_prepare($conn, "SELECT * FROM utenti WHERE email = ?");

mysqli_stmt_bind_param($stmt, "s", $email);

$email = 'mario@example.com';

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$utente = mysqli_fetch_assoc($result);

// MySQLi (OOP)

$stmt = $conn->prepare("SELECT * FROM utenti WHERE email = ?");

$stmt->bind_param("s", $email);

$email = 'mario@example.com';

$stmt->execute();

$result = $stmt->get_result();

$utente = $result->fetch_assoc();