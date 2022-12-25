<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gender\StoreGenderRequest;
use App\Interface\GenderInterface;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GenderController extends Controller
{
    public $genders;
    
    public function __construct(GenderInterface $genders)
    {
        $this->genders = $genders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGenders()
    {
        $genderLists = $this->genders->getGenderLists();
        return view('gender.indexGenders', compact('genderLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createGenders()
    {
        return view('gender.createGenders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeGenders(StoreGenderRequest $request)
    {
        try {
            $collection = $request->except(['_token','_method']);
            $this->genders->storeGenderLists($collection);
        } catch (\Exception $e) {
            Log::channel('crud_error')->error('Error: Store Gender' . $e->getMessage());
            return redirect()->route('gender.index')->with('error','Data Unsuccessfully Added!');
        }
        return redirect()->route('gender.index')->with('success','Data Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gender $gender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $gender)
    {
        //
    }
}
