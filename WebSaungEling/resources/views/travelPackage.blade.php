<div class="container">
    <h1 class="title"><b>Travel Package</b></h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
        @php
        $titlePackages = ['Package 1', 'Package 2', 'Package 3', 'Package 4', 'Package 5', 'Package 6'];
        $descriptions = ['Description 1', 'Description 2', 'Description 3', 'Description 4', 'Description 5', 'Description 6'];
        $prices = ['$100', '$200', '$300', '$400', '$500', '$600'];
        $minimalPax = [2, 3, 4, 2, 3, 4];
        @endphp

        @for($i = 0; $i < 6; $i++)
        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-4 cold-lg-4 col-xxl-4 " >
            <div class="card border-0">
                <svg class="bd-placeholder-img card-img-top">
                    <image class="image-package" href="image/travelPackage/package1.JPEG" />
                    <rect class="kotak" width="100%" height="100%" fill="#04450B" />
                    <foreignObject x="0" y="0" width="100%" height="100%">
                        <div xmlns="http://www.w3.org/1999/xhtml" class="text-package">
                            <div class="title-package">
                                {{ $titlePackages[$i] }}
                                <div class="description-package">
                                    <br>{{ $descriptions[$i] }}
                                </div>
                            </div>
                        </div>
                    </foreignObject>
                </svg>
                <div class="card-body p-3">
                    <p class="card-text">Mulai dari</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href=@include('welcome')><button type="button" class="btn btn-lg btn-outline-success"> <b>{{ $prices[$i] }}</b></button></a>
                        </div>
                        <p class="card-text text-body-secondary">Minimal {{ $minimalPax[$i] }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
