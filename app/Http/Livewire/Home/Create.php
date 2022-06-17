<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;

class Create extends Component
{
    use WithPagination;

    public $container_name, $container_type, $type_name, $inside_measurement, $outside_measurement, $roof_opening, $door_open, $swing_opening, $load_capacity, $container_weight, $max_load_weight;
    public $listeners = ['deleteDataset'=> 'destroy'];

    // Render
    public function render()
    {
        /* Render Lists */
        return view('livewire.home.create');
    }

    public function resetFields()
    {
        /* $this->sender_name = null;
        $this->receiver_name = null;
        $this->container_type = null;
        $this->delivery_type = null;
        $this->status_shipment = null;
        $this->goods_date_in = null;
        $this->delivery_date = null;
        $this->ship_name = null;
        $this->container_name = null;
        $this->printed_status = null; */
    }

    // Validation Rules
    protected $rules = [
        /* 'sender_name' => 'required',
        'receiver_name' => 'required',
        'container_type' => 'required',
        'delivery_type' => 'required',
        'status_shipment' => 'required',
        'goods_date_in' => 'required',
        'delivery_date' => 'required',
        'ship_name' => 'required',
        'container_name' => 'required',
        'printed_status' => 'required' */
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function store()
    {
        $validate = $this->validate();
        /* DB::table('shipments')->insert([
            'sender_name' => $this->sender_name,
            'receiver_name' => $this->receiver_name,
            'container_type' => $this->container_type,
            'delivery_type' => $this->delivery_type,
            'status_shipment' => $this->status_shipment,
            'goods_date_in' => $this->goods_date_in,
            'delivery_date' => $this->delivery_date,
            'ship_name' => $this->ship_name,
            'container_name' => $this->container_name,
            'printed_status' => $this->printed_status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); */
        //session()->flash('success','Data Berhasil Ditambahkan!');
        $this->resetFields();
        $this->dispatchBrowserEvent('close-modal');
    }
}
