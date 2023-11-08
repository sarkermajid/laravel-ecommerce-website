@extends('admin.master')


@push('styles')
    {{-- Image Upload CSS --}}
    <style>
        .image_container {
            height: 120px;
            width: 200px;
            border-radius: 6px;
            overflow: hidden;
            margin: 10px;
        }

        .image_container img {
            height: 100%;
            width: auto;
            object-fit: cover;
        }

        .image_container span {
            top: -6px;
            right: 8px;
            color: red;
            font-size: 28px;
            font-weight: normal;
            cursor: pointer;
        }

        .category-image {
            min-width: 200px;
            min-width: 100px;
            max-width: 400px;
            max-height: 280px;
        }

    </style>
@endpush

@section('body')
    <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Edit Blog Category</h4>
                        </div>
                    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blog.category.update', ['id'=>$blogCategory->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            @error('name')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <input type="text" name="name" value="{{ $blogCategory->name }}" class="form-control" id="name">
                        </div>


                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <label for="Active" class="form-label"><input type="radio" name="status"  id="Active" {{ $blogCategory->status == 1 ? 'checked' : '' }} class="label radio">Active
                            </label>
                            &nbsp;
                            &nbsp;
                            <label for="Deactive" class="form-label"><input type="radio" name="status" value="0" id="Deactive" {{ $blogCategory->status == 0 ? 'checked' : '' }} class="label radio">Deactive
                            </label>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
