<?php

namespace App\Http\Livewire;

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

class Home extends Component
{
    use WithPagination;
    public $dataset;
    public $total_container, $total_container_type;
    public $counted_total_container, $counted_total_container_type;
    public $container_name, $container_type, $type_name, $inside_measurement, $outside_measurement, $roof_opening, $door_open, $swing_opening, $load_capacity, $container_weight, $max_load_weight;
    public $listeners = ['refreshComponent' => 'refresh', 'deleteDataset'=> 'destroy'];
    public $paginationTheme = 'bootstrap';

    public function render()
    {
        /* Render Count */
        $total_container = DB::table('containers')->select('containers.container_name')->groupBy('containers.container_name')->get();
        $this->counted_total_container = $total_container->count();
        $total_container_type = DB::table('containers')->select('containers.container_type')->groupBy('containers.container_type')->get();
        $this->counted_total_container_type = $total_container_type->count();
        /* Datasets */
        $this->dataset = DB::table('containers')->select('containers.*')->paginate(10, ['*'], 'dataset');
        return view('livewire.home');
    }

    public function edit($id)
    {

    }

    public function cancel()
    {
        $this->resetFields();
    }


}
