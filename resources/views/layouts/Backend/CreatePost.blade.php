@extends("layouts.app")
@section('content')
<div class="container">
    <div class="card mx-auto col-lg-6">
        <div class="card-header">
            Create New Post
        </div>
        <div class="card-body">
            <form action="{{route('blog.storepost')}}" method="POST">
                @csrf
                <input type="text" class="form-control my-2" placeholder="Enter a title" name="title">
                <span class="text-danger">
                    @error('title')
                        {{$message}}
                    @enderror
                </span>
                <textarea name="details" id="" cols="30" rows="4" placeholder="Enter some description" class="form-control my-2"></textarea>
                <span class="text-danger">
                    @error('details')
                        {{$message}}
                    @enderror
                </span>
                <input type="submit" value="Submit Your Blog" class="btn btn-primary w-100 my-2">
            </form>
        </div>
    </div>
</div>
@endsection
