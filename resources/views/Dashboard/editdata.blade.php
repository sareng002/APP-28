
@extends('layouts.gest')

@section('main_login')

<div class="container">
    <div class="kotak">
       <div class="row align-items-center justify-content-center">
           <div class="col-4">
               <h5 class="text-center mt-2 mb-2 text-bold text-uppercase">form edit data</h5>
                <form action="{{url('/editdata', $data)}}" method="POST">
                  
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="nik" id="nik"placeholder="nik" required value="{{ $data-> nik }}">
                        <label for="nik">Nomor nik</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="kk" id="kk"placeholder="kk" required value="{{ $data-> kk }}">
                        <label for="kk">Nomor kk</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="nama" id="nama"placeholder="nama" required value="{{ $data-> nama }}">
                        <label for="nama">Nama</label>
                    </div>

                    <select class="form-select form-select-sm mb-2" name="jenis_kelamin" aria-label="form-select-sm example">
                        <option selected  value="{{ $data-> jenis_kelamin }}">{{ $data-> jenis_kelamin }}</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                     <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"placeholder="tempat_lahir" required  value="{{ $data-> tempat_lahir }}">
                        <label for="tempat_lahir">Tempat Lahir</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"placeholder="tgl_lahir" required value={{ $data-> tgl_lahir }} >
                        <label for="tgl_lahir">Tanggal Lahir </label>
                    </div>
                    <select class="form-select form-select-sm mb-2" name="alamat" aria-label="form-select-sm example">
                        <option selected value="{{ $data-> alamat }}">{{ $data-> alamat }}</option>
                        <option value="Desa Barumanis Dusun 1">Desa Barumanis Dusun 1</option>
                        <option value="Desa Barumanis Dusun 2">Desa Barumanis Dusun 2</option>
                        <option value="Desa Barumanis Dusun 3">Desa Barumanis Dusun 3</option>
                        <option value="Desa Barumanis Dusun 4">Desa Barumanis Dusun 4</option>
                        <option value="Desa Barumanis Dusun 5">Desa Barumanis Dusun 5</option>
                        <option value="Desa Barumanis Dusun 6">Desa Barumanis Dusun 6</option>
                    </select>

                    <select class="form-select form-select-sm mb-2" name="pekerjaan" aria-label="form-select-sm example">
                        <option selected value="{{ $data-> pekerjaan }}">{{ $data-> pekerjaan }}</option>
                        <option value="Petani/Pekebun">Petani/Pekebun</option>
                        <option value="Pedagang">Pedagang</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="belum sekolah">belum sekolah</option>
                    </select>

                    <select class="form-select form-select-sm mb-2" name="agama" aria-label="form-select-sm example">
                        <option selected value="{{ $data-> agama }}">{{ $data-> agama }}</option>
                        <option value="Islam">Islam</option>
                        <option value="Keristen">Keristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Bhudah">Bhudah</option>
                        <option value="Kerohanian Sapta Darma">Kerohanian Sapta Darma</option>
                    </select>

                    <select class="form-select form-select-sm mb-2" name="SHDK" aria-label="form-select-sm example">
                        <option selected value="{{ $data-> SHDK }}">{{ $data-> SHDK }}</option>
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                        <option value="Orang tua">Orang tua</option>
                        <option value="anggota Keluarga Lainya">anggota Keluarga Lainya</option>
                    </select>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a type="button" class="btn btn-warning text-white mx-3 px" href="/Dashboard">Kembali</a>
                </form>
           </div>
       </div>
    </div>  
</div>
@endsection