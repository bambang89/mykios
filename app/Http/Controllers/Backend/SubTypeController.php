<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

use App\Models\TypeProduct;
use App\Models\SubTypeProduct;

class SubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.type.sub.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type = TypeProduct::all();
        return view('backend.type.sub.create')
            ->withTypeProduct($type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'sub_type' => 'required',
            'desc'  => 'string'
        ]);

        $subTypeProduct = SubTypeProduct::create($validator->validated());

        return redirect()->route('admin.     .index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubTypeProduct $subtype)
    {
        //
        $type = TypeProduct::all();
        return view('backend.type.sub.edit')
            ->withTypeProduct($type)
            ->withSubTypeProduct($subtype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubTypeProduct $subtype)
    {
        //
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'sub_type' => 'required',
            'desc'  => 'string'
        ]);

        $subtype->update($validator->validated());

        return redirect()->route('admin.subtype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
