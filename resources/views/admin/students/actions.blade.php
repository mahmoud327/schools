
<a class="modal-effect btn btn-sm btn-info"
      href="{{route('students.edit',$id)}}" title="edit"><i class="fa fa-edit"></i>
</a> 


<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
    data-toggle="modal" href="#modaldemo9{{ $id }}" title="delete"><i
    class="fa fa-trash"></i>
</a>
@include('admin.students.modal_delete',['id'=>$id])

                                                  