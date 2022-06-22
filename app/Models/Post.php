<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post {

	public $title;

	public $excerpt;

	public $date;

	public $body;

	public $slug;

	public function __construct($title, $excerpt, $date, $slug, $body){
		$this->title = $title;
		$this->excerpt = $excerpt;
		$this->date = $date;
		$this->slug = $slug;
		$this->body = $body;
	}

	public static function all() {
	    return collect(File::files(resource_path('posts')))
	        ->map(fn($file) => YamlFrontMatter::parseFile($file))
	        ->map(fn($document) => new Post(
	                $document->title,
	                $document->excerpt,
	                $document->date,
	                $document->slug,
	                $document->body()
	            ) 
	        )
	        ->sortByDesc('date');
	}

	public static function find($slug) {
		$posts = static::all();

		return $posts->firstWhere('slug',$slug);
	}
}