@extends('dashboard.layout.main')
@section('conten')
<!-- Batton -->
<div class="row">
    <div class="col d-flex justify-content-end ">
        <a class="btn btn-success" href="}">
        <i class="fa fa-print" aria-hidden="true"></i>
            Cetak
        </a>
    </div>
</div>

<!-- Table -->
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Stok</th>
                            <th>Keterangan</th>
                          


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Router Tp Link</td>
                            <td>1 Januari 2023</td>
                            <td>2</td>
                            <td>Baru</td>
                           

                       
                      
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Keluar</th>
                            <th>Stok</th>
                            <th>Keterangan</th>
                            


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Router Tp Link</td>
                            <td>19 September 2023</td>
                            <td>3</td>
                            <td>Dibeli</td>
                        
                            
                        

                       
                      
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection