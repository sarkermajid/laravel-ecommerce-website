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

        .select2-selection{
            background: rgba(52, 82, 225,0.2) !important;
            border: inherit !important;
        }
        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable{
            background: #3452E1 !important;
        }

    </style>
@endpush

@section('body')
    <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Create New Product</h4>
                        </div>
                    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            @error('name')
                            <h6 class="modal-header justify-content-start"
                            style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                            {{ $message }}</h6>
                            @enderror
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Categories</label>
                                    @error('category_id')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <select name="category_id" class="@error('category_id')is-invalid @enderror select2 form-control ">
                                        <option value="">-Select-</option>
                                        @foreach ($categories as $category)
                                            <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Brands</label>
                                    @error('brand_id')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <select name="brand_id"
                                        class="select2 form-control @error('brand_id') is-invalid @enderror">
                                        <option value="">-Select-</option>
                                        @foreach ($brands as $brand)
                                            <option @if(old('brand_id') == $brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            @error('short_description')
                            <h6 class="modal-header justify-content-start"
                            style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                            {{ $message }}</h6>
                            @enderror
                            <textarea name="short_description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            @error('description')
                            <h6 class="modal-header justify-content-start"
                            style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                            {{ $message }}</h6>
                            @enderror
                            <textarea name="description" id="summernote" class="form-control"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="qty" class="form-label">Product Quantity</label>
                                    @error('qty')
                                    <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                                    @enderror
                                    <input type="number" name="qty"
                                        class="form-control @error('qty') is-invalid @enderror" id="stock"
                                        aria-describedby="emailHelp" placeholder="Quantity" value="{{ old('qty') }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="price" class="form-label" >Price</label>
                                    @error('price')
                                    <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                                    @enderror
                                    <input type="number" step="any" name="price"
                                        class="form-control @error('price') is-invalid @enderror" id="price"
                                        aria-describedby="emailHelp" placeholder="Price" value="{{ old('price') }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="currency" class="form-label" >Currency</label>
                                    @error('currency')
                                    <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                                    @enderror
                                    <input type="text" step="any" name="currency"
                                        class="form-control @error('currency') is-invalid @enderror" id="currency"
                                        aria-describedby="emailHelp" placeholder="Currency" value="{{ old('currency') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="weight" class="form-label" >Weight</label>
                                    @error('weight')
                                    <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                                    @enderror
                                    <input type="text" step="any" name="weight"
                                        class="form-control @error('weight') is-invalid @enderror" id="weight"
                                        aria-describedby="emailHelp" placeholder="Weight" value="{{ old('weight') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="discount_amount" class="form-label">Discount Price</label>
                                    @error('discount_amount')
                                    <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                                    @enderror
                                    <input type="number" step="any" name="discount_amount"
                                        class="form-control @error('discount_amount') is-invalid @enderror" id="discount_amount"
                                        aria-describedby="emailHelp" placeholder="Discount Price"
                                        value="{{ old('discount_amount') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
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
                            <label for="Active" class="form-label"><input type="radio" name="status" value="1" id="Active" checked class="label radio">Active
                            </label>
                            &nbsp;
                            &nbsp;
                            <label for="Deactive" class="form-label"><input type="radio" name="status" value="0" id="Deactive" class="label radio">Deactive
                            </label>
                        </div>

                        <div>
                            <input type="submit" class="btn btn-primary" value="Create">
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

    // select2
     $('.select2').select2();
     $('[data-toggle="popover"]').popover();
</script>
@endpush
