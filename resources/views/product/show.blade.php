@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="card text-center">

            <div class='card-body'>
                <h5 class='card-title'> Product Name:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{ucfirst($product->product_name)}}</h6><br>
                <h5 class='card-title'> Category:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$product->category}}</h6><br>
                <h5 class='card-title'> Unit Price:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>AU ${{$product->price}}</h6><br>
                <h5 class='card-title'> Product Image:</h5>
                <div class='card-subtitle mb-2'><img src="{{$product->image}}" length="720" height="480"/><br><br>
                <button class="btn btn-primary" href="/cart/add">Add to cart</button></a><br><br></div>

                <a href="/product" class='card-link'>Go Back</a>


            </div>
        </div>
    </div>
@endsection
