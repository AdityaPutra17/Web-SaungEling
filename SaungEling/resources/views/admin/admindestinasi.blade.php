@extends('template')
@section('content')
<div class="row mt-5 mb-5">
    {{-- start table --}}
    <div class="col-md-8">
        <div class="card-body">
            <div class="table-responsive shadow">
                <table class="table table-striped">
                    <thead class="fs-6 fw-bold bg-light">
                        <tr class="fs-7">
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-6 text-secondary">
                        <tr>
                            <td>1</td>
                            <td><img src="assets/img/imgdestinasi.png" style="width: 80%" alt=""></td>
                            <td>Saung Eling</td>
                            <td>lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit</td>
                            <td>165.00</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm bg-danger text-white" type="button">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="assets/img/imgdestinasi.png" style="width: 80%" alt=""></td>
                            <td>Saung Eling</td>
                            <td>lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit</td>
                            <td>165.00</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm bg-danger text-white" type="button">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end table --}}

    {{-- start form --}}
    <div class="col-md-4 ">
        <div class="card p-1 shadow " style="width: 18rem;">
            <div class="card-header">
                Form Destination
            </div>
            <form action="">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea class="form-control description" name="dekripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga</label>
                    <input type="text" class="form-control price">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control">
                </div>
                <div class="text-end">
                    <button class="btn btn-danger" type="reset">Clear</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{-- end form --}}
</div>
@endsection
