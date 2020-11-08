@extends('Layouts.admin')
@section('css')
<link href="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css">
<link href="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
      var url = "{{url('karyawan/dashboard')}}";
        var gaji = new Array();
        var jabatan = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            console.log(response[1].tojabatan);
            response.forEach(function(data){
                gaji.push(data.gaji);
                jabatan.push(data.jabatan);
            });
            var ctx = document.getElementById("data").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
            labels: jabatan  ,
            datasets: [{
                data: gaji,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ], 
                borderWidth: 3
            }]
        },
                  options: {
                    legend: {
                          labels: {
                            fontColor :'green',
                            backgroundColor: 'green'
                          },
                          datasets: {
                                
                          }
                        

                      },
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
          });
        });
</script>
@endsection

@section('content')
<div class="" style="background-color:black; ">  
<canvas id="data"  height="90" width="90" style="color: green"></canvas>

</div>
@endsection