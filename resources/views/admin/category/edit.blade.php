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
                            <h4 class="mb-0 font-size-18">Edit Category</h4>
                        </div>
                    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update', ['id'=>$category->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            @error('name')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            @error('slug')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <input type="text" name="slug" value="{{ $category->slug }}" class="form-control" id="slug">
                        </div>

                        <div class="form-group">
                            <label for="slug">Description</label>
                            @error('description')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <textarea name="description" id="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="mb-3">
                                        <td class="text-dark "><img src="{{ asset('admin/category-image/'.$category->image) }} "style="border-radius: 10px;" alt="" width="300" height=""/></td>
                                    </div>
                                    @error('image')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <div class="card w-100 border shadow">
                                        <div class="card-header d-flex justify-content-start">
                                            <input type="file" name="image" id="image" accept="image/*"
                                                   class="d-none " onchange="showImage(this)">
                                            <button class="btn btn-sm btn-primary" type="button"
                                                    onclick="document.getElementById('image').click()">Select
                                                Image</button>
                                        </div>
                                        <div
                                            onclick="document.getElementById('image').click()"
                                            class="card-body  d-flex flex-wrap mx-auto my-2 justify-content-center"
                                            id="image-container">
                                            <img style="width:200px" class="mx-auto" id="thumbnil" src="{{ asset('admin/assets/images/upload.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <label for="Active" class="form-label"><input type="radio" name="status"  id="Active" {{ $category->status == 1 ? 'checked' : '' }} class="label radio">Active
                            </label>
                            &nbsp;
                            &nbsp;
                            <label for="Deactive" class="form-label"><input type="radio" name="status" value="0" id="Deactive" {{ $category->status == 0 ? 'checked' : '' }} class="label radio">Deactive
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
<script type="text/javascript">
    // image upload js code
    function showImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img = document.getElementById('thumbnil');
            img.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }
</script>
@endpush
