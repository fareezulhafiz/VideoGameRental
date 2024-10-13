@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Customers</h1> <!-- Changed title -->

    <div class="card shadow-sm p-4 mb-4" style="border-radius: 10px; background-color:  rgba(0, 0, 0, 0.7);">
        <a href="{{ route('users.create') }}" class="btn btn-lg mb-4" style="background-color:rgb(0, 255, 34); color: black; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">Add User</a> <!-- Changed button color and width -->
        
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm" style="background-color:rgb(5, 130, 175); color: white;">View</a> <!-- Changed button color -->
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm" style="background-color: rgb(5, 130, 175); color: white;">Edit</a> <!-- Changed button color -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm" style="background-color: black; color: white;">Delete</button> <!-- Changed button color -->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
