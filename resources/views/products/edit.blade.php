@extends('layouts.app')

@section('title', 'Products Edit')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="catname" class="form-label">Photo Name</label>
                        <input type="text" class="form-control" id="catname" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo Image</label>
                        <input type="file" class="form-control" id="image" name="image[]" multiple>
                    </div>
                    <div class="mb-3">
                    @foreach($product->image as $img)
                            <img src="{{ asset('image/'.$img) }}" alt="{{ $img }}" width="150px">
                            @endforeach
                    </div>
                    <button type="submit" class="btn btn-success w-100">Update Photo</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
