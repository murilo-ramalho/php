<?php
// Configurações do banco de dados 
$servername = "localhost"; // Host do MySQL (geralmente localhost)
$username = "pro22123_fatec"; // Nome de usuário do MySQL
$password = "!@$#Fatec2023"; // Senha do MySQL
$dbname = "pro22123_008"; // Nome do banco de dados

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Cria o banco de dados
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Banco de dados criado com sucesso!<br>";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

// Conecta ao banco de dados especificado
$conn->select_db($dbname);

// Cria a tabela de usuário
$sql_create_table = "CREATE TABLE IF NOT EXISTS `alunos` (
    `codigo` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(100) NOT NULL,
    `curso` varchar(100) NOT NULL,
    `periodo` varchar(20) NOT NULL,
    PRIMARY KEY (`codigo`)
  )";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabela de usuário criada com sucesso!";
} else {
    echo "Erro ao criar a tabela de usuário: " . $conn->error;
}

// Cria os procedimentos
$sql_create_procedures = "DELIMITER //
CREATE PROCEDURE InserirAluno(
    IN nomeParam VARCHAR(100),
    IN cursoParam VARCHAR(100),
    IN periodoParam VARCHAR(20)
)
BEGIN
    INSERT INTO alunos (nome, curso, periodo) VALUES (nomeParam, cursoParam, periodoParam);
END;
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE AtualizarAluno(
    IN codigoParam INT,
    IN novoNome VARCHAR(100),
    IN novoCurso VARCHAR(100),
    IN novoPeriodo VARCHAR(20)
)
BEGIN
    UPDATE alunos
    SET nome = novoNome, curso = novoCurso, periodo = novoPeriodo
    WHERE codigo = codigoParam;
END;
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE ExcluirAlunoPorCodigo(
    IN codigoParam INT
)
BEGIN
    DELETE FROM alunos
    WHERE codigo = codigoParam;
END;
//
DELIMITER;";

if ($conn->multi_query($sql_create_procedures)) {
    do {
        if ($conn->more_results()) {
            $conn->next_result();
        }
    } while ($conn->more_results());
    echo "Procedimentos criados com sucesso!";
} else {
    echo "Erro ao criar os procedimentos: " . $conn->error;
}

// Fecha a conexão com o MySQL
$conn->close();
?>
