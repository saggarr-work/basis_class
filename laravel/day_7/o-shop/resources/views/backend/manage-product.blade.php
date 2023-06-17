@extends('backend.master')

@section('content')
    <h1 class="my-3 text-center">Manage product</h1>
    <section class="p-3">
        <table class="table table-striped" border="">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $productsArr)
                    <tr>
                        <td>
                            {{-- @for ($i == 1; $i<=($productsArr->id); $i++ )
                                {{ $i }}
                            @endfor --}}
                        </td>
                        <td>{{$productsArr->title}}</td>
                        <td>{{$productsArr->desc}}</td>
                        <td>{{$productsArr->price}}</td>
                        <td>{{$productsArr->color}}</td>
                        <td>{{$productsArr->size}}</td>
                        <td>{{$productsArr->image}}</td>
                        <td>
                            <a class="btn btn-warning" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </section>
@endsection
