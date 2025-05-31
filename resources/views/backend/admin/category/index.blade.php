@extends('backend.admin.master')

@section('content')
    <div class="page-content">

        @include('backend.section.breadcrumb')

        <h6 class="mb-0 text-uppercase">All Categories</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <tbody>
                            <tr>
                                <th>NO</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
