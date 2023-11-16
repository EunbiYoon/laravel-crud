@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Trashed Posts</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success" href="{{route('posts.create')}}">Create</a>
                        <a class="btn btn-warning" href="">Trashed</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width:10%">Image</th>
                            <th scope="col" style="width:20%">Title</th>
                            <th scope="col" style="width:30%">Description</th>
                            <th scope="col" style="width:10%">Category</th>
                            <th scope="col" style="width:10%">Publish Date</th>
                            <th scope="col" style="width:20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="https://picsum.photos/80" alt="">
                            </td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>consectetur, adipisicing elit. Soluta et delectus voluptas porro atque eum iusto commodi quos eligendi fugiat id dolor sequi esse, sapiente accusamus rem nemo non adipisci?</td>
                            <td>News</td>
                            <td>2-5-23</td>
                            <td>
                                <a class="btn-sm btn-success text-decoration-none" href="">Show</a>
                                <a class="btn-sm btn-primary text-decoration-none" href="">Edit</a>
                                <a class="btn-sm btn-danger text-decoration-none" href="">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection