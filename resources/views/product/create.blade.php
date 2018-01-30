@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('products.store') }}">
                        {{ csrf_field() }}

                        
                            <label for="email" class="col-md-4 control-label">Product Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            </div>
                        
                            <div></div><br>
                        
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="description" required>

                            </div>

                            <div></div><br>
                        
                             <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="price" required>

                            </div>
                        
                            <div></div><br>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    SAVE
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

