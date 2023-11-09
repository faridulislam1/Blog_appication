@extends('admin.master')

@section('content')
  <div class="row">
    <div class="col-lg-8">
        <div class="card">
        <div class="card-header">
           <h3>Role List</h3>

            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Role Name</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    @foreach($roles as $role)

                    <tr>
                        <td>{{$role->name}}</td>
                        <td>
                            @foreach ($role->getPermissionNames() as $permission)
                            <span class="btn btn-primary my-1">{{ $permission }}</span>
                            @endforeach
                          </td>
                          <td class="btn-group">
                                        <a href="{{ route('role.edit',['id'=>$role->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        <form action="{{ route('role.delete') }}" method="post" >
                                            @csrf
                                            <input type="hidden" value="{{ $role->id }}" name="id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('do you want to delete this')">Delete</button>
                                        </form>
                                    </td>
                    </tr>
                    @endforeach


                </table>
            </div>
             
        </div>
    </div>
    <div class="col-lg-3">
    <!-- <div class="card">
    <div class="card-header">
        <h3>Add Permission</h3>
</div>
<div class="card-body">
    <form action="{{route('permission.store')}}" method=""POST>
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Add New Permission</label>
            <input type="text" name="permission_name" class="form-control">
        </div>
        <div class="mb-3">
            <Button type="submit" class="btn btn-primary">Add Permission</Button>
            </div>
         </form>
       </div>
     </div>
    </div> -->

    <div class="card">
    <div class="card-header">
        <h3>Add Role</h3>
</div>
<div class="card-body">
    <form action="{{route('add.role')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Role Name</label>
            <input type="text" name="role_name" class="form-control">
        </div> 
        <div class="mb-3">
            <h4>Select permission</h4>

            <div class="form-group">
                @foreach($permissions as $permission)
                <div class="form-check form-check-inline">
            <label class="form-check-label"> 
            <input type="checkbox" name="permission[]"class="form-check-input" value="{{$permission->id}}">{{ $permission->name}}

            </label>
        </div>
        @endforeach
        
        </div>
        </div>
        
        <div class="mb-3">
            <Button type="submit" class="btn btn-primary">Add Role</Button>
            </div>
         </form>
       </div>
     </div>
    </div>
</div>

@endsection