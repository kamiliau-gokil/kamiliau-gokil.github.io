<h1 class="mt-4">Tambah Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    if(isset($_POST['submit'])) {
                        $kategori = $_POST['kategori'];
                        $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) values('$kategori')");

                        if($query) {
                            echo '<script>Swal.fire({title: "Successfully", text: "Kategori Berhasil Ditambahkan!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=kategori";}, 500);});</script>';
                        }else{
                            echo '<script>Swal.fire({title: "Ops...", text: "Kategori Gagal ditambahkan!", icon: "error"});</script>';
                        }
                    }
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Nama kategori</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="kategori"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Buat</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
