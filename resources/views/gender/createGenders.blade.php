@extends('gender.layout')

@section('content')
<main role="main" class="container">
    <h1 class="text-center mt-5">Laravel Tutorial - Week 4</h1>
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <a class="btn btn-danger" href="{{ route('gender.index') }}"> Back</a>
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
    <form action="{{ route('gender.store') }}" method="post">
        @csrf
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">#</th>
                        <td><input class="form-control" type="text" name="name"></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
            </tbody>
        </table>
    </form>
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        
    </div>
</main>
@endsection