<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function getRouteKeyName()
    {
    	return 'url';
    }

    public function setTitleAttribute($title)
    {
    	$this->attributes['title'] = $title;

    	$this->attributes['url'] = str_slug($title , "-") . "-" . uniqid();
    }  

    public function scopeOfCategory($query, $category)
    {
        return $query->where('category_id', $category);
    }    
}
