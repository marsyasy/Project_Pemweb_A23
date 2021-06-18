<!-- Katalog -->
<div class="container">
        <br>
        <h1 class="text-center">Katalog Sayur</h2>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormTambah">Tambah Data</button></td>
        <br><br>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga Per Kilo</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data['sayur'] as $sayur) :?>
                    <tr>
                      <td><?= $sayur['sayurID'];?></td>
                      <td><?= $sayur['nama'];?></td>
                      <td><?= $sayur['harga'];?></td>
                      <td><?= $sayur['stok'];?></td>
                      <td><button type="button" class="btn btn-primary tampilModalUbah" data-toggle="modal" data-target="#FormUbah" data-id="<?=$sayur['sayurID'];?>">Edit</button></td>
                      <td><a href='<?= BASEURL;?>/manage/hapus/<?=$sayur['sayurID']?>' class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button></td>
                    </tr>
                </tbody>
                <?php endforeach;?>
                    
              </table>
</div>

<!-- Modal -->
<div class="modal fade" id="FormUbah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="FormUbahTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <h1 class="text-center">Ubah Data</h1>  
          <div class="panel panel-default">
              <div class="panel-body">
              <form action="<?= BASEURL;?>/manage/ubah" method="POST" >
              <div class="form-group">
                  <label for="namaProduk">Nama Produk</label>
                  <input type="text" name="nama" id="nama" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="harga">Harga per Kilo</label>
                  <input type="harga" name="harga" id="harga" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="stok" name="stok" id="stok" class="form-control" required/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary simpanUbahData">Save</button>
              </div>
              </form>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="FormTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="FormTambahTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <h1 class="text-center">Tambah Data</h1>  
          <div class="panel panel-default">
              <div class="panel-body">
              <form action="<?= BASEURL;?>/manage/tambah" method="POST" >
              <div class="form-group">
                  <label for="namaProduk">Nama Produk</label>
                  <input type="text" name="nama" id="nama" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="harga">Harga per Kilo</label>
                  <input type="harga" name="harga" id="harga" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="stok" name="stok" id="stok" class="form-control" required/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
              </form>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
