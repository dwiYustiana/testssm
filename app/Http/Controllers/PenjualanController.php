<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsSalesman;
use App\Models\MsCustomer;
use App\Models\MsItem;

class PenjualanController extends Controller
{
    public function index(){
        $salesmen = MsSalesman::all();
        $customer = MsCustomer::all();
        $item = MsItem::all();
        return view('penjualan', ['saless' => $salesmen,'customers'=>$customer,'items'=>$item]);
    }

    public function store(Request $request){
        

        // Validate the request data for the sales table
        $validatedSalesData = $request->validate([
            'SALES_NO' => 'required|string|max:20',
            'CUSTOMER_ID' => 'required|integer',
            'SALESMAN_ID' => 'required|integer',
            'CREATE_BY' => 'required|string|max:50',
            'INPUT_DATE' => 'required|date_format:Y-m-d H:i:s',
        ]);

        // Validate the request data for the sub_sales table
        $validatedSubSalesData = $request->validate([
            'ITEM_ID' => 'required|integer',
            'QTY_SALES' => 'required|integer',
            'UNIT_PRICE' => 'required|numeric',
        ]);

        // Create the sales record
        $sales = Sales::create($validatedSalesData);

        // Add the sales_id to the sub_sales data
        $validatedSubSalesData['SALES_ID'] = $sales->SALES_ID;

        // Create the sub_sales record
        $subSales = SubSales::create($validatedSubSalesData);

        return response()->json(['message' => 'Data saved successfully']);

    }
}
