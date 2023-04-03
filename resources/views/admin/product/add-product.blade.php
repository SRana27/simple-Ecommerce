@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                    <div class="card-body">
                        <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">

                                <input class="form-control" id="productName" type="text" name="product_name" placeholder="name" />
                                <label for="productName">Product Name</label>
                            </div>
                            <div class="form-floating mb-3 pt-3">
                                <label for="categoryName">category_name</label>
                                <select name="category_name" required class="form-control" id="categoryName">
                                <option value="">select category name</option>
                                <option value="TV">Led Tv  </option>
                                <option value="PHONE">Mobile Phone</option>
                                <option value="TOY">Toy</option>

                                </select>
                            </div>
                            <div class="form-floating mb-3">

                                <input class="form-control" id="brandName" type="text" name="brand_name" placeholder="brand" />
                                <label for="brandName">brand Name</label>
                            </div>
                            <div class="form-floating mb-3">

                                <input class="form-control" id="imageName" name="image" type="file" />
                                <label for="imageName">Image</label>

                            </div>
                            <div class="form-floating mb-3">

                                <textarea id="Description" name="description" class="form-control"></textarea>
                                <label for="Description">description</label>
                            </div>

                            <div class="form-floating mb-3">

                                <input class="form-control" id="Price" type="text" name="price" placeholder="price" />
                                <label for="Price">Price</label>
                            </div>

                            <div>
                                <input class="btn btn-primary" type="submit" name="submit" value="submit"/>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
