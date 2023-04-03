@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User</h3></div>
                    <div class="card-body">
                        <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="form-floating mb-3">

                                <input class="form-control" id="Name" type="text" name="name"  value="{{$user->name}}" />
                                <label for="Name"> Name</label>
                            </div>
                            <div class="form-floating mb-3">

                                <input class="form-control" id="email" type="text" name="email"  value="{{$user->email}}" readonly/>
                                <label for="email">email</label>
                            </div>
                            @if(Auth::User()->id==$user->id)
                            <div class="form-floating mb-3">

                                <input class="form-control" id="password" type="password" name="password"  placeholder="password" />
                                <label for="password">Password</label>
                            </div>
                              @endif

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
