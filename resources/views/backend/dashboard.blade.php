@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Selamat Datang di Dashboard JasterMedia!</h2>
    <p class="section-lead">Halaman Utama </p>
    <div class="row">
        <div class="col-6">
        <div class="card">
                  <div class="card-header">
                    <h4>Catatan</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                    @foreach ($listNotes as $catat)
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{ $catat->id }}" aria-expanded="false">
                          <span>Dari <b>{{ $catat->name }}</b></span>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-{{ $catat->id }}" data-parent="#accordion">
                        @php echo($catat->catatan) @endphp
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div>

                </div>
        </div>
        {{-- <div class="col-6">
            <div class="card">
                <div class="card-header">
                  <h4>Total Penjualan</h4>
                </div>
        <div class="card-body" id="top-5-scroll">
            <ul class="list-unstyled list-unstyled-border">
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Sales</div></div>
                  <div class="media-title"  style="color:wheat;">Web & Apps</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="64%"></div>
                      <div class="budget-price-label">$68,714</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-4-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">67 Sales</div></div>
                  <div class="media-title"  style="color:wheat;">Business Kit</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="84%"></div>
                      <div class="budget-price-label">$107,133</div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-1-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">63 Sales</div></div>
                  <div class="media-title"  style="color:wheat;">Digital Marketing</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="34%"></div>
                      <div class="budget-price-label">$3,717</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">28 Sales</div></div>
                  <div class="media-title"  style="color:wheat;">Troubleshooting</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="45%"></div>
                      <div class="budget-price-label">$13,972</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">19 Sales</div></div>
                  <div class="media-title" style="color:wheat;">Advertising</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="35%"></div>
                      <div class="budget-price-label">$7,391</div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">25 Sales</div></div>
                  <div class="media-title"  style="color:wheat;">Branding</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="55%"></div>
                      <div class="budget-price-label">$77,791</div>
                    </div>

                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
        <div class="col-lg-6 float-right">
          <div class="card">
            <div class="card-header ">
              <h4>Budget vs Sales</h4>
            </div>
            <div class="card-body">
                <canvas id="pieChart1" height="77px"></canvas>

            </div>
          </div>
        </div> --}}
{{-- </div> --}}
      </div>
</div>
@endsection
{{-- @section('puter')
<script src="{{ asset('assets/modules/chart.min.js') }}"></script>
<script> --}}
{{-- $(function () {

    var violet = '#DF99CA',
        red = '#F0404C',
        green = '#7CF29C',
        blue = '#4680ff';
        var ctx1 = $("canvas").get(0).getContext("2d");
    var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
    gradient1.addColorStop(0, 'rgba(210, 114, 181, 0.91)');
    gradient1.addColorStop(1, 'rgba(177, 62, 162, 0)');

    var gradient2 = ctx1.createLinearGradient(10, 0, 150, 300);
    gradient2.addColorStop(0, 'rgba(252, 117, 176, 0.84)');
    gradient2.addColorStop(1, 'rgba(250, 199, 106, 0.92)');

    var PIECHART = $('#pieChart1');
   var myPieChart = new Chart(PIECHART, {
       type: 'doughnut',
       options: {
           cutoutPercentage: 90,
           legend: {
               display: false
           }
       },
       data: {
           labels: [
               "First",
               "Second",
               "Third"
           ],
           datasets: [
               {
                   data: [250, 200],
                   borderWidth: [0, 0],
                   backgroundColor: [
                       green,
                       "#eee",
                   ],
                   hoverBackgroundColor: [
                       green,
                       "#eee",
                   ]
               }]
       }
        });
});
</script> --}}
{{-- @endsection --}}
