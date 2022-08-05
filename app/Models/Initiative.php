<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initiative extends Model
{
    use HasFactory;

    protected $table = 'initiatives';
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/images/' . $this->image);

    }//end of get image path


    public function getActiveAttribute($value)
    {

      if($this->status == 'yes')
      {echo ('<span class="btn btn-success btn-sm"> فعال </span>');}
      else
      {echo ('<span class="btn btn-danger btn-sm"> موقوف</span>');}

    }
}
