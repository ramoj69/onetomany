<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Welcome To DONATIRIA NI RAMOJ. Add Orders!</h1>


	<table>
	<thead>
		<tr>
			<th>Item Name</th>
			<th>Description</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Classic Glazed Donut</td>
			<td>Soft and fluffy donut with a sweet glaze coating</td>
			<td>$1.50</td>
		</tr>
		<tr>
			<td>Chocolate Frosted Donut</td>
			<td>Chocolate-covered donut with a rich, creamy texture</td>
			<td>$1.75</td>
		</tr>
		<tr>
			<td>Maple Bacon Donut</td>
			<td>Maple-glazed donut topped with crispy bacon bits</td>
			<td>$2.25</td>
		</tr>
		<tr>
			<td>Jelly-Filled Donut</td>
			<td>Classic donut filled with a sweet berry jelly</td>
			<td>$2.00</td>
		</tr>
		<tr>
			<td>Cinnamon Sugar Donut</td>
			<td>Coated in a mixture of cinnamon and sugar</td>
			<td>$1.50</td>
		</tr>
		<tr>
			<td>Espresso Glazed Donut</td>
			<td>Donut with a coffee-infused glaze for a caffeine kick</td>
			<td>$2.00</td>
		</tr>
	</tbody>
</table>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">Table Number</label> 
			<input type="text" name="table_num">
		</p>
		<p>
			<label for="firstName">Customer Name</label> 
			<input type="text" name="cus_name">
		</p>
		<p>
			<label for="firstName">Order Name</label> 
			<input type="text" name="cus_order">
		</p>
		<p>
			<label for="firstName">Quantity</label> 
			<input type="text" name="quantity">
		</p>
		<p>
			<label for="firstName">Amount of Payment</label> 
			<input type="text" name="amount_of_money">
			<input type="submit" name="insertCustomerBtn">
		</p>
	</form>
	<?php $getAllCustomer = getAllCustomer($pdo); ?>
	<?php foreach ($getAllCustomer as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
		<h3>Table Number: <?php echo $row['table_num']; ?></h3>
		<h3>Customer Name: <?php echo $row['cus_name']; ?></h3>
		<h3>Order Name: <?php echo $row['cus_order']; ?></h3>
		<h3>Quantity: <?php echo $row['quantity']; ?></h3>
		<h3>Amount of Payment: <?php echo $row['amount_of_money']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>


		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewprojects.php?customer_id=<?php echo $row['customer_id']; ?>">View Order</a>
			<a href="editwebdev.php?customer_id=<?php echo $row['customer_id']; ?>">Edit</a>
			<a href="deletewebdev.php?customer_id=<?php echo $row['customer_id']; ?>">Delete</a>
		</div>


	</div> 
	<?php } ?>
</body>
</html>