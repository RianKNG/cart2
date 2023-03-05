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
     <style type="text/css">
    .kolom{ 
        background-color: #C0C0C0;
        font-size:  50px;
      font-family: sans;
      color: #333;
    }
    .navbar-brand1{
        font-size:  20px;
      font-family: sans;
      color: white;
    }
    .navbar-brand2{
       /* font-size:  20px;*/
      font-family: sans;
      color: black;
      background-color: yellow;
      border-radius: 35px;
      width:300px;
      height:30px;
      justify-content: center;
      align-items:center
      list-style-type: none;
          border-radius: 40px;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);

    }
    .tengah{
           
    /* border: 1px solid black; */
    padding:10px;
   /* margin:5px;*/
    /* background-color: black; */
    color:black; 

    }
  </style>
    <nav class="navbar navbar-light bg-info">
       <a class="navbar-brand1" href="#"> <img src="assets/img/a.PNG" class="img-fluid animated" alt="" width='30' height='50'>  <b>Grafik M3 & DRD Perumdam Sumedang</b></a> 

        <a class="navbar-brand2" href="/humas"> <center class="tengah">Profil Humas VDPR</center></a> 
       <!--  <h1 class="logo"><a href="#hero"><img src="assets/img/a.jpg" class="img-fluid animated" alt="">&nbsp;PERUMDA</a></h1> -->
    </nav>
    <br>
    <div class="container-fluid">
    <div class="row">
         <div class="col-sm-6">
          <!-- <div class="col-sm-6"> -->
            <div class="card">
              <div class="card-body">
                <div class="chart has-fixed-height" id="xxx"></div>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-6"> -->
            <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="chart has-fixed-height" id="pie"></div>
              </div>
            </div>
          </div>
          </div>
    </div>
     <div class="row">
     <div class="col-sm-12">
          <div class="card-body">
                <table class="table table-bordered bg-primary text-white text-center p-3">  

                    <thead>
                        <tr>
                            <th class="" colspan="3">  <img src="assets/img/a.PNG" class="img-fluid animated" alt="" width='30' height='50'>    JUMLAH TOTAL KUBIKASI AIR(M3) TERMANFAATKAN DI TAHUN 2022 || PASEH || TOMO || CIMANGGUNG</th>
                        </tr>
                    </thead>
        <tbody>
                <tr>
                    <td class="">CIMANGGUNG</td>
                    <td class="">PASEH</td>
                    <td class="">TOMO</td>
                </tr>
                <tr>
                    @foreach ($totm3 as $data)
                    <td class="kolom">{{ $data->pk }}  m3</td>
                    @endforeach
                </tr>
        </tbody>
        </table>
          </div>
        </div>
    </div>

    </div>
    <div class="container-fluid">
    <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="chart has-fixed-height" id="xx"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="chart has-fixed-height" id="container"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
         <!--  -->
    </div>
    <div class="row">
     <div class="col-sm-6">
          <div class="card-body">
                <table class="table table-bordered bg-primary text-white text-center p-3">               
                    <thead class="bg-info">
                      <tr>
                        <tr>
                            <th colspan="15">Rekap Jumlah SL pada tiap Bulan || Cimanggung || Tomo || Paseh</th>
                        </tr>
                        <th scope="col">NO</th>
                        <th scope="col">Cabang</th>
                        <th scope="col">Januari</th>
                        <th scope="col">Februari</th>
                        <th scope="col">Maret</th>
                        <th scope="col">April</th>
                        <th scope="col">Mei</th>
                        <th scope="col">Juni</th>
                        <th scope="col">Juli</th>
                        <th scope="col">Agutus</th>
                        <th scope="col">September</th>
                        <th scope="col">Oktober</th>
                        <th scope="col">Nopember</th>
                        <th scope="col">Desember</th>
                        <th scope="col">Keterangan</th>

                       
                      </tr>
                    </thead>
                        

                   <!--  @php
                    $no=1;
                     @endphp -->
                    <tbody>
                        <td>1</td>
                        <td>Paseh</td>
                        @foreach ($datap as $data)
                            <td>{{ $data->cab}}</td> 
                        @endforeach
                        <td>-</td>
                       
                        <tr></tr>
                        <td>2</td>
                        <td>Tomo</td>
                        @foreach ($datat as $data)
                            <td>{{ $data->cab}}</td> 
                        @endforeach
                        <td>-</td>
                       
                        <tr></tr>
                        <td>3</td>
                        <td>Cimanggung</td>
                        @foreach ($datac as $data)
                            <td>{{ $data->cab}}</td> 
                        @endforeach
                        <td>-</td>
                       
                      </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    // untuk view jenis golongan cabang Cimanggung
        <div class="row">
     <div class="col-sm-6">
          <div class="card-body">
                <table class="table table-bordered bg-primary text-white text-center p-3">               
                    <thead class="bg-info">
                      <tr>
                        <tr>
                            <th colspan="15">Rekap Gol Sosial Umum pada tiap Bulan || Cimanggung || Tomo || Paseh</th>
                        </tr>
                        <th scope="col">NO</th>
                        <th scope="col">Cabang</th>
                        <th scope="col">Januari</th>
                        <th scope="col">Februari</th>
                        <th scope="col">Maret</th>
                        <th scope="col">April</th>
                        <th scope="col">Mei</th>
                        <th scope="col">Juni</th>
                        <th scope="col">Juli</th>
                        <th scope="col">Agutus</th>
                        <th scope="col">September</th>
                        <th scope="col">Oktober</th>
                        <th scope="col">Nopember</th>
                        <th scope="col">Desember</th>
                        <th scope="col">Keterangan</th>

                       
                      </tr>
                    </thead>
                        

                   <!--  @php
                    $no=1;
                     @endphp -->
                    <tbody>
                        <td>1</td>
                        <td>Paseh</td>
                        @foreach ($sup as $data)
                            <td>{{ $data->sup}}</td> 
                        @endforeach
                        <td>-</td>
                        <td>-</td>
                        <tr></tr>
                        <td>2</td>
                        <td>Tomo</td>
                        @foreach ($sut as $data)
                            <td>{{ $data->sut}}</td> 
                        @endforeach
                        <td>-</td>
                        <td>-</td>
                        <tr></tr>
                        <td>3</td>
                        <td>Cimanggung</td>
                        @foreach ($suc as $data)
                            <td>{{ $data->suc}}</td> 
                        @endforeach
                        <td>-</td>
                        <td>-</td>
                      </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    // rt b
        // untuk view jenis golongan cabang Cimanggung
        <div class="row">
     <div class="col-sm-6">
          <div class="card-body">
                <table class="table table-bordered bg-primary text-white text-center p-3">               
                    <thead class="bg-info">
                      <tr>
                        <tr>
                            <th colspan="15">Rekap (RT B) || Cimanggung || Tomo || Paseh</th>
                        </tr>
                        <th scope="col">NO</th>
                        <th scope="col">Cabang</th>
                        <th scope="col">Januari</th>
                        <th scope="col">Februari</th>
                        <th scope="col">Maret</th>
                        <th scope="col">April</th>
                        <th scope="col">Mei</th>
                        <th scope="col">Juni</th>
                        <th scope="col">Juli</th>
                        <th scope="col">Agutus</th>
                        <th scope="col">September</th>
                        <th scope="col">Oktober</th>
                        <th scope="col">Nopember</th>
                        <th scope="col">Desember</th>
                        <th scope="col">Keterangan</th>

                       
                      </tr>
                    </thead>
                        

                   <!--  @php
                    $no=1;
                     @endphp -->
                    <tbody>
                        <td>1</td>
                        <td>Paseh</td>
                        @foreach ($rtbp as $data)
                           <!--  <td></td> -->
                           <!--  <td> @ifNull ('bbbbb')</td> -->
                           <td>({{ $data->rtbp}})</td>  
                        @endforeach
                        <td>-</td>
                        <td>-</td>
                         <td>-</td>
                        <td>-</td>
                        <tr>-</tr>
                        
                        
                        <td>2</td>
                        <td>Tomo</td>
                        @foreach ($rtbt as $data)
                            <td>{{ $data->rtbt}}</td> 
                        @endforeach
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        
                        <tr></tr>
                        <td>3</td>
                        <td>Cimanggung</td>
                        @foreach ($rtbc as $data)
                            <td>{{ $data->rtbc}}</td> 
                        @endforeach
                        <td>-</td>
                        <td>-</td>
                      </tbody>
                  </table>
            </div>
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
var y =  <?php echo json_encode($totalsatu); ?>;
var p =  <?php echo json_encode($totaldua); ?>;
var t =  <?php echo json_encode($totaltiga); ?>;
Highcharts.chart('xxx', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Grafik Batang M3'
    },
    subtitle: {
        text: 'Tahun: ' +
            '' +
            '2022'
    },
    xAxis: {
        categories: ['Des','Nop','Okt','Sep','Agst','Jul','Jun','Mei','Apr', 'Mar','Feb','Jan'],
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
        valueSuffix: ' Ribu'
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
var y =  <?php echo json_encode($total); ?>;
var p =  <?php echo json_encode($totalp); ?>;
var t =  <?php echo json_encode($totalt); ?>;
Highcharts.chart('pie', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik Garis M3'
    },
    subtitle: {
        text: 'Tahun: ' +
            '2022' +
            ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nop', 'Des']
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
var a =  <?php echo json_encode($sumc); ?>;
var b =  <?php echo json_encode($sump); ?>;
var c =  <?php echo json_encode($sumt); ?>;
// Data retrieved from https://www.ssb.no/statbank/table/10467/
var chart = Highcharts.chart('xx', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'DRD'
    },

    subtitle: {
        text: 'Tahun: 2022'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    },

    series: [{
        name: 'Cimanggung',
        data: a
    }, {
        name: 'Paseh',
        data: b
    }, {
        name: 'Tomo',
        data: c
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: 'Tahun: 2022'
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(600);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});
</script><script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">

    var a =  <?php echo json_encode($sumc); ?>;
    var b =  <?php echo json_encode($sump); ?>;
    var c =  <?php echo json_encode($sumt); ?>;
    
Highcharts.chart('container', {

    title: {
        text: 'DRD'
    },

    subtitle: {
        text: 'Tahun: 2022'
    },

    yAxis: {
        title: {
            text: 'Interval angka'
        }
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'],
        labels: {
            x: -10
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        line: {
            dataLabels: {
                enabled: false
            },
            enableMouseTracking: true
        }
    },

    series: [{
        name: 'Cimanggung',
        data: a
    }, {
        name: 'Paseh',
        data: b
    }, {
        name: 'Tomo',
        data: c
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
      
</script>
</body>
</html>
                
