<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <h3>Tambahkan Data Buku</h3>
                <form role="form" method ="post">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name = "judul"/>
                    </div>

                    <div class="form-group">
                        <label>Penulis</label>
                        <input class="form-control" name = "penulis"/>
                    </div>

                    <div class="form-group">
                        <label>Penerbit</label>
                        <input class="form-control" name = "penerbit"/>
                    </div>

                    <div class="form-group">
                        <label>Select Example</label>
                        <select class="form-control">
                            <?php 
                                $tahun = date("Y");

                                for ($i=$tahun-25; $i <= $tahun ; $i ++) {
                                    echo'

                                        <option value="'.$i.'">'.$i.'</option> ';
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name = "simpan" value = "Simpan" class = "btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    $judul = $_POST ['judul'];
    $penulis = $_POST ['penulis'];
    $penerbit = $_POST ['penerbit'];
    $tahun = $_POST ['tahun'];
    $simpan = $_POST ['simpan'];
    

    if ($simpan ) {
        $sql = $koneksi ->query("insert into tb_buku (judul, penulis, penerbit, tahun_terbit)value('$judul','$penulis', '$penerbit', '$tahun' )");

        if ($sql ) {
            ?>
                <script type = "text/javascript">

                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=buku";
                </script>
            
            <?php
        }
    }
    
?>