<?php

namespace App\Models;

use App\Models\TicketCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'date',
        'title',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(TicketCategory::class, 'category_id');
    }
}
