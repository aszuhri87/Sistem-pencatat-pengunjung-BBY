<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Session;
use Mews\Captcha\Captcha;
use Illuminate\Auth\Events\Validated;
use Validator;

use Illuminate\Http\Request;

class PermohonanController extends Controller
{

    public function validator(array $data)
  {
    // custom error message for valid_captcha validation rule
    $messages  = [
      'valid_captcha' => 'Kode salah. Mohon isi dengan benar.'
    ];

    return Validator::make($data, [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
      'CaptchaCode' => 'required|valid_captcha'
    ], $messages);
  }
    function showContactForm(){
        return view('pengunjung/permohonan');
    }

    function sendMail(Request $request){

        $validator = $this->validator($request->all());

        if ($validator->fails())
        {
          return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }


        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'bukutamu.bby@gmail.com';                 // SMTP username
            $mail->Password = 'balaibahasa';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, $name);

            // Siapa yang akan menerima email
             $mail->addAddress('bukutamu.bby@gmail.com', 'BBY');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
             $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();


            return redirect()
            ->back()
            ->with('status', 'Pesan anda telah terkirim! Cek secara berkala email anda, karena kami akan mengirimkan email untuk membalas pesan permohonan anda');


            // $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            // return view('pengunjung/permohonan');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }



    }

    // public function create()
    // {
    //     return view('pengunjung/permohonan');
    // }
    // public function captchaValidate(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //         'captcha' => 'required|captcha'
    //     ]);
    // }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
