<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Librarian extends Model
{
    protected $fillable = ['title', 'author', 'description', 'published_year', 'isbn'];
    //use HasFactory;
};

//protected $appends = ['title', 'author'];

// public function getTitleAttribute()
// {
//     return $this->title . ' ' . $this->author;
// }
// public function getAuthorAttribute()
// {
//     // $author = $this->attributes['author'];
//     // if($) {
//     //     return Carbon::parse($birthdate)->format('F d, Y');

//     // }
//     // return '';
// }
//   public function books()
//  {
//      return $this->hasMany(Books::class, 'books_title');
// }

