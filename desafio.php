<?php
/*--------------------------------------------------------------------
Criado por: Antonio Marcos Maneo
FATEC - Araras
antonio.maneo@fatec.sp.gov.br
-------------------------------------------------------------------*/

class pessoa{

public $nome;
public $sobrenome;
public $telefone;
public $cpf;
public $rg;


}

class SalaVirtual{

public $curso;
public $professor;


}

$info1 = new pessoa;
$info1->nome = 'Rodrigo'; 
$info1->sobrenome = 'Maia';
$info1->telefone = '(19) 9856 - 1263';
$info1->cpf = '175.986.789 - 65';
$info1->rg = '23.896.475 - 6';

$info2 = new pessoa;
$info2->nome = 'Aurélio';
$info2->sobrenome = 'Jades';
$info2->telefone = '(19) 9986 - 3987';
$info2->cpf = '356.983.785 - 12';
$info2->rg = '98.832.365 - 7';

$info3 = new SalaVirtual;
$info3->curso = 'DSM'; 
$info3->professor = 'Orlando';

$info4 = new SalaVirtual;
$info4->curso = 'Logistica'; 
$info4->professor = 'Zorzo';

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio de PHP orientado a objeto</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style type="text/css">
         body{ font: 14px sans-serif; text-align: justify;
              background-color: #fdf9f2;}
              h1, h2, p {color: #8B4513;}            
              .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
<div class="container">
<h2>Pessoa</h2>
<?php 
print "Nome: {$info2->nome}  {$info2->sobrenome} <br>\n"; 
print "Telefone: {$info2->telefone} <br>\n";
print "CPF: {$info2->cpf} <br>\n" ;
print "RG: {$info2->rg} <br>\n";
?>

<br>

<h2>Sala Virtual</h2>
<?php 
print "O curso é {$info3->curso}  <br>\n";
print "O professor é {$info3->professor} <br>\n"; 
?>
</div>
</body>
</html>

