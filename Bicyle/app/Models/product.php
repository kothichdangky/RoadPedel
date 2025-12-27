<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class product extends Model
{
    protected $fillable = ['name', 'intro', 'price', 'price_sale', 'image', 'display_section'];
    use Commentable;
}
