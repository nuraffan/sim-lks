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

    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/jquery.mCustomScrollbar.min.css">
    <?php
    $this->load->view('layout/theme');
    ?>
</head>

<body>

    <?php
    $currency_symbol = $this->customlib->getSchoolCurrencyFormat();
    ?>
    <style type="text/css">
        /*.table td:last-child, th:last-child {float: none;text-align: start;}*/
    </style>
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <section class="content-header" style="padding-right: 0;">
                    <h1>
                        <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('student_information'); ?> <small><?php echo $this->lang->line('student1'); ?></small>
                    </h1>

                </section>
            </div>


        </div>

        <section class="content">
            <div class="row">
                <div><img src="<?php echo base_url() ?>/uploads/print_headerfooter/staff_payslip/<?php $this->setting_model->get_payslipheader(); ?>" style="height: 100px;width: 100%;" /></div>
                <div class="col-md-3">

                    <div class="box box-primary" <?php
                                                    if ($student["is_active"] == "no") {
                                                        echo "style='background-color:#f0dddd;'";
                                                    }
                                                    ?>>
                        <div class="box-body box-profile">
                            <?php if ($sch_setting->student_photo) { ?>
                                <img class="profile-user-img img-responsive img-circle" src="<?php
                                                                                                if (!empty($student["image"])) {
                                                                                                    echo base_url() . $student["image"];
                                                                                                } else {

                                                                                                    if ($student['gender'] == 'Female') {
                                                                                                        echo base_url() . "uploads/student_images/default_female.jpg";
                                                                                                    } else {
                                                                                                        echo base_url() . "uploads/student_images/default_male.jpg";
                                                                                                    }
                                                                                                }
                                                                                                ?>" alt="User profile picture">
                            <?php } ?>
                            <h3 class="profile-username text-center"><?php echo $student['firstname']; ?></h3>

                            <ul class="list-group list-group-unbordered">
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

                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('admission_no'); ?></b> <a class="pull-right text-aqua"><?php echo $student['admission_no']; ?></a>
                                </li>
                                <?php
                                if ($sch_setting->roll_no) { ?>
                                    <li class="list-group-item listnoback">
                                        <b><?php echo $this->lang->line('roll_no'); ?></b> <a class="pull-right text-aqua"><?php echo $student['roll_no']; ?></a>
                                    </li>
                                <?php
                                } ?>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('class'); ?></b> <a class="pull-right text-aqua"><?php echo $student['class'] . " (" . $session . ")"; ?></a>
                                </li>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('section'); ?></b> <a class="pull-right text-aqua"><?php echo $student['section']; ?></a>
                                </li>
                                <?php if ($sch_setting->rte) { ?>
                                    <li class="list-group-item listnoback">
                                        <b><?php echo $this->lang->line('rte'); ?></b> <a class="pull-right text-aqua"><?php echo $student['rte']; ?></a>
                                    </li>
                                <?php } ?>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('gender'); ?></b> <a class="pull-right text-aqua"><?php echo $this->lang->line(strtolower($student['gender'])); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    if (!empty($siblings)) {
                    ?>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $this->lang->line('sibling'); ?></h3>
                            </div>
                            <!-- /.box-header -->

                            <div class="box-body">
                                <?php
                                foreach ($siblings as $sibling_key => $sibling_value) {
                                ?>
                                    <div class="box box-widget widget-user-2">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="siblingview">
                                            <img class="" src="<?php echo base_url() . $sibling_value->image; ?>" alt="User Avatar">
                                            <h4><a href="<?php echo site_url('student/view/' . $sibling_value->id) ?>"><?php echo $student['firstname']; ?></a></h4>
                                        </div>
                                        <div class="box-footer no-padding">
                                            <ul class="list-group list-group-unbordered">
                                                <li class="list-group-item">
                                                    <b><?php echo $this->lang->line('admission_no'); ?></b> <a class="pull-right text-aqua"><?php echo $sibling_value->admission_no; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b><?php echo $this->lang->line('class'); ?></b> <a class="pull-right text-aqua"><?php echo $sibling_value->class; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b><?php echo $this->lang->line('section'); ?></b> <a class="pull-right text-aqua"><?php echo $sibling_value->section; ?></a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                            <!-- /.box-body -->
                        </div>

                    <?php
                    }
                    ?>

                </div>
                <div class="col-md-9">
                    <div class="nav-tabs-custom theme-shadow">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <div class="tshadow mb25 bozero">
                                    <div class="table-responsive around10 pt0">
                                        <table class="table table-hover table-striped tmb0">
                                            <tbody>
                                                <?php if ($sch_setting->admission_date) {  ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('admission_date'); ?></td>
                                                        <td class="col-md-5">
                                                            <?php
                                                            if (!empty($student['admission_date'])) {

                                                                echo date($this->customlib->dateformat($student['admission_date']));
                                                            }
                                                            ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td><?php echo $this->lang->line('date_of_birth'); ?></td>
                                                    <td><?php
                                                        if (!empty($student['admission_date']) && $student['admission_date'] != '0000-00-00') {
                                                            echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                                        }
                                                        ?></td>
                                                </tr>
                                                <?php if ($sch_setting->category) {  ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('category'); ?></td>
                                                        <td>
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
                                                        <td class="col-md-5"><?php echo $student['blood_group']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->is_student_house) { ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('house'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['house_name']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->student_height) {  ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('height'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['height']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->student_weight) { ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('weight'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['weight']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->measurement_date) { ?>
                                                    <!-- <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('measurement_date'); ?></td>
                                                <td  class="col-md-5"><?php
                                                                        if (!empty($student['measurement_date']) && $student['measurement_date'] != '0000-00-00') {
                                                                            echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['measurement_date']));
                                                                        }
                                                                        ?></td>
                                            </tr> -->
                                                <?php }
                                                if ($sch_setting->previous_school_details) {  ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('previous_school_details'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['previous_school']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->mobile_no) {  ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('mobile_no'); ?></td>
                                                        <td><?php echo $student['mobileno']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->cast) {  ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('cast'); ?></td>
                                                        <td><?php echo $student['cast']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->religion) {  ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('religion'); ?></td>
                                                        <td><?php echo $student['religion']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->student_email) {  ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('email'); ?></td>
                                                        <td><?php echo $student['email']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php
                                                $cutom_fields_data = get_custom_table_values($student['id'], 'students');
                                                if (!empty($cutom_fields_data)) {
                                                    foreach ($cutom_fields_data as $field_key => $field_value) {
                                                ?>
                                                        <tr>
                                                            <td><?php echo $field_value->name; ?></td>
                                                            <td>
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
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tshadow mb25 bozero">
                                    <h3 class="pagetitleh2"><?php echo $this->lang->line('address'); ?> <?php echo $this->lang->line('detail'); ?></h3>
                                    <div class="table-responsive around10 pt0">
                                        <table class="table table-hover table-striped tmb0">
                                            <tbody>
                                                <?php if ($sch_setting->current_address) { ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('current_address'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['current_address']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->permanent_address) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('permanent_address'); ?></td>
                                                        <td><?php echo $student['permanent_address']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tshadow mb25 bozero">
                                    <?php if (($sch_setting->father_name) || ($sch_setting->father_phone) || ($sch_setting->father_occupation) || ($sch_setting->father_pic) || ($sch_setting->mother_name) || ($sch_setting->mother_phone) || ($sch_setting->mother_occupation) || ($sch_setting->mother_pic) || ($sch_setting->guardian_name) || ($sch_setting->guardian_occupation) || ($sch_setting->guardian_relation) || ($sch_setting->guardian_phone) || ($sch_setting->guardian_email) || ($sch_setting->guardian_pic) || ($sch_setting->guardian_address)) { ?>
                                        <h3 class="pagetitleh2"><?php echo $this->lang->line('parent'); ?> / <?php echo $this->lang->line('guardian_details'); ?> </h3>
                                        <div class="table-responsive around10 pt10">
                                            <table class="table table-hover table-striped tmb0">
                                                <?php if ($sch_setting->father_name) {  ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('father_name'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['father_name']; ?></td>
                                                        <td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="<?php
                                                                                                                                        if (!empty($student["father_pic"])) {
                                                                                                                                            echo base_url() . $student["father_pic"];
                                                                                                                                        } else {
                                                                                                                                            echo base_url() . "uploads/student_images/no_image.png";
                                                                                                                                        }
                                                                                                                                        ?>"></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->father_phone) {  ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('father_phone'); ?></td>
                                                        <td><?php echo $student['father_phone']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->father_occupation) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('father_occupation'); ?></td>
                                                        <td><?php echo $student['father_occupation']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->mother_name) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('mother_name'); ?></td>
                                                        <td><?php echo $student['mother_name']; ?></td>
                                                        <td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="<?php
                                                                                                                                        if (!empty($student["mother_pic"])) {
                                                                                                                                            echo base_url() . $student["mother_pic"];
                                                                                                                                        } else {
                                                                                                                                            echo base_url() . "uploads/student_images/no_image.png";
                                                                                                                                        }
                                                                                                                                        ?>"></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->mother_phone) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('mother_phone'); ?></td>
                                                        <td><?php echo $student['mother_phone']; ?></td>

                                                    </tr>
                                                <?php }
                                                if ($sch_setting->mother_occupation) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('mother_occupation'); ?></td>
                                                        <td><?php echo $student['mother_occupation']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <tr>

                                                    <td><?php if ($sch_setting->guardian_name) { ?><?php echo $this->lang->line('guardian_name');
                                                                                                } ?></td>
                                                    <td><?php if ($sch_setting->guardian_name) { ?><?php echo $student['guardian_name'];
                                                                                                } ?></td>


                                                    <td rowspan="3">
                                                        <?php if ($sch_setting->guardian_pic) { ?><img class="profile-user-img img-responsive img-circle" src="<?php
                                                                                                                                                                if (!empty($student["guardian_pic"])) {
                                                                                                                                                                    echo base_url() . $student["guardian_pic"];
                                                                                                                                                                } else {
                                                                                                                                                                    echo base_url() . "uploads/student_images/no_image.png";
                                                                                                                                                                }
                                                                                                                                                                ?>"> <?php } ?></td>

                                                </tr>
                                                <?php if ($sch_setting->guardian_email) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('guardian_email'); ?></td>
                                                        <td><?php echo $student['guardian_email']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->guardian_relation) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('guardian_relation'); ?></td>
                                                        <td><?php echo $student['guardian_relation']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->guardian_phone) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('guardian_phone'); ?></td>
                                                        <td><?php echo $student['guardian_phone']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->guardian_occupation) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('guardian_occupation'); ?></td>
                                                        <td><?php echo $student['guardian_occupation']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->guardian_address) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('guardian_address'); ?></td>
                                                        <td><?php echo $student['guardian_address']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php if ($sch_setting->route_list) { ?>
                                    <?php
                                    if ($this->module_lib->hasActive('transport')) {

                                        if ($student['vehroute_id'] != 0) {
                                    ?>
                                            <div class="tshadow mb25  bozero">
                                                <h3 class="pagetitleh2"><?php echo $this->lang->line('route') . " " . $this->lang->line('details') ?></h3>

                                                <div class="table-responsive around10 pt0">
                                                    <table class="table table-hover table-striped tmb0">
                                                        <tbody>

                                                            <tr>
                                                                <td class="col-md-4"><?php echo $this->lang->line('route'); ?></td>
                                                                <td class="col-md-5"><?php echo $student['route_title']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4"><?php echo $this->lang->line('vehicle_no'); ?></td>
                                                                <td class="col-md-5"><?php echo $student['vehicle_no']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $this->lang->line('driver_name'); ?></td>
                                                                <td><?php echo $student['driver_name']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $this->lang->line('driver_contact'); ?></td>
                                                                <td><?php echo $student['driver_contact']; ?></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                <?php
                                        }
                                    }
                                }
                                ?>
                                <?php if ($sch_setting->hostel_id) {
                                    if ($this->module_lib->hasActive('hostel')) {

                                        if ($student['hostel_room_id'] != 0) {
                                ?>
                                            <div class="tshadow mb25  bozero">
                                                <h3 class="pagetitleh2"><?php echo $this->lang->line('hostel') . " " . $this->lang->line('details') ?></h3>

                                                <div class="table-responsive around10 pt0">
                                                    <table class="table table-hover table-striped tmb0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-md-4"><?php echo $this->lang->line('hostel'); ?></td>
                                                                <td class="col-md-5"><?php echo $student['hostel_name']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4"><?php echo $this->lang->line('room_no'); ?></td>
                                                                <td class="col-md-5"><?php echo $student['room_no']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4"><?php echo $this->lang->line('room_type'); ?></td>
                                                                <td class="col-md-5"><?php echo $student['room_type']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
                                <div class="tshadow mb25  bozero">
                                    <h3 class="pagetitleh2"><?php echo $this->lang->line('miscellaneous_details'); ?></h3>
                                    <div class="table-responsive around10 pt0">
                                        <table class="table table-hover table-striped tmb0">
                                            <tbody>
                                                <?php if ($sch_setting->ifsc_code) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('bank_name'); ?></td>
                                                        <td><?php echo $student['bank_name']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->bank_account_no) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('bank_account_no'); ?></td>
                                                        <td><?php echo $student['bank_account_no']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->ifsc_code) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('ifsc_code'); ?></td>
                                                        <td><?php echo $student['ifsc_code']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->national_identification_no) { ?>
                                                    <tr>
                                                        <td class="col-md-4"><?php echo $this->lang->line('national_identification_no'); ?></td>
                                                        <td class="col-md-5"><?php echo $student['adhar_no']; ?></td>
                                                    </tr>
                                                <?php }
                                                if ($sch_setting->local_identification_no) { ?>
                                                    <tr>
                                                        <td><?php echo $this->lang->line('local_identification_no'); ?></td>
                                                        <td><?php echo $student['samagra_id']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="fee">
                                <?php
                                if (empty($student_due_fee) && empty($student_discount_fee)) {
                                ?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->lang->line('no_record_found'); ?>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">

                                            <thead>
                                                <tr>
                                                    <th><?php echo $this->lang->line('fees_group'); ?></th>
                                                    <th><?php echo $this->lang->line('fees_code'); ?></th>
                                                    <th class="text text-left"><?php echo $this->lang->line('due_date'); ?></th>
                                                    <th class="text text-left"><?php echo $this->lang->line('status'); ?></th>
                                                    <th class="text text-right"><?php echo $this->lang->line('amount'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                    <th class="text text-left"><?php echo $this->lang->line('payment_id'); ?></th>
                                                    <th class="text text-left"><?php echo $this->lang->line('mode'); ?></th>
                                                    <th class="text text-left"><?php echo $this->lang->line('date'); ?></th>
                                                    <th class="text text-right"><?php echo $this->lang->line('discount'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                    <th class="text text-right"><?php echo $this->lang->line('fine'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                    <th class="text text-right"><?php echo $this->lang->line('paid'); ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                                    <th class="text text-right"><?php echo $this->lang->line('balance'); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total_amount = 0;
                                                $total_deposite_amount = 0;
                                                $total_fine_amount = 0;
                                                $total_discount_amount = 0;
                                                $total_balance_amount = 0;
                                                $alot_fee_discount = 0;
                                                $total_fees_fine_amount = 0;

                                                foreach ($student_due_fee as $key => $fee) {

                                                    foreach ($fee->fees as $fee_key => $fee_value) {
                                                        $fee_paid = 0;
                                                        $fee_discount = 0;
                                                        $fee_fine = 0;
                                                        $alot_fee_discount = 0;

                                                        if (!empty($fee_value->amount_detail)) {
                                                            $fee_deposits = json_decode(($fee_value->amount_detail));

                                                            foreach ($fee_deposits as $fee_deposits_key => $fee_deposits_value) {
                                                                $fee_paid = $fee_paid + $fee_deposits_value->amount;
                                                                $fee_discount = $fee_discount + $fee_deposits_value->amount_discount;
                                                                $fee_fine = $fee_fine + $fee_deposits_value->amount_fine;
                                                            }
                                                        }
                                                        $total_amount = $total_amount + $fee_value->amount;
                                                        $total_discount_amount = $total_discount_amount + $fee_discount;
                                                        $total_deposite_amount = $total_deposite_amount + $fee_paid;
                                                        $total_fine_amount = $total_fine_amount + $fee_fine;
                                                        $feetype_balance = $fee_value->amount - ($fee_paid + $fee_discount);
                                                        $total_balance_amount = $total_balance_amount + $feetype_balance;
                                                        $total_fees_fine_amount = $total_fees_fine_amount + $fee_value->fine_amount;
                                                ?>
                                                        <?php
                                                        if ($feetype_balance > 0 && strtotime($fee_value->due_date) < strtotime(date('Y-m-d'))) {
                                                        ?>
                                                            <tr class="danger font12">
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <tr class="dark-gray">
                                                            <?php
                                                        }
                                                            ?>


                                                            <td><?php
                                                                echo $fee_value->name;
                                                                ?></td>
                                                            <td><?php echo $fee_value->code; ?></td>
                                                            <td class="text text-left">

                                                                <?php
                                                                if ($fee_value->due_date == "0000-00-00") {
                                                                } else {

                                                                    echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($fee_value->due_date));
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="text text-left">
                                                                <?php
                                                                if ($feetype_balance == 0) {
                                                                ?><span class="label label-success"><?php echo $this->lang->line('paid'); ?></span><?php
                                                                                                                                                } else if (!empty($fee_value->amount_detail)) {
                                                                                                                                                    ?><span class="label label-warning"><?php echo $this->lang->line('partial'); ?></span><?php
                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                            ?><span class="label label-danger"><?php echo $this->lang->line('unpaid'); ?></span><?php
                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                ?>

                                                            </td>
                                                            <td class="text text-right"><?php echo $fee_value->amount;
                                                                                        if (($fee_value->due_date != "0000-00-00" && $fee_value->due_date != NULL) && (strtotime($fee_value->due_date) < strtotime(date('Y-m-d')))) {
                                                                                        ?>
                                                                    <span class="text text-danger"><?php echo " + " . ($fee_value->fine_amount); ?></span>
                                                                <?php
                                                                                        }
                                                                ?>
                                                            </td>

                                                            <td class="text text-left"></td>
                                                            <td class="text text-left"></td>
                                                            <td class="text text-left"></td>

                                                            <td class="text text-right"><?php
                                                                                        echo (number_format($fee_discount, 2, '.', ''));
                                                                                        ?></td>
                                                            <td class="text text-right"><?php
                                                                                        echo (number_format($fee_fine, 2, '.', ''));
                                                                                        ?></td>
                                                            <td class="text text-right"><?php
                                                                                        echo (number_format($fee_paid, 2, '.', ''));
                                                                                        ?></td>
                                                            <td class="text text-right"><?php
                                                                                        $display_none = "ss-none";
                                                                                        if ($feetype_balance > 0) {
                                                                                            $display_none = "";
                                                                                            echo (number_format($feetype_balance, 2, '.', ''));
                                                                                        }
                                                                                        ?>

                                                            </td>
                                                            </tr>

                                                            <?php
                                                            if (!empty($fee_value->amount_detail)) {

                                                                $fee_deposits = json_decode(($fee_value->amount_detail));

                                                                foreach ($fee_deposits as $fee_deposits_key => $fee_deposits_value) {
                                                            ?>
                                                                    <tr class="white-td">
                                                                        <td class="text-left"></td>
                                                                        <td class="text-left"></td>
                                                                        <td class="text-left"></td>
                                                                        <td class="text-left"></td>
                                                                        <td class="text-right"><img src="<?php echo base_url(); ?>backend/images/table-arrow.png" alt="" /></td>
                                                                        <td class="text text-left">


                                                                            <a href="#" data-toggle="popover" class="detail_popover"> <?php echo $fee_value->student_fees_deposite_id . "/" . $fee_deposits_value->inv_no; ?></a>
                                                                            <div class="fee_detail_popover" style="display: none">
                                                                                <?php
                                                                                if ($fee_deposits_value->description == "") {
                                                                                ?>
                                                                                    <p class="text text-danger"><?php echo $this->lang->line('no_description'); ?></p>
                                                                                <?php
                                                                                } else {
                                                                                ?>
                                                                                    <p class="text text-info"><?php echo $fee_deposits_value->description; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>


                                                                        </td>
                                                                        <td class="text text-left"><?php echo $fee_deposits_value->payment_mode; ?></td>
                                                                        <td class="text text-center">

                                                                            <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($fee_deposits_value->date)); ?>
                                                                        </td>
                                                                        <td class="text text-right"><?php echo (number_format($fee_deposits_value->amount_discount, 2, '.', '')); ?></td>
                                                                        <td class="text text-right"><?php echo (number_format($fee_deposits_value->amount_fine, 2, '.', '')); ?></td>
                                                                        <td class="text text-right"><?php echo (number_format($fee_deposits_value->amount, 2, '.', '')); ?></td>
                                                                        <td></td>
                                                                    </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                    <?php
                                                    }
                                                }
                                                    ?>
                                                    <?php
                                                    if (!empty($student_discount_fee)) {

                                                        foreach ($student_discount_fee as $discount_key => $discount_value) {
                                                    ?>
                                                            <tr class="dark-light">
                                                                <td align="left"> <?php echo $this->lang->line('discount'); ?> </td>
                                                                <td align="left">
                                                                    <?php echo $discount_value['code']; ?>
                                                                </td>
                                                                <td align="left"></td>
                                                                <td align="left" class="text text-left">
                                                                    <?php
                                                                    if ($discount_value['status'] == "applied") {
                                                                    ?>
                                                                        <a href="#" data-toggle="popover" class="detail_popover">

                                                                            <?php echo $this->lang->line('discount_of') . " " . $currency_symbol . $discount_value['amount'] . " " . $this->lang->line($discount_value['status']) . " : " . $discount_value['payment_id']; ?>

                                                                        </a>
                                                                        <div class="fee_detail_popover" style="display: none">
                                                                            <?php
                                                                            if ($discount_value['student_fees_discount_description'] == "") {
                                                                            ?>
                                                                                <p class="text text-danger"><?php echo $this->lang->line('no_description'); ?></p>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <p class="text text-danger"><?php echo $discount_value['student_fees_discount_description'] ?></p>
                                                                            <?php
                                                                            }
                                                                            ?>

                                                                        </div>
                                                                    <?php
                                                                    } else {
                                                                        echo '<p class="text text-danger">' . $this->lang->line('discount_of') . " " . $currency_symbol . $discount_value['amount'] . " " . $this->lang->line($discount_value['status']);
                                                                    }
                                                                    ?>

                                                                </td>
                                                                <td></td>
                                                                <td class="text text-left"></td>
                                                                <td class="text text-left"></td>
                                                                <td class="text text-left"></td>
                                                                <td class="text text-right">
                                                                    <?php
                                                                    $alot_fee_discount = $alot_fee_discount;
                                                                    ?>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>

                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                    <tr class="box box-solid total-bg">
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text text-right"> </td>
                                                        <td class="text text-right"><?php
                                                                                    echo $currency_symbol . number_format($total_amount, 2, '.', '') . "<span class='text text-danger'>+" .  number_format($total_fees_fine_amount, 2, '.', '') . "</span>";
                                                                                    ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text text-right"><?php
                                                                                    echo ($currency_symbol . number_format($total_discount_amount + $alot_fee_discount, 2, '.', ''));
                                                                                    ?></td>
                                                        <td class="text text-right"><?php
                                                                                    echo ($currency_symbol . number_format($total_fine_amount, 2, '.', ''));
                                                                                    ?></td>
                                                        <td class="text text-right"><?php
                                                                                    echo ($currency_symbol . number_format($total_deposite_amount, 2, '.', ''));
                                                                                    ?></td>

                                                        <td class="text text-right"><?php
                                                                                    echo ($currency_symbol . number_format($total_balance_amount - $alot_fee_discount, 2, '.', ''));
                                                                                    ?></td>

                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                            <div class="tab-pane" id="documents">
                                <div class="timeline-header no-border">
                                    <button type="button" data-student-session-id="<?php echo $student['student_session_id'] ?>" class="btn btn-xs btn-primary pull-right myTransportFeeBtn"> <i class="fa fa-upload"></i> <?php echo $this->lang->line('upload_documents'); ?></button>
                                    <div class="table-responsive" style="clear: both;">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <?php echo $this->lang->line('title'); ?>
                                                    </th>
                                                    <th>
                                                        <?php echo $this->lang->line('file'); ?> <?php echo $this->lang->line('name'); ?>
                                                    </th>
                                                    <th class="mailbox-date text-right">
                                                        <?php echo $this->lang->line('action'); ?>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <div class="row">
                                                <tbody>
                                                    <?php
                                                    if (empty($student_doc)) {
                                                    ?>
                                                        <tr>
                                                            <td colspan="5" class="text-danger text-center"><?php echo $this->lang->line('no_record_found'); ?></td>
                                                        </tr>
                                                        <?php
                                                    } else {
                                                        foreach ($student_doc as $value) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $value['title']; ?></td>
                                                                <td><?php echo $value['doc']; ?></td>
                                                                <td class="mailbox-date pull-right">
                                                                    <a href="<?php echo base_url(); ?>student/download/<?php echo $value['student_id'] . "/" . $value['doc']; ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('download'); ?>">
                                                                        <i class="fa fa-download"></i>
                                                                    </a>
                                                                    <a href="<?php echo base_url(); ?>student/doc_delete/<?php echo $value['id'] . "/" . $value['student_id']; ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                                        <i class="fa fa-remove"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                </table>
                            </div>

                            <div class="tab-pane" id="timelineh">
                                <div><?php if ($this->rbac->hasPrivilege('student_timeline', 'can_add')) { ?>
                                        <button type="button" id="myTimelineButton" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add') ?></button>

                                    <?php } ?>
                                </div>


                                <br />
                                <div class="timeline-header no-border">
                                    <div id="timeline_list">
                                        <?php
                                        if (empty($timeline_list)) {
                                        ?>
                                            <br />
                                            <div class="alert alert-info"><?php echo $this->lang->line("no_record_found") ?></div>



                                        <?php } else {
                                        ?>

                                            <ul class="timeline timeline-inverse">
                                                <?php
                                                foreach ($timeline_list as $key => $value) {
                                                ?>
                                                    <li class="time-label">
                                                        <span class="bg-blue"> <?php
                                                                                echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($value['timeline_date']));
                                                                                ?></span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-list-alt bg-blue"></i>
                                                        <div class="timeline-item">
                                                            <?php if ($this->rbac->hasPrivilege('student_timeline', 'can_delete')) { ?>
                                                                <span class="time"><a class="defaults-c text-right" data-toggle="tooltip" title="" onclick="delete_timeline('<?php echo $value['id']; ?>')" data-original-title="<?php echo $this->lang->line('delete'); ?>"><i class="fa fa-trash"></i></a></span>
                                                            <?php } ?>
                                                            <?php if (!empty($value["document"])) { ?>
                                                                <span class="time"><a class="defaults-c text-right" style="color:#0084B4" data-toggle="tooltip" title="" href="<?php echo base_url() . "admin/timeline/download/" . $value["id"] . "/" . $value["document"] ?>" data-original-title="<?php echo $this->lang->line('download'); ?>"><i class="fa fa-download"></i></a></span>
                                                            <?php } ?>
                                                            <h3 class="timeline-header text-aqua"> <?php echo $value['title']; ?> </h3>
                                                            <div class="timeline-body">
                                                                <?php echo $value['description']; ?>

                                                            </div>

                                                        </div>
                                                    </li>

                                                <?php } ?>
                                                <li><i class="fa fa-clock-o bg-gray"></i></li>
                                            <?php } ?>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>