<?php 
    include('common/utils.php'); 
    if($_GET){
        if(isset($_GET['store'])){
            $store = $_GET['store'];
        }
    }

    $obtieneID = getProductsID($conn,$store);

    foreach($obtieneID as $obID){
        $id = $obID['id'];
    }
    $tabla = getProductsIDRes($conn,$id);  
     

    

    echo $store; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Store</title>
</head>
<body>

<table border="1">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($tabla as $p) { ?>
				<tr>
					<td><?php echo $p['code'] ?></td>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['type'] ?></td>
					<td><?php echo $p['stock'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>


</body>

</html>