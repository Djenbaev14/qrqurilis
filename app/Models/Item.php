<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function user():BelongsTo{
        return $this->BelongsTo(User::class);
    }
    public function menu():HasMany{
        return $this->HasMany(Menu::class);
    }

    public function post():HasMany{
        return $this->hasMany(Post::class);
    }
    public function menu_item():HasMany{
        return $this->HasMany(Menu_item::class);
    }
}
