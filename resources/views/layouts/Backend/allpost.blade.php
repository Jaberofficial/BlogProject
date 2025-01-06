@extends('layouts.app')
@section('content')
    <div class="conatiner col-md-8 mx-auto">
        <table class="table table-responsive">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Details</th>
                <th>Added By</th>
                <th>View Count</th>
                <th>Status</th>
                <th>Actions</th>

            </tr>

            @forelse ($posts as $key=>$post)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->details}}</td>
                <td>{{$post->added_by}}</td>
                <td>{{$post->view_count}}</td>
                <td><span class="bg-success badge text-white">{{$post->status == 1?"Active":"Deactive"}}</span></td>
                <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-warning">Status</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @empty
                No Records Found
            @endforelse
        </table>
    </div>
@endsection

