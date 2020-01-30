<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 align-content-start">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">update</i>
                        </div>
                        <h4 class="card-title">Data Investor</h4>
                    </div>
                    <form class="form" method="post" action="<?= base_url('lembur/ajukan_realisasi'); ?>">
                        <div class="card-body">
                            
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    <!-- <a href="#" class="btn btn-rose mb" role="button" aria-disabled="false" data-toggle="modal" data-target="#batalRsv">Tambah Aktivitas</a> -->
                                    <!-- <a href="#" class="btn btn-info mb" role="button" aria-disabled="false" data-toggle="modal" data-target="#tambahIstirahat">Tambah Istirahat</a> -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Investor Code</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Direct Refferal</th>
                                            <th>Jumlah Refferal Investor</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Investor Code</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Direct Refferal</th>
                                            <th>Jumlah Refferal Investor</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 

                                            $no=1;
                                            foreach ($investor as $iv) : ?> 
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $iv['id']; ?></td>
                                            <td><?= $iv['nama']; ?></td>
                                            <td><?= $iv['phone']; ?></td>
                                                <?php $status = $this->db->get_where('status_investor', ['id' => $iv['status']])->row_array(); ?>
                                            <td><?= $status['nama']; ?> </td>
                                            <td><?= $iv['grade1']; ?></td>
                                            <td><?= $iv['jumlah_investor']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/updtInvestor/') . $iv['id']; ?>" class="btn btn-round btn-info btn-sm btn-updt_coach">UPDATE COACH</a>
                                            <!-- <a href="#" data-toggle="modal" data-target="#updateStatus" data-id="<?= $iv['id']; ?>" data-nama="<?= $iv['nama']; ?>" data-role_id="<?= $iv['role_id']; ?>"  class="badge badge-pill badge-info">Update</a> -->
                                            </td>
                                        </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- <a href="<?= base_url('lembur/index/') ?>" class="btn btn-default" role="button">Kembali</a> -->
                            </div>
                        </div>
                        <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>
</form>

<!-- Modal Batal Aktivitas-->
<div class="modal fade" id="updateStatus" tabindex="-1" role="dialog" aria-labelledby="updateStatusTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                        <h4 class="card-title">UPDATE MENJADI COACH</h4>
                    </div>
                </div>
                <form class="form" method="post" action="<?= base_url('admin/updtInvestor'); ?>">
                    <div class="modal-body">
                        <div class="row">
                            <label class="col-md-4 col-form-label">ID</label>
                            <div class="col-md-7">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" id="id" name="id" value="<?= $iv['id']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-4 col-form-label">Nama</label>
                            <div class="col-md-7">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-4 col-form-label">Status</label>
                            <div class="col-md-7">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" id="role_id" name="role_id">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <br>
                            <button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
