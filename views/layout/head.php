<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>

    <title> Blog</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-xxl navbar-dark bg-dark" aria-label="default navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"> Blog Homepage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarXxl"
                    aria-controls="navbarXxl" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse container-fluid" id="navbarXxl">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item align-self-end">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item align-self-end align-items-end">
                        <!--  Logout function defined in index.php  -->
                        <a class="nav-link align-self-end" href="logout">Logout</a>
                    </li>
                </ul>
                <form role="search" hidden>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</header>

<br/><br/>

<div class="container">
