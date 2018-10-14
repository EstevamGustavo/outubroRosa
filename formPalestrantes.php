<!doctype html>
<html>

<head>
    <?php
    
    
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script>
        $(function(){ 
                  $("#header").load("header.html");
                  $("#footer").load("footer.html");
                  $("#validar").load("validar.html"); 
         });
   </script>
    <title>Meu Form</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <meta charset="utf-8">

</head>

<body>
    <div id = "header"></div>

    <div class = "cadastro">
        <form name= "formPalestrante" method="post" action="#">
         <h2>Cadastro</h2>
         <br><br>
         <label for = "nome">Nome:</label>
         <input type = "text" name = "nome" id = "nome"
         placeholder = "nome"><br><br>
         <label for = "email">Email:</label>
         <input type = "email" name = "email" id ="email"
         placeholder = "E-mail"><br><br>
         <label for = "cpf">Cpf:</label>
         <input type = "text" name = "cpf" id = "cpf"
         placeholder = "CPF"><br>

         
       
       </form>    

    </div> 
   
    


</body>



</html>