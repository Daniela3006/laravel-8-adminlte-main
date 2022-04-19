@extends('layouts.main')
@section('content')

<div>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title"  class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title: ">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Describe:" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price:">
        </div>
        <button type="submit" class="btn btn-primary"> Create</button>
    </form>
</div>
@endsection
