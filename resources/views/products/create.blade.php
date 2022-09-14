@extends('layouts.app')

@section('title', 'Products Create')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Photo Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Photo Image</label>
                <input type="file" class="form-control" id="image" name="image[]" multiple>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
