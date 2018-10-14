<!doctype html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script>
        $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>

    <script language="javascript" type="text/javascript">
        function validar() {
            var email = loginS.login.value;
            var senha = loginS.senha.value;

            if (email == "") {
                alert('preencha o campo login')
                loginS.login.focus();
                return false;
            }
            if (senha == "") {
                alert('Senha incorreta')
                loginS.senha.focus();
                return false;
            }
        }
    </script>
    <title>Meu Form</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <meta charset="utf-8">
    

</head>

<body>
<?php

$user = (!empty($_POST['login'])) ? $_POST['login']:'';

?>


    <div id="header"></div>


    </div>
    <div class="login">
        <form name="loginS" method="post" action="#">
            <h2>Login</h2>
            <br><br>

            <label for="login">Login: </label>

            <input type="email" id="login" name="login" 
            placeholder="Email or ID" value = <?php echo $user ?>> <br>
            <br>
            <label for="senha">Senha: </label>


            <input type="password" id="senha" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" placeholder="Logar" onclick="validar()">
        </form>
    </div>

</body>



</html>