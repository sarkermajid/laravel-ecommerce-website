@extends('frontend.master')

@section('body')
@section('body')
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center" style="background-color: #1C1C1C">
                        <h1 class="text-center profile-heading-btn text-center" style="background-color: #1C1C1C">Edit Profile</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', ['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" readonly value="{{ $user->email }}" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="email">Phone</label>
                                <input type="number" name="phone" value="{{ $user->phone }}" class="form-control" id="phone">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" value="{{ $user->image }}" class="form-control" id="image">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <input type="submit" class="site-btn" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
