<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Food - Finland</title>
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-icons.min.css">
</head>
<body>

    <!-- Header/Navbar -->
    <section id="home">
        <?php include '../layout/header.php'; ?>
    </section>

    <!-- Content regarding food -->
    <section id="national-food">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/backend/pages/">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Food</li>
                </ol>
            </nav>
            <!-- Content -->
            <h2 class="mb-4">National Food of Finland</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Karelian Pasty -->
                <div class="col">
                    <div class="card h-100">
                        <img src="/frontend/img/pasty.jpg" class="card-img-top" alt="Karelian Pasty">
                        <div class="card-body">
                            <h5 class="card-title">Karelian Pasty (Karjalanpiirakka)</h5>
                            <p class="card-text">A traditional Finnish pastry filled with rice porridge or mashed potatoes, often served with egg butter.</p>
                        </div>
                    </div>
                </div>
                <!-- Sauteed Reindeer -->
                <div class="col">
                    <div class="card h-100">
                        <img src="/frontend/img/saute.jpg" class="card-img-top" alt="Sauteed Reindeer">
                        <div class="card-body">
                            <h5 class="card-title">Sauteed Reindeer (Poronkäristys)</h5>
                            <p class="card-text">Slices of reindeer meat cooked in butter, often served with lingonberry sauce and mashed potatoes.</p>
                        </div>
                    </div>
                </div>
                <!-- Salmon Soup -->
                <div class="col">
                    <div class="card h-100">
                        <img src="/frontend/img/soup.jpg" class="card-img-top" alt="Salmon Soup">
                        <div class="card-body">
                            <h5 class="card-title">Salmon Soup (Lohikeitto)</h5>
                            <p class="card-text">A creamy soup made with salmon, potatoes, leeks, carrots, and dill, typically served with rye bread.</p>
                        </div>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
</body>
</html>
