<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Siswa
            </button>
            <br><br>
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $mhs['id'];?>" class="badge bg-danger float-end ms-1" onclick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/siswa/ubah/<?= $mhs['id'];?>" class="badge bg-warning float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal">Edit</a>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $mhs['id'];?>" class="badge bg-primary float-end ms-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="tittleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="number" class="form-control" id="nis" name="nis">
            </div>
            
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="number" class="form-control" id="kelas" name="kelas">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Akomodasi Perhotelan">Akomodasi Perhotelan</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
            </div>
    </div>
  </div>
</div>