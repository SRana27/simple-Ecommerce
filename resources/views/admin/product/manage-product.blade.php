@extends('admin.master')
@section('content')

    <div class="container-fluid px-4">
      <div class="card mb-4">
         <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Manage Product
          </div>
         <div class="card-body table-responsive">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Brand Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $i=1 @endphp
                @foreach($products as $product)
                 <tr>
                    <td>{{$i++}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->category_name}}</td>
                    <td>{{$product->brand_name}}</td>
                    <td>
                        <img src="{{asset($product->image)}}" width="100" height="100" class="img-fluid">
                    </td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->status==1?'publishes':'unpublished'}}</td>
                    <td class="d-flex">
                        <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-primary mx-2">Edit</a>
                        @if($product->status==1)
                            <a href="{{route('status.product',['id'=>$product->id])}}" class="btn btn-warning ">unpublished</a>
                            @else
                            <a href="{{route('status.product',['id'=>$product->id])}}" class="btn btn-success mx-2">published</a>
                        @endif
                         <form action="{{route('delete.product')}}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button class="btn btn-danger pt-2"  onclick="return confirm('are you sure for delete')">Delete</button>
                         </form>
                    </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
         </div>
      </div>
    </div>
@endsection
