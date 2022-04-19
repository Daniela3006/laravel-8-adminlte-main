@extends('layouts.main')
@section('content')

<div>
    <div>

        <a href="{{route('create.main')}}" class="btn btn-primary mb-3">Add new product</a>
    </div>
    @foreach($products as $product)




    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}} </td>
                <td>
                    <div>
                        <a href="{{route('product.edit',$product ->id)}}" class="btn btn-primary mb-3">Edit</a>
                    </div>
                </td>
                <td>
                    <div>
                        <form action="{{route('product.delete',$product ->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-primary mb-3" type="submit" value="Delete">
                        </form>

                    </div>
                </td>

            </tr>
            <tr>



            </tr>
            <tr>



            </tr>
        </tbody>
    </table>

    @endforeach
</div>


@endsection
