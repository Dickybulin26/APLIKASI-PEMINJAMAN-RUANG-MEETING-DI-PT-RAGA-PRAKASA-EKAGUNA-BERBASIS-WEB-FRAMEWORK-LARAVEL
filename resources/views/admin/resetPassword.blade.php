<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganti Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
            width: 100%;
        }

        form .buttons {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Ganti Password</div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="oldPassword" class="form-label">Password Lama</label>
                                    <input type="password" class="form-control" id="oldPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="newPassword" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="newPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="confirmPassword">
                                </div>
                                <div class="buttons">
                                    <div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary" type='button'>Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>