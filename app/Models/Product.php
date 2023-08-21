<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name', 'price'];

    public function getId():int{
        return $this->attributes['id'];
    }

    public function setId($id):void{
        $this->attributes['id']=$id;
    }

    public function getName():string{
        return $this->attributes['name'];
    }

    public function setName($name):void{
        $this->attributes['name']=$name;
    }

    public function getPrice():int{
        return $this->attributes['price'];
    }

    public function setPrice($price):void{
        $this->attributes['price']=$price;
    }

    public function comments():HasMany{
        return $this->hasMany(Comment::class);
    }

    public function getComments():Collection{
        return $this->comments;
    }

    public function setComments(Collection $comments):void{
        $this->comments=$comments;
    }
}
