<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan Post Data</title>
</head>
<body>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Data</div>
                <div class="card-body">
                    <form action="{{ url('postdata') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>