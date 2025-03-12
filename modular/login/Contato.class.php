<?php
class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function __construct(){
        $dns    = "mysql:dbname=contato;host=localhost";
        $dbUser = "root";
        $dbPass = "";
        
        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }

    }

    function chkUser($email){
        // Primeiro passo crio uma query (consulta sql) e armazeno na variavel $sql
        $sql = "SELECT * FROM usuarios WHERE email = :e";
       
        // Segundo passo, passo os dados para o método prepare da classe PDO
        $stmt = $this->pdo->prepare($sql);
       
        // Terceiro passo, passo os dados para o método bindValue do pdo
        $stmt->bindValue(':e', $email);
       
        // Quarto passo, executo a query
        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function chkUserPass($email, $senha){
        $sql  = "SELECT *FROM usuarios WHERE email = :e AND senha = :s";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        $stmt->execute();

        if( $stmt->rowCount() > 0 ){
            return $stmt->fetch();
        }else{
            return array();
        }


    }

    function insertUser($nome, $email, $senha){
        // Primeiro passo crio uma query (consulta sql) e armazeno na variavel $sql
        $sql = "INSERT INTO usuarios set nome = :n, email = :e, senha = :s";

        // Segundo passo, passo os dados para o método prepare da classe PDO
        $stmt = $this->pdo->prepare($sql);
    
        // Terceiro passo, passo os dados para o método bindValue do pdo
        $stmt->bindValue(':n', $nome);
        $stmt->bindValue(':e', $email);
        $stmt->bindValue(':s', $senha);
    
        // Quarto passo, executo a query
        return $stmt->execute();
    
    }


}