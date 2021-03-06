
@extends('layouts.view_humans')

@section('header') Citizen Record @endsection()
@section('title','Records')

<body>
    @section('table')
        <table>
            <tr>    
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th colspan='2'>Action</th>
            </tr>
            @foreach ($humans as $human)
            <tr>
                <td>{{ $human->first_name}}</td>
                <td>{{ $human->middle_name }}</td>
                <td>{{ $human->last_name }}</td>
                <td>{{ $human->email }}</td>
                <td>{{ $human->age }}</td>
                <td>
                    @if($human->gender == 1)
                        male
                    @else
                        female
                    @endif
                </td>
                <td>{{ $human->address }}</td>
                <td>
                    <form action="{{ url('delete-humans', $human->id)}}">
                        <input role="button" type="submit" name="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="{{ url('edit', $human->id)}}">
                        <input role="button" type="submit" name="submit" value="Edit">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endsection
    
</body>