@extends('layouts.app')

@section('title-page')
Classification C4.5
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
@endsection
@section('classification-primary-menu-item')
active current-page
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
                                    <h3 class="nk-block-title page-title">
                                        <a href="{{ route('dashboard') }}"><em class="icon ni ni-chevron-left-c mr-3"></em></a>
                                        Classification
                                    </h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Classifcation C4.5 Method</p>
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
                                            </ul>
                                        </div>
                                    </div>
                                </div>{{-- .nk-block-head-content --}}
                            </div>{{-- .nk-block-between --}}
                        </div>{{-- .nk-block-head --}}
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-xxl-12">
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <h5 class="mb-3">C4.5 Method</h5>
                                            {{-- Preview --}}
                                        </div>
                                    </div>{{-- .card-preview --}}
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
@endsection

@section('script')
<script src="{{ asset('lib/js/dashlite-dashboard/charts/gd-default.min.js') }}"></script>
<script src="{{ asset('lib/js/dashlite-dashboard/charts/chart-ecommerce.min.js?ver=2.9.1') }}"></script>
@endsection
