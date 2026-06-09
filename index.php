<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Buku Tamu Digital Sekolah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    background:linear-gradient(
        135deg,
        #2563eb,
        #7c3aed
    );
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
    font-family:'Segoe UI',sans-serif;
}

.glass-card{
    width:100%;
    max-width:750px;

    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);

    border:1px solid rgba(255,255,255,0.2);

    border-radius:25px;

    padding:40px;

    box-shadow:
    0 8px 32px rgba(0,0,0,0.25);

    color:white;
}

.logo{
    font-size:70px;
    margin-bottom:10px;
}

.title{
    font-weight:700;
}

.subtitle{
    color:rgba(255,255,255,0.8);
}

.badge-custom{
    background:white;
    color:#2563eb;
    font-size:14px;
    padding:8px 15px;
    border-radius:50px;
}

.form-control{
    border:none;
    border-radius:15px;
    padding:14px;
}

.form-control:focus{
    box-shadow:0 0 15px rgba(255,255,255,0.3);
}

.btn-custom{
    background:white;
    color:#2563eb;
    border:none;
    border-radius:15px;
    padding:12px;
    font-weight:bold;
    transition:.3s;
}

.btn-custom:hover{
    transform:translateY(-3px);
}

.btn-secondary-custom{
    background:rgba(255,255,255,0.2);
    color:white;
    border:none;
    border-radius:15px;
    padding:12px;
}

.btn-secondary-custom:hover{
    background:rgba(255,255,255,0.3);
    color:white;
}

#jam{
    font-size:22px;
    font-weight:bold;
    margin-top:10px;
}

.footer{
    margin-top:25px;
    text-align:center;
    color:rgba(255,255,255,0.7);
    font-size:13px;
}

</style>

</head>
<body>

<div class="glass-card">

    <div class="text-center mb-4">

        <div class="logo">
            <i class="bi bi-journal-bookmark-fill"></i>
        </div>

        <h1 class="title">
            Buku Tamu Digital
        </h1>

        <p class="subtitle">
            Sistem Pencatatan Tamu Sekolah Modern
        </p>

        <span class="badge-custom">
            Developed by Krisna Naufal Azhar Suhendar
        </span>

        <div id="jam"></div>

    </div>

    <form action="simpan.php" method="POST">

        <div class="mb-3">

            <label class="mb-2">
                <i class="bi bi-person-fill"></i>
                Nama Lengkap
            </label>

            <input
                type="text"
                name="nama"
                class="form-control"
                placeholder="Masukkan nama lengkap"
                required>

        </div>

        <div class="mb-3">

            <label class="mb-2">
                <i class="bi bi-building"></i>
                Instansi
            </label>

            <input
                type="text"
                name="instansi"
                class="form-control"
                placeholder="Masukkan nama instansi"
                required>

        </div>

        <div class="mb-4">

            <label class="mb-2">
                <i class="bi bi-flag-fill"></i>
                Tujuan Kedatangan
            </label>

            <textarea
                name="tujuan"
                class="form-control"
                rows="4"
                placeholder="Tuliskan tujuan kedatangan"
                required></textarea>

        </div>

        <div class="d-grid gap-2">

            <button type="submit" class="btn btn-custom">

                <i class="bi bi-check-circle-fill"></i>

                Simpan Data

            </button>

            <a href="daftar.php"
               class="btn btn-secondary-custom">

               <i class="bi bi-table"></i>

               Lihat Daftar Tamu

            </a>

        </div>

    </form>

    <div class="footer">
        © 2026 Buku Tamu Digital Universitas
    </div>

</div>

<script>

function updateJam(){

    const sekarang = new Date();

    document.getElementById("jam").innerHTML =
    sekarang.toLocaleTimeString('id-ID');

}

setInterval(updateJam,1000);

updateJam();

</script>

</body>
</html>