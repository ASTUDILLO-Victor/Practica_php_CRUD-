<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/validar.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" /> 
    <script src="js/jquery.dataTables.min.js"> </script>
    <script src="js/dataTables.bootstrap4.min.js"> </script>

    <style>
        .content {
      text-align: center; /* Centrar el texto horizontalmente */
      max-width: 80%; /* Ancho máximo del contenido */
      padding: 20px; /* Espacio alrededor del contenido */
    }
/* section {
    display: flex;
    justify-content: center; /* Centrar horizontalmente */
    /* align-items: center; Centrar verticalmente */
    /* Altura del section igual al 100% del viewport */
    
.mi-seccion {
    display: flex;
    justify-content: center;
    background-color: #eaeaea;
    padding: 20px;
    border: 1px solid #ccc;
}
.card {
      width: 600px; /* Ancho del card */
      margin: 0 auto; /* Centrar el card horizontalmente */
      margin-top: 90px; /* Espacio superior para separarlo del borde superior */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra ligera */
    }
.h2 {
    text-align: center;
      font-family: fantasy; /* Cambiar a la tipografía deseada */
      color: #333; /* Color del texto */
}
    </style>


</head>

<body>
    <?php require 'params/nav.php'; ?>
    <section class="mi-seccion text-center">
        <h2 class="h2">Usuarios</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h2>Formulario</h2>
                    </div>
                    <div class="card-body">
                        <form action="index.php?url=crear" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form label">cedula</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text upperCase" name="id" id="id" placeholder="ingrese cedula"
                                        class="form-control require" onkeypress="return SoloNumeros(event);" require>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form label">Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text upperCase" name="name" id="name" placeholder="ingrese el nombre"
                                        class="form-control require" onkeypress="return SoloLetras(event);" require>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form label">Email</label>
                                </div><br>
                                <div class="col-md-8">
                                    <input type="email" name="email" id="email" placeholder="ingrese el email"
                                        class="form-control require" require>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form label">Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="password" id="password" placeholder="ingrese el nombre"
                                        class="form-control require" require>
                                </div>
                            </div><br>
                            <div class="text-center">
                                <button class="btn btn-info btn-block " type="submit">enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </section>

    <!-- section 2 -->
    <section class="mi-seccion text-center">
    <h2 class="h2">Tabla de Usuarios</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h2>Tabla de usuario</h2>
                    </div>
                    <div class="card-body">
                        <table border=1 class="tablep table table-striped table-bordered table-hover" id="tablita">
                            <thead class="bg-primary text-white text-center">
                                <th class="bg-primary text-white text-center">nombre</th>
                                <th class="bg-primary text-white text-center">correo</th>
                                <th class="bg-primary text-white text-center">eliminar</th>
                                <th class="bg-primary text-white text-center">Actualizar</th>
                            </thead>
                            <tbody>
                                <?php foreach ($todo as $user): ?>
                                    <tr>
                                        <td><?= $user->name ?>
                                        </td>
                                        <td><?= $user->email ?></td>
                                        <td>
                                            <form onsubmit="return confirm('estas seguro');" action="index.php?url=eliminar"
                                                method="post">
                                                <input type="hidden" name="id" id="id" value="<?= $user->id ?>">
                                                <button class="btn btn-danger" type="submit"><svg
                                                        class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                        <td><button data-action="editar"
                                                onclick="aparezcaModal(<?= $user->id ?>, '<?= $user->name ?>', '<?= $user->email ?>')"
                                                class="btn btn-success" type="submit"><svg
                                                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
    <!-- modal -->
    <div id="mimodal" class="modal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg text-center">
            <div class="modal-content text-center">
                <div class="modal-header bg-info text-center">
                    <h2><b>EDITAR REGISTROS</b></h2>
                </div>
                <div class="modal-body">
                    <form id="formix" method="post" action="index.php?url=actualizar">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>id :</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="modal_id" name="id" maxlength="10" placeholder=""
                                        class="form-control border-success text-uppercase"
                                        onchange="obtenernombredelinput();">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Nombre :</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" onkeypress="return SoloLetras(event);" class="form-control"
                                        id="Enom" name="Enom" />
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Email:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" id="Email" name="Email" class="form-control" />
                                </div>
                            </div>
                        </div><br>
                        <center>
                            <div class="row text-center">
                                <div class="col-md-4"><button type="reset" class="btn btn-dark">LIMPIAR CAMPOS</button>
                                </div>
                                <div class="col-md-4"><input class="btn btn-danger" type="submit"
                                        value="Enviar formulario" /></div>
                            </div>
                        </center>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="cerrarModal()" class="btn btn-danger">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function () {
        // Utilizar un evento delegado para manejar los clics en los botones "Editar"
        $('#tablita').on('click', 'button[data-action="editar"]', function () {
            // Obtener referencias a los elementos del DOM
            var $row = $(this).closest('tr');
            var id = $row.find('input[name="id"]').val();
            var nombre = $row.find('td:eq(0)').text();
            var email = $row.find('td:eq(1)').text();

            // Verificar si se encontraron los valores
            if (id && nombre && email) {
                // Llenar el modal con los valores de la fila seleccionada
                $('#modal_id').val(id);
                $('#Enom').val(nombre);
                $('#Email').val(email);
                $('#mimodal').modal('show');
            } else {
                console.error('No se encontraron los valores necesarios para editar.');
            }
        });
    });
</script>