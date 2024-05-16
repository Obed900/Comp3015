$sql = "INSERT INTO producto (nombre, suplidor, cantidad, precio)
VALUES (:nombre, :suplidor, :cantidad, :precio)";
$stmt = $this->db->prepare($sql);“class ProductModel”
$stmt->bindValue(':nombre', $data['nombre'], PDO::PARAM_STR);
$stmt->bindValue(':suplidor', $data[suplidor], PDO::PARAM_STR);
$stmt->bindValue(':cantidad', $data['cantidad'], PDO::PARAM_STR);
$stmt->bindValue(':precio', $data['precio'], PDO::PARAM_STR);
$sql = "SELECT * FROM producto WHERE id = :id";
$sql = "UPDATE producto SET nombre = :nombre, suplidor =
:suplidor, cantidad = :cantidad, precio = :precio WHERE id = :id";
$stmt = $this->db->prepare($sql);
$stmt->bindValue(':nombre', $data['nombre'], PDO::PARAM_STR);
$stmt->bindValue(':suplidor', $data['suplidor'], PDO::PARAM_STR);
$stmt->bindValue(':cantidad', $data['cantidad'], PDO::PARAM_STR);
$stmt->bindValue(':precio', $data['precio'], PDO::PARAM_STR);
$sql = "DELETE FROM producto WHERE id = :id"
$sql = "SELECT * FROM producto";