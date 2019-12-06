<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free-5.11.2-web/css/all.min.css')}}">
    <title>Menginput Data</title>
</head>
<body>
    <div class="container">
        <form action="{{url('/admin/exp/'.$data->id)}}" method="post"style="margin-top:70px;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group row">
                <label for=""class="col-sm-2 col-form-label">Pernah Bekerja</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control"name="experience"  value="{{$data->experience}}">
                </div>
            </div>
            <div class="form-group row">
                <label for=""class="col-sm-2 col-form-label">Dimulai</label>
                <div class="col-sm-10">
                    <input type="date" name="from" class="form-control" value="{{$data->from}}">
                </div>
            </div>
            <div class="form-group row">
                <label for=""class="col-sm-2 col-form-label">Berakhir</label>
                <div class="col-sm-10">
                    <input type="date" name="to" class="form-control"value="{{$data->to}}"  >
                </div>
            </div>
            @csrf
            {{ method_field('PUT') }}
            <button class="btn btn-success" type="submit">Ubah</button>
        </form>
    </div>
    
</body>
</html>