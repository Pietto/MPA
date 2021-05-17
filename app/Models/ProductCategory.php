<?
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * this model makes sure that table 'product_category' doesn't get renamed by laravel magic
 */

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_category';
}