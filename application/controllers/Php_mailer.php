<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Php_mailer extends CI_Controller {

	function test_mail(){
	   // load library email


                $code = $this->input->post('tcode');
                $cap = $_SESSION['captcha'];


                if (empty($cap) || trim(strtolower($code)) != $cap) {
                        $this->session->set_flashdata('salah', 'Please enter correct Captcha text!');
                        echo "<script> window.history.back();</script>";
                                // redirect(base_url("index.php/contact"));
                }else {

                        $from = $this->input->post('txtEmail');
                        $name = $this->input->post('txtName');
                        $subject =      $this->input->post('txtSubject');
                        $msg =  $this->input->post('txtMsg');


                        $this->load->library('PHPMailerAutoload');

                        error_reporting(E_STRICT);
                        $mail = new PHPMailer();
                        $mail->SMTPDebug = 2;
                        $mail->Debugoutput = 'html';

        // set smtp
                        // $mail->isSMTP();
                        // $mail->Host = 'mx1.idhostinger.com';
                        // $mail->Port = '2525';
                        // $mail->SMTPAuth = true;
                        // $mail->Username = 'fajar_v1@fajar-isnandio.com';
                        // $mail->Password = 'fajar123';
                        // $mail->WordWrap = 50;
        // set email content
                        $mail->setFrom($from, $name);
                        $mail->AddReplyTo($from, $name);

                        // $mail->addAddress('bhineka@cbn.net.id', 'PT Astelas');
                        $mail->addAddress('kresnata@kemangga.com', 'PT Astelas');
                        $mail->Subject = $subject;
                        // $mail->Body = $msg;
                        $mail->MsgHTML($msg);

                        $mail->send();


                        $this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
                        echo "<script>location.href='".base_url('index.php/contact')."' </script>";
                        // redirect(base_url("index.php/contact"));
                }

        }
}
?>
