@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Product</h3></div>
                    <div class="card-body">
                        <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$products->id}}">
                            <div class="form-floating mb-3">

                                <input class="form-control" id="productName" type="text" name="product_name"  value="{{$products->product_name}}" />
                                <label for="productName">Product Name</label>
                            </div>
                            <div class="form-floating mb-3 pt-3">

                                    <label for="categoryName">category_name</label>
                                    <select name="category_name" required class="form-control" id="categoryName">
                                        <option value="">select category name</option>
                                        <option value="TV"{{$products->category_name=='TV'? 'selected':''}}>Led Tv  </option>
                                        <option value="PHONE" {{$products->category_name=='PHONE'? 'selected':''}}>Mobile Phone</option>
                                        <option value="TOY"{{$products->category_name=='TOY'? 'selected':''}}>Toy</option>

                                    </select>

                            </div>
                            <div class="form-floating mb-3">

                                <input class="form-control" id="brandName" type="text" name="brand_name" value="{{$products->brand_name}}" />
                                <label for="brandName">brand Name</label>
                            </div>
                            <div class="form-floating mb-3">

                                <input class="form-control" id="imageName" name="image" type="file">
                                <img src="{{asset($products->image)}}" width="100" class="img-fluid" />
                                <label for="imageName">Image</label>

                            </div>
                            <div class="form-floating mb-3">

                                <textarea id="Description" name="description" class="form-control">{{$products->description}}</textarea>
                                <label for="Description">description</label>
                            </div>

                            <div class="form-floating mb-3">

                                <input class="form-control" id="Price" type="text" name="price" value="{{$products->price}}" />
                                <label for="Price">Price</label>
                            </div>

                            <div>

                                <input class="btn btn-primary" type="submit" name="submit" value="update"/>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
