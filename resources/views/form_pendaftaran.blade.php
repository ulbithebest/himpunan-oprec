<!-- resources/views/form_pendaftaran.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Open Recruitment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Formulir Pendaftaran</h2>
        
        <form action="{{ route('submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" required>
            </div>
            
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            
            <div class="mb-3">
                <label for="divisi" class="form-label">Pilih Divisi</label>
                <select name="divisi" id="divisi" class="form-control" required>
                    <option value="" disabled selected>Pilih Divisi</option>
                    <option value="Pengembangan">Pengembangan</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Humas">Humas</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="motivasi" class="form-label">Motivasi (Opsional)</label>
                <textarea name="motivasi" class="form-control" id="motivasi" rows="4"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Kirim Pendaftaran</button>
        </form>
    </div>
</body>
</html>
