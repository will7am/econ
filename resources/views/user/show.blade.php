@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="card">

            <div class='card-body'>
                <h5 class='card-title'> Full Name:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->name}}</h6><br>
                <h5 class='card-title'> Company:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->company_name}}</h6><br>
                <h5 class='card-title'> Country:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->country}}</h6><br>
                <h5 class='card-title'> Region:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->region}}</h6><br>
                <h5 class='card-title'> Company Address:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->company_address}}</h6><br>

                <!-- list order, when no record, does not show anything -->
{{--                @php--}}
{{--                    $orders = $user->$user_orders;--}}
{{--                @endphp--}}

{{--                @if(!empty($orders)&&(sizeof($orders) !== 0))--}}
{{--                    <h5 class='card-title '> Service History:</h5>--}}
{{--                    <div class='container p-3 border border-grey rounded'>--}}
{{--                        @foreach($orders as $order)--}}

{{--                            <div class='row'>--}}
{{--                                <div class='col-md-3'>--}}
{{--                                    <h5 class='card-title'> Skin Status:</h5>--}}
{{--                                    <h6 class='card-subtitle mb-2 text-muted'>--}}
{{--                                        {{$order->order_id}}</h6><br>--}}

{{--                                </div>--}}
{{--                                <div class='col-md-3'>--}}
{{--                                    <h5 class='card-title'> Treatment Date:</h5>--}}
{{--                                    <h6 class='card-subtitle mb-2 text-muted'>--}}
{{--                                        {{date_format($order->created_at,'Y-m-d')}}</h6>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div><br>--}}

{{--                @endif--}}


                <a href="{{url()->previous()}}" class='card-link'>Go Back</a>


            </div>
        </div>
    </div>
@endsection
