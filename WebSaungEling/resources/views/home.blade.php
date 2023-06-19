<!-- main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Adit Eling</title>
</head>
<body>
    @include('partials.navbar')

    <div style="margin-top: 100px">
        @include('travelPackage')
    </div>

    <div style="margin-top: 100px">
        @include('destinasi')
    </div>
    <div style="margin-top: 100px">
        @include('hotel')
    </div>
    <div style="margin-top: 100px">
        @include('partials.footer')
    </div>
    
</body>
</html>
