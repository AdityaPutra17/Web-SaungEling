@extends('template')
@section('content')
<div class="row mt-5 mb-5 justify-content-center">
    <div class="col-md-1">
        <a href="/"><img src="assets/img/arrow.png" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <img src="assets/img/travel.png" alt="">
    </div>
    <div class="col-md-5">
        <span class="fw-bold fs-2">Ngaprak Di lembur kuring</span>
        <div class="row">
            <div class="col-md-6">
                <span class=" fs-3">Fasilitas</span>
                <ul>
                    <li>Meeting Point</li>
                    <li>Welcome Drink</li>
                    <li>Local Guide</li>
                    <li>Snack</li>
                    <li>Makan Siang</li>
                    <li>Souvenir</li>
                </ul>
            </div>
            <div class="col-md-6">
                <span class="fs-3">Destinasi</span>
                <ul>
                    <li>Meeting Point</li>
                    <li>Welcome Drink</li>
                    <li>Local Guide</li>
                    <li>Snack</li>
                    <li>Makan Siang</li>
                    <li>Souvenir</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <span>Mulai Dari</span><br>
                <span class="fw-bold">IDR </span><br>
                <span class="fw-bold">165000/pax</span>
            </div>
            <div class="col-md-6 text-end">
                <span>Minimal</span><br>
                <span class="fw-bold">5 pax</span>
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn text-white btn-lg" style="background-color:#04450B; ">Book Now!</button>
        </div>
    </div>
</div>
@endsection
