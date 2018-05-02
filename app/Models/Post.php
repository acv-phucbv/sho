<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
	use Notifiable, SoftDeletes;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'author_id',
		'title',
		'body',
		'category_id',
		'slug',
		'image',
	];

	/**
	 * The post belong to the user
	 */
	public function author() {
		return $this->belongsTo('App\Models\User', 'author_id');
	}

	/**
	 * The post belong to the category
	 */
	public function category() {
		return $this->belongsTo('App\Models\Category', 'category_id');
	}

	/**
	 * The post belong to the tag
	 */
	public function tags() {
		return $this->morphToMany('App\Models\TaggAble', 'tag_id');
	}
}
