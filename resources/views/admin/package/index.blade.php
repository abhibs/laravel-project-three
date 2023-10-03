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
                                <a href="{{ route('package-create') }}" class="btn btn-blue waves-effect waves-light">Add
                                    Package</a>
                            </ol>
                        </div>
                        <h4 class="page-title">Package All </h4>
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
                                        <th> Icon </th>
                                        <th> Amount </th>
                                        <th> Details </th>
                                        <th> Status </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($datas as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td>{{ $item->name }}</td>
                                            <td><i class="{{ $item->icon }}"></i></td>
                                            <td>{{ $item->amount }}</td>
                                            <td>
                                                <table class="table mb-0">

                                                    <thead>
                                                        <tr>
                                                            <th>Condition</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($item->detail as $data)
                                                            <tr>
                                                                <td>
                                                                    @if ($data->condition == 1)
                                                                        <span
                                                                            class="badge badge-pill bg-success">Checked</span>
                                                                    @else
                                                                        <span class="badge badge-pill bg-danger">Un
                                                                            Checked</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ $data->description }}</td>
                                                            </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </td>


                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge badge-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-pill bg-danger">InActive</span>
                                                @endif


                                            </td>
                                            <td>
                                                <a href="{{ route('package-edit', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                                <a href="{{ route('package-delete', $item->id) }}"
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete">Delete</a>
                                                @if ($item->status == 1)
                                                    <a href="{{ route('package-inactive', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Inactive"><i class="fa-solid fa-thumbs-down"></i> </a>
                                                @else
                                                    <a href="{{ route('package-active', $item->id) }}"
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
