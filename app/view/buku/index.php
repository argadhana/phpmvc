<div class="container mt-5">
    <div class="col md-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah data buku
        </button>
        <h3>Daftar Buku</h3>
        <div class="row">
        <?php foreach($data['buku'] as $buku) : ?>
                <div class="col-md-2 col-sm-12 mb-3">
                    <div class="card-deck">
                        <div class="card">
                            <img src="<?= BASEURL?>/img/<?= $buku['gambar']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $buku['judul']?></h5>
                                <p class="card-text d-flex justify-content-between align-items-start"><a href="" class="badge bg-primary">update</a></p>
                                <p class="card-text d-flex justify-content-between align-items-start"><a href="" class="badge bg-danger">delete</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="<?= BASEURL; ?>/buku/tambah" method="POST" enctype="multipart/form-data">
       <div class="form-group">
            <label for="judul"> judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul buku">
       </div>
       <div class="form-group">
            <label for="pengarang"> pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan pengarang buku">
       </div>
       <div class="form-group">
            <label for="penerbit"> penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan penerbit buku">
       </div>
       <!-- <div class="mb-3">
        <label for="file" class="form-label">Gambar sampul buku</label>
        <input class="form-control" type="file" id="gambar" name="file">
        </div> -->
       
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>