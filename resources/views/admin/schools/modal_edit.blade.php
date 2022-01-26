@inject('schools','App\Models\School')    
<div class="modal" id="exampleModal2{{$id}}">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title"> edit schools</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('schools.update',$id)}}" method="post">
                @method('put')
                    @csrf
                <div class="modal-body">

                     <div class="form-group">
                         <lable> name</lable>
                        <input type="text" class="form-control" name="name"   value="{{$schools->where('id',$id)->first()->name}}" placeholder="name">
                    </div>
                     <br>
                     <br>
                    <div class="form-group">
                         <lable> status</lable>
                        <input type="text" class="form-control" name="status"    value="{{$schools->where('id',$id)->first()->status}}" placeholder="status">
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