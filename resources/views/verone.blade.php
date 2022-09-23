<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Test</title>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}">
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top:40px">
                <h4>Search Everything</h4>
                <hr>
                <form action="verone" method="GET">
                    <div class="form-group">
                        <label for="">Enter Keyword</label>
                        <input type="text" name="query" class="form-control" placeholder="Search here...">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            Search
                        </button>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <hr>
                <br>
                @if(isset($users))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users)>0)
                                @foreach($users as $user)
                                <tr>
                                    <td class="row">{{$user->id}}</td>
                                    <td>{{$user->user_name}}</td>
                                    <td>{{$user->mail}}</td>
                                </tr>
                       @endforeach
                       @else
                       <tr><td>No result found</td></tr>
                       @endif
                            </tbody>
                        </table>
                        <div class="pagination-block">
                            {{$users->links('layouts.pagination');}}
                        </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>