@extends('layouts.app')
@section('main')

<div class="container-fluid">
    <div class="kotak">
    
        @include('dashboard.navdas')

        <table class="table table-bordered table-striped table-responsive table-sm mt-3" >
            <thead>
                <tr class="thead text-uppercase">
                    <th scope="col">nomor</th>
                    <th scope="col">nik</th>
                    <th scope="col">kk</th>
                    <th scope="col">nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">alamat</th>
                    <th scope="col">tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>Lorem, ipsum dolor.</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>Lorem, ipsum dolor.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>Lorem, ipsum dolor.</td>
                </tr>
                
                
            </tbody>
        </table>
    </div>
</div>
@endsection
