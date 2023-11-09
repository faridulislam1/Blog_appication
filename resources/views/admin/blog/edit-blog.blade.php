@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Form</h6>
                        {{ session('message') }}
                        <hr/>
                        <form action="{{ route('update.blog') }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blog->id }}">

                            <div class="col-12">
                                <label class="form-label">Category Name</label>

                                <input type="text" name="category_name" value="{{ $blog->category_name }}" class="form-control">
                                    
                               
                            </div>

                            <div class="col-12">
                                <label class="form-label">Author Name</label>

                               
                                <input type="text" name="author_name" value="{{ $blog->author_name }}"class="form-control">
                                    
                               
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Title</label>
                                <input type="text" name="blog_title" value="{{ $blog->blog_title }}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" value="{{ $blog->slug }}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <input name="description" value="{{ $blog->description }}" class="form-control"></input>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" name="date"value="{{ $blog->date }}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image"  class="form-control">
                                <img src="{{ asset($blog->image) }}" class="img-fluid" alt="">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
