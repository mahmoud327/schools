@extends('layouts.main')
@section('page_title')
students
@endsection

@section('content')

<section class="content-header">
    <h1>
        لوحة التحكم
        <small>students</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">students</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

 
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">students</h3>
        </div><!-- /.box-header -->


        <div class="box-body">
             @include('flash::message')
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif
            </div>
        <form action="{{route('students.update',$student->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <lable> name</lable>
                 <br>  
                <input type="text" class="form-control" name="name"   value="{{$student->name}}" placeholder="name">
            </div>
            @inject('schools','App\Models\school')    
            <div class="form-group">
                 <lable>school name</lable>
                 <br>
                <select class="form-control" name="school_id">
                    @foreach($schools->get() as $school)
                        <option  value="{{$school->id}}"  {{ ( $student->school_id == $school->id) ? 'selected' : '' }}  >{{$school->name}}</option>
                    @endforeach
                </selet>
            </div>
         

            <div class="form-group">
                <lable> order</lable>
                 <input type="number" class="form-control" name="order"   value="{{$student->order}}" placeholder="order">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">تاكيد</button>
           </div>
         </form>

        
          </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

    </div>
</section><!-- /.content -->


@endsection
