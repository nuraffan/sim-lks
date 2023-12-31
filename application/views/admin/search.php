<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
    /*REQUIRED*/
    .carousel-row {
        margin-bottom: 10px;
    }

    .slide-row {
        padding: 0;
        background-color: #ffffff;
        min-height: 150px;
        border: 1px solid #e7e7e7;
        overflow: hidden;
        height: auto;
        position: relative;
    }

    .slide-carousel {
        width: 20%;
        float: left;
        display: inline-block;
    }

    .slide-carousel .carousel-indicators {
        margin-bottom: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .5);
    }

    .slide-carousel .carousel-indicators li {
        border-radius: 0;
        width: 20px;
        height: 6px;
    }

    .slide-carousel .carousel-indicators .active {
        margin: 1px;
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
        position: inherit;
        bottom: 0;
        left: 20%;
        width: 78%;
        height: 20%;
        margin: 1%;
    }

    /* Scrollbars */
    .slide-content::-webkit-scrollbar {
        width: 5px;
    }

    .slide-content::-webkit-scrollbar-thumb:vertical {
        margin: 5px;
        background-color: #999;
        -webkit-border-radius: 5px;
    }

    .slide-content::-webkit-scrollbar-button:start:decrement,
    .slide-content::-webkit-scrollbar-button:end:increment {
        height: 5px;
        display: block;
    }

    /* set tampilan petak */
    .petak {
        border: none;
        background-color: white;
        font-family: roboto;
        font-size: 14px;
        margin: unset;
        padding: unset;
        line-height: inherit;
    }

    /* end petak */
    .pull-right a {
        display: inline-table;
    }

    span p {
        display: inline-block;
        margin: 0;
    }

    @media only screen and (max-width: 600px) {
        span p {
            display: none;
        }
    }
</style>

<div class="content-wrapper" style="min-height: 946px;">

    <section class="content-header">
        <h1>
            <i class="fa fa-user"></i> <?php echo $this->lang->line('search_student'); ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($resultlist)) {
                ?>
                    <div class="nav-tabs-custom theme-shadow">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i> <?php echo $this->lang->line('student_lists'); ?></a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><i class="fa fa-th"></i> <?php echo $this->lang->line('detailed_view'); ?></a></li>
                            <li class=""><a href="<?php echo site_url('student/search_print') ?>"><i class="fa fa-filter"></i> Filter</a></li>

                        </ul>
                        <div class="pull-right box-tools impbtntitle">
                            <a href="<?php echo site_url('report/student_profile') ?>">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-file-excel-o"></i>
                                    <span>
                                        <p>Lihat Laporan</p>
                                    </span>
                                </button>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active table-responsive no-padding" id="tab_1">
                                <div class="download_label"><?php echo $this->lang->line('student_lists'); ?></div>
                                <table class="table table-striped table-bordered table-hover example">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->lang->line('admission_no'); ?></th>
                                            <th><?php echo $this->lang->line('student_name'); ?></th>
                                            <th><?php echo $this->lang->line('class'); ?></th>
                                            <?php if ($sch_setting->father_name) { ?>
                                                <th><?php echo $this->lang->line('father_name'); ?></th>
                                            <?php } ?>
                                            <th><?php echo $this->lang->line('date_of_birth'); ?></th>
                                            <th><?php echo $this->lang->line('gender'); ?></th>
                                            <?php if ($sch_setting->category) { ?>
                                                <th><?php echo $this->lang->line('student_categories'); ?></th>
                                            <?php }
                                            if ($sch_setting->mobile_no) { ?>
                                                <th><?php echo $this->lang->line('mobile_no'); ?></th>
                                            <?php } ?>

                                            <?php
                                            if (!empty($fields)) {

                                                foreach ($fields as $fields_key => $fields_value) {
                                            ?>
                                                    <th><?php echo $fields_value->name; ?></th>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <th class="text-right"><?php echo $this->lang->line('action'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($resultlist)) { ?>
                                            <?php
                                        } else {
                                            $count = 1;
                                            foreach ($resultlist as $student) {
                                            ?>
                                                <tr>

                                                    <td><?php echo $student['admission_no']; ?></td>

                                                    <td>
                                                        <a href="<?php echo base_url(); ?>student/view/<?php echo $student['id']; ?>">
                                                            <?php echo $student['firstname']; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $student['class'] . "(" . $student['section'] . ")" ?></td>
                                                    <?php if ($sch_setting->father_name) { ?>
                                                        <td><?php echo $student['father_name']; ?></td>
                                                    <?php } ?>
                                                    <td><?php
                                                        if ($student["dob"] != null && $student["dob"] != '0000-00-00') {
                                                            echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                                        }
                                                        ?></td>
                                                    <td><?php echo $this->lang->line(strtolower($student['gender'])); ?></td>
                                                    <?php if ($sch_setting->category) { ?>
                                                        <td><?php echo $student['category']; ?></td>
                                                    <?php }
                                                    if ($sch_setting->mobile_no) { ?>
                                                        <td><?php echo $student['mobileno']; ?></td>
                                                    <?php } ?>

                                                    <?php
                                                    if (!empty($fields)) {

                                                        foreach ($fields as $fields_key => $fields_value) {
                                                            $display_field = $student[$fields_value->name];
                                                            if ($fields_value->type == "link") {
                                                                $display_field = "<a href=" . $student[$fields_value->name] . " target='_blank'>" . $student[$fields_value->name] . "</a>";
                                                            }
                                                    ?>
                                                            <td>
                                                                <?php echo $display_field; ?>

                                                            </td>
                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                    <td class="pull-right">
                                                        <a href="<?php echo base_url(); ?>student/view/<?php echo $student['id'] ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('show'); ?>">
                                                            <i class="fa fa-reorder"></i>
                                                        </a>
                                                        <?php if ($this->rbac->hasPrivilege('student', 'can_edit')) {
                                                        ?>
                                                            <a href="<?php echo base_url(); ?>student/edit/<?php echo $student['id'] ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php if ($this->rbac->hasPrivilege('collect_fees', 'can_add')) {
                                                        ?>
                                                            <a href="<?php echo base_url(); ?>studentfee/addfee/<?php echo $student['student_session_id'] ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="<?php echo $this->lang->line('add_fees'); ?>">
                                                                <?php echo $currency_symbol; ?>
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                        <?php
                                                $count++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <div class="pull-right box-tools impbtntitle">
                                    <a href="<?php echo site_url('report/student_profile_print') ?>" onclick="window.open(this.href).print(); return false" role="button" class="btn btn-primary btn-sm checkbox-toggle edit_setting" data-toggle="tooltip" title="<?php echo $this->lang->line('Payslip View'); ?>">
                                        <i class="fa fa-file-pdf-o"></i>
                                        <span>
                                            <p>Cetak Daftar Anak</p>
                                        </span>
                                    </a>
                                </div>
                                <?php
                                if (empty($resultlist)) {
                                ?>
                                    <div class="alert alert-info">
                                        <?php echo $this->lang->line('no_record_found'); ?>
                                    </div>

                                    <?php
                                } else {
                                    $count = 1;
                                    foreach ($resultlist as $student) {
                                        if (empty($student["image"])) {
                                            $image = "uploads/student_images/no_image.png";
                                        } else {
                                            $image = $student['image'];
                                        }
                                    ?>

                                        <div class="carousel-row">
                                            <div class="download_label"><?php echo $this->lang->line('student_lists'); ?></div>
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
                                        $count++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</div>