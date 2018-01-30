@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product Details</div>

                <div class="panel-body">
                    Title : {{ $product->title }} <br>
                    Description  : {{ $product->description }} <br>
                    Price : {{$product->price}} <br>

                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

