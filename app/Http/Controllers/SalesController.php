<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Http\Requests\StoreSalesRequest;
use App\Http\Requests\UpdateSalesRequest;

use function PHPUnit\Framework\returnSelf;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.sales.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSalesRequest $request)
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        return 'hello rejoan';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalesRequest $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }


    /**
     * Return sales table list to generate invoices
     */
    public function invoice()
    {
        return view('pages.sales.invoices');
    }
    
    /**
     * Return sales table list to generate invoices
     */
    // public function return()
    // {
    //     return view('pages.sales.invoices');
    // }


}
