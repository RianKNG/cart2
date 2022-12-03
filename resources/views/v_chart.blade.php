<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-light bg-warning">
       <!--  <h5 class="navbar-brand"><a href="#"><img src="assets/img/a.PNG" class="img-fluid animated" alt="" width='30' height='50'>         GRAFIK KUBIKASI TOMO PASEH CIMANGGUNG</a></h5> -->
       <a class="navbar-brand" href="#"> <img src="assets/img/a.PNG" class="img-fluid animated" alt="" width='30' height='50'>  <b>Grafik Kubikasi Perumdam Sumedang</b></a> 

        <a class="navbar-brand" href="/humas"> <img src="asset/a.jpg" class="card-img-top" alt=""><b>Profil Humas VDPR</b></a> 
       <!--  <h1 class="logo"><a href="#hero"><img src="assets/img/a.jpg" class="img-fluid animated" alt="">&nbsp;PERUMDA</a></h1> -->
    </nav>

    <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="chart has-fixed-height" id="xxx"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="chart has-fixed-height" id="pie"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
     <div class="col-sm-6">
          <div class="card-body">
                <table class="table table-bordered">                  
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">No Rekening</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kode Gol</th>
                        <th scope="col">Stand Awal</th>
                        <th scope="col">Stand Akhir</th>
                        <th scope="col">Pakai</th>
                        <th scope="col">Harga Air</th>
                        <th scope="col">Beban Tetap</th>
                        <th scope="col">Materai</th>
                        <th scope="col">Total Rekening</th>
                        <th scope="col">Cabang</th>
                        <th scope="col">bulan</th>
                        <th scope="col">tahun</th>
                      </tr>
                    </thead>
                        

                    @php
                    $no=1;
                     @endphp
                    <tbody>
                        @foreach ($x as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->no_rekening }}</td>
                            <td>{{ $data->nama_pelanggan }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->kode_gol }}</td>
                            <td>{{ $data->stand_awal }}</td>
                            <td>{{ $data->stand_akhir }}</td>
                            <td>{{ $data->pakai }}</td>
                            <td>{{ $data->harga_air }}</td>
                            <td>{{ $data->beban_tetap }}</td>
                            <td>{{ $data->materai }}</td>
                            <td>{{ $data->total_rekening }}</td>
                            <td>{{ $data->cabang }}</td>
                            <td>{{ $data->bulan }}</td>
                            <td>{{ $data->tahun }}</td>
                        </tr>
                            
                        @endforeach
                       
                      </tbody>
                     
                    
                  </table>
            </div>
          </div>
        </div>
      </div>
    <!--   <div class="col-auto"> -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> -->
          import Exel
       <!--  </button> -->
        <!-- <form action="/importexcel" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="modal-body">
                <div class="form-group">
                    <input type="file" name="file" required>
                </div>
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </form> -->
    <!-- </div> -->
    <a href="import">import</a>


</body>
   
</html>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
var y =  <?php echo json_encode($total); ?>;
var p =  <?php echo json_encode($totalp); ?>;
var t =  <?php echo json_encode($totalt); ?>;
Highcharts.chart('xxx', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Grafik Garis M3'
    },
    subtitle: {
        text: 'Tahun: ' +
            '' +
            '2022'
    },
    xAxis: {
        categories: ['Nop','Okt','Sep','Agst','Jul','Jun','Mei','Apr', 'Mar','Feb','Jan'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'interval angka',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -0,
        y: -10,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'cimanggung',
        data: y
    },{
        name: 'Paseh',
        data: p
    },{
        name: 'Tomo',
        data: t
    }]
});
</script><script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
var y =  <?php echo json_encode($total); ?>;
var p =  <?php echo json_encode($totalp); ?>;
var t =  <?php echo json_encode($totalt); ?>;
Highcharts.chart('pie', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik Batang M3'
    },
    subtitle: {
        text: 'Tahun: ' +
            '2022' +
            ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'interval angka'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Cimanggung',
        data: y
    },{
        name: 'Paseh',
        data: p
    },{
        name: 'Tomo',
        data: t
    }]
});
  
</script>
                