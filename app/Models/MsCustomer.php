<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsCustomer extends Model
{
    use HasFactory;

    // Define the table associated with the model.
    protected $table = 'MS_CUSTOMER';

    // Define the primary key column.
    protected $primaryKey = 'CUSTOMER_ID';

    protected $keyType = 'string';

    // Disable timestamps (if not needed).
    public $timestamps = false;

    // Specify the fillable columns (optional).
    protected $fillable = ['CUSTOMER_NAME', 'ADDRESS', 'NICK_NAME', 'INPUT_BY', 'INPUT_DATE'];
}