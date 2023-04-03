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
                        <th> Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($users as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>

                           <td>
                               <a href="{{route('edit.user',['id'=>$user->id])}}" class="btn btn-primary mx-2">Edit</a>

                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
