
    @extends('layouts.main')
@section('content')

<div>

    <div>{{$product->id}}.{{$product->title}}  </div>
    <div>{{$product->description}}</div>
</div>
<div>
<a href="{{route('product.edit',$product ->id)}}" class="btn btn-primary mb-3">Edit</a>
</div>
<div>
    <form action="{{route('product.delete',$product ->id)}}" method="POST">
        @csrf
        @method('delete')
        <input class="btn btn-primary mb-3" type="submit" value="Delete">
    </form>

</div>
<div>
<a href="{{route('product.main')}}" class="btn btn-primary mb-3">Back</a>
</div>
@endsection

