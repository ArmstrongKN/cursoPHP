
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    	$host  = "localhost:3306";
        $user  = "root";
        $pass  = "";
        $base  = "pw2";
        $con   = mysqli_connect($host, $user, $pass, $base);
        $res = mysqli_query($con,"select * from registro");	
    
    
        //Executa o comando SQL, no caso para pegar apenas os dados do aluno desejado em uma variavel ($res)  
      // echo "<table border=3px><tr><td>RA   </td><td>Email</td><td>senha</td></tr>";
        /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
        while($escrever=mysqli_fetch_array($res)){
        /*Escreve cada linha da tabela*/
      // echo "<tr><td>" . $escrever['email'] . "</td><td>" . $escrever['senha'] . "</td></tr>";
        /*Fim do while*/
        $email =  $escrever['email'];
        $senha = $escrever['senha'];
    }

    if(!isset($_SESSION['login'])){
            if(isset($_POST['acao'])){
                
                $emailForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                    if($email == $emailForm && $senha == $senhaForm){
                        $_SESSION['login'] = $login;
                        header('Location: professor.php');
                    }else{
                        echo 'Dados invalidos';
                    }
                    }
                    include('login.php');
                    }else{
                        if(isset($_GET['logout'])){
                            unset($_SESSION['login']);
                            session_destroy();
                            header('Location: professor.php');
                        }
                        include('home.php');
    }
    ?>
</body>
</html>