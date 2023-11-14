<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothingRequest;
use App\Http\Requests\UpdateClothingRequest;
use App\Models\Clothing;

class ClothingController extends Controller
{
    public function index()
    {
        //C
    }

    public function create()
    {
        //
    }
    public function store(StoreClothingRequest $request)
    {
        //
    }

    public function show(Clothing $clothing)
    {
        //
    }

    public function edit(Clothing $clothing)
    {
        //
    }

    public function update(UpdateClothingRequest $request, Clothing $clothing)
    {
        //
    }

    public function destroy(Clothing $clothing)
    {
        //
    }
}
