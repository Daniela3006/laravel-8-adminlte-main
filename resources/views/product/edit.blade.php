@extends('layouts.main')
@section('content')

<div>
    <form action="{{route('product.update',$product->id)}}" method="POST">
        @method('patch')
            @csrf
        <div class="mb-3">
            <label for="title"  class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title: " value="{{$product->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input class="form-control" name="description" value='{{$product->description}}' id="description" placeholder="Describe:" rows="3" ></input>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text"value='{{$product->price}}' name="price" class="form-control" id="price" placeholder="Price:" >
        </div>
        <button type="submit" class="btn btn-primary"> Update</button>
    </form>
</div>
@endsection
