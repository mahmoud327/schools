<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestSchool;
use App\DataTables\SchoolDatatable;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    //index school
    public function index(SchoolDatatable $school)
   {

      return $school->render('admin.schools.index');
   }
   
    //store school
    public function store(RequestSchool $request)
    {
        $school=School::create($request->all());
        flash()->success("تم إضافة  بنجاح");
        return redirect(route('schools.index'));
    }
     //update school
    public function update(RequestSchool $request, $id)
    {
        $school=School::Find($id);
        $school->update($request->all());
        flash()->success("تم التعديل بنجاح");
        return back();
    }

    //delete school
    public function destroy($id, Request $request)
    {
      $school=School::Find($id);
      ///or cascade
      $school->students()->delete();
      $school->delete();
      flash()->success("تم الحذف بنجاح");
      return back();
    }
}
