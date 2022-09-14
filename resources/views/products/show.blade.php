@extends('layouts.app')

@section('title', 'Products Show')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="mb-3">
            <input type="text" class="form-control" value="{{ $product->name }}" disabled>
        </div>
        @foreach($product->image as $img)
        <div class="row">
              <div class ="col-sm-3" style="width:50px;height:50px;">
         <img src="{{ asset('image/'.$img) }}" alt="{{ $img }}">
              </div>
</div>
                            @endforeach
    </div>
</div>

@endsection
