<?php
include "plantillas/fondo.php";
include "Controllers/login_controller.php";

if(!empty($_POST)){


    $vu=new loginController();

    $validarUser=$vu->verificaUser($_POST['u'],$_POST['p']);

    if($validarUser==true){
        include 'Views/Dashbord_View.php';

    }else{

        echo "Usted NOOO esta registrado en el sistema ".$validarUser;
    }
}
else{
?>

<div class="login">
    <h1>Login</h1>
    <form method="post" action="#">
        <input type="text" name="u" placeholder="Username" required="required">
        <input type="password" name="p" placeholder="Password" required="required">
        <button type="submit" class="btn btn-primary btn-block btn-large">Entra</button>
    </form>
	<a href="index.php?r=contacto">Ir formulario Contacto</a>
</div>

        
<?php
}
