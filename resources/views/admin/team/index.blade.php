@extends('admin.layout.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{ route('team-create') }}" class="btn btn-blue waves-effect waves-light">Add
                                    Team</a>
                            </ol>
                        </div>
                        <h4 class="page-title">Team All </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th> Name </th>
                                        <th> Image </th>
                                        <th> Role </th>
                                        <th> Social Media </th>
                                        <th> Status </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($datas as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td>{{ $item->name }}</td>
                                            <td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;">
                                            </td>
                                            <td>{{ $item->designation }}</td>
                                            <td>
                                                @foreach ($item->socialmedia as $media)
                                                    <a href="{{ $media->url }}" target="_blank"><i
                                                            class="{{ $media->icon }}"
                                                            style="color: #000000; padding:2px;"></i></a>
                                                @endforeach
                                            </td>


                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge badge-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-pill bg-danger">InActive</span>
                                                @endif


                                            </td>
                                            <td>
                                                <a href="{{ route('team-edit', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                                <a href="{{ route('team-delete', $item->id) }}"
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete">Delete</a>
                                                @if ($item->status == 1)
                                                    <a href="{{ route('team-inactive', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Inactive"><i class="fa-solid fa-thumbs-down"></i> </a>
                                                @else
                                                    <a href="{{ route('team-active', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Active"><i class="fa-solid fa-thumbs-up"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
