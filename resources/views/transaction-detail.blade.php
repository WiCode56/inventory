@extends('layout.mainlayout')

@section('title', 'Detail')

@section('content')

<div class="container-fluid py-5 mt-5 px-4">
    <div class="px-3 py-3 card">
        <h5>Required<span class="text-danger">*</span></h5>
        <span><i>Inputan yang ditanda bintang merah (<span class="text-danger">*</span>) harus di isi</i></span>
    </div>

    <div class="container-fluid card mt-4 px-3">
        <div class="row border-left-primary">
            <div class="col-xl-4 col-md-6 py-3 mt-3">
                <div class="form-group">
                    <label for="kd_barang">Kode Transaksi<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="....." readonly>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 py-3 mt-3">
                <div class="form-group">
                    <label for="kd_barang">Tanggal Masuk<span class="text-danger">*</span></label>
                    <input type="date" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang.....">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 py-3 mt-3">
                <div class="form-group">
                    <label for="kd_barang">Keterangan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Keterangan">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid card mt-4">
        <div class="row">
            <div class="col-xl-12 col-md-6 py-3 px-3 mt-3">
                <a href="" class="btn btn-primary">Refresh</a>
                <a href="" class="btn btn-secondary">Upload Gambar</a>
            </div>
        </div>
        <div class="row px-2 mt-3 ">
            <div class="col-xl-3">
                <div class="form-group">
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Kode Barang">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="form-group">
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Nama Barang">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="form-group">
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Barcode">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="form-group">
                    <input type="date" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="">
                </div>
            </div>
            <div class="col-xl-3">
                <div class="form-group">
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="....." readonly>
                </div>
            </div>
        </div>
        <div class="row px-3 mt-3">
            <table class="table table-bordered table-hover">
                <thead class="">
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">QTy</th>
                    <th scope="col">Ditambahkan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="">
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                <thead class="table-group-divider">

                </thead>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div>

    </div>

    <div class="container-fluid mt-4 px-3 card">
        <div class="row py-4">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="kd_barang">Barcode<span class="text-danger">*</span></label>
                    <br>
                    <select name="" id="" class="w-100 h-100 py-1">
                        <option value="" class="">Cari..</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="kd_barang">Stok<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                </div>
            </div>
            <div class="col-xl-2 col-md-2">
                <div class="form-group">
                    <label for="kd_barang">Satuan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                </div>
            </div>
            <div class="col-xl-2 col-md-2">
                <div class="form-group">
                    <label for="kd_barang">Kode Barang<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                </div>
            </div>
            <div class="col-xl-2 col-md-2">
                <div class="form-group">
                    <label for="kd_barang">Aksi<span class="text-danger">*</span></label>
                    <br>
                    <a href="" class="btn btn-primary w-100">Tambah</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4 px-3 card">
        <div class="row py-4">
            <div class="col-xl-3">
                <div class="col-lg-12">
                    <span>Aksi</span>
                </div>
                <a href="" class="btn btn-danger w-25">Tutup</a>
                <a href="" class="btn btn-success w-25">Simpan</a>
                <a href="" class="btn btn-primary w-25">Rekam</a>
            </div>
            <div class="col-xl-3 col-md-2">
                <div class="form-group">
                    <label for="kd_barang">Lokasi :<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                </div>
            </div>
            <div class="col-xl-3 col-md-2">
                <div class="form-group">
                    <label for="kd_barang">Acc :<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                </div>
            </div>
            <div class="col-xl-3 col-md-2">
                <div class="form-group">
                    <label for="kd_barang">Total Qty :<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

