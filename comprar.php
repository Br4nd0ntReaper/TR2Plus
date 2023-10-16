<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="./css/pagar.css">
    <script src="jquery.min.js"></script>
    <link href="http://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.query.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container">
        <div class="title">Completar compra</div><br>
        <div width="20px">Autocomplete datos colocando su DNI</div>
        <div class="content">
            <div class="input">
                <span><i class="bx bxs-id-card"></i></span>
                <input type="text" id="documento" maxlength="8" Placeholder="Ingrese su número de DNI" autocomplete="off" name="dni">
                <br>
            </div>
            <button type="button" class="button" id="buscar">
                Buscar
            </button>
            <form method="post" action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">DNI</span>    
                        <input type="number" maxlength="8" id="midni" name="DNI" autocomplete="off" placeholder="Ingrese su DNI" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nombres</span>    
                        <input type="text" id="nombres" name="Nombres" placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Apellido Paterno</span>    
                        <input type="text" id="apellidoPaterno" name="Apellidos" placeholder="Ingrese su apellido" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Apellido Materno</span>    
                        <input type="text" id="apellidoMaterno" name="Apellidos" placeholder="Ingrese su apellido" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Celular</span>    
                        <input type="text" id="celular" pattern="[0-9]{9}" name="Cel" placeholder="Ingrese su celular" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Correo</span>    
                        <input type="email" id="correo" name="Correo" placeholder="Ingrese su correo" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Dirección</span>    
                        <input type="text" id="direccion" name="Direccion" placeholder="Ingrese su direccion" required>
                    </div>
                </div>    
                <div class="button">
                    <input type="submit" value="Finalizar compra">
                </div>
            </form>
        </div>
    </div>
    <button id="botonpago" class="btnpago"><b><a href="./factura.php" style="text-decoration: none;">Pagar factura -></a></b></button>
</body>

<script>
    $('#buscar').click(function(){
        dni=$('#documento').val();
        $.ajax({
            url:'controller/controlapireniec.php',
            type:'post',
            data:'dni='+dni,
            dataType:'json',
            success:function(r){
                if(r.numeroDocumento == dni){
                    $('#midni').val(r.numeroDocumento);
                    $('#nombres').val(r.nombres);
                    $('#apellidoPaterno').val(r.apellidoPaterno);
                    $('#apellidoMaterno').val(r.apellidoMaterno);
                    $('#direccion').val(r.direccion);
                }else{
                    alert("¡Ups! Usuario no encontrado, intente más tarde.")
                }
            }
        });
    });
</script>
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

        // Agregar aquí la lógica para procesar el formulario (por ejemplo, enviar datos al servidor)

        // Mostrar un mensaje de agradecimiento
        alert("¡Gracias por tu compra!");

        // Redirigir a index.html
        window.location.href = "index.html";
    });
</script>

</html>