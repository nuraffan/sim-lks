<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
    @media print {

        .no-print,
        .no-print * {
            display: none !important;
        }

        .img,
        .img * {
            position: relative;
            padding: 0;
        }

        table.border {
            text-align: left;
            border: 1px #000 solid;
            padding: 20px;
        }

        table.border tr th {
            width: 120px;
        }

        table.border tr td {
            font-weight: normal;
        }


        .td250 {
            width: 150px;
        }

        .td200 {
            width: 150px;
            padding: 10px;
        }

        .td20 {
            width: 20px;
        }

        .td10 {
            width: 10px;
        }

        .top {
            vertical-align: text-top;
            position: relative;
        }

        .font {
            font-size: 16px;
            font-family: '';
        }

        .nfont {
            font-weight: normal;
        }

        .bfont {
            font-weight: bold;
        }
    }

    .slide-content {
        position: absolute;
        top: 0;
        left: 15%;
        display: block;
        float: left;
        width: 85%;
        max-height: 100%;
        padding: 22px 10px;
        overflow-y: auto;
    }

    .slide-content h4 {
        margin-bottom: 3px;
        margin-top: 0;
    }

    .slide-footer {
        position: relative;
    }

    span p {
        display: inline-block;
        margin: 0;
    }

    .new {
        top: 17.2em;
    }

    @media only screen and (min-width: 300px) {
        .print {
            display: none !important;
        }

    }

    @media only screen and (max-width: 600px) {
        span p {
            display: none;
        }

        .new {
            top: 29.5em;
            right: 1.2em;
        }
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('student_information'); ?> <small><?php echo $this->lang->line('student1'); ?></small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="">
        <div class="row no-print">
            <div class="col-md-12">
                <div class="nav-tabs-custom theme-shadow">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="<?php echo site_url('admin/admin/search') ?>"><i class="fa fa-arrow-left "></i> Kembali</a></li>
                    </ul>

                    <div class="">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                        </div>
                        <div class="box-body">

                            <?php if ($this->session->flashdata('msg')) { ?> <div class="alert alert-success"> <?php echo $this->session->flashdata('msg') ?> </div> <?php } ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <form role="form" action="<?php echo site_url('student/search_print') ?>" method="post" class="">
                                            <?php echo $this->customlib->getCSRF(); ?>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><?php echo $this->lang->line('class'); ?></label> <small class="req"> * <i>wajib diisi</i></small>
                                                    <select autofocus="" id="class_id" name="class_id" class="form-control">
                                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                        <?php
                                                        foreach ($classlist as $class) {
                                                        ?>
                                                            <option value="<?php echo $class['id'] ?>" <?php if (set_value('class_id') == $class['id']) echo "selected=selected" ?>><?php echo $class['class'] ?></option>
                                                        <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error('class_id'); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><?php echo $this->lang->line('section'); ?></label>
                                                    <select id="section_id" name="section_id" class="form-control">
                                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error('section_id'); ?></span>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div><!--./col-md-6-->
                                <div class="col-md-6">
                                    <div class="row">
                                        <form role="form" action="<?php echo site_url('student/search_print') ?>" method="post" class="">
                                            <?php echo $this->customlib->getCSRF(); ?>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label><?php echo $this->lang->line('search_by_keyword'); ?></label>
                                                    <input type="text" name="search_text" class="form-control" value="<?php echo set_value('search_text'); ?>" placeholder="<?php echo $this->lang->line('search_by_student_name'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" name="search" value="search_full" class="btn btn-primary pull-right btn-sm checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!--./col-md-6-->
                            </div><!--./row-->
                        </div>
                        <div class="box-header ptbnull"></div>
                        <?php
                        if (isset($resultlist)) {
                        ?>
                            <div class="nav-tabs-custom border0">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">
                                            <i class="fa fa-search"></i> Hasil Filter Pencarian</a></li>
                                    <li>

                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active table-responsive no-padding" id="tab_1">
                                        <div class="pull-right box-tools impbtntitle new">
                                            <button onclick="printPage()" class="btn btn-primary btn-sm checkbox-toggle edit_setting"><i class="fa fa-file-pdf-o"></i><span>
                                                    <p>Cetak Daftar Anak</p>
                                                </span></button>

                                        </div>
                                        <?php if (empty($resultlist)) {
                                        ?>
                                            <div class="alert alert-info"><?php echo $this->lang->line('no_record_found'); ?></div>
                                            <?php
                                        } else {
                                            $count = 1;
                                            foreach ($resultlist as $student) {

                                                if (empty($student["image"])) {
                                                    if ($student['gender'] == 'Female') {
                                                        $image = "uploads/student_images/default_female.jpg";
                                                    } else {
                                                        $image = "uploads/student_images/default_male.jpg";
                                                    }
                                                } else {
                                                    $image = $student['image'];
                                                }
                                            ?>
                                                <div class="carousel-row">
                                                    <div class="slide-row">
                                                        <div id="carousel-2" class="carousel slide slide-carousel" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <a href="<?php echo base_url(); ?>student/view/<?php echo $student['id'] ?>">
                                                                        <?php if ($sch_setting->student_photo) { ?>
                                                                            <img class="img-responsive img-thumbnail width150" alt="<?php echo $student['firstname'] ?>" src="<?php echo base_url() . $image ?>" alt="Image"><?php } ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slide-content">
                                                            <h4><a href="<?php echo base_url(); ?>student/view/<?php echo $student['id'] ?>">
                                                                    <?php echo $student['firstname'] ?>
                                                                    <!-- full name -->
                                                                    <!-- <?php echo $this->customlib->getFullName($student['firstname'], $student['middlename'], $student['lastname'], $sch_setting->middlename, $sch_setting->lastname);  ?> -->
                                                                    <!-- end full name -->
                                                                </a></h4>
                                                            <div class="row">
                                                                <div class="col-xs-4 col-md-4">
                                                                    <address>
                                                                        <strong><b><?php echo $this->lang->line('class'); ?>&emsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $student['class'] . "(" . $student['section'] . ")" ?></strong><br>
                                                                        <?php if (!$adm_auto_insert) { ?>
                                                                            <b><?php echo $this->lang->line('admission_no'); ?>&emsp;:</b><?php echo $student['admission_no'] ?><br /><?php } ?>
                                                                        <b><?php echo $this->lang->line('middle_name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $student['middlename'] ?><br>
                                                                        <b><?php echo $this->lang->line('date_of_birth'); ?>
                                                                            &nbsp;&nbsp;&nbsp;:
                                                                        </b><?php
                                                                            if ($student["dob"] != null && $student["dob"] != '0000-00-00') {
                                                                                echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                                                            } ?><br>
                                                                        <b><?php echo $this->lang->line('gender'); ?>&nbsp;&nbsp;: </b><?php echo $this->lang->line(strtolower($student['gender'])); ?><br>
                                                                    </address>
                                                                </div>
                                                                <div class="col-xs-8 col-md-8">
                                                                    <?php if ($sch_setting->local_identification_no) { ?>
                                                                        <b>
                                                                            <?php echo $this->lang->line('category'); ?>&emsp;&emsp;&emsp;&emsp;&nbsp; : </b><?php echo $student['category'] ?>
                                                                        <br>
                                                                    <?php }
                                                                    if ($sch_setting->guardian_name) { ?>
                                                                        <b><?php echo $this->lang->line('guardian_name'); ?>&emsp;&emsp;&emsp;&emsp;&emsp; : </b><?php echo $student['guardian_name'] ?>
                                                                        <br>
                                                                    <?php }
                                                                    if ($sch_setting->cast) { ?>
                                                                        <b><?php echo $this->lang->line('cast'); ?>&emsp; : </b> <?php echo $student['cast']; ?>
                                                                        <br>
                                                                    <?php }
                                                                    if ($sch_setting->current_address) { ?>
                                                                        <b>Alamat Asal &emsp;&emsp;&emsp;&emsp; : </b><?php echo $student['permanent_address'] ?>, <?php echo $student['city'] ?><br><?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slide-footer">
                                                            <span class="pull-right buttons">
                                                                <a href="<?php echo base_url(); ?>student/view/<?php echo $student['id'] ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('show'); ?>">
                                                                    <i class="fa fa-reorder"></i>
                                                                </a>
                                                                <?php if ($this->rbac->hasPrivilege('student', 'can_edit')) {
                                                                ?>
                                                                    <a href="<?php echo base_url(); ?>student/edit/<?php echo $student['id'] ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                <?php }
                                                                if ($this->rbac->hasPrivilege('collect_fees', 'can_add')) {
                                                                ?>
                                                                    <a href="<?php echo base_url(); ?>studentfee/addfee/<?php echo $student['id'] ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="<?php echo $this->lang->line('add_fees'); ?>">
                                                                        <?php echo $currency_symbol; ?>
                                                                    </a>
                                                                <?php } ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                            $count++;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                    </div><!--./box box-primary -->
                </div>
            <?php
                        }
            ?>
            </div>
        </div>

        <div class="row print">
            <div class="col-md-12">
                <table width="100%">
                    <tr>
                        <td style="height: 100px;width: 850px;">
                            <div><img src="<?php echo base_url() ?>/uploads/print_headerfooter/staff_payslip/<?php $this->setting_model->get_payslipheader(); ?>" style="height: 100px;width: 100%;" /></div>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <h3 style="margin: 10px 0 20px;font-size: 1.17em;" class="font bfont">BIODATA ANAK ASUH</h3>
                            <h4 style="margin: 10px 0 20px;font-size: 1.17em;" class="font bfont"><?php echo $this->setting_model->getCurrentSchoolName(); ?></h4>
                        </td>
                    </tr>
                </table>

                <?php if (empty($resultlist)) {
                ?>
                    <div class="alert alert-info"><?php echo $this->lang->line('no_record_found'); ?></div>
                    <?php
                } else {
                    $count = 1;
                    $no = 0;
                    foreach ($resultlist as $student) {
                        $no++;
                        if (empty($student["image"])) {
                            if ($student['gender'] == 'Female') {
                                $image = "uploads/student_images/default_female.jpg";
                            } else {
                                $image = "uploads/student_images/default_male.jpg";
                            }
                        } else {
                            $image = $student['image'];
                        }
                    ?>

                        <table width="100%" class="border">
                            <tr>
                                <td style="padding: 10px;">
                                    <table width="100%" class="font">
                                        <tbody>
                                            <tr>
                                                <td rowspan="9" class="td200"><?php if ($sch_setting->student_photo) { ?>
                                                        <img class="img" width="113.38582677" height="151.18110236" alt="<?php echo $student['firstname'] ?>" src="<?php echo base_url() . $image ?>" alt="Image">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="9" class="td20 top"><?= $no ?>.</td>
                                                <th>Nama Lengkap</th>
                                                <td class="td10">:</td>
                                                <td><?php echo $student['firstname'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td class="td10">:</td>
                                                <td><?php echo $student['middlename'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td class="td10">:</td>
                                                <td><?php
                                                    if ($student["dob"] != null && $student["dob"] != '0000-00-00') {
                                                        echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th class="top">Alamat Asal</th>
                                                <td class="td10 top">:</td>
                                                <td><?php echo $student['permanent_address'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status Keluarga</th>
                                                <td class="td10">:</td>
                                                <td><?php echo $student['category'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Pendidikan</th>
                                                <td class="td10">:</td>
                                                <td><?php echo $student['cast'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Domisili</th>
                                                <td class="td10">:</td>
                                                <td><?php echo $student['house_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Keterangan</th>
                                                <td class="td10">:</td>
                                                <td><?php echo $student['class'] . " " . "(" . $student['section'] . ")" ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                <?php
                    }
                    $count++;
                }
                ?>
            </div>
            <div class="footer">
                <span class="font nfont">
                    <div style="width: 300px;float:right;text-transform: capitalize;margin-top: 30px;text-align: center;">
                        <?php $this->setting_model->get_kota(); ?>, <?php echo date("d F Y"); ?><br>
                        <p style="margin-block-end: 0em;">Mengetahui,</p><br>
                        <p style="margin-block-start: 0em;">Ketua Lembaga</p>
                        <br><br><br><br><br>
                        <p style="font-size: 18px;font-weight: bold;">
                            <?php $this->setting_model->get_ketua(); ?>
                        </p>
                </span>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    function getSectionByClass(class_id, section_id) {
        if (class_id != "" && section_id != "") {
            $('#section_id').html("");
            var base_url = '<?php echo base_url() ?>';
            var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {
                    'class_id': class_id
                },
                dataType: "json",
                success: function(data) {
                    $.each(data, function(i, obj) {
                        var sel = "";
                        if (section_id == obj.section_id) {
                            sel = "selected";
                        }
                        div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                    });
                    $('#section_id').append(div_data);
                }
            });
        }
    }
    $(document).ready(function() {
        var class_id = $('#class_id').val();
        var section_id = '<?php echo set_value('section_id') ?>';
        getSectionByClass(class_id, section_id);
        $(document).on('change', '#class_id', function(e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            var base_url = '<?php echo base_url() ?>';
            var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {
                    'class_id': class_id
                },
                dataType: "json",
                success: function(data) {
                    $.each(data, function(i, obj) {
                        div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                    });
                    $('#section_id').append(div_data);
                }
            });
        });
    });
</script>
<script>
    function printPage() {
        window.print();
    }
</script>