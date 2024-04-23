<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favorite Country</title>
    <meta name="description" content="Discover the top places to visit in Finland, including Helsinki, Rovaniemi, and Turku. Explore the vibrant culture and beautiful landscapes of Finland.">
    <meta name="keywords" content="Finland, places to visit, Helsinki, Rovaniemi, Turku, travel, tourism, culture, attractions">
    <meta name="author" content="Eriks Kreslins">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>
<body>

    <!-- Carousel -->
    <section id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/frontend/img/helsinki.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Modern</h5>
                        <p>Finland leads the world with its cities and innovation (Nokia).</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/frontend/img/lapland.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Natural</h5>
                        <p>Usually is very cold so better find sauna.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/frontend/img/reindeer.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Christmas</h5>
                        <p>I think Santa Claus might live here with reindeers.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Header/Navbar -->
    <section id="home">
        <?php include 'backend/layout/header.php'; ?>
    </section>

    <!-- Content -->
    <section id="basic-information">
        <div class="container">
        <!-- Breadcrumb -->       
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
        </nav>
        <!-- Basic information -->
        <h2>Basic Information</h2>
        <p>Finland is a beautiful Nordic country located in Northern Europe. It is known for its stunning natural landscapes, including vast forests, thousands of lakes, and the Northern Lights.</p>
        <p>The capital of Finland is Helsinki, which is also the largest city in the country. Helsinki is a vibrant cultural hub, home to numerous museums, galleries, and architectural landmarks.</p>
        <p>With an area of 338,455 square kilometers, Finland is the eighth-largest country in Europe. It has a population of approximately 5.5 million people, with the majority speaking Finnish and Swedish as official languages.</p>
        <p>Finland is a unitary parliamentary republic, with a government system based on representative democracy. The country celebrates its National Day on December 6th, commemorating its declaration of independence from Russia in 1917.</p>
            <div class="row">
                <div class="col-md-6"> <!-- Sadala divas kolonnas -->
                    <p><strong>Country:</strong> Finland</p>
                    <p><strong>Capital:</strong> Helsinki</p>
                    <p><strong>Area:</strong> 338,455 square kilometers</p>
                    <p><strong>Population:</strong> 5.5 million</p>
                </div>
                <div class="col-md-6"> <!-- Sadala divas kolonnas -->
                    <p><strong>Currency:</strong> Euro (EUR)</p>
                    <p><strong>Official Language:</strong> Finnish, Swedish</p>
                    <p><strong>Government:</strong> Unitary parliamentary republic</p>
                    <p><strong>National Day:</strong> December 6th</p>
                </div>
            </div>
        <!-- Images -->
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="/frontend/img/finnish_flag.jpg" class="img-fluid" alt="Finnish Flag">
            </div>
            <div class="col-md-6">
                <img src="/frontend/img/Finland_map.jpg" class="img-fluid" alt="Map of Finland">
            </div>
        </div>
        </div>
    </section>
    
    <!-- Story -->
    <?php include 'backend/pages/story.php'; ?>

    <!-- Footer -->
    <?php include 'backend/layout/footer.php'; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
</body>
</html>
