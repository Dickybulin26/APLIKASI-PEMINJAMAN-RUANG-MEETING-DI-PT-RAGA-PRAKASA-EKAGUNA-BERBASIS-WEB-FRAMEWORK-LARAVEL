<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            width: 100%
        }
        #jabatan {
            float: right;
        }
  </style>
</head>
<body>
<div class="center">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
          <div id="usernameHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
          <div id="passwordHelp" class="text-muted">Password must be at least 8 characters long.</div>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" aria-describedby="confirmPasswordHelp">
          <div id="confirmPasswordHelp" class="text-muted">Passwords must match.</div>
        </div>
        <label for="jabatan">Jabatan : </label>
        <select name="jabatan" id="jabatan">
          <option value="it">IT</option>
          <option value="projectmanager">Project Manager</option>
          <option value="hrd">HRD</option>
          <option value="accounting">Accounting</option>
        </select>
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>