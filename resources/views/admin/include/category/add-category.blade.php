@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                    <div class="card-body">
                        <form action="{{route('new.category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">

                                <input class="form-control" id="categoryName" type="text" name="product_name" placeholder="name" />
                                <label for="categoryName">Category Name</label>
                            </div>

                            <div class="form-floating mb-3">

                                <input class="form-control" id="imageName" name="image" type="file" />
                                <label for="imageName">Image</label>

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
