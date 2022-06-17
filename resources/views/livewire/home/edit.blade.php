<div class="modal fade" tabindex="-1" id="modal-add">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Pengiriman</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                {{-- <form class="form-validate is-alter">
                    <div class="row mb-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="delivery_date">Tanggal Pengiriman</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" id="delivery_date"
                                        data-date-format="d M yyyy" placeholder="{{ date('d M Y') }}"
                                        wire:model="delivery_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="status_shipment">Status Pengiriman</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on"
                                        id="status_shipment" wire:model="status_shipment">
                                        <option disabled="disabled" selected="selected">- Cari Status Pengiriman -
                                        </option>
                                        @foreach ($list_total_status_shipment as $status_shipment)
                                        <option value="{{ $status_shipment->status_shipment }}">{{
                                            $status_shipment->status_shipment }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="container_name">Container</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on"
                                        id="container_name" wire:model="container_name">
                                        <option disabled="disabled" selected="selected">- Cari Nama Container -</option>
                                        @foreach ($list_total_container as $container)
                                        <option value="{{ $container->container_name }}">{{ $container->container_name
                                            }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="ship_name">Kapal</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on"
                                        id="ship_name" wire:model="ship_name">
                                        <option disabled="disabled" selected="selected">- Cari Nama Kapal -</option>
                                        @foreach ($list_total_ship as $ship)
                                        <option value="{{ $ship->ship_name }}">
                                            @php
                                            $convertedShipName = explode(',',$ship->ship_name);
                                            $newShipName = $convertedShipName;
                                            @endphp
                                            {{ $newShipName[0] }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="goods_date_in">Tanggal Barang Masuk</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" id="goods_date_in"
                                        data-date-format="d M yyyy" placeholder="{{ date('d M Y') }}"
                                        wire:model="goods_date_in">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="delivery_type">Jenis Pengiriman</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on"
                                        id="delivery_type" wire:model="delivery_type">
                                        <option disabled="disabled" selected="selected">- Cari Jenis Pengiriman -
                                        </option>
                                        @foreach ($list_total_delivery_type as $delivery_type)
                                        <option value="{{ $delivery_type->delivery_type }}">{{
                                            $delivery_type->delivery_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-label" for="sender_name">Nama Pengirim</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Pengirim"
                                        id="sender_name" wire:model="sender_name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-label" for="receiver_name">Nama Penerima</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-users"></em>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Penerima"
                                        id="receiver_name" wire:model="receiver_name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right mt-5">
                        <button wire:click.prevent="store()" class="btn btn-lg btn-primary">Simpan</button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</div>
