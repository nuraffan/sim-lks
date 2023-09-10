<!DOCTYPE html>
<html <?php echo $this->customlib->getRTL(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->customlib->getAppName(); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="theme-color" content="#424242" />
    <link href="<?php echo base_url(); ?>uploads/school_content/admin_small_logo/<?php $this->setting_model->getAdminsmalllogo(); ?>" rel="shortcut icon" type="image/x-icon">
    <!-- 
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/jquery.mCustomScrollbar.min.css">
    <?php
    $this->load->view('layout/theme');
    ?> -->
    <style>
        .col-sm-12 {
            width: 100%;
        }

        .col-sm-11 {
            width: 91.66666667%;
        }

        .col-sm-10 {
            width: 83.33333333%;
        }

        .col-sm-9 {
            width: 75%;
        }

        .col-sm-8 {
            width: 66.66666667%;
        }

        .col-sm-7 {
            width: 58.33333333%;
        }

        .col-sm-6 {
            width: 50%;
        }

        .col-sm-5 {
            width: 41.66666667%;
        }

        .col-sm-4 {
            width: 33.33333333%;
        }

        .col-sm-3 {
            width: 25%;
        }

        .col-sm-2 {
            width: 16.66666667%;
        }

        .col-sm-1 {
            width: 8.33333333%;
        }

        hr {
            border-width: 2px;
            border-color: black;
            border-style: solid;
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;

        }

        hr.batas {
            border-width: 0.1em;
            border-color: #c1c1c1;
        }

        div .center {
            text-align: center;
        }

        .tabel {
            /* border: 1px solid #000; */
            width: 100%;
        }

        .hidden {
            display: none;
        }

        h2.green {
            color: #009b4c;
            margin-block-start: 0;
        }

        .top {
            /* text-align: -webkit-center; */
            vertical-align: top;
        }
    </style>
</head>

<body>

    <?php
    $currency_symbol = $this->customlib->getSchoolCurrencyFormat();
    ?>
    <div class="row">

        <section class="content">
            <div class="row">

                <div class="col-md-9">
                    <div class="nav-tabs-custom theme-shadow">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">

                                <div class="tshadow mb25 bozero">
                                    <?php if (($sch_setting->father_name) || ($sch_setting->father_phone) || ($sch_setting->father_occupation) || ($sch_setting->father_pic) || ($sch_setting->mother_name) || ($sch_setting->mother_phone) || ($sch_setting->mother_occupation) || ($sch_setting->mother_pic) || ($sch_setting->guardian_name) || ($sch_setting->guardian_occupation) || ($sch_setting->guardian_relation) || ($sch_setting->guardian_phone) || ($sch_setting->guardian_email) || ($sch_setting->guardian_pic) || ($sch_setting->guardian_address)) { ?>

                                </div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12" style="display: flex;text-align: center;">
                <div class="col-md-4">
                    <div>
                        <img src="<?php echo base_url() ?>uploads/school_content/logo/<?php $this->setting_model->get_logo(); ?>" class="img-thumbnail" alt="Logo Lembaga" width="200">
                    </div>
                </div>
                <div class="col-md-8">
                    <div>
                        <h2 style="margin: 0 10px"><?php echo $this->setting_model->getCurrentSchoolName(); ?></h2>
                        <p style="margin: 0 10px">
                            <?php echo $this->setting_model->getCurrentSchoolAddress(); ?>
                            <span> Email : </span>
                            <?php echo $this->setting_model->getCurrentSchoolEmail(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border">
        <div class="col-sm-12">
            <div class="row">
                <div class="center">
                    <h3>BIODATA ANAK</h3>
                </div>
                <table class="tabel">
                    <tr>
                        <td>
                            <h3>A. PROFIL ANAK</h3>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="19" class="top">
                            <?php if ($sch_setting->student_photo) { ?>
                                <img src="
                            <?php
                                            if (!empty($student["image"])) {
                                                echo base_url() . $student["image"];
                                            } else {

                                                if ($student['gender'] == 'Female') {
                                                    echo base_url() . "uploads/student_images/default_female.jpg";
                                                } else {
                                                    echo base_url() . "uploads/student_images/default_male.jpg";
                                                }
                                            }
                            ?>" alt="User profile picture" width="200">
                            <?php } ?>
                        </td>
                        <td>
                            <h2 class="green"><?php echo $student['firstname']; ?></h2>
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td>
                            <?php
                                        if ($student['is_active'] == 'no') {
                            ?>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('disable') . " " . $this->lang->line('reason') ?></b> <span class="pull-right text-aqua"><?php echo $reason_data['reason'] ?></span>
                                </li>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('disable') . " " . $this->lang->line('note') ?></b> <span class="pull-right text-aqua"><?php echo $student['dis_note'] ?></span>
                                </li>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('disable') . " " . $this->lang->line('date') ?></b> <span class="pull-right text-aqua"><?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['disable_at'])); ?></span>
                                </li>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b><?php echo $this->lang->line('admission_no'); ?></b></td>
                        <td><a class="pull-right text-aqua">: <?php echo $student['admission_no']; ?></a></td>
                    </tr>
                    <?php
                                        if ($sch_setting->roll_no) { ?>
                        <tr>
                            <td><b><?php echo $this->lang->line('roll_no'); ?></b></td>
                            <td><a class="pull-right text-aqua">: <?php echo $student['roll_no']; ?></a></td>
                        </tr>
                    <?php
                                        } ?>
                    <tr>
                        <td><b><?php echo $this->lang->line('class'); ?></b></td>
                        <td><a class="pull-right text-aqua">: <?php echo $student['class'] . " (" . $session . ")"; ?></a></td>
                    </tr>
                    <tr>
                        <td><b><?php echo $this->lang->line('section'); ?></b></td>
                        <td><a class="pull-right text-aqua">: <?php echo $student['section']; ?></a></td>
                    </tr>
                    <?php if ($sch_setting->rte) { ?>
                        <tr>
                            <td><b><?php echo $this->lang->line('rte'); ?></b></td>
                            <td><a class="pull-right text-aqua">: <?php echo $student['rte']; ?></a></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td><b><?php echo $this->lang->line('gender'); ?></b></td>
                        <td><a class="pull-right text-aqua">: <?php echo $this->lang->line(strtolower($student['gender'])); ?></a></td>
                    </tr>
                    <tr>
                        <?php if ($sch_setting->admission_date) {  ?>
                            <td class="col-md-4"><?php echo $this->lang->line('admission_date'); ?></td>
                            <td class="col-md-5">:
                                <?php
                                            if (!empty($student['admission_date'])) {

                                                echo date($this->customlib->dateformat($student['admission_date']));
                                            }
                                ?></td>

                        <?php } ?>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('date_of_birth'); ?></td>
                        <td>: <?php
                                        if (!empty($student['admission_date']) && $student['admission_date'] != '0000-00-00') {
                                            echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                        }
                                ?></td>
                    </tr>
                    <?php if ($sch_setting->category) {  ?>
                        <tr>
                            <td><?php echo $this->lang->line('category'); ?></td>
                            <td>:
                                <?php
                                            foreach ($category_list as $value) {
                                                if ($student['category_id'] == $value['id']) {
                                                    echo $value['category'];
                                                }
                                            }
                                ?>
                            </td>
                        </tr>
                    <?php }
                                        if ($sch_setting->is_blood_group) { ?>
                        <tr>
                            <td class="col-md-4"><?php echo $this->lang->line('blood_group'); ?></td>
                            <td class="col-md-5">: <?php echo $student['blood_group']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->is_student_house) { ?>
                        <tr>
                            <td class="col-md-4"><?php echo $this->lang->line('house'); ?></td>
                            <td class="col-md-5">: <?php echo $student['house_name']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->student_height) {  ?>
                        <tr>
                            <td class="col-md-4"><?php echo $this->lang->line('height'); ?></td>
                            <td class="col-md-5">: <?php echo $student['height']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->student_weight) { ?>
                        <tr>
                            <td class="col-md-4"><?php echo $this->lang->line('weight'); ?></td>
                            <td class="col-md-5">: <?php echo $student['weight']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->previous_school_details) {  ?>
                        <tr>
                            <td class="col-md-4"><?php echo $this->lang->line('previous_school_details'); ?></td>
                            <td class="col-md-5">: <?php echo $student['previous_school']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->mobile_no) {  ?>
                        <tr>
                            <td><?php echo $this->lang->line('mobile_no'); ?></td>
                            <td>: <?php echo $student['mobileno']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->cast) {  ?>
                        <tr>
                            <td><?php echo $this->lang->line('cast'); ?></td>
                            <td>: <?php echo $student['cast']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->religion) {  ?>
                        <tr>
                            <td><?php echo $this->lang->line('religion'); ?></td>
                            <td>: <?php echo $student['religion']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->student_email) {  ?>
                        <tr>
                            <td><?php echo $this->lang->line('email'); ?></td>
                            <td>: <?php echo $student['email']; ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                                        $cutom_fields_data = get_custom_table_values($student['id'], 'students');
                                        if (!empty($cutom_fields_data)) {
                                            foreach ($cutom_fields_data as $field_key => $field_value) {
                    ?>
                            <tr>
                                <td><?php echo $field_value->name; ?></td>
                                <td>:
                                    <?php
                                                if (is_string($field_value->field_value) && is_array(json_decode($field_value->field_value, true)) && (json_last_error() == JSON_ERROR_NONE)) {
                                                    $field_array = json_decode($field_value->field_value);
                                                    echo "<ul class='student_custom_field'>";
                                                    foreach ($field_array as $each_key => $each_value) {
                                                        echo "<li>" . $each_value . "</li>";
                                                    }
                                                    echo "</ul>";
                                                } else {
                                                    $display_field = $field_value->field_value;

                                                    if ($field_value->type == "link") {
                                                        $display_field = "<a href=" . $field_value->field_value . " target='_blank'>" . $field_value->field_value . "</a>";
                                                    }
                                                    echo $display_field;
                                                }
                                    ?>
                                </td>
                            </tr>

                    <?php
                                            }
                                        }
                    ?>
                    </td>
                    </tr>
                </table>
                <hr class="batas">
                <table class="tabel">
                    <tr>
                        <td>
                            <h3>B. ALAMAT ANAK</h3>
                        </td>
                    </tr>
                    <?php if ($sch_setting->current_address) { ?>
                        <tr>
                            <td class="col-md-4"><?php echo $this->lang->line('current_address'); ?></td>
                            <td class="col-md-5">: <?php echo $student['current_address']; ?></td>
                        </tr>
                    <?php }
                                        if ($sch_setting->permanent_address) { ?>
                        <tr>
                            <td><?php echo $this->lang->line('permanent_address'); ?></td>
                            <td>: <?php echo $student['permanent_address']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <hr class="batas">
                <table class="tabel">
                    <tr>
                        <td colspan="2">
                            <h3>C. DATA ORANG TUA / WALI</h3>
                        </td>
                    </tr>
                    <tr>
                        <?php if ($sch_setting->father_name) {  ?>
                            <td class="col-sm-3"><?php echo $this->lang->line('father_name'); ?></td>
                            <td class="col-sm-9">: <?php echo $student['father_name']; ?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php if ($sch_setting->father_phone) {  ?>
                            <td><?php echo $this->lang->line('father_phone'); ?></td>
                            <td>: <?php echo $student['father_phone']; ?></td>
                    </tr>
                <?php }
                                        if ($sch_setting->father_occupation) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('father_occupation'); ?></td>
                        <td>: <?php echo $student['father_occupation']; ?></td>
                    </tr>
                <?php }
                                        if ($sch_setting->mother_name) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('mother_name'); ?></td>
                        <td>: <?php echo $student['mother_name']; ?></td>
                    <?php }
                                        if ($sch_setting->mother_phone) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('mother_phone'); ?></td>
                        <td>: <?php echo $student['mother_phone']; ?></td>

                    </tr>
                <?php }
                                        if ($sch_setting->mother_occupation) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('mother_occupation'); ?></td>
                        <td>: <?php echo $student['mother_occupation']; ?></td>
                    </tr>
                <?php } ?>
                <tr>

                    <td><?php if ($sch_setting->guardian_name) { ?><?php echo $this->lang->line('guardian_name');
                                                                } ?></td>
                    <td>: <?php if ($sch_setting->guardian_name) { ?><?php echo $student['guardian_name'];
                                                                    } ?></td>
                </tr>
                <?php if ($sch_setting->guardian_email) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('guardian_email'); ?></td>
                        <td>: <?php echo $student['guardian_email']; ?></td>
                    </tr>
                <?php }
                                        if ($sch_setting->guardian_relation) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('guardian_relation'); ?></td>
                        <td>: <?php echo $student['guardian_relation']; ?></td>
                    </tr>
                <?php }
                                        if ($sch_setting->guardian_phone) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('guardian_phone'); ?></td>
                        <td>: <?php echo $student['guardian_phone']; ?></td>
                    </tr>
                <?php }
                                        if ($sch_setting->guardian_occupation) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('guardian_occupation'); ?></td>
                        <td>: <?php echo $student['guardian_occupation']; ?></td>
                    </tr>
                <?php }
                                        if ($sch_setting->guardian_address) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('guardian_address'); ?></td>
                        <td>: <?php echo $student['guardian_address']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
        <?php } ?>
        </table>
        <hr class="batas">
        <table class="tabel">
            <tr>
                <td>
                    <h3>D. ASRAMA ANAK</h3>
                </td>
            </tr>
            <?php if ($sch_setting->hostel_id) {
                if ($this->module_lib->hasActive('hostel')) {

                    if ($student['hostel_room_id'] != 0) {
            ?>

                        <tr>
                            <td class="col-sm-3"><?php echo $this->lang->line('hostel'); ?></td>
                            <td class="col-sm-9">: <?php echo $student['hostel_name']; ?></td>
                        </tr>
                        <tr>
                            <td class="col-sm-3"><?php echo $this->lang->line('room_no'); ?></td>
                            <td class="col-sm-9">: <?php echo $student['room_no']; ?></td>
                        </tr>
                        <tr>
                            <td class="col-sm-3"><?php echo $this->lang->line('room_type'); ?></td>
                            <td class="col-sm-9">: <?php echo $student['room_type']; ?></td>
                        </tr>

            <?php
                    }
                }
            }
            ?>

        </table>
        <hr class="batas">
        <table class="tabel">
            <tr>
                <td colspan="2">
                    <h3>E. NOMOR REKENING / TABUNGAN ANAK</h3>
                </td>
            </tr>
            <?php if ($sch_setting->ifsc_code) { ?>
                <tr>
                    <td class="col-sm-3"><?php echo $this->lang->line('bank_name'); ?></td>
                    <td class="col-sm-9">: <?php echo $student['bank_name']; ?></td>
                </tr>
            <?php }
            if ($sch_setting->bank_account_no) { ?>
                <tr>
                    <td><?php echo $this->lang->line('bank_account_no'); ?></td>
                    <td>: <?php echo $student['bank_account_no']; ?></td>
                </tr>
            <?php }
            if ($sch_setting->ifsc_code) { ?>
                <tr>
                    <td><?php echo $this->lang->line('ifsc_code'); ?></td>
                    <td>: <?php echo $student['ifsc_code']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <hr class="batas">
        <table class="tabel">
            <tr>
                <td colspan="2">
                    <h3>F. PROGRAM BANTUAN SOSIAL / PEMERINTAH</h3>
                </td>
            </tr>
            <?php
            if ($sch_setting->national_identification_no) { ?>
                <tr>
                    <td class="col-sm-3"><?php echo $this->lang->line('national_identification_no'); ?></td>
                    <td class="col-sm-9">: <?php echo $student['adhar_no']; ?></td>
                </tr>
            <?php }
            if ($sch_setting->local_identification_no) { ?>
                <tr>
                    <td><?php echo $this->lang->line('local_identification_no'); ?></td>
                    <td>: <?php echo $student['samagra_id']; ?></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
    </div>
</body>

</html>