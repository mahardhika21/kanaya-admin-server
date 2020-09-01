<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Data Piutang</h1>
    </div>
    <div class="row">

        <?php if ($this->session->userdata('success_message')) {?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->userdata('success_message'); ?>
        </div>
        <?php }?>

        <?php if ($this->session->userdata('error_message')) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->userdata('error_message'); ?>
        </div>
        <?php }?>
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fa fa-th-list fa-fw"></i> Data
                        <!--  <em class="btn btn-primary btn-sm pull-right add-produk" data-toggle="modal" data-target="#formModalProduk"
                            data-backdrop="static" data-keyboard="false">
                            <i class="fa fa-plus"></i> Marketing
                        </em> -->
                    </h6>

                </div>
                <div class="card-body">
                   <!--  <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card px-2 py-2">
                                <div class="input-group to-date">
                                    <span class="input-group-addon">
                                        <em class="fa fa-calendar"></em>
                                    </span>
                                    <input type="text" id="range_date" name="range_date" class="form-control dr-picker"
                                        placeholder="Isikan tanggal awal sampai akhir">
                                </div>
                            </div>

                        </div>
                    </div> -->
                     <div class="col-lg-10 mb-2">
                            <div class="card px-2 py-2">
                             <form class="form-inline" action="<?php echo site_url('piutang/print'); ?>" method="POST">

                   
                                <div class="form-group mx-sm-3 mb-2">
                                 <div class="input-group to-date">
                                    <span class="input-group-addon">
                                        <em class="fa fa-calendar"></em>
                                    </span>
                                    <input type="text" id="range_date" name="range_date" class="form-control dr-picker"
                                        placeholder="Isikan tanggal awal sampai akhir">
                                </div>
                                 </div>
                                   <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Marketing</label>
                                    <select class="form-control" name="marketing">
                                        <option value="all">Semua Marketing</option>
                                        <?php foreach ($marketing as $data) { ?>
                                        <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Type</label>
                                    <select class="form-control" name="type">
                                        <option value="tagihan">Jadwal Tagihan</option>
                                        <option value="dp">Pengambilan Dp</option>
                                    </select>
                                 </div>
                                <button type="submit" class="btn btn-success mb-2">Print </button>
                                <!--   <button type="submit" class="btn btn-primary mb-2">Print</button> -->
                                </form>
                            </div> 

                        </div>
                    <div class="load-data">
                        <em class="fa fa-spin fa-spinner"></em> Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>