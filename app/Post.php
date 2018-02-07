<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

class Post extends Model
{
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
}
