<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="position-absolute mt-3">
                <form action="./config/functions.php" method="post">
                    <button class="btn btn-warning py-2" name="submitLogout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="col-12 w-100 d-flex flex-wrap justify-content-center align-items-center">
                <form action="" method="post">
                    <div class="px-2">
                        <h2 class="fs-1 fw-semibold">NUEVO PRODUCTO</h2>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Numero Referencia</label>
                                <input type="text" class="form-control" name="num_referencia" placeholder="Ej: 567653">
                            </div>
                            <div class="col">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="col">
                                <label class="form-label">Marca</label>
                                <input type="text" class="form-control" name="marca" placeholder="Just Home Collection">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Tipo de producto</label>
                                <input type="text" class="form-control" name="tipo_producto" placeholder="Electronico">
                            </div>
                            <div class="col">
                                <label class="form-label">Numero de serie</label>
                                <input type="text" class="form-control" name="numero_serie" placeholder="25-FFF23">
                            </div>
                            <div class="col">
                                <label class="form-label">Fecha de vencimiento</label>
                                <input type="text" class="form-control" name="fecha_vencimiento" placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Fecha de importación</label>
                                <input type="text" class="form-control" name="fecha_importacion" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="col">
                                <label class="form-label">Tamaño</label>
                                <input type="text" class="form-control" name="tamano" placeholder="cm, km">
                            </div>
                            <div class="col">
                                <label class="form-label">Color</label>
                                <input type="text" class="form-control" name="color" placeholder="rojo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Funcionalidad</label>
                                <input type="text" class="form-control" name="funcionalidad" placeholder="Objetivo Producto">
                            </div>
                            <div class="col">
                                <label class="form-label">Diseño</label>
                                <input type="text" class="form-control" name="diseno" placeholder="Minimalista">
                            </div>
                            <div class="col">
                                <label class="form-label">Material</label>
                                <input type="text" class="form-control" name="material" placeholder="Plastico">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Forma</label>
                                <input type="text" class="form-control" name="forma" placeholder="Cuadrado">
                            </div>
                            <div class="col">
                                <label class="form-label">Peso</label>
                                <input type="text" class="form-control" name="peso" placeholder="kg">
                            </div>
                            <div class="col">
                                <label class="form-label">Derechos de Autor</label>
                                <input type="text" class="form-control" name="derechos_autor" placeholder="CC">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" placeholder="00.00$">
                            </div>
                            <div class="col d-flex justify-content-center align-items-end">
                                <button class="btn btn-warning fw-semibold w-100" name="submitLogout">Nuevo Producto</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>