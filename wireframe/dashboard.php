<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Dashboard</title>
    <link rel="stylesheet" href="./stylesheet.css">
</head>
<body>

<div class="container">

    <div class="sidebar">
        <h2>InventoryPro</h2>

        <ul>
            <li><a href="./dashboard.php">Dashboard</a></li>
            <li><a href="./add-product.php">Products</a></li>
            <li><a href="./bestellingen.php">Orders</a></li>
        </ul>
    </div>

    <div class="main">

        <h1>Inventory Dashboard</h1>

        <div class="cards">

            <div class="card">
                <h3>Total Products</h3>
                <p>125</p>
            </div>

            <div class="card">
                <h3>Total KG</h3>
                <p>112</p>
            </div>

            <div class="card">
                <h3>Low Stock</h3>
                <p>13</p>
            </div>

        </div>

        <div class="table-container">
            <h2>Recent Inventory</h2>

            <table>
                <tr>
                    <th>Product</th>
                    <th>Stock</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>Available</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>Low Stock</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>Available</td>
                </tr>
            </table>
        </div>

    </div>

</div>

</body>
</html>