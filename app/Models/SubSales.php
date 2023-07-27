<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSales extends Model
{
    protected $table = 'tx_sub_sales';

    protected $fillable = ['SALES_ID', 'ITEM_ID', 'QTY_SALES', 'UNIT_PRICE'];

    public function sales()
    {
        return $this->belongsTo(Sales::class, 'SALES_ID');
    }
}