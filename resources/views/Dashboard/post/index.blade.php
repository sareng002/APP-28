
@extends('dashboard.post.layouts.main')

@section('content')

<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-info text-uppercase"> Jumlah penduduk : {{ $jm }} Jiwa</h5>
            {{--  <!-- Datav Penduduk -->  --}}
            <canvas id="kelamin" style="max-height: 700px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#kelamin'), {
                  type: 'bar',
                  data: {
                    labels: {!! json_encode($lk) !!},
                    datasets: [{
                      label: {!! json_encode($jm) !!},
                      data: {!! json_encode($pr) !!},
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                      
                      ],
                      borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                      ],
                      borderWidth: 1
                    }]
                  },
                  options: { 
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              });
            </script>
            <!-- End Bar CHart -->
      </div>
  </div>
</div>

<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-info text-uppercase">Jumlah Kepala Keluarga</h5>

              <!-- Bar Chart -->
              <canvas id="kk" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#kk'), {
                    type: 'bar',
                    data: {
                      labels: {!! json_encode($kkket) !!},
                      datasets: [{
                        label: 'tes',
                      data: {!! json_encode($kkjum) !!},
                        backgroundColor: [
                          '#25a5be',
                          '#d3eaf2',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

  
@endsection