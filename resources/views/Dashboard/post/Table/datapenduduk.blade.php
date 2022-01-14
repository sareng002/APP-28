@extends('dashboard.post.layouts.main')
@section('content')


<section class="section">
<div class="row">
    <div class="col col-lg-12">
        <div class="card">
            <div class="card-hede">
                <h3 class="text-center mt-3">Data Penduduk</h3>
                
            </div>
            <div class="card-bod mt-2">
                <table class="table table-bordered table-sm table-responsive" >
                <thead>
                    <tr class="thead text-uppercase">
                        <th scope="col">nomor</th>
                        <th scope="col">nik</th>
                        <th scope="col">kk</th>
                        <th scope="col">nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">alamat</th>        
                        <th scope="col">Aksi</th> 
                    </tr>
                </thead>
                <tbody>
                    {{--  @php
                        $i=1;
                    @endphp  --}}
                    @foreach ($data as $item)
                    
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->kk }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->alamat }}</td>
                        
                        <td>
                            <a  href="{{ url('/editdata/'.$item->id)}}" class="text-decoration-none">
                                <i class="text-warning mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                                </i>
                            </a>
                            <a href="{{ url('/destroy/'.$item->id)}}">
                                <i class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                </i>
                            </a>
                        </td>
                    </tr>
                    
                    @endforeach
                    
                    
                </tbody>
            </table>
            </div>
            <div class="card-footer">
                     {{--  seting halaman  --}}

                <nav class="navbar-nav align-items-lg-center justify-content-center text-secondary" aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item" aria-current="page">
                            <i class="text-center text-secondary mb-2">{{ $data->links() }}</i>
                        </li>    
                        <li class="page-item mx-5 px-2" aria-current="page">
                            <i><span>
                                    Jumlah Data perhalaman: {{ $data->perPage() }}
                                </span>
                                <span class="mx-5 px-2">
                                    Halaman Ke : {{ $data->currentPage() }} 
                                </span>
                            </i>
                            <i>Jumlah Banyak Nya Data {{ $data->total() }} Jiwa</i>
                        </li>    
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
   

            

               


@endsection
