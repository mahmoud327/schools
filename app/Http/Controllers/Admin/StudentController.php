<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestStudent;
use App\DataTables\StudentDatatable;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //index Student
    public function index(StudentDatatable $Student)
   {

      return $Student->render('admin.students.index');
   }
   
    //store student
    public function store(RequestStudent $request)
    {
        $student=Student::create($request->all());
        flash()->success("تم إضافة  بنجاح");
        return redirect(route('students.index'));
    }
    //store student
    public function edit($id)
    {
        $student=Student::find($id);
        return view('admin.students.edit',compact('student'));
    }
     //update student
    public function update(RequestStudent $request, $id)
    {
        $student=student::Find($id);
        $student->update($request->all());
        flash()->success("تم التعديل بنجاح");
        return back();
    }

    //delete student
    public function destroy($id, Request $request)
    {
      $student=Student::Find($id);
      $student->delete();
      flash()->success("تم الحذف بنجاح");
      return back();
    }
}
