@extends('admin.master')

@section('title')
    Article {{(!isset($editData)?'Add':'Update') }}
@endsection


@section('sideMenuTitle')
    Article {{(!isset($editData)?'Add':'Update') }}
@endsection


@section('pageTitle')
    <a href="{{url('doctors/list')}}"><i class="fa fa-dashboard"></i>Article List</a>
@endsection



@section('bodyContent')

    <section class="content">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>
                    {{Session::get('message')}}</h4>
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>
                    {{Session::get('error')}}</h4>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12 centerDiv">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>

                    <!-- /.box-header -->
                    <!-- form start -->
                    @if (!isset($editData))
                        {!! Form::open(['url' => 'articles/add', 'method' => 'post', 'name' => 'form', 'enctype' => 'multipart/form-data',  'role' => 'form']) !!}
                    @endif
                    @if (isset($editData))
                        {!! Form::open(['url' => 'articles/update', 'method' => 'post','name' => 'form', 'enctype' => 'multipart/form-data', 'role' => 'form']) !!}
                        <input type="hidden" class="form-control" name="id" value="{{$editData->id}}">
                    @endif
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Article Name *</label>
                            <input type="text" class="form-control" name="name" placeholder="Article Name" value="{{isset($editData) ? $editData->name:old('name')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Details</label>
                            <textarea class="form-control" rows="3" name="details" >{{isset($editData) ? $editData->details: old('details')}}</textarea>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}

                </div>
                <!-- /.box -->


            </div>
        </div>
    </section>

@endsection
