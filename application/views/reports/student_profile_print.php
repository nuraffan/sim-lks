<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
    @media print {

        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12 {
            float: left;
        }

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

        .col-sm-pull-12 {
            right: 100%;
        }

        .col-sm-pull-11 {
            right: 91.66666667%;
        }

        .col-sm-pull-10 {
            right: 83.33333333%;
        }

        .col-sm-pull-9 {
            right: 75%;
        }

        .col-sm-pull-8 {
            right: 66.66666667%;
        }

        .col-sm-pull-7 {
            right: 58.33333333%;
        }

        .col-sm-pull-6 {
            right: 50%;
        }

        .col-sm-pull-5 {
            right: 41.66666667%;
        }

        .col-sm-pull-4 {
            right: 33.33333333%;
        }

        .col-sm-pull-3 {
            right: 25%;
        }

        .col-sm-pull-2 {
            right: 16.66666667%;
        }

        .col-sm-pull-1 {
            right: 8.33333333%;
        }

        .col-sm-pull-0 {
            right: auto;
        }

        .col-sm-push-12 {
            left: 100%;
        }

        .col-sm-push-11 {
            left: 91.66666667%;
        }

        .col-sm-push-10 {
            left: 83.33333333%;
        }

        .col-sm-push-9 {
            left: 75%;
        }

        .col-sm-push-8 {
            left: 66.66666667%;
        }

        .col-sm-push-7 {
            left: 58.33333333%;
        }

        .col-sm-push-6 {
            left: 50%;
        }

        .col-sm-push-5 {
            left: 41.66666667%;
        }

        .col-sm-push-4 {
            left: 33.33333333%;
        }

        .col-sm-push-3 {
            left: 25%;
        }

        .col-sm-push-2 {
            left: 16.66666667%;
        }

        .col-sm-push-1 {
            left: 8.33333333%;
        }

        .col-sm-push-0 {
            left: auto;
        }

        .col-sm-offset-12 {
            margin-left: 100%;
        }

        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }

        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }

        .col-sm-offset-9 {
            margin-left: 75%;
        }

        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }

        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }

        .col-sm-offset-6 {
            margin-left: 50%;
        }

        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }

        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }

        .col-sm-offset-3 {
            margin-left: 25%;
        }

        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }

        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }

        .col-sm-offset-0 {
            margin-left: 0%;
        }

        .visible-xs {
            display: none !important;
        }

        .hidden-xs {
            display: block !important;
        }

        table.hidden-xs {
            display: table;
        }

        tr.hidden-xs {
            display: table-row !important;
        }

        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }

        .hidden-xs.hidden-print {
            display: none !important;
        }

        .hidden-sm {
            display: none !important;
        }

        .visible-sm {
            display: block !important;
        }

        table.visible-sm {
            display: table;
        }

        tr.visible-sm {
            display: table-row !important;
        }

        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }

        img {
            position: relative;
            padding: 10px;
        }

        table.border {
            text-align: left;
            border: 1px #000 solid;
            padding: 10px;
        }

        table.border tr th {
            width: 120px;
        }

        .td250 {
            width: 150px;
        }

        .td200 {
            width: 150px;
        }

        .td20 {
            width: 20px;
        }

        .top {
            vertical-align: text-top;
            position: relative;
        }
    }
