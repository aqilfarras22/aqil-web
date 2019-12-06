<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengalaman</title>
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-5.11.2-web/css/all.min.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" >Experience</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h1 class="text-center">Daftar Experience</h1>
    <a href="{{url('admin/tambah')}}" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>Pengalaman</th>
                <th>Waktu</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($data as $dt)
            <tr>
                <td>{{ ucwords($dt->experience) }}</td>
                <td>{{{$dt->from}}} - {{$dt->to}})</td>
                <td>
                    <a href="{{url('/admin/exp/'.$dt->id.'/edit')}}"class="btn btn-warning">Ubah</a> 
                    <form action="{{url('/admin/exp/'.$dt->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button type="submit"class="btn btn-danger delete" onClick="">Delete</button>               
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script>    
</script>
</body>
</html>