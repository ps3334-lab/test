@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Userid</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                          <tr>
                            <td> {{ $user->id }}</td>
                            <td> {{ $user->name }}</td>
                            <td> {{ $user->email }}</td>
                            <td> {{ implode(', ', $user->role()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                           <a href="{{ route('admin.users.edit',$user->id) }}"  class="btn btn-primary">แก้ไข</a>
                           <a href="{{ route('admin.users.destroy',$user->id) }}"  class="btn btn-danger">ลบ</a>
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
