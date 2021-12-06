<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro </title>
    <script src="https://kit.fontawesome.com/4c4dbee4c1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Roboto:wght@700&display=swap');
</style>

</head>
<body>
    
    <div class="contenedor">
        <div class="box_shadow">
            <form  method="post">
                <h1 class="title__form">Registro de Nuevos Usuarios</h1>
                <div class="form__group">
                        <input type="text" required name="nombre" id="nombre"  placeholder="Nombre Completo" />
                        <i class=" grop   fas fa-users"></i>
                </div>

                <div class="form__group">
                        <input type="email" required name="email" id="email"  placeholder="email" />
                        <i class="grop  fas fa-envelope"></i>
                </div> 

                <div class="form__group">
                        <input type="text" required name="usuario" id="usuario"  placeholder="Usuario" />
                        <i class="grop fas fa-user"> </i>
                </div>

                <div class="form__group">
                        <input type="password" required name="contraseña" id="contraseña"  placeholder="contraseña" />
                        <i class="grop  fas fa-lock"></i>
                </div>

                <div class="form__group">
                        <input type="password" required  name="repetirContra" id="repetirContra"  placeholder="Repetir contraseña" />
                        <i class=" grop fas fa-retweet"></i>
                </div>

                <div class="form__group">
                         <a href="#" class="btn">Registrar </a>
                        
                </div>

            </form>
        </div>
    </div>

</body>
</html>