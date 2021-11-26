<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRoom;
use App\DataTables\RoomDatatable;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //index room
    public function index(RoomDatatable $room)
   {

      return $room->render('admin.rooms.index');
   }
   
    //store room
    public function store(RequestRoom $request)
    {
        $room=Room::create($request->all());
        flash()->success("تم إضافة حجره بنجاح");
        return redirect(route('rooms.index'));
    }
     //update room
    public function update(RequestRoom $request, $id)
    {
        $room=Room::Find($id);
        $room->update($request->all());
        flash()->success("تم التعديل بنجاح");
        return back();
    }

    //delete room
    public function destroy($id, Request $request)
    {
      $room=Room::Find($id);
      $room->delete();
      flash()->success("تم الحذف بنجاح");
      return back();
    }
}
