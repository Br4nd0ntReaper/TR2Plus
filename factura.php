<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="./css/factura.css">
    <script src="js/jquery.min.js"></script>
    </script>
</head>
<body>
    <div class="container">
        <div class="title">Completar compra</div><br>
        <div width="20px">Autocomplete datos colocando su RUC</div>
        <div class="content">
            <div class="input">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                </svg>
                <input type="text" id="docum" maxlength="11" Placeholder="Ingrese su número de RUC" autocomplete="off" name="ruc">
                <br>
            </div>
            <button type="button" class="button" id="buscarlo">
                Buscar
            </button>
            <form method="post" action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">RUC</span>    
                        <input type="text" maxlength="11" pattern="[0-9]{11}" id="miruc" name="RUC" autocomplete="off" placeholder="Ingrese su RUC" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nombre</span>    
                        <input type="text" id="nombre" name="Nombre" placeholder="Ingrese el nombre de la empresa" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Dirección</span>    
                        <input type="text" id="direccion" name="Direccion" placeholder="Ingrese su dirección" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Ubigeo</span>    
                        <input type="text" id="ubigeo" maxlength="6" pattern="[0-9]{6}" name="Ubigeo" placeholder="Ingrese el Ubigeo" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Departamento</span>    
                        <input type="text" id="departamento" name="Departamento" placeholder="Ingrese el departamento" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Distrito</span>    
                        <input type="distrito" id="distrito" name="Distrito" placeholder="Ingrese el distrito" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Estado</span>    
                        <select id="estado" name="Estado" required>
                            <option value=""></option>
                            <option value="Activo">Activo</option>
                            <option value="No Activo">No Activo</option>
                        </select>                    
                    </div>
                    <div class="input-box">
                        <span class="details">Condición</span>
                        <select id="condicion" name="Condicion" required>
                            <option value=""></option>
                            <option value="Habido">Habido</option>
                            <option value="No Habido">No Habido</option>
                            <option value="Suspensión Temporal">Suspensión Temporal</option>
                        </select>
                    </div>
                </div>    
                <div class="button">
                    <input type="submit" value="Finalizar compra">
                </div>
            </form>
        </div>
    </div>
    <button id="botonpago" class="btnpago"><b><a href="./comprar.php" style="text-decoration: none;"><- Volver a boleta</a></b></button>

</body>
<script>

    $("#buscarlo").click(function(){
    var ruc=$("#docum").val();

    $.ajax({           
        type:"POST",
        url: "controller/controlapiruc.php",
        data: 'ruc='+ruc,
        dataType: 'json',
        success: function(data) {
    
        
            if(data==1)
            {
                alert('El RUC tiene que tener 11 digitos');
            } else {
                console.log(data);
            
                $("#miruc").val(data.numeroDocumento);
                $("#nombre").val(data.nombre);
                $("#ubigeo").val(data.ubigeo);
                $("#direccion").val(data.direccion);
                $("#departamento").val(data.departamento);
                $("#distrito").val(data.distrito);
                $("#estado").val(data.estado);
                $("#condicion").val(data.condicion);        
                
            }
        }
    });
    })
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