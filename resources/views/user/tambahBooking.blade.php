<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Booking Ruangan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            /* Warna latar belakang lembut */
        }

        .booking-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
            /* Center the form horizontally */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0069d9;
        }

        /* Gaya khusus untuk textarea alasan */
        .reason-textarea {
            height: 100px;
            /* Atur tinggi sesuai kebutuhan */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="booking-form">
            <h2>Formulir Pemesanan Ruangan</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nama Pemesan:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="date">Tanggal:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Waktu Mulai:</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                </div>
                <div class="form-group">
                    <label for="end_time">Waktu Selesai:</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                </div>
                <div class="form-group">
                    <label for="room">Ruangan:</label>
                    <select class="form-control" id="room" name="room" required>
                        <option value="A101">A101</option>
                        <option value="B202">B202</option>
                    </select>
                </div>
                <div class="purpose-container">
                    <label for="purpose">Tujuan Penggunaan Ruangan:</label>
                    <textarea id="purpose" name="purpose" rows="5" cols="30"
                        placeholder="Jelaskan tujuan penggunaan ruangan..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
