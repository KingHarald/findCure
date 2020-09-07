<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Speciality;
use Illuminate\Http\Request;
use Image;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.speciality.index')->with('speciality', Speciality::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speciality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addSpeciality = $request->all();
        $speciality = new Speciality;
        $speciality->name = $addSpeciality['name'];

            $image = $request->file('image');
            $imageName = rand(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('adminCss/img/specialities'), $imageName);

            $speciality->image = $imageName;
            

            $speciality->save();
            return redirect()->route('adminSpeciality.index')->with('flash_success_message', 'Speciality added');
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
    public function edit($id)
    {
        return view('admin.speciality.edit')->with('speciality', Speciality::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editSpeciality = $request->all();

      $image = $request->file('image');
        if ($image !='') {

       $imageName = rand(). '.' . $image->getClientOriginalExtension();
       $image->move(public_path('adminCss/img/specialities'), $imageName);
        }

         else if(!empty($editSpeciality['current_image'])){
            $imageName = $editSpeciality['current_image'];
        }
        else{
            $imageName = '';
        }

         Speciality::where(['id' => $id])->update([
            'name' => $editSpeciality['name'],
            'image' => $imageName,
        ]);

        return redirect()->route('adminSpeciality.index')->with('success', 'Updated')->with('flash_success_message', 'Speciality Updated Successfully!');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Speciality::find($id)->delete();
        return redirect()->route('adminSpeciality.index')->with('flash_success_message', 'Speciality deleted successfully!');
    }
}
