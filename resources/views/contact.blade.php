<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - My Laravel App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <h1>Hubungi Kami</h1>
        <form action="#" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea id="pesan" name="pesan" class="form-control" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
        </form>
        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Kembali ke Home</a>
    </div>
</body>
</html>
