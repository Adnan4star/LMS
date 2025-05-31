@extends('backend.admin.master')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcrumb')
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add Category</h5>
                        <form class="row g-3">

                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Category Name">
                            </div>
                            <div class="col-md-6">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    placeholder="Create Unique Slug">
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="photo">
                            </div>
                            <div class="col-md-6">
                                <img src="" id="photoPreview" width="60" height="60"
                                    style="margin-top:15px; display:none">
                            </div>

                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="button" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
        <!--end row-->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('customjs/admin/category.js') }}"></script>
@endpush
