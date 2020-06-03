@section('title', 'Edit Order')

@section('csslibraries')
@parent

<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <!-- done -->
    <h1>Edit Order</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Orders</a></div>
        <div class="breadcrumb-item active"><a href="#">Edit Order</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Edit Order</h2>
    <p class="section-lead">Tambahkan Ordernya dibawah</p>
    <form method="post" action="{{ route('updateOrder', ['id' => request()->route('id')]) }}" class="needs-validation"
        novalidate="" id="kirimData">


        <!-- table kiri atas -->
        <div class="row">
            <div class="col-5 col-md-5 col-lg-5">
                <div class="card col-md-12 col-lg-12 rounded-right rounded-left rounded-top rounded-bottom">
                    <div class="card-header" style="margin-bottom: -20px;">
                        <font color="white" weight="bold">
                            <h3>Personal Company</h3>
                        </font>
                    </div>
                    <div class="card-body col-md-12 col-lg-12">
                        <div class="row">
                            @method('PATCH')
                            @csrf
                            <div class="col-8" style="margin-right: -60px;">
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" class="form-control col-md-10" name="nama"
                                        value="{{ $edit->nama }}">
                                    <div class="invalid-feedback">
                                        Input Nama bosz!
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Brand / Nama Usaha </label>
                                    <input type="text" class="form-control col-md-12" name="brand"
                                        value="{{ $edit->brand }}">
                                    <div class="invalid-feedback">
                                        Input Nama usaha!
                                    </div>
                                </div>
                            </div>
                            <div class="col-8" style="margin-right: -60px;">
                                <div class="form-group">
                                    <label>No Whatsapp </label>
                                    <input type="number" class="form-control col-md-10" name="wa"
                                        value="{{ $edit->wa }}">
                                    <div class="invalid-feedback">
                                        Input No Whatsapp!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Jabatan </label>
                                    <input type="text" class="form-control col-md-12" name="jabatan"
                                        value="{{ $edit->jabatan }}">
                                    <div class="invalid-feedback">
                                        Input Jabatan!
                                    </div>
                                </div>
                            </div>
                            <div class="col-8" style="margin-right: -60px;">
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" class="form-control col-md-10" name="akun_email"
                                        value="{{ $edit->akun_email }}">
                                    <div class="invalid-feedback">
                                        Input Email bosz!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Alamat </label>
                                    <input type="text" class="form-control col-md-12" name="alamat"
                                        value="{{ $edit->alamat }}">
                                    <div class="invalid-feedback">
                                        Input Alamat !
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>




            <!-- tabel kanan atas -->
            <div class="col-7 col-md-7 col-lg-7">
                <div class="card rounded-right rounded-left rounded-top rounded-bottom">
                    <div class="card-header" style="margin-bottom: -20px;">
                        <font color="white" weight="bold">
                            <h3>For Website</h3>
                        </font>
                    </div>
                    <div class="card-body col-md-12">
                        <div class="row">
                            @csrf
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Domain </label>
                                    <input type="text" class="form-control" name="domain" value="{{ $edit->domain }}">
                                    <div class="invalid-feedback">
                                        Input domain bosz!
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Data</label>
                                    <select class="form-control select2" name="data_website" required>
                                        <option value="">None</option>
                                        <option value="Full Kita" @if ($edit->data_website == "Full Kita")
                                            {{ 'selected' }} @endif>Full dari Kita</option>
                                        <option value="Full Client" @if ($edit->data_website == "Full Client")
                                            {{ 'selected' }} @endif>Full Client</option>
                                        <option value="Kita Bantu" @if ($edit->data_website == "Kita Bantu")
                                            {{ 'selected' }} @endif>Kita Bantu</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Datanya?
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Username </label>
                                    <input type="text" class="form-control col-md-12" name="akun_username"
                                        value="{{ $edit->akun_username }}">
                                    <div class="invalid-feedback">
                                        Input username!
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Color</label>
                                    <div class="input-group colorpickerinput">
                                        <input type="text" class="form-control" name="warna" value="{{ $edit->warna }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-fill-drip"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Tipe Post</label>
                                    <select class="form-control select2" name="tipe_post" required>
                                        <option value="">None</option>
                                        <option value="Artikel" @if ($edit->tipe_post == "Artikel") {{ 'selected' }}
                                            @endif>Artikel</option>
                                        <option value="Produk" @if ($edit->tipe_post == "Produk") {{ 'selected' }}
                                            @endif>Produk</option>
                                        <option value="Service" @if ($edit->tipe_post == "Service") {{ 'selected' }}
                                            @endif>Service</option>
                                        <option value="Gallery" @if ($edit->tipe_post == "Gallery") {{ 'selected' }}
                                            @endif>Gallery</option>
                                        <option value="Elementor" @if ($edit->tipe_post == "Elementor") {{ 'selected' }}
                                            @endif>Elementor</option>
                                        <option value="Landing" @if ($edit->tipe_post == "Landing") {{ 'selected' }}
                                            @endif>Landing</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Post nya tentang apa?
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control pwstrength" data-indicator="pwindicator"
                                            name="akun_password" value="{{ $edit->akun_password }}">
                                    </div>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <select class="form-control select2" name="data_logo" required>
                                        <option value="">None</option>
                                        <option value="Dibuatkan" @if ($edit->data_logo == "Dibuatkan") {{ 'selected' }}
                                            @endif>Dibuatkan</option>
                                        <option value="Email" @if ($edit->data_logo == "Email") {{ 'selected' }}
                                            @endif>Email</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Logonya darimana bosz?
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Target</label>
                                    <select class="form-control select2" name="target" required>
                                        <option value="">None</option>
                                        <option value="WA atau Telepon" @if ($edit->target == "WA atau Telepon")
                                            {{ 'selected' }} @endif>WA atau Telepon</option>
                                        <option value="Email" @if ($edit->target == "Email") {{ 'selected' }}
                                            @endif>Email</option>
                                        <option value="Checkout" @if ($edit->target == "Checkout") {{ 'selected' }}
                                            @endif>Checkout</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Target action nya?
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Request</label>
                                    <button id="addRequest" type="button" class="btn btn-outline-primary col-md-12"
                                        data-toggle="modal" data-target="#modalRequest">Request</button>
                                    <div class="invalid-feedback">
                                        Input Request !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- table bawah -->

            <div class="col-12 rounded-left rounded-top rounded-bottom">
                <div class="card rounded-right rounded-left rounded-top rounded-bottom">
                    <div class="card-header" style="margin-bottom: -20px;">
                        <font color="white" weight="bold">
                            <h3>Detail Order</h3>
                        </font>
                    </div>
                    <div class="card-body col-md-12">
                        <div class="row">
                            @csrf
                            <div class="row col-md-8" style="margin-right: -50px;">
                                <div class="col-3" style="margin-right: -20px;">
                                	<div id="formTransaksi">
                                    @foreach ($listTransaksi as $i=>$transaksiData)
                                        <input type="hidden" class="transaksi_id addOrder{{$i}}" value="{{$transaksiData->transaksi_id}}">
                                    @endforeach
                                    </div>
                                    @foreach ($listTransaksi as $i=>$item)
                                    <div class="form-group addOrder{{$i}}" id='formPaket'>

                                        <label>Paket </label>
                                        <div style="margin: 0px; padding: 0px;">
                                            <select data-input="paket" data-hitung="0"
                                                class="form-control select2 paket">
                                                <option value="">None</option>
                                                <option value="Web & Apps" @if ($item->paket == "Web & Apps")
                                                    {{ 'selected' }} @endif>Web & Apps</option>
                                                <option value="Business Kit" @if ($item->paket == "Business Kit")
                                                    {{ 'selected' }} @endif>Business Kit</option>
                                                <option value="Digital Marketing" @if ($item->paket == "Digital
                                                    Marketing")
                                                    {{ 'selected' }} @endif>Digital Marketing</option>
                                                <option value="Troubleshooting" @if ($item->paket == "Troubleshooting")
                                                    {{ 'selected' }} @endif>Troubleshooting</option>
                                                <option value="Advertising" @if ($item->paket == "Advertising")
                                                    {{ 'selected' }} @endif>Advertising</option>
                                                <option value="Branding" @if ($item->paket == "Branding")
                                                    {{ 'selected' }}
                                                    @endif>Branding</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Input paket bosz!
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="col-3" style="margin-right: -20px;">
                                    @foreach ($listTransaksi as $i=>$itemi)
                                    <div class="form-group addOrder{{$i}}" id="formQuantity">
                                        <label>Quantity </label>
                                        <input type="number" data-type="number" id="quantityInput0 myInput"
                                            class="form-control quantity" value="{{ $itemi->quantity }}"
                                            onkeyup="sendQuantity($(this), 0)">
                                        <div class="invalid-feedback">
                                            Input Quantity!
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                <div class="col-4" style="margin-right: -20px;">
                                    @foreach ($listTransaksi as $i=>$itemii)
                                    <div class="form-group addOrder{{$i}}" id="formBiaya">
                                        <label>Biaya </label>
                                        <input type="number" class="form-control biaya" id="biayaInput0"
                                            value="{{ $itemii->biaya }}" onkeyup="HitungTotal(this);">
                                        <div class="invalid-feedback">
                                            Input Biaya
                                        </div>
                                    </div>
                                    @endforeach
                                    <br><br><br> <!-- pembatasan antara add order now -->
                                </div>

                                <div class="col-3">
                                    <div class="form-group" id="addRow">
                                        <button type="button" class="login100-form-btn" name="add" id="add">
                                            <i class="fas fa-plus-circle"></i>&nbsp; Add Row
                                        </button>
                                    </div>
                                    @for ($i = 1; $i < count($listTransaksi); $i++ )
                                    <div style="margin-top: 65px;" class="form-group addOrder{{$i}}">

                                        <button type="button" class="login100-form-btn hapusRow" onclick="deleteRows({{$i}})" name="add" style="background-color: red;">
                                            <font color="white"><i class="fas fa-minus-circle"></i>&nbsp;Delete Row
                                            </font>
                                        </button>

                                    </div>
                                    @endfor
                                </div>
                            </div>

                            <div class="row col-md-5">

                                <!-- forline -->
                                <div class="col-6" style="margin-left: 15px;">
                                    <div class="form-group">
                                        <label>DP </label>
                                        <input type="text" class="form-control" name="dp" onkeyup="convertToRupiah(this);"
                                            value="{{ $edit->dp }}">
                                        <div class="invalid-feedback">
                                            Input DP!
                                        </div>
                                        <label>via </label>
                                        <div>
                                            <select class="form-control select2" name="via">

                                                <option value="">None</option>
                                                <option value="BCA" @if ($edit->via == "BCA") {{ 'selected' }} @endif>BCA
                                                </option>
                                                <option value="Mandiri" @if ($edit->via == "Mandiri") {{ 'selected' }}
                                                    @endif>Mandiri</option>
                                                <option value="BRI Syariah" @if ($edit->via == "BRI Syariah")
                                                    {{ 'selected' }}
                                                    @endif>BRI Syariah</option>
                                                <option value="OVO" @if ($edit->via == "OVO") {{ 'selected' }} @endif>OVO
                                                </option>
                                                <option value="DANA" @if ($edit->via == "DANA") {{ 'selected' }} @endif>DANA
                                                </option>
                                                <option value="CASH" @if ($edit->via == "CASH") {{ 'selected' }} @endif>CASH
                                                </option>
                                                <div class="invalid-feedback">
                                                    Input via!
                                                </div>

                                            </select>
                                        </div>
                                        <label>renewal </label>
                                        <input type="text" onkeyup="convertToRupiah(this);" class="form-control"
                                            name="renewal" value="{{ $edit->renewal }}">
                                        <div class="invalid-feedback">
                                            Input Renewal!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6" style="margin-left: -15px;">
                                    <div class="form-group">
                                        <label>Tanggal Order </label>
                                        <input type="text" value="{{ $edit->tanggal_order }}"
                                            class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_order">
                                        <div class="invalid-feedback">
                                            Input tanggal Order!
                                        </div>
                                        <label>Deadline</label>
                                        <input type="text" value={{ $edit->deadline }} class="form-control datepicker"
                                            placeholder="YYYY-MM-DD" name="deadline" required>
                                        <div class="invalid-feedback">
                                            Input Deadline!
                                        </div>
                                        <label>Tau dari </label>
                                        <input type="text" class="form-control" name="tau_dari"
                                            value="{{ $edit->tau_dari }}">
                                        <div class="invalid-feedback">
                                            Input tau!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="font-family: sans-serif;font-size: 24px">Total Order : <span id="total-order"></span></div>
                            <button class="button button--shikoba button--text-medium button--round-l button--inverted" style="top: auto;left: auto">
                                <i class="button__icon icon icon-write"></i><span>Edit Order Now</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
</div>
@endsection

@section('jslibraries')
@parent
<!-- modal reques -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalRequest">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Add Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tambahkan Request disini</p>
                <div class="form-group">
                    <textarea id="notes">{{ $edit->request }}</textarea>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="sendRequest()" class="btn btn-outline-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var totals = {};
    var totalHarga = {};

    var totalSemuaNya = {{ $totalsemua }};

    function printTotal(){
        if(!isNaN(totalSemuaNya)){
            document.getElementById('total-order').innerHTML = "Rp."+ToRupiah(totalSemuaNya)+",-";
        }
    }
    function HitungTotal(e){
        var biaya = $('.biaya');
        var quantity = $('.quantity');
        Sum = 0;
        for(var i = 0;i < biaya.length;i++){
            Sum += ToAngka(quantity[i].value) * ToAngka(biaya[i].value);
        }
        totalSemuaNya = Sum;
        printTotal();
        // convertToRupiah(e);
    }
    function HitungSemuanya(){
        var biaya = $('.biaya');
        var quantity = $('.quantity');
        var DataRowTransaksiID = [];
        var DataRowPaket = [];
        var DataRowQuantity = [];
        var DataRowBiaya = [];
        var DataRowTotal = [];

        Sum = 0;
        console.log(biaya.length);
        for(var i = 0;i < biaya.length;i++){
        // get total
        var total =ToAngka(quantity[i].value) * ToAngka(biaya[i].value);
        Sum += total;

        // get transaksi id
        var transaksi_id = $('.transaksi_id')[i].value;
        // get paket
        var paket = $('.paket')[i];
        var paket_data = paket.options[paket.selectedIndex].value;
        // get quantity
        quantity_data = quantity[i].value;
        // get biaya
        biaya_data = biaya[i].value;

        DataRowTransaksiID.push(transaksi_id);
        DataRowPaket.push(paket_data);
        DataRowQuantity.push(quantity_data);
        DataRowBiaya.push(biaya_data);
        DataRowTotal.push(total);

        }
        totalSemuaNya = Sum;
        printTotal();
        return obj = {
            transaksi_id: DataRowTransaksiID,
            paket: DataRowPaket,
            quantity: DataRowQuantity,
            biaya: DataRowBiaya,
            total: DataRowTotal
        };
    }

    $(document).ready(function () {

        HitungSemuanya();
        printTotal();

        var counter = {{count($listTransaksi)}};
        $("#add").on("click", function () {
        	cols0 = '<input type="hidden" class="transaksi_id addOrder" value="">';
            cols1 = '<div class="form-group addOrder'+ counter +'"><label>Paket </label><div><select data-input="paket" data-hitung="'+counter+'" class="form-control select2 paket" id="paketInput'+ counter +'" required><option value="">None</option><option value="Web & Apps">Web & Apps</option><option value="Business Kit">Business Kit</option><option value="Digital Marketing">Digital Marketing</option><option value="Troubleshooting">Troubleshooting</option><option value="Advertising">Advertising</option><option value="Branding">Branding</option></select></div><div class="invalid-feedback">Input paket bosz!' + counter + '</div></div>';
            cols2 = '<div class="form-group addOrder'+ counter +'"><label>Quantity </label><input type="number" id="quantityInput'+ counter +'" class="form-control quantity" onkeyup="sendQuantity($(this), '+ counter +')"><div class="invalid-feedback">Input Quantity!' + counter + '</div></div>';
            cols3 = '<div class="form-group addOrder'+ counter +'"><label>Biaya </label><input type="number" id="quantityInput'+ counter +'" class="form-control biaya" onkeyup="HitungTotal(this);"><div class="invalid-feedback">Input Biaya' + counter + '</div></div>';
            cols4 = '<div style="margin-top: 65px;" class="form-group addOrder'+ counter +'"><button type="button" class="login100-form-btn hapusRow" name="add" onclick="deleteRows('+ counter +')" style="background-color: red;"><font color="white"><i class="fas fa-minus-circle"></i>&nbsp;Delete Row</font></button></div>';
            $('#formTransaksi').after(cols0);
            $("#formPaket").after(cols1);
            $("#formQuantity").after(cols2);
            $("#formBiaya").after(cols3);
            $("#addRow").after(cols4);
            $(".select2").select2();
            counter++;
        });
        $('.select2[data-input="paket"]').change(function() {
            HitungSemuanya();
        });
    });

    function deleteRows(id){
        // console.log($('.addOrder'+ id))
        $('.addOrder'+ id).remove();
        // HitungSemuanya();
    }
    // function untuk kirim kuantitas
    function sendQuantity(iki, count) {
        HitungSemuanya();
    }
    var dataRequest;
    function sendRequest(){
        var editor = tinymce.get('notes');
        var content = editor.getContent();
       dataRequest = (content);
        $('#modalRequest').modal('hide');
    }
    function getFormData($form){
        var unindexed_array = $form.serializeArray();
        // dd(unindexed_array);
        console.log(unindexed_array);
        var indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }
</script>
<script>
    $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $('.button--shikoba').click(function(){
            var dataToSend = {};
            $('#kirimData').on('submit', (e)=>{
                e.preventDefault();
                return false;
            })

                dataToSend['data'] = getFormData($('#kirimData'));
                dataToSend.data['request'] = dataRequest;
                dataToSend.data['transaksi'] = totals;
                dataToSend['_method'] = 'PATCH';
                dataToSend['data']['transaksi_id'] = HitungSemuanya().transaksi_id;
                dataToSend['data']['paket'] = HitungSemuanya().paket;
                dataToSend['data']['quantity'] = HitungSemuanya().quantity;
                dataToSend['data']['biaya'] = HitungSemuanya().biaya;
                dataToSend['data']['total'] = HitungSemuanya().total;
                dataToSend['data']['order_id'] = {{$id}};

               $.ajax({
                    url:'{{ route('updateOrder', ['id'=>$id]) }}',
                    method:"POST",
                    data:dataToSend['data'],
                    type:'json',
                    success:function(data)
                    {
                        window.location.href = '/orders'
                        if(data.error){
                            printErrorMsg(data.error);
                        }else{
                           window.location.href = '/orders'
                           $('input').val("");
                        }
                    },
                    error: (err)=>{
                        console.log(err)
                    }
               });
          });
          function printErrorMsg (msg) {
             $(".print-error-msg").find(".addOrder").html('');
             $(".print-error-msg").css('display','block');
             $(".print-success-msg").css('display','none');
             $.each( msg, function( key, value ) {
                $(".print-error-msg").find(".addOrder").append('<li>'+value+'</li>');
             });
          }
</script>


<script>
    function convertToRupiah(objek) {
          separator = ".";
          a = objek.value;
          b = a.replace(/[^\d]/g,"");
          c = "";
          panjang = b.length;
          j = 0;
          for (i = panjang; i > 0; i--) {
            j = j + 1;
            if (((j % 3) == 1) && (j != 1)) {
              c = b.substr(i-1,1) + separator + c;
            } else {
              c = b.substr(i-1,1) + c;
            }
          }
          objek.value = c;
        }
        function ToRupiah(bilangan) {
            var	reverse = bilangan.toString().split('').reverse().join(''),
            ribuan 	= reverse.match(/\d{1,3}/g);
            ribuan	= ribuan.join('.').split('').reverse().join('');
            return ribuan;
        }
        function ToAngka(nominal){
            return parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
        }
        function convertToAngka()
        {	var nominal= document.getElementById("nominal").value;
            var angka = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
            document.getElementById("angka").innerHTML= angka;
        }
        function convertToAngka()
        {	var nominal1= document.getElementById("nominal1").value;
            var angka1 = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
            document.getElementById("angka1").innerHTML= angka;
        }
</script>

<script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<script>
    $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
    });
</script>
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js">
</script>
<script src="{{ asset('js/tinyce.js') }}"></script>
@endsection
