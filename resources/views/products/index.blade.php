@extends('layouts.app')

@section('title', 'Products Home')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12 text-end mb-5">
            <a href="{{ route('products.create') }}" class="btn btn-success">Add Photo</a>
        </div>
        <div class="col-lg-10 offset-lg-1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $product->name }}</td>
                        <td>
                            @foreach($product->image as $img)
                            <img src="{{ asset('image/'.$img) }}" alt="{{ $img }}" width="150px">
                            @endforeach
                        </td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                <a href="{{ route('products.show',$product->id) }}"
                                    class="btn btn-primary">Show</a>
                                <a href="{{ route('products.edit',$product->id) }}"
                                    class="btn btn-success">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
