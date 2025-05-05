namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'posts'; // optional
    protected $fillable = ['title', 'content'];
}
