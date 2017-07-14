<?php

namespace App\Http\Controllers;

use App\Supplier;

class SupplierController extends Controller
{
    public function getSupplier(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

    public function postSupplier(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

}