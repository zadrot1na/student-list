<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Students list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<header class="p-3 bg-dark text-white fixed-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/public" class="nav-link px-2 text-secondary">All</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
<!--                <button type="button" formaction="\App\Controller" class="btn btn-outline-light me-2">Login</button>-->
<!--                <button type="button"  class="btn btn-warning">Sign-up</button>-->
                <a href="/public/login" class="btn btn-primary">Login</a>
                <a href="/public/register" class="btn btn-warning">Sign-up</a>
            </div>
        </div>
    </div>
</header>
</div>




<!--<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/public" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Student list</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/public" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="register" class="nav-link">Add</a></li>
            <li class="nav-item"><a href="remove" class="nav-link">Remove</a></li>
            <li class="nav-item"><a href="edit" class="nav-link">Edit</a></li>
        </ul>
    </header>
</div>-->

</body>
</html>