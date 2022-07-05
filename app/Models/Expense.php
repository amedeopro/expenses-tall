<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userid',
        'categoryid',
        'amount',
        'note'
    ];


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categoryid');
    }


}
