<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <button class="btn btn-success">Hello</button>
                <img src="{{ assert('images/laravel.jpeg') }}" alt="">
            </div>
        </div>
    </div>
    

    <script src="{{ assert('js/bootstrap.bundle.js') }}"></script>
</body>
</html>