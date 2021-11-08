<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['name', 'telephone', 'cep'];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
    
}
