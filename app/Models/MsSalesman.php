<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsSalesman extends Model
{
    use HasFactory;

    // Define the table associated with the model.
    protected $table = 'MS_SALESMAN';

    // Define the primary key column.
    protected $primaryKey = 'SALESMAN_ID';

    protected $keyType = 'string';

    // Disable timestamps (if not needed).
    public $timestamps = false;

    // Specify the fillable columns (optional).
    protected $fillable = ['SALES_PERSON', 'ALAMAT', 'INPUT_BY', 'INPUT_DATE'];
}
