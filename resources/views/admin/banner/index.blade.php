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
                <h4 class="mb-0 font-size-18">Update Banner</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('banner.update', ['id'=>$banner->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            @error('title')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <input type="text" name="title" value="{{ $banner->title ?? '' }}" class="form-control" id="title">
                        </div>

                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            @error('short_description')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <textarea name="short_description" id="short_description" class="form-control" rows="3">{{ $banner->short_description ?? '' }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="mb-3  mt-3">
                                        <td class="text-dark "><img src="{{ asset('admin/banner-image/'.$banner->image) }} "style="border-radius: 10px;" alt="" width="300" height="300"/></td>
                                    </div>
                                    @error('image')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <input type="file" name="image" value="{{ $banner->image ?? ''}}" id="image"
                                    class="form-control">
                                </div>
                            </div>
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
<script type="text/javascript">

</script>
@endpush
