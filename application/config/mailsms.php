<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


// Config variables

$config['mailsms'] = array(
    'student_admission' => 'student_admission',
    'exam_result' => 'exam_result',
    'fee_submission' => 'fee_submission',
    'absent_attendence' => 'absent_attendence',
    'login_credential' => 'login_credential',
    'fees_reminder' => 'fees_reminder',
    'homework' => 'homework',
    'alumni_student' => 'alumni_student',
    'online_classes' => 'online_classes',
    'online_meeting' => 'online_meeting',
    'forgot_password' => 'forgot_password',
    'online_examination_publish_exam' => 'online_examination_publish_exam',
    'online_examination_publish_result' => 'online_examination_publish_result',
);
$config['smtp_encryption'] = array(
    '' => 'OFF',
    'ssl' => 'SSL',
    'tls' => 'TLS',
);

$config['smtp_auth'] = array(
    'true' => 'ON',
    'false' => 'OFF'
);

$config['attendence'] = array(
    'present' => 1,
    'late_with_excuse' => 2,
    'late' => 3,
    'absent' => 4,
    'holiday' => 5,
    'half_day' => 6
);


$config['attendence_exam'] = array(
    'absent' => 'absent'
);
$config['perm_category'] = array('can_view', 'can_add', 'can_edit', 'can_delete');

$config['bloodgroup'] = array('1' => 'Yatim/Piatu', '2' => 'Ditelantarkan', '3' => 'Miskin/Tidak Mampu', '4' => 'Sulit diatur/tidak disiplin', '5' => 'Cacat', '6' => 'Korban kekerasan', '7' => 'Korban konflik', '8' => 'Korban bencana alam', '9' => 'Putusan Pengadilan', '10' => 'Pendidikan', '11' => 'Pendidikan Agama');

$config['cast'] = array('1' => 'Belum Sekolah', '2' => 'PAUD / TK', '3' => 'SD/MI/Sederajat', '4' => 'SMP/MTS/Sederajat', '5' => 'SMA/MA/SMK/Sederajat', '6' => 'D1', '7' => 'D2', '8' => 'D3', '9' => 'S1/D4', '10' => 'S2', '11' => 'S3');


$config['question_type'] = array(
    'singlechoice' => 'Single Choice',
    'multichoice' => 'Multiple Choice',
    'true_false' => 'True/False',
    'descriptive' => 'Descriptive'
);

$config['question_level'] = array(
    'low' => 'Low',
    'medium' => 'Medium',
    'high' => 'High'
);

$config['question_true_false'] = array(
    'true' => 'TRUE',
    'false' => 'FALSE'
);
