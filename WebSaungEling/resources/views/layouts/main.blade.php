<!-- main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Main</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>


    

    <div class="container" style="max-width: 1480px; padding-top:100px">
        <h1 class="title"><b>Travel Package</b> <span style="font-size: 50px; color: white;">&#x1F595;</span></h1> 
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            @for($i = 0; $i < 6; $i++)
                <div class="col">
                    <div class="card border-0">
                        <svg class="bd-placeholder-img card-img-top">
                            <image class="image-package" href="image/travelPackage/package1.JPEG" />
                            <rect width="100%" height="100%" fill="#04450B" />
                            <foreignObject x="0" y="0" width="100%" height="100%">
                                <div xmlns="http://www.w3.org/1999/xhtml" class="text-package">
                                    <div class="title-package">
                                        {{ $titlePackages }}
                                        <div class="description-package">
                                            <br>{{ $descriptios }}
                                        </div>
                                    </div>
                                </div>
                            </foreignObject>
                        </svg>
                        <div class="card-body p-3">
                            <p class="card-text">Mulai dari</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-lg btn-outline-success"> <b>{{ $price }}</b></button>
                                </div>
                                <p class="card-text text-body-secondary">Minimal {{ $minimalPax }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</body>
</html>
