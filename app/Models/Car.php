<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producer;
class Car extends Model
{
    use HasFactory;
    protected $table='cars';
    protected $fillable=['model','description','Produced_on','image','producer_id'];
    public function producer(){
        return $this->belongsTo(producer::class,'producer_id','id');
    }
}
