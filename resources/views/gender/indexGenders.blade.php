@extends('gender.layout')

@section('content')
<main role="main" class="container">
    <h1 class="text-center mt-5">Laravel Tutorial - Week 4</h1>
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <a class="btn btn-success" href="{{ route('gender.create') }}"> Create New Data</a>
    </div>
    </div>
        <!-- Begin page content -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genderLists as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        
    </div>
</main>
@endsection