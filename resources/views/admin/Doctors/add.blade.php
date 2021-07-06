@extends('admin.master')

@section('title')
    Doctor {{(!isset($editData)?'Add':'Update') }}
@endsection


@section('sideMenuTitle')
    Doctor {{(!isset($editData)?'Add':'Update') }}
@endsection


@section('pageTitle')
    <a href="{{url('doctors/list')}}"><i class="fa fa-dashboard"></i>Doctor List</a>
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
                        {!! Form::open(['url' => 'doctors/add', 'method' => 'post', 'name' => 'form', 'enctype' => 'multipart/form-data',  'role' => 'form']) !!}
                    @endif
                    @if (isset($editData))
                        {!! Form::open(['url' => 'doctors/update', 'method' => 'post','name' => 'form', 'enctype' => 'multipart/form-data', 'role' => 'form']) !!}
                        <input type="hidden" class="form-control" name="id" value="{{$editData->id}}">
                    @endif
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name *</label>
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{isset($editData) ? $editData->firstname:old('firstname')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name *</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{isset($editData) ? $editData->lastname:old('lastname')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email *</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{isset($editData) ? $editData->email : old('email')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone *</label>
                            <input type="phone" class="form-control" name="phone" placeholder="Phone" value="{{isset($editData) ? $editData->phone : old('phone')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea class="form-control" rows="3" name="address" placeholder="Address">{{isset($editData) ? $editData->address: old('address')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" class="form-control" name="city" placeholder="City" value="{{isset($editData) ? $editData->city:old('city')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image (Optional)</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block"></p>
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
