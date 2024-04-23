<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Difficult Outdoor Boulders in Finland</title>
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-icons.min.css">
</head>
<body>

    <!-- Header/Navbar -->
    <section id="home">
        <?php include '../layout/header.php'; ?>
    </section>

    <!-- Most Difficult Boulders List Group -->
    <section id="most-difficult-boulders">
        <div class="container">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/backend/pages/">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Boulders</li>
                </ol>
            </nav>
        
            <h2>Most Difficult Outdoor Boulders in Finland</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#boulderModal1">Möykky</a>
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#boulderModal2">Lucifer</a>
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#boulderModal3">Burden of Dreams</a>
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#boulderModal4">Micromachine</a>
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#boulderModal5">Hybrid</a>
            </div>
        </div>
    </section>

    <!-- Boulder Modals -->
    <!-- Modal 1: Möykky -->
    <div class="modal fade" id="boulderModal1" tabindex="-1" aria-labelledby="boulderModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="boulderModalLabel1">Möykky</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Location:</strong> Hämeenkyrö</p>
                    <p><strong>Difficulty:</strong> 8C (V15)</p>
                    <img src="/frontend/img/moykky.jpg" class="img-fluid" alt="Möykky Boulder">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2: Lucifer -->
    <div class="modal fade" id="boulderModal2" tabindex="-1" aria-labelledby="boulderModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="boulderModalLabel2">Lucifer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Location:</strong> Lappnor</p>
                    <p><strong>Difficulty:</strong> 8B+ (V14)</p>
                    <img src="/frontend/img/lucifer.jpg" class="img-fluid" alt="Lucifer Boulder">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3: Burden of Dreams -->
    <div class="modal fade" id="boulderModal3" tabindex="-1" aria-labelledby="boulderModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="boulderModalLabel3">Burden of Dreams</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Location:</strong> Lappnor</p>
                    <p><strong>Difficulty:</strong> 9A (V17)</p>
                    <img src="/frontend/img/burden.jpg" class="img-fluid" alt="Burden of Dreams">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4: Micromachine -->
    <div class="modal fade" id="boulderModal4" tabindex="-1" aria-labelledby="boulderModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="boulderModalLabel4">Micromachine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Location:</strong> Lappnor</p>
                    <p><strong>Difficulty:</strong> 8B (V13)</p>
                    <img src="/frontend/img/machine.jpg" class="img-fluid" alt="Micromachine Boulder">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5: Hybrid -->
    <div class="modal fade" id="boulderModal5" tabindex="-1" aria-labelledby="boulderModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="boulderModalLabel5">Hybrid</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Location:</strong> Lappnor</p>
                    <p><strong>Difficulty:</strong> 8B (V13)</p>
                    <img src="/frontend/img/hybrid.jpg" class="img-fluid" alt="Hybrid Boulder">
                </div>
            </div>
        </div>
    </div>

    <p></p>

    <!-- Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
</body>
</html>
