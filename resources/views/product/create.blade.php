@extends('layouts.app')

@section('content')

    <div class='container'>
        <h2>Register product details: </h2>

        <form action="/product" method='post'>
            @csrf

            <div class='form-row'>
                <div class='form-group col-md-6'>
                    <label for='pn'>Product Name</label>
                    <input type='text' class='form-control' id='pn' name='product_name' >
                </div>
            </div>
            <div class='form-row'>
            <div class='form-group col-md-6'>
                    <label for='ca'>Unit Price</label>
                    <input type='text' class='form-control' id='price' name='price' >
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-md-6'>
                    <label for='add'>Quantity</label>
                    <input  class='form-control' id='quantity' name='quantity'></input>
                </div>
            </div>
            <div class='form-row'>
                <div class='form-group col-md-6'>
                    <label for='price'>Image</label>
                    <input type='text' class='form-control' id='image' name='image' />
                </div>

            </div>
            <div class='form-row'>
                <div class='form-group col-md-6'>
                    <label for='price'>Category</label>
                    <select type='text' class='form-control' id='category' name='category'>
                        <option disabled selected value> -- select a category -- </option>
                        @for($i = 1; $i <= 10; $i++)
                            <option>{{$i}}</option>
                        @endfor
                    </select>
                </div>

            </div>
            <a href='/product/store'><button type="submit" class="btn btn-primary">Register</button> </a>
            <a href='/product'><button type="button" class="btn btn-primary">Go Back</button></a>

        </form><br>
        @if($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection
