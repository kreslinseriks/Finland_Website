<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places to Visit - Finland</title>
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>
<body>

    <!-- Header/Navbar -->
    <section id="home">
        <?php include '../layout/header.php'; ?>
    </section>

    <!-- Places to Visit -->
    <section id="places-to-visit">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/backend/pages/">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Places</li>
                </ol>
            </nav>
            <!-- Content -->
            <h2>Places to Visit in Finland</h2>
            <div class="alert alert-warning" role="alert">
                Be cautious! Helsinki may experience windy conditions.
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/frontend/img/helsinki2.jpg" class="card-img-top" alt="Helsinki">
                        <div class="card-body">
                            <h5 class="card-title">Helsinki</h5>
                            <p class="card-text">Explore the capital city of Finland, known for its beautiful architecture and vibrant culture.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/frontend/img/rovaniemi.jpg" class="card-img-top" alt="Rovaniemi">
                        <div class="card-body">
                            <h5 class="card-title">Rovaniemi</h5>
                            <p class="card-text">Visit the official hometown of Santa Claus and experience the magic of Lapland.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/frontend/img/turku.jpg" class="card-img-top" alt="Turku">
                        <div class="card-body">
                            <h5 class="card-title">Turku</h5>
                            <p class="card-text">Discover Finland's oldest city, located on the southwest coast.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>

</body>
</html>
