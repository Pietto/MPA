<?
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * this model handles everything Product related, which isnt a lot to be honest
 * it just returns 1 view, nothing spectacular
 */

class Product extends Model
{
    use HasFactory;

    public function Order(){
        return $this->belongsTo('App\Models\Order');
    }
}