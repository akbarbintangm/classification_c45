<div wire:ignore.self class="modal fade" tabindex="-1" id="modal-add">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pengiriman</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="form-validate is-alter">
                    {{-- <div class="row mb-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="delivery_date">Tanggal Pengiriman</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" id="delivery_date" name="delivery_date" data-date-format="yyyy-mm-dd" data-date-format="yyyy-mm-dd" autocomplete="off" data-provide="datepicker" data-date-autoclose="true" data-date-today-highlight="true" onchange="this.dispatchEvent(new InputEvent('input'))" placeholder="Tanggal Pengiriman" wire:model="delivery_date">
                                    @error('delivery_date') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="status_shipment">Status Pengiriman</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on" id="status_shipment" name="status_shipment" wire:model="status_shipment">
                                        <option selected="selected">- Cari Status Pengiriman -</option>
                                        @foreach ($list_total_status_shipment as $status_shipment)
                                        <option value="{{ $status_shipment->status_shipment }}">{{ $status_shipment->status_shipment }}</option>
                                        @endforeach
                                    </select>
                                    @error('status_shipment') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="container_name">Container</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on" id="container_name" name="container_name" wire:model="container_name">
                                        <option selected="selected">- Cari Nama Container -</option>
                                        @foreach ($list_total_container as $container)
                                        <option value="{{ $container->container_name }}">{{ $container->container_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('container_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="ship_name">Kapal</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on" id="ship_name" name="ship_name" wire:model="ship_name">
                                        <option selected="selected">- Cari Nama Kapal -</option>
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
                                    @error('ship_name') <span class="text-danger">{{ $message }}</span> @enderror
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
                                    <input type="text" class="form-control date-picker" id="goods_date_in" name="goods_date_in" data-date-format="yyyy-mm-dd" autocomplete="off" data-provide="datepicker" data-date-autoclose="true" data-date-today-highlight="true" onchange="this.dispatchEvent(new InputEvent('input'))" placeholder="Tanggal Barang Masuk" wire:model="goods_date_in">
                                    @error('goods_date_in') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="delivery_type">Jenis Pengiriman</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control form-control-lg" data-search="on" id="delivery_type" name="delivery_type" wire:model="delivery_type">
                                        <option selected="selected">- Cari Jenis Pengiriman -</option>
                                        @foreach ($list_total_delivery_type as $delivery_type)
                                        <option value="{{ $delivery_type->delivery_type }}">{{ $delivery_type->delivery_type }}</option>
                                        @endforeach
                                    </select>
                                    @error('delivery_type') <span class="text-danger">{{ $message }}</span> @enderror
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
                                    <input type="text" class="form-control"
                                    placeholder="Masukkan Nama Pengirim" id="sender_name" name="sender_name" wire:model="sender_name">
                                    @error('sender_name') <span class="text-danger">{{ $message }}</span> @enderror
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
                                    <input type="text" class="form-control"
                                    placeholder="Masukkan Nama Penerima" id="receiver_name" name="receiver_name" wire:model="receiver_name">
                                    @error('receiver_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group text-right mt-5">
                        <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#modal-add').modal('hide');
    });
</script>
@endsection