</style>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>


    <div id="html-2-pdfwrapper">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <!-- <div class="">
                <table width="100%">
                    <tr>
                        <td style="height: 100px;width: 850px;">
                            <div><img src="<?php echo base_url() ?>/uploads/print_headerfooter/staff_payslip/<?php $this->setting_model->get_payslipheader(); ?>" style="height: 100px;width: 100%;" /></div>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <h3 style="margin: 10px 0 20px;">BIODATA ANAK ASUH</h3>
                            <h4 style="margin: 10px 0 20px;"><?php echo $this->setting_model->getCurrentSchoolName(); ?></h4>
                        </td>
                    </tr>
                </table>
                <table width="100%" class="paytable2">
                    <?php
                    if (empty($student["image"])) {
                        $image = "uploads/student_images/no_image.png";
                    } else {
                        $image = $student['image'];
                    }
                    ?>
                    <tr>
                        <th><?php echo $this->lang->line('payslip'); ?> #<?php echo $result["id"] ?></th>
                        <td><?php if ($sch_setting->student_photo) { ?>
                                <img class="img-responsive img-thumbnail width150" alt="<?php echo $student['firstname'] ?>" src="<?php echo base_url() . $image ?>" alt="Image"><?php } ?>
                        </td>
                        <th class="text-right"></th>
                        <th class="text-right"><?php echo $this->lang->line('payment'); ?> <?php echo $this->lang->line('date'); ?>: <?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($result['payment_date'])); ?></th>

                    </tr>
                </table>
                <hr />
                <table width="100%" class="paytable2">

                    <tr>
                        <th width="25%"><?php echo $this->lang->line('staff_id'); ?></th>
                        <td width="25%"><?php echo $result["employee_id"] ?></td>
                        <th width="25%"><?php echo $this->lang->line("name"); ?></th>
                        <td width="25%"><?php echo $result["name"] . " " . $result["surname"] ?></td>
                    </tr>
                    <tr>
                        <?php if ($sch_setting->staff_department) { ?>
                            <th><?php echo $this->lang->line('department'); ?></th>
                            <td><?php echo $result["department"] ?></td>
                        <?php }
                        if ($sch_setting->staff_designation) { ?>

                            <th><?php echo $this->lang->line('designation'); ?></th>
                            <td><?php echo $result["designation"] ?></td>
                        <?php } ?>
                    </tr>
                </table>
                <br />
                <table class="earntable table table-striped table-responsive">
                    <tr>
                        <th width="19%"><?php echo $this->lang->line('earning'); ?></th>
                        <th width="16%" class="pttright reborder"><?php echo $this->lang->line('amount'); ?>(<?php echo $currency_symbol; ?>)</th>
                        <th width="20%" class="pttleft"><?php echo $this->lang->line('deduction'); ?></th>
                        <th width="16%" class="text-right"><?php echo $this->lang->line('amount'); ?>(<?php echo $currency_symbol; ?>)</th>
                    </tr>
                    <?php
                    $j = 0;

                    foreach ($allowance as $key => $value) {
                    ?>
                        <tr>

                            <?php if (array_key_exists($j, $positive_allowance)) { ?>
                                <td><?php echo $positive_allowance[$j]["allowance_type"]; ?></td>
                                <td class="pttright reborder"><?php echo $positive_allowance[$j]["amount"]; ?></td>
                            <?php } ?>
                            <?php if (array_key_exists($j, $negative_allowance)) { ?>

                                <td class="pttleft"><?php echo $negative_allowance[$j]["allowance_type"]; ?></td>
                                <td class="text-right"><?php echo $negative_allowance[$j]["amount"]; ?></td>
                            <?php } ?>
                        </tr>
                    <?php
                        $j++;
                    }
                    ?>

                    <tr>
                        <th><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('earning'); ?></th>
                        <th class="pttright reborder"><?php echo $result["total_allowance"] ?></th>
                        <th class="pttleft"><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('deduction'); ?></th>
                        <th class="text-right"><?php echo $result["total_deduction"] ?></th>
                    </tr>
                </table>

                <table class="totaltable table table-striped table-responsive">
                    <tr>
                        <th width="20%"><?php echo $this->lang->line('payment'); ?> <?php echo $this->lang->line('mode'); ?></th>
                        <td><?php echo $payment_mode[$result["payment_mode"]]; ?></td>
                    </tr>
                    <tr>
                        <th width="20%"><?php echo $this->lang->line('basic_salary'); ?>(<?php echo $currency_symbol; ?>)</th>
                        <td><?php echo $result["basic"] ?></td>
                    </tr>

                    <tr>
                        <th width="20%"><?php echo $this->lang->line('gross_salary'); ?>(<?php echo $currency_symbol; ?>)</th>
                        <td><?php echo $result["basic"] + $result["total_allowance"] - $result["total_deduction"]; ?></td>
                    </tr>
                    <?php if (!empty($result["tax"])) { ?>

                        <tr>
                            <th width="20%"><?php echo $this->lang->line('tax'); ?>(<?php echo $currency_symbol; ?>)</th>
                            <td><?php echo $result["tax"] ?></td>
                        </tr>


                    <?php }
                    ?>
                    <tr>
                        <th width="20%"><?php echo $this->lang->line('net_salary'); ?>(<?php echo $currency_symbol; ?>)</th>
                        <td><?php echo $result["net_salary"] ?></td>
                    </tr>
                    <tr>


                        <td align:"center">
                            <div style="position: absolute;left:15px"><?php $this->setting_model->get_payslipfooter(); ?> <p></p>
                            </div>

                        </td>
                    </tr>

                </table>

            </div> -->

                <div class="">
                    <table width="100%">
                        <tr>
                            <td style="height: 100px;width: 850px;">
                                <div><img src="<?php echo base_url() ?>/uploads/print_headerfooter/staff_payslip/<?php $this->setting_model->get_payslipheader(); ?>" style="height: 100px;width: 100%;" /></div>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <h3 style="margin: 10px 0 20px;">BIODATA ANAK ASUH</h3>
                                <h4 style="margin: 10px 0 20px;"><?php echo $this->setting_model->getCurrentSchoolName(); ?></h4>
                            </td>
                        </tr>
                    </table>
                    <?php
                    if (empty($resultlist)) {
                    ?>
                        <div class="alert alert-info">
                            <?php echo $this->lang->line('no_record_found'); ?>
                        </div>

                        <?php
                    } else {
                        $count = 1;
                        $no = 0;
                        foreach ($resultlist as $student) {
                            $no++;
                            if (empty($student["image"])) {
                                $image = "uploads/student_images/no_image.png";
                            } else {
                                $image = $student['image'];
                            }
                        ?>
                            <table width="100%" class="border">
                                <tr>
                                    <td rowspan="9" class="td200"><?php if ($sch_setting->student_photo) { ?>
                                            <img class="img-responsive img-thumbnail" width="113.38582677" height="151.18110236" alt="<?php echo $student['firstname'] ?>" src="<?php echo base_url() . $image ?>" alt="Image">
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="9" class="td20 top"><?= $no ?>.</td>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td><?php echo $student['firstname'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>:</td>
                                    <td><?php echo $student['middlename'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>:</td>
                                    <td><?php
                                        if ($student["dob"] != null && $student["dob"] != '0000-00-00') {
                                            echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($student['dob']));
                                        } ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat Asal</th>
                                    <td>:</td>
                                    <td><?php echo $student['permanent_address'] ?></td>
                                </tr>
                                <tr>
                                    <th>Status Keluarga</th>
                                    <td class="">:</td>
                                    <td><?php echo $student['category'] ?></td>
                                </tr>
                                <tr>
                                    <th>Pendidikan</th>
                                    <td>:</td>
                                    <td><?php echo $student['cast'] ?></td>
                                </tr>
                                <tr>
                                    <th>Domisili</th>
                                    <td>:</td>
                                    <td><?php echo $student['house_name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>:</td>
                                    <td><?php echo $student['class'] . " " . "(" . $student['section'] . ")" ?></td>
                                </tr>
                            </table>
                    <?php
                            $count++;
                        }
                    }
                    ?>
                </div>
                <div class="footer">
                    <span>
                        <div style="width: 300px;float:right;text-transform: capitalize;margin-top: 20;text-align: center;">
                            <?php $this->setting_model->get_kota(); ?>, <?php echo date("d F Y"); ?>
                            <p style="margin-block-end: 0em;">Mengetahui,</p>
                            <p style="margin-block-start: 0em;">Ketua Lembaga</p>
                            <br><br><br>
                            <p style="font-size: 18px;font-weight: bold;">
                                <?php $this->setting_model->get_ketua(); ?>
                            </p>
                    </span>
                </div>

                <!-- <?php $this->setting_model->get_payslipfooter(); ?> -->
                <!-- <div>
                    <div style="width: 300px;float:right;padding: 30;text-align: center;text-transform: capitalize;">
                        Denpasar, 10 Maret 2012
                        <br>
                        Mengetahu,<br>
                        Ketua
                        <br><br><br><br>
                        <p>nama<br />
                            NIP. 1234</p>
                    </div>
                    <div style="clear:both"></div>
                </div> -->
            </div>
            <!--/.col (left) -->
        </div>


    </div>
</body>

</html>