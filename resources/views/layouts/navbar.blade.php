<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Navbar Bootstrap</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto"> <!-- Menambahkan ms-auto di sini -->
                <li class="nav-item">
                    <a class="nav-link text-white me-3" href="#">Home</a> <!-- Menambahkan me-3 di sini -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-3" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-3" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
