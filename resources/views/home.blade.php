@extends('layouts.app')

@section('title-page')
Dashboard
@endsection

@section('body')
ui-rounder npc-default has-sidebar
@endsection

@section('dashboard-menu-item')
active current-page
@endsection
@section('dashboard-menu-content')
menu-active
@endsection
@section('dashboard-menu')
active
@endsection
@section('dashboard-primary-menu-item')
active current-page
@endsection
@section('classification-primary-menu-item')
@endsection

@section('meta-link')
@endsection

@section('content')
{{-- sidebar @s --}}
@include('layouts.sidebar')
{{-- sidebar @e --}}
{{-- main @s --}}
<div class="nk-main">
    {{-- wrap @s --}}
    <div class="nk-wrap">
        {{-- main header @s --}}
        @include('layouts.header')
        {{-- main header @e --}}
        {{-- content @s --}}
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Dashboard</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Welcome!</p>
                                    </div>
                                </div>{{-- .nk-block-head-content --}}
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                            data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#"
                                                            class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                            data-toggle="dropdown"><em
                                                                class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                    class="d-none d-md-inline">{{ date('l, d F Y')
                                                                    }}</span></a>
                                                        {{-- <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                <li><a href="#"><span>Last 1 Years</span></a></li>
                                                            </ul>
                                                        </div> --}}
                                                    </div>
                                                </li>
                                                {{-- <li class="nk-block-tools-opt"><a href="#"
                                                        class="btn btn-primary"><em
                                                            class="icon ni ni-plus-c"></em><span>Reports</span></a>
                                                </li> --}}
                                                <li class="nk-block-tools-opt">
                                                    <button type="button" data-toggle="modal" data-target="#modal-add" class="btn btn-primary"><em
                                                            class="icon ni ni-plus-c"></em><span>Tambah Data</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>{{-- .nk-block-head-content --}}
                            </div>{{-- .nk-block-between --}}
                        </div>{{-- .nk-block-head --}}
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Pengiriman</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">100</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3"
                                                                id="todayOrders"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>{{-- .card-inner --}}
                                        </div>{{-- .nk-ecwg --}}
                                    </div>{{-- .card --}}
                                </div>{{-- .col --}}
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Pengiriman Terkirim</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">338</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3"
                                                                id="todayRevenue"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>{{-- .card-inner --}}
                                        </div>{{-- .nk-ecwg --}}
                                    </div>{{-- .card --}}
                                </div>{{-- .col --}}
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Container</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">847</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3"
                                                                id="todayCustomers"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>{{-- .card-inner --}}
                                        </div>{{-- .nk-ecwg --}}
                                    </div>{{-- .card --}}
                                </div>{{-- .col --}}
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total Kapal</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">2456</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3"
                                                                id="todayVisitors"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>{{-- .card-inner --}}
                                        </div>{{-- .nk-ecwg --}}
                                    </div>{{-- .card --}}
                                </div>{{-- .col --}}
                                <div class="col-xxl-12">
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <h5 class="mb-3">Data Pengiriman</h5>
                                            <table class="datatable-init table">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Jenis Pengiriman</th>
                                                        <th>Status</th>
                                                        <th>Nama Container</th>
                                                        <th>Isi Barang</th>
                                                        <th>Tgl Brg Masuk</th>
                                                        <th>Nama Kapal</th>
                                                        <th>Start Awal</th>
                                                        <th>Tujuan</th>
                                                        <th>Nama Pengirim</th>
                                                        <th>Nama Penerima</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2022/03/15</td>
                                                        <td>40 Ft</td>
                                                        <td><span class="badge badge-md bg-primary text-white border-white round-lg">Terkirim</span></td>
                                                        <td>ICBU 249113-2</td>
                                                        <td>Rokok Surya</td>
                                                        <td>2022/03/10</td>
                                                        <td>TANTO JAYA V.244 SBY</td>
                                                        <td>SBY</td>
                                                        <td>GTO</td>
                                                        <td>Enrico</td>
                                                        <td>Elfath</td>
                                                        <td><button type="button" data-toggle="modal" data-target="#modal-edit" class="btn btn-primary">Edit</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div>
                            </div>{{-- .row --}}
                        </div>{{-- .nk-block --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- content @e --}}
        {{-- footer @s --}}
        @include('layouts.footer')
        {{-- footer @e --}}
    </div>
    {{-- wrap @s --}}
</div>
{{-- main @e --}}

{{-- Modal Add --}}
<div class="modal fade" tabindex="-1" id="modal-add">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pengiriman</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter">
                    <div class="form-group">
                        <label class="form-label">Tgl. Transfer Bahan Baku</label>
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-left">
                                <em class="icon ni ni-calendar"></em>
                            </div>
                            <input type="text" class="form-control date-picker" id="datepicker"
                                data-date-format="d M yyyy" placeholder="{{ date('d M Y') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email-address">Label</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" data-search="on">
                                <option value="default_option" disabled>- Cari Label -</option>
                                <option value="x">X.CL.FRD.001</option>
                                <option value="x">X.NMSAT.FRD.001</option>
                                <option value="x">X.NMSHL.STV.001</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="email-address">Shift</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" data-search="on">
                                <option value="default_option" disabled>- Pilih Shift -</option>
                                <option value="x">Shift 1 (08.00 - 16.00 WIB)</option>
                                <option value="x">Shift 2 (15.00 - 20.00 WIB)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal View / Edit Data --}}
<div class="modal fade" tabindex="-1" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Pengiriman</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter">
                    <div class="form-group">
                        <label class="form-label">Tgl. Transfer Bahan Baku</label>
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-left">
                                <em class="icon ni ni-calendar"></em>
                            </div>
                            <input type="text" class="form-control date-picker" id="datepicker"
                                data-date-format="d M yyyy" placeholder="{{ date('d M Y') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email-address">Label</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" data-search="on">
                                <option value="default_option" disabled>- Cari Label -</option>
                                <option value="x">X.CL.FRD.001</option>
                                <option value="x">X.NMSAT.FRD.001</option>
                                <option value="x">X.NMSHL.STV.001</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="email-address">Shift</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" data-search="on">
                                <option value="default_option" disabled>- Pilih Shift -</option>
                                <option value="x">Shift 1 (08.00 - 16.00 WIB)</option>
                                <option value="x">Shift 2 (15.00 - 20.00 WIB)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('lib/js/dashlite-dashboard/charts/gd-default.min.js') }}"></script>
<script src="{{ asset('lib/js/dashlite-dashboard/charts/chart-ecommerce.min.js?ver=2.9.1') }}"></script>
@endsection
