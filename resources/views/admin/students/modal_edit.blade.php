@inject('students','App\Models\Student')    
<div class="modal" id="exampleModal2{{$id}}">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title"> edit_Student/h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('students.update',$id)}}" method="post">
               @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <lable> name</lable>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="name"   value="{{$students->where('id',$id)->first()->name}}" placeholder="name">
                    </div>
                
                     <br>
                     <br>

                    @inject('schools','App\Models\School')
                   <div class="form-group">
                       <select class="form-control" name="school_id">
                           @foreach($schools->get() as $school)
                              <option value="{{$school->id}}" >{{$school->name}}</option>
                           @endforeach
                       </selet>
                    </div>

                     <div class="form-group">
                        <lable> order</lable>
                    </div>
                    
                     <div class="form-group">
                        <input type="text" class="form-control" name="order"    value="{{$students->where('id',$id)->first()->order}}" placeholder="number_of_bed">
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