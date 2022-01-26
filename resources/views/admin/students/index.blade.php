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

        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
          data-toggle="modal"
            href="#create" title="create"><i class="fa fa-create">create Student </i>
        </a> 
         @include('admin.students.modal_create')


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
            {!! $dataTable->table([
            'class'=>'dataTable table table-striped table-hover  table-bordered'
            ]) !!}
          </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

    </div>
</section><!-- /.content -->

@push('dt_js')
    {!! $dataTable->scripts() !!}
@endpush
@endsection
