<?php
// endereco
// nome do BD
// // senha
$endereco = 'localhost';
$banco = 'postgres';
$adm = 'postgres';
$senha = 'postgres';
try {
    // sgbd:host;port;dbname
    // adm
    // senha
    // errmode
    $pdo = new PDO(
        "pgsql:host=$endereco;port=5432;dbname=$banco",
        $adm,
        $senha,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Conectado no banco commit por fvaor de dados!!!";
    $sql = "CREATE TABLE IF NOT EXISTS 
USUARIO (ID SERIAL  (255), 
DATA_NASCIMENTO VARCHAR(255),
TELEFONE VARCHAR (255),
EMAIL VARCHAR (255)  PRIMARY KEY,
SENHA VARCHAR (255))";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Falha ao conectar ao banco  please de dados. <br/>";
    die($e->getMessage());
}
