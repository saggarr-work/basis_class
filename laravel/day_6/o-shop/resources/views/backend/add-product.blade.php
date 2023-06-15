@extends('backend.master')

@section('content')
    <section>
        <h1 class="text-center pt-3">Add Product</h1>
        <div class="container d-flex justify-content-center py-4">

            <form class="col-md-6" action="{{route('product.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="desc">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="desc">
                </div>
                <div class="mb-3">
                    <label class="form-label">color</label>
                    <input type="text" class="form-control" name="desc">
                </div>
                <div class="mb-3">
                    <label class="form-label">size</label>
                    <input type="text" class="form-control" name="desc">
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="desc">
                </div>
                <button class="btn btn-primary mt-5" type="submit" class="btn btn-primary">Add New Product</button>
            </form>

        </div>
    </section>
@endsection
