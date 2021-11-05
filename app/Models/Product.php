<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name_product', 'description', 'company_id'];

    public function Company()
    {
        return $this->belongsTo(Company::class);
    } 

}

