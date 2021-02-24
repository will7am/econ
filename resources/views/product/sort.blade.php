@extends('layouts.app')

@section('content')
    <div class="container">

        <div class='d-flex'>
            <a href='/product/create'><button class='btn btn-primary'>Register New Product</button></a><br><br>
            <form class='form-inline ml-auto mb-3' action='/product/sort' method='get'>
                <div class='form-group'>
                    <label for='search'></label>
                    <select class='form-control' id='sort' name='sort'>
                        <option  class='form-control' value='product_name'>Sort by name</option>
                        <option  class='form-control' value='price'>Sort by price</option>
                        <option  class='form-control' value='category'>Sort by Category</option>
                    </select>
                </div>&nbsp;
                <button type='submit' class="btn btn-primary">Sort</button>
            </form>
        </div><table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Product Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>

            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->product_name}}</td>
                    <td>AU${{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td><img src="{{$product->image}}" alt="Product image" width="150" height="100"></td>
                    <td>{{$product->category}}</td>
                    <td><a href='/product/{{$product->id}}'><button class="btn btn-primary">Details</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class='row '>
            <div class='col-12 d-flex justify-content-center'>
                {{$products->links() }}
            </div>
        </div>
    </div>
@endsection
