<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DataTable extends Component
{

    public $expenses;

    protected $listeners = ['postAdded' => 'render'];



    public function render()
    {

        $this->expenses = Expense::with('category')->get();

        return view('livewire.data-table');
    }
}
