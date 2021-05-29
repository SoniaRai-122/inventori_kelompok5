<?php


/*foreach ($results as $menulists) {


  @$menulistRow .= "<tr class='gradeA odd'>

								<td class='center'>" . $menulists->MENU_TEXT . "

								<td>" . $menulists->MENU_URL . "

								<td>" . $menulists->SORT_ORDER . "

								<td class=center>" . $menulists->PARENT_ID . "";


}*/
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Form Petugas
            </header>
            <?php
            if ($this->session->flashdata('msg'));
            echo $this->session->flashdata('msg');

            ?>
            <div class="panel-body">
                <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'method' => 'post');
                echo form_open_multipart('Petugas/insert_petugas', $attributes); ?>

                <div class="form-group">
                    <div class="col-sm-6"><label>Nama Petugas</label><input class="form-control" name="nama_petugas" autofocus="" type="text" value="<?= set_value('nama_petugas') ?>"><?= form_error('nama_petugas', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6"><label>No Handphone</label><input class="form-control" name="no_telepon" type="text" value="<?= set_value('no_telepon') ?>"><?= form_error('no_telepon', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class=" form-group">
                    <div class="col-sm-6"><label>Alamat</label><input class="form-control" name="alamat" type="text" value="<?= set_value('alamat') ?>"> <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    </div>

                    <div class=" form-group">
                    <div class="col-sm-6"><label>Jabatan</label>             
                        <select class="form-control" name="GROUP_ID" id="">
                        <option value="0">===>  Select Jabatan  <===</option>
                        <?php foreach ($usr_group as $rows): ?>
                                <option
                                    value="<?php echo $rows->GROUP_ID; ?>"><?php echo $rows->GROUP_NAME ?></option>
                                    
                            <?php endforeach; ?>
                        </select>
                        </div>
                </div>
                    
                <hr>
                <div class=" form-group" style="padding-left: 42%">
                    <div class="col-md-6">
                        <input type="submit" name="Save" class="btn btn-info">
                        <a href="<?= base_url(); ?>petugas" class="btn btn-danger">Cancel</a>
                    </div>

                </div>

                <?php form_close(); ?>

            </div>
        </section>

    </div>
</div>
<!-- page end-->
<!--Table starts-->


<!--Table ends-->