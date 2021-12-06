<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/4c4dbee4c1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Roboto:wght@700&display=swap');
</style>

</head>
<body>
    
    <div class="contenedor">
        <div class="box_shadow box_shadow--login">
            <form  method="post">
                <h1 class="title">Login</h1>
                <div class="form__center">
                    <div class="form__group">
                            <input type="text" name="usuario" id="usuario"  placeholder="usuario" />
                            <i class=" grop   fas fa-users"></i>
                    </div>

                    <div class="form__group">
                            <input type="password" required name="contraseña" id="contraseña"  placeholder="contraseña" />
                            <i class="grop  fas fa-lock"></i>
                    </div>

                    <div class="form__bottom">
                            <a href="#" class="btn">Ingresar </a>
                            
                    </div>
                </div>
            </form>
        </div>
    </div>





</body>
</html>