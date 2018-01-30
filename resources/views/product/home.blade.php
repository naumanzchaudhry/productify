@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PRODUCTS

                    <a class="btn btn-success pull-right" type="button" href="{{ route('products.create') }}"> Add Product </a>
                    <br>
                </div>

                <div class="panel-body">
                   <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $product->title }}</td>
                          <td>{{ $product->description}} </td>
                          <td>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}">
                               {{ csrf_field() }}
                              <input name="_method" value="DELETE" type="hidden">
                              <button class="btn btn-danger" type="submit"> Delete </button>
                            </form>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary"> Details</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"> Edit </a>
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
