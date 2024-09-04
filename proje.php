<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje - Order Food</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3">
    <?php include('navbar.php'); ?>
    <form action="order.php" method="post">
        <h1>Order Food</h1>
        <div class="card">
            <div class="card-header">Order</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="family" class="form-label">Family:</label>
                    <input type="text" id="family" name="family" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <select id="gender" name="gender" class="form-select">
                        <option selected value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <label for="favs" class="form-label">Favorite Foods:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="pizza" name="favs[]" value="pizza">
                    <label class="form-check-label" for="pizza">
                        Pizza
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kabab" name="favs[]" value="kabab">
                    <label class="form-check-label" for="kabab">
                        Kabab
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="hotdog" name="favs[]" value="hotdog">
                    <label class="form-check-label" for="hotdog">
                        Hotdog
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Order</button>
            </div>
        </div>
    </form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
