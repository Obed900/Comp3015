<div class="border border-secondary-300 p-4 ">
<h2 class='text-info'>Crear Producto</h2>
<form action="index.php?url=product/save/0" method="post" class='form'>
<div class="form-group mb-3">
<input type="hidden" name="id" value="0" required>
<input type="hidden" name="accion" value="create">
<label>Nombre</label>
<input type="text" name="nombre" class='form-control' value="" required>
</div>
<div class="form-group mb-3">
<label>Suplidor</label>
<input type="text" name="suplidor" class='form-control' value=""
required>
</div>
<div class="form-group mb-3">
<label>Cantidad</label>
<input type="number" name="cantidad" class='form-control'
placeholder="Nueva Contraseña"
value="" required>
</div>
<div class="form-group mb-3">
<label>Precio</label>
<input type="number" name="precio" class='form-control'
placeholder="Nueva Contraseña"
value="" required>
</div>
<div class="form-group">
<a href='.' class='btn btn-secondary'>Cancelar</a>
<button class='btn btn-primary' type="submit">Guardar</button>
</div>
</form>
</div>
<?php
$product = $data['product'];
?>
<div class="border border-secondary-300 p-4 ">
<h2 class='text-info'>Borrar Productos</h2>
<form action="index.php?url=product/remove/<?php echo $product['id']; ?>"
method="post" class='form'>
<div class="form-group mb-3">
<input type="hidden" name="id" value="<?php echo $product['id']; ?>"
required>
<input type="hidden" name="accion" value="update">
<label>Nombre</label>
<input type="text" name="nombre" class='form-control' value="<?php echo
$product['nombre']; ?>" readonly>
</div>
<div class="form-group mb-3">
<label>Suplidor</label>
<input type="text" name="suplidor" class='form-control' value="<?php
echo $product['suplidor']; ?>" readonly>
</div>
<div class="form-group mb-3">
<label>Cantidad</label>
<input type="text" name="cantidad" class='form-control'
value="<?php echo $product['cantidad']; ?>" readonly>
</div>
<div class="form-group mb-3">
<label>Precio</label>
<input type="text" name="precio" class='form-control' value="<?php
echo $product['precio']; ?>" readonly>
</div>
<div class="form-group">
<div class="row alert alert-danger">
<div class="col-8">
<h3>¿Está seguro que desea borrar el récord?</h3>
</div>
<div class="col text-end">
<a href='.' class='btn btn-secondary'>Cancelar</a>
<a href="./index.php?url=product/remove/<?php echo
$product['id']; ?>" class='btn btn-primary' >Borrar</a>
</div>
</div>
</div>
</form>
</div>

<?php
$products = $data['products'];
?>
<div class="container-fluid">
<div class="row">
<div class="col">
<h1>Productos</h1>
</div>
</div>
<div class="row">
<div class="col">
<table class='table'>
<thead>
<tr>
<th>Nombre</th>
<th>Suplidor</th>
<th>Cantidad</th>
<th>Precio</th>
<th class='text-center'>
<a href='index.php?url=product/create/' class='btn
btn-primary'>Crear</a>
</th>
<!-- Otros campos según sea necesario -->
</tr>
</thead>
<tbody>
<?php foreach ($products as $product): ?>
<tr>
<td><?php echo htmlspecialchars($product['nombre'],
ENT_QUOTES, 'UTF-8'); ?></td>
<td><?php echo htmlspecialchars($product['suplidor'],
ENT_QUOTES, 'UTF-8'); ?></td>
<td><?php echo htmlspecialchars($product['cantidad'],
ENT_QUOTES, 'UTF-8'); ?></td>
13
14
<td><?php echo htmlspecialchars($product['precio'],
ENT_QUOTES, 'UTF-8'); ?></td>
<!-- Otros campos según sea necesario -->
<td class='text-center'>
<a href='index.php?url=product/update/<?php echo
htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); ?>' class='btn
btn-success'>Editar</a>
<a href='index.php?url=product/delete/<?php echo
htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); ?>' class='btn
btn-danger'>Borrar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>

<?php
$product = $data['product'];
?>
<div class="border border-secondary-300 p-4 ">
<h2 class='text-info'>Actualizar Producto</h2>
<form action="index.php?url=product/save/<?php echo $product['id']; ?>"
method="post" class='form'>
<div class="form-group mb-3">
<input type="hidden" name="id" value="<?php echo $product['id']; ?>"
required>
<input type="hidden" name="accion" value="update">
<label>Nombre</label>
<input type="text" name="nombre" class='form-control' value="<?php echo
$product['nombre']; ?>" required>
</div>
<div class="form-group mb-3">
<label>Suplidor</label>
<input type="text" name="suplidor" class='form-control' value="<?php
echo $product['suplidor']; ?>" required>
</div>
<div class="form-group mb-3">
<label>Cantidad</label>
<input type="number" name="cantidad" class='form-control'
placeholder="Cantidad"
value="<?php echo $product['cantidad']; ?>" required>
</div>
<div class="form-group mb-3">
<label>Precio</label>
<input type="number" name="precio" class='form-control'
placeholder="Precio"
value="<?php echo $product['precio']; ?>" required>
</div>
<div class="form-group">
<button class='btn btn-secondary'>Cancelar</button>
<button class='btn btn-primary' type="submit">Guardar</button>
</div>
</form>
</div>
