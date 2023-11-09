@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Manage Table</h6>
                        {{ session('message') }}
                        <hr/>

                        <table class="table table-bordered table-striped table-hover text-center">
                            <tr>
                                <th>sl</th>
                                <th>Blog Title</th>
                                <th>slug</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>description</th>
                                <th>image</th>
                                <th>action</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->slug }}</td>
                                <td>{{ $blog->category->category_name }}</td>
{{--                                <td>{{ $blog->category['category_name'] }}</td> // evabe o likha jay  --}}
                                <td>{{ $blog->author->author_name }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>
                                    <img src="{{ asset($blog->image) }}" style="height: 50px; width: 50px" class="img-fluid" alt="img">
                                </td>
                                <td class="btn-group">
                                        <a href="{{ route('blog.edit',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        <form action="{{ route('blog.delete') }}" method="post" onclick="return confirm('Do you really want to delete this !!')">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $blog->id }}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </form>
                                    </td>
                               
                            </tr>
                            @endforeach


                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
