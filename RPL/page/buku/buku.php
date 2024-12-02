<a href="?page=buku&aksi=tambah">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query ("select * from tb_buku");

                                            while ($data = $sql->fetch_assoc()) {
                                                # code...
                                            
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data ['judul']; ?></td>
                                            <td><?php echo $data ['penulis']; ?></td>
                                            <td><?php echo $data ['penerbit']; ?></td>
                                            <td><?php echo $data ['tahun_terbit']; ?></td>
                                            <td>
                                                <a href="?page=buku&aksi=ubah&id=<?php echo $data['id']; ?>" class ="btn btn-info">Ubah</a>
                                                <a href="" class = "btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>            
</div>