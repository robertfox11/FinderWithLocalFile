<?php require_once 'conexiondb.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <!-- recorremos primero el javascript para el ajax con php -->
    <script type="text/javascript" src="scripts.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/styles.css"> -->
    <title>Buscador</title>
</head>

<body class="d-flex flex-column bg-light">
    <header class="d-flex flex-grow-0 bg-info">
        <div class="bg-info">
            <h1>
                Buscador de países
            </h1>
        </div>
    </header>
    <main class="container flex-grow-1 bg-purple">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Countries" aria-label="Search">
            <button id="showCountries"class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </main>