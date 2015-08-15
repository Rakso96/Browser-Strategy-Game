<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    /*
	------------------------------------------------
	| A class we get to create from the Laracast tutorials that helps us create a small blog.
	| Was used to learn more about how laravel works and to get a feel for laravel.
	*/
	
	protected $fillable = [
		'title',
		'body',
		'published_at'
	];
	
	
	/*
	Additional fields that will be treated as carbon instances.
	*/
	protected $dates = ['published_at'];
	
	
	/*
	Scope queries to articles that have been published
	*/
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}
	
	
	/*
	Set the published at attribute
	*/
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);
	}
}
