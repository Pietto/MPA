<?
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Order(){
        dd('test3');
        return $this->belongsTo('App\Models\Order');
    }
}