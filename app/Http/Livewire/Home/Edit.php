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

class Edit extends Component
{
    public $listeners = ['deleteDataset'=> 'destroy'];
    public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.home.edit');
    }
}
