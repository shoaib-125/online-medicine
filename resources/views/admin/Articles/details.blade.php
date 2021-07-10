@extends('admin.master')

@section('title')
    Article
@endsection


@section('sideMenuTitle')
    Article
@endsection

@section('pageTitle')
    <a href="{{url('articles/list')}}"><i class="fa fa-dashboard"></i>Article List</a>
@endsection



@section('bodyContent')

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-lg-6 centerDiv">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        @if (isset($editprofile))
                            <div class="attachment-pushed box-header with-border">
                                <a class="btn btn-app bg-green" href="{{url('users/editProfile')}}">
                                    <i class="fa fa-plus"></i> Edit Profile
                                </a>
                            </div>
                        @endif
                       {{-- <div class="attachment-pushed box-header with-border">
                            <div class="attachment-text"><img class="img-responsive pad" src="{#" alt="Photo"></div>
                        </div>--}}

                        <div class="attachment-pushed box-header with-border">
                            <h4 class="attachment-heading"><a>Article Name</a></h4>
                            <div class="attachment-text">{{$data->name}}</div>
                        </div>

                        <div class="attachment-pushed box-header with-border">
                            <h4 class="attachment-heading"><a>Details</a></h4>
                            <div class="attachment-text">{{$data->details}}</div>
                        </div>


                    </div>
                    <!-- /.box-body -->


                </div>
                <!-- /.box -->


            </div>
        </div>
    </section>

@endsection
