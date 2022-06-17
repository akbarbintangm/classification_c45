<div>
    <div class="row g-gs">
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
                                <div class="amount">
                                    {{ __($counted_total_container) }}
                                </div>
                                <div class="nk-ecwg6-ck">
                                    {{-- <h1 class="fas fa-truck"></h1> --}}
                                    {{-- <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas> --}}
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
                                <h6 class="title">Total Tipe Container</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">
                                    {{ __($counted_total_container_type) }}
                                </div>
                                <div class="nk-ecwg6-ck">
                                    {{-- <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas> --}}
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
                    <h5 class="mb-3">Data Pengiriman <button class="btn btn-primary" wire:click="refresh('home')">Refresh</button></h5>
                    <div wire:poll.5000ms class="table-responsive">
                        <table class="{{-- datatable-init --}} table">
                            <thead>
                                <tr>
                                    <th>Nama Container</th>
                                    <th>Tipe Container</th>
                                    <th>Nama Tipe</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($dataset)
                                    @foreach ($dataset as $data)
                                        <tr>
                                            <td>{{ $data->container_name }}</td>
                                            <td>{{ $data->container_type }}</td>
                                            <td>{{ $data->type_name }}</td>
                                            <td><button type="button" data-toggle="modal" data-target="#modal-edit" class="btn btn-primary">Detail</button></td>
                                            <td><button type="button" data-toggle="modal" data-target="#modal-delete" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr><td colspan="9"><b>Tidak Ada Data.</b></td></tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $dataset->links() }}
                    </div>
                </div>
            </div><!-- .card-preview -->
        </div>
    </div>
</div>
