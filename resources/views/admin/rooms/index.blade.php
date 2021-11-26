@extends('layouts.main')
@section('page_title')
Rooms
@endsection

@section('content')

<section class="content-header">
    <h1>
        لوحة التحكم
        <small>Rooms</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
        <li class="active">Rooms</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

 
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Rooms</h3>
        </div><!-- /.box-header -->

        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
          data-toggle="modal"
            href="#create" title="create"><i class="fa fa-create">create room </i>
        </a> 
         @include('admin.rooms.modal_create')


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
