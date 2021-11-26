@inject('rooms','App\Models\Room')    
<div class="modal" id="exampleModal2{{$id}}">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title"> edit_room</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('rooms.update',$id)}}" method="post">
                    @method('put')
                     @csrf
                <div class="modal-body">
                <div class="form-group">
                        <input type="text" class="form-control" name="room_number"   value="{{$rooms->where('id',$id)->first()->room_number}}" placeholder="room_number">
                    </div>
                
                    <div class="form-group">
                        <lable> room_number</lable>
                    </div>
                     <br>
                     <br>
                     <div class="form-group">
                        <input type="text" class="form-control" name="number_of_bed"    value="{{$rooms->where('id',$id)->first()->number_of_bed}}" placeholder="number_of_bed">
                    </div>
                
                    <div class="form-group">
                        <lable> number_of_bed</lable>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary">تاكيد</button>
                </div>
        </div>
        </form>
    </div>
</div>  