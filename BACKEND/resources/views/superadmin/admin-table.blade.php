@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Update User Status Using Toggle Button Example - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Manage Accounts</h1>
        <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr> 
            </thead>
               
            <tbody>
               @foreach($users as $user)
               @if ($user->role==0)
                  <tr>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user->status }}</td>
                     <td>
                       
                     @if ( $user->status!='verified')  
                     
                        <form action='/superadmin/admin-table'  method="POST">
                            @csrf
                            <div class="input-group" >
                                <input type="hidden" class="form-control" value={{ $user->id }} name="id">
                                <input type="hidden" class="form-control" value='verified' name="status">
                                </div>
                                <button type="submit"  class="btn btn-success">
                                    <span>Activate</span>
                                </button>
                            </div>
                        </form>
                        @else
                        <form action='/superadmin/admin-table/'{{$user->id}}   method="POST">
                            @csrf
                            <div class="input-group" >
                        
                                <input type="hidden" class="form-control" value={{ $user->id }} name="id">
                                <input type="hidden" class="form-control" value='disabled' name="status">
                                </div>
                                <button type="submit"  class="btn btn-danger">
                                    <span>disable</span>
                                </button>
                            </div>
                        </form>
                     @endif
                     </td>
                     @endif
                  </tr>
               @endforeach
            </tbody>
          
        </table>
    </div>
</body>

</html>
@endsection