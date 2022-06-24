@extends('layout.app')
@section('title','Users')
@section('content')
<div class="container">
    <div class="row py-5">
        <table class="table-light shadow-sm table">
            <a class="text-dark py-2" href="{{route('createusers')}}">Create New</a>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($users))
                @foreach ($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->age}}</td>
                    <td class="d-flex">
                        <a href="{{ route('editusers',[$user->id,$user->name,$user->email,$user->age])}}"
                            class="btn btn-sm btn-warning">Update</a>
                        <a href="{{route('deleteusers',['id'=>$user->id])}}" class="btn btn-sm btn-danger ms-2 delete">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <div class="modal modal-sm deleteModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.delete').on('click',function(){
        alert('Are you sure to delete this record');
    });
</script>
@endsection