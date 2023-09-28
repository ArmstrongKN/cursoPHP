<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Certificate of Completion</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .certificate {
            border: 2px solid #333;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }

        .sumir{
            opacity: 0%;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        .signature {
            margin-top: 30px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div style="   background-image: url('OIP.jfif');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;">        
 
<div class="certificate" >
        <h1>Certificate of Project Linux Experts</h1></br></br></br>
        <p>This is to certify that</p>
        
        
       
       <?php 
                $host  = "localhost:3306";
                $user  = "root";
                $pass  = "";
                $base  = "pw2";
                $con   = mysqli_connect($host, $user, $pass, $base);
                
                $RA = $_POST['RA'];
                $res = mysqli_query($con,"select * from tb_aluno where RA = '$RA'");	
                $escrever=mysqli_fetch_array($res); 
                "<table border=3px><tr><td>RA do Aluno</td><td>Nome do Aluno</td><td>Nota 1</td><td>Nota 2</td><td>Nota 3</td><td>Nota 4</td><td>Faltas</td></tr>";
                $nome =  $escrever['nome'];
                echo $nome;
            ?>
       

        <p>has successfully completed the</p>
        <h3>Curso Linux Experts</h3>
        <p>with a total of 200 hours of study and has been approved.</p></br></br> 
        <div class="signature"></br></br> 
            <p>Signature:</p>
            <img src="israel-j-ellis-signature.png" alt="Israel Signature" width="150"></br>
        </div>
        <p>Date: September 21, 2023</p>
    </div>
   
    <button onclick="window.print()">Imprimir / Salvar PDF</button>
 
</body>
</html>
 
