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
                <h4 class="mb-0 font-size-18">General Settings</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('generalSettings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Frontend Header Logo</label>
                                    <div class="mb-3">
                                        <td class="text-dark "><img src="{{ asset('admin/site-logo/'. generalSettings('header_logo')) }} "style="border-radius: 10px;" alt="" width="100" height="100"/></td>
                                    </div>
                                    <div class="card w-100 border shadow">
                                        <div class="card-header d-flex justify-content-start">
                                            <input type="file" name="header_logo" value="" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Frontend Footer Logo</label>
                                    <div class="mb-3">
                                        <td class="text-dark "><img src="{{ asset('admin/site-logo/'. generalSettings('footer_logo')) }} "style="border-radius: 10px;" alt="" width="100" height="100"/></td>
                                    </div>
                                    <div class="card w-100 border shadow">
                                        <div class="card-header d-flex justify-content-start">
                                            <input type="file" name="footer_logo" value="" id="footer_logo" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="header_message">Frontend Header Message</label>
                            <input type="text" value="{{ old('header_message') ?? generalSettings('header_message') }}" name="header_message" class="form-control" id="header_message">
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="shop_address">Shop Address</label>
                                    <input type="text" value="{{ old('shop_address') ?? generalSettings('shop_address') }}" name="shop_address" class="form-control" id="shop_address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="shop_phone">Shop Phone</label>
                                    <input type="text" value="{{ old('shop_phone') ?? generalSettings('shop_phone') }}" name="shop_phone" class="form-control" id="shop_phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="shop_email">Shop Email</label>
                                    <input type="text" value="{{ old('shop_email') ?? generalSettings('shop_email') }}" name="shop_email" class="form-control" id="shop_email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="currency">Currency</label>
                                    <input type="text" value="{{ old('currency') ?? generalSettings('currency') }}" name="currency" class="form-control" id="currency">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="open_time">Open - Colse Time</label>
                                    <input type="text" value="{{ old('open_time') ?? generalSettings('open_time') }}" name="open_time" class="form-control" id="open_time">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="facebook_link">Facebook</label>
                                    <input type="text" value="{{ old('facebook_link') ?? generalSettings('facebook_link') }}" name="facebook_link" placeholder="#" class="form-control" id="facebook_link">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="instagram_link">Instagram</label>
                                    <input type="text" value="{{ old('instagram_link') ?? generalSettings('instagram_link') }}" name="instagram_link" placeholder="#" class="form-control" id="instagram_link">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="twitter_link">Twitter</label>
                                    <input type="text" value="{{ old('twitter_link') ?? generalSettings('twitter_link') }}" name="twitter_link" placeholder="#" class="form-control" id="twitter_link">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="linkedin_link">Linkedin</label>
                                    <input type="text" value="{{ old('linkedin_link') ?? generalSettings('linkedin_link') }}" name="linkedin_link" placeholder="#" class="form-control" id="linkedin_link">
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
    // image upload js code
    function showImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img = document.getElementById('header_logo');
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

