<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Anggota
                        </div>
                        <a href="?page=anggota&aksi=update">Update</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No anggota</th>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>Telpon</th>
                                            <th>Alamat</th>
                                            <th>Username</th>
                                            <th>email</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query ("select * from tb_anggota");

                                            while ($data = $sql->fetch_assoc()) {
                                                # code...
                                            
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data ['id_anggota']; ?></td>
                                            <td><?php echo $data ['nama']; ?></td>
                                            <td><?php echo $data ['nim']; ?></td>
                                            <td><?php echo $data ['telepon']; ?></td>
                                            <td><?php echo $data ['alamat']; ?></td>
                                            <td><?php echo $data ['username']; ?></td>
                                            <td><?php echo $data ['email']; ?></td>
                                            <td><?php echo $data ['status']; ?></td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>            
</div>