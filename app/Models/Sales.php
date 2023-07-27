<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'tx_sales';

    protected $fillable = ['SALES_NO', 'CUSTOMER_ID', 'SALESMAN_ID', 'CREATE_BY', 'INPUT_DATE'];

    public function subSales()
    {
        return $this->hasMany(SubSales::class, 'SALES_ID');
    }
}