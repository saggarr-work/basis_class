@extends('backend.master')

@section('content')
    <section class="p-3 col-md-6 offset-3">
        <h1 class="text-center mb-3">Add Category</h1>
        <h3 class="text-center mb-3 text-success">{{Session::get('msg')}}</h3>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="give a category name">
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </section>
@endsection
