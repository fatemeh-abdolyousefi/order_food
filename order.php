<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>preview</title>
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">Order</div>
        <div class="card-body">
            <ul class="list-group">
                <?php foreach ($_POST as $key => $value): ?>
                    <li class="list-group-item">
                        <?php var_dump(); $key." : ".$value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>


