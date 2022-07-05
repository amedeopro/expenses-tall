<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddData extends Component
{

    public $categories;

    public $userid = 1;
    public $categoryid;
    public $amount;
    public $note;

    protected $rules = [
        'userid'=> 'required',
        'categoryid'=> 'required',
        'note'=> 'required',
        'amount'=> 'required',
    ];

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }


    public function submit()
    {

        $r = $this->validate();

        Expense::create($r);

        $this->emit('postAdded');

        //return redirect()->route('welcome')->with('success', 'Nuovo inserito');

    }


    public function render()
    {

        $this->categories = Category::all();

        return view('livewire.add-data');
    }
}
