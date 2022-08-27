{{-- <x-app-layout title="Users">

</x-app-layout> --}}


@extends('layouts.main',['title'=>'Users'])

@section('container')
<div class="container">
    <a class="btn btn-primary" href="users/show">user</a>
    <x-card title='Users'>
        <table class="table table-info">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Twitter</th>
            </thead>
            <tbody>
            @if (count($users))
            @foreach ($users as $key => $user)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['twitter'] }}</td>
            </tr>
            @endforeach 
            @else
            <tr>
                <td colspan="4">
                    <div class='text-center'>
                        Data not found
                    </div>
                </td>
            </tr>
            @endif
            </tbody>
        </table>
    </x-card>
</div>

@endsection