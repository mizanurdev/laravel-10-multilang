@extends('backend.admin.master')
@section('title')
    Edit Team | Admin Dashboard
@endsection

@section('content')
    <form action="{{ route('teams.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-title">Edit Team Form</div>
                        <a href="#" class="btn btn-warning btn-round" onclick="history.back()">Go Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="offer_text">Offer Text</label>
                                    <input type="text" class="form-control" id="offer_text" name="offer_text"
                                        value="{{ old('offer_text', $banner->offer_text) }}" />
                                    @error('offer_text')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title', $banner->title) }}" />
                                    @error('title')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" class="form-control" id="sub_title" name="sub_title"
                                        value="{{ old('sub_title', $banner->sub_title) }}" />
                                    @error('sub_title')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ old('price', $banner->price) }}" />
                                    @error('price')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    @if ($banner->image)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="Current Image"
                                                width="150">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control" id="image" name="image" />
                                    @error('image')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection