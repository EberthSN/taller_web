<?php
require_once "../config/conexion.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $query = mysqli_query($conexion, "UPDATE categorias SET categoria = '$nombre' WHERE id = $id");
    if ($query) {
        header('Location: categorias.php');
    }
} else {
    $id = $_GET['id'];
    $query = mysqli_query($conexion, "SELECT * FROM categorias WHERE id = $id");
    $data = mysqli_fetch_assoc($query);
}
include("includes/header.php");
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Editar Categoria</div>
                <div class="card-body">
                    <form action="editar.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['categoria']; ?>" required>
                        </div>
                        <button class="btn btn-primary" type="submit" name="update">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
