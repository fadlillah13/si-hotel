                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Daftar Ketersediaan Kamar <small>(Edit, Tambah & Hapus Kamar)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">  
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('barang/post','Tambah Kamar',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nomor Kamar</th>
                                                <th>Jenis Kamar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td> 
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                <td class="center">
                                                    <?php echo anchor('barang/edit/'.$r->barang_id,'Edit'); ?> | 
                                                    <?php echo anchor('barang/delete/'.$r->barang_id,'Hapus'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->


