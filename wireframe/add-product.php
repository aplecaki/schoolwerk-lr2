<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="./wireframe/stylesheet.css">
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

    <div class="form-page">

        <div class="form-card">

            <form action="productadd.php" method="POST">

                <h1>Add New Product</h1>

                <label for="soortleer">Soort leer</label>
                <input
                    type="text"
                    id="soortleer"
                    name="soortleer"
                    required
                >

                <br><br>

                <label for="gelooid">Gelooid</label>
                <select id="gelooid" name="gelooid">
                    <option value="ja">Ja</option>
                    <option value="nee">Nee</option>
                </select>

                <br><br>

                <label for="gewicht">Gewicht</label>
                <input
                    type="number"
                    id="gewicht"
                    name="gewicht"
                    required
                >

                <br><br>

                <label for="dikte">Dikte</label>
                <input
                    type="number"
                    id="dikte"
                    name="dikte"
                    step="0.01"
                    required
                >

                <br><br>

                <label for="kleur">Kleur</label>
                <select id="kleur" name="kleur">
                    <option value="bruin">Bruin</option>
                    <option value="zwart">Zwart</option>
                    <option value="wit">Wit</option>
                    <option value="grijs">Grijs</option>
                </select>

                <br><br>

                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                ></textarea>

                <br><br>

                <div class="buttons">
                    <button type="submit" class="save">
                        Save Product
                    </button>

                    <button
                        type="button"
                        class="cancel"
                        onclick="window.location.href='dashboard.php';"
                    >
                        Cancel
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>