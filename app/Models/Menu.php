<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function user():BelongsTo{
        return $this->BelongsTo(User::class);
    }
    public function item():BelongsTo{
        return $this->BelongsTo(Item::class);
    }

    public function menu_item():HasMany{
        return $this->HasMany(Menu_item::class);
    }
}
