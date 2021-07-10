@extends('admin.master')

@section('title')
    Articles List
@endsection


@section('sideMenuTitle')
    Articles
@endsection

@section('pageTitle')
    <a href="{{url('articles/add')}}"><i class="fa fa-dashboard"></i>Add Article</a>
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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Now showing {{ $listData->count() * $listData->currentPage() }} out of {{ $listData->total() }} Articles</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($listData as $val)
                                {{--@if($val->id != Auth::user()->id)--}}

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->details}}</td>
                                        <td>
                                            @if (Auth::user()->user_role->slug == "superadmin" || Auth::user()->user_role->slug == "admin")
                                                <a class="btn btn-app  bg-blue" href="{{url('articles/edit/'.$val->id)}}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                            @endif

                                            @if (Auth::user()->user_role->slug == "superadmin")

                                                <a class="btn btn-app bg-red" href="#" onclick="delete_item('{{url('articles/delete/'.$val->id)}}');">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>

                                            @endif


                                            <a class="btn btn-app" href="{{url('articles/details/'.$val->id)}}">
                                                <i class="fa fa-book"></i> Details
                                            </a>
                                        </td>
                                    </tr>

                                {{--@endif--}}
                            @endforeach

                            </tbody>

                        </table>

                        {{ $listData->links() }}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

    </section>

@endsection
