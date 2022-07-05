<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DataTable extends Component
{

    public $expenses;

    protected $listeners = ['expAdded' => 'render'];


    public function delete($id)
    {
        Expense::destroy($id);
    }

    public function render()
    {

        $this->expenses = Expense::with('category')->orderByDesc('updated_at')->get();

        return view('livewire.data-table');
    }
}
