<!doctype html>
<html>

<head>
    

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
    <div id = "validar"></div>

    <div class = "cadastro">
        <form name= "formPalestrante" method="post" action="#">
        <h2>Cadastro</h2>
                  
        <label for = "nome">Nome:</label>
        <input type = "text" name = "nome" id = "campo"
        placeholder = "nome"><br><br>
         
        <label for = "email">Email:</label>
        <input type = "email" name = "email" id ="campo"
        placeholder = "E-mail"><br><br>
         
        <label for = "cpf">Cpf:</label>
        <input type = "text" name = "cpf" id = "campo"
        placeholder = "CPF"><br><br>
        
        <label for = "formacao">Formação:</label>
        <input type = "text" name = "formacao" id = "campo"
        placeholder = "Formação"  ><br><br>
        

        
      
       </form>    

    </div> 
   
    


</body>



</html>