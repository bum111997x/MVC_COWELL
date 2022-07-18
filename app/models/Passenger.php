<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Passenger extends Model{
    protected $table = 'passengers';

    protected $fillable = ['name','train_id','avatar','birth_date','gender','phone','created_at','updated_at'];

    public function train()
    {
        return $this->belongsTo(Train::class, 'train_id');
    }
}
?>