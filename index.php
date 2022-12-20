<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <h1>PHP + MySQL CRUD</h1>
            <p>Learn the basics of CRUD</p>

            <table class="table">
                <tbody>
                    <?php include 'read.php'; ?>
                </tbody>
            </table>

            <form class="form-inline m-2" action="create.php" method="POST">
                <label for="name">Name: </Label>
                <input type="text" class="form-control m-2" id="name" name="name">
                <label for="score">Score: </Label>
                <input type="number" class="form-control m-2" id="score" name="score">
                <button type="submit" class="btn btn-primary">Add</button>
            </form>

    </div>
    
</body>
</html>