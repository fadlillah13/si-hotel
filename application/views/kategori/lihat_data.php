                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Master Type Kamar<small> (Edit, Tambah & Hapus Master)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->
 
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('kategori/post','Tambah Kamar',array('class'=>'btn btn-danger btn-sm')) ?> 
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Jenis Kamar</th>
                                                <th>Harga Per hari</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                <td>Rp. <?php echo number_format ($r->harga,2) ?></td>
                                                <td class="center">
                                                    <?php echo anchor('kategori/edit/'.$r->kategori_id,'Edit'); ?> | 
                                                    <?php echo anchor('kategori/delete/'.$r->kategori_id,'Hapus'); ?>
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
