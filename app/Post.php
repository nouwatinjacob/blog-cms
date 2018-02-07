<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;

class Post extends Model
{

    use SoftDeletes;

    public function category()
    {
        return $this.belongsTo('App\Category');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'category_id', 'featured',
    ];

    protected $dates = ['deleted_at'];
}
