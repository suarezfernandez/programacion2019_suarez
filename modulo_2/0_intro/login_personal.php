
<?php
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login para 1 usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</head>

<body>
    <p><h1>Luis Suarez</h1></p>

    <form class="container">
    
            
            <div class="col" style="border: solid black 2px; margin-top: 200px; padding: 100px;">
                <P>Nombre: <INPUT type=text name="login">
                    <P>Contraseña: <INPUT type=password name="password">
                    
                         <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
           
        </div>
    </form>
    <SCRIPT language=JavaScript>
        function go() {
            if (document.form.password.value == 'CONTRASEÑA' && document.form.login.value == 'USUARIO') {
                document.form.submit();
            } else {
                alert("Porfavor ingrese, nombre de usuario y contraseña correctos.");
            }
        }

    </SCRIPT>
   if (isset($_GET)) {
       $usuario = new stdClass();
       $usuario->correo $_GET['email'];
       $usuario->correo $_GET['password'];
      
      
       {
           
       }
       "
      

   }



    </FORM>
</body>

</html>
?>