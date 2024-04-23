<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Story</title>
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/bootstrap-icons.min.css">
</head>
<body>

    <!-- Share Your Story Form - shows only in the index.php page -->
    <?php if ($_SERVER["REQUEST_METHOD"] != "POST") { ?>
    <section id="share-your-story">
        <div class="container">
            <h2>Share Your Story</h2>
            <form action="backend/pages/story.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
                    <label for="surname">Surname</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="4" required></textarea>
                    <label for="comment">Comment</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p></p>
        </div>
    </section>
    <?php } ?>

    <!-- Display Entered Data - shows only if Submit button is pressed -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
    ?>
    <!-- Display Entered Data -->
    <section id="display-data">
        <div class="container">
            <h2>Entered Data</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Surname:</strong> <?php echo $surname; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Comment:</strong> <?php echo $comment; ?></p>
            <!-- Back Button -->
            <a href="/index.php" class="btn btn-secondary">Back</a>
        </div>
    </section>
    <?php } ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
</body>
</html>
