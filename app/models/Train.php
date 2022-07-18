<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Train extends Model{
    protected $table = 'trains';

    protected $fillable = ['name','train_number','ticket_price','cabin_number','created_at','updated_at'];

    public function passengers(){
        return $this->hasMany(Passenger::class, 'train_id');
    }
}
?>