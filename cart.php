<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    array_push($_SESSION["cart"], $id);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Store - Cart</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>My Store</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Shop</a></li>
				<li><a href="cart.php">Cart (<?php echo count($_SESSION["cart"]); ?>)</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Cart</h2>
		<table>
			<thead>
				<tr>
					<th>Product</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require_once("ProductDao.php");
				$productDao = new ProductDao("jdbc:mysql://localhost:3306/mydb", "root", "password");
				$total = 0;
				
				foreach ($_SESSION["cart"] as $id) {
				    $product = $productDao->getProductById($id);
				    $total += $product->getPrice();
				?>
				<tr>
					<td><?php echo $product->getName(); ?></td>
					<td>$<?php echo $product->getPrice(); ?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th>Total</th>
					<th>$<?php echo $total; ?></th>
				</tr>
			</tfoot>
		</table>
	</main>
	<footer>
		<p>&copy; 2023 My Store. All rights reserved.</p>
	</footer>
</body>
</html>