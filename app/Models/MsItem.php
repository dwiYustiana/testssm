<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsItem extends Model
{
    use HasFactory;
    protected $table = 'MS_ITEM'; // Table name

    protected $primaryKey = 'ITEM_ID'; // Primary key column name

    protected $keyType = 'string';
    
    protected $fillable = [
        'ITEM_ID',
        'ITEM_NAME',
        'CATEGORY',
        'INPUT_BY',
        'INPUT_DATE'
    ];

    // Add timestamps if needed (created_at and updated_at columns)
    public $timestamps = false;
}
