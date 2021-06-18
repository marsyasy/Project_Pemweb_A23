<!-- Katalog -->
<div class="container">
        <h1>Katalog Sayur</h2>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga Per Kilo</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Beli</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1;?>
                <?php foreach($data['sayur'] as $sayur) :?>
                  <tr>
                    <th scope="row"><?php echo $i?></th>
                    <td><?= $sayur['nama'];?></td>
                    <td><?= $sayur['harga'];?></td>
                    <td><?= $sayur['stok'];?></td>
                    <td><a href="https://wa.me/085256876546" class="btn btn-success" onclick="return confirm('Apakah anda ingin membeli produk ini?')">Beli</button></td>
                    <?php $i++?>
                  </tr>
                </tbody>
                <?php endforeach;?>
                </tbody>
              </table>
              
              

    </div>


    <!-- END Katalog -->