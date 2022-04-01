<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'post';
    protected $guarded = ['id'];

    // protected $with = ['category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('judul', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });
         $query->when($filters['category'] ?? false, function($query, $category){
             return $query->whereHas('category', function($query) use ($category){
                 $quuery->where('slug', $category);
             });
         });


        }

        public function getRouteKeyName()
        {
            return 'slug';
        }

        public function sluggable(): array
        {
            return [
                'slug' => [
                    'source' => 'judul'
                ]
            ];
        }

    }
