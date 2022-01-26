
<a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
     data-toggle="modal"
      href="#exampleModal2{{$id}}" title="edit"><i class="fa fa-edit"></i>
</a> 

@include('admin.schools.modal_edit',['id'=>$id])

<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
    data-toggle="modal" href="#modaldemo9{{ $id }}" title="delete"><i
    class="fa fa-trash"></i>
</a>
@include('admin.schools.modal_delete',['id'=>$id])

                                                  