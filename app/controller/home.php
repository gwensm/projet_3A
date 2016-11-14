<?php
require "lib/mail.class.php";
//Chargement du model
include_once('app/model/home.php');

class Controller extends appController
{

  function __construct()
  {
    parent::__construct();
    // include du model
    $this->model = new Model();

    // si on est sur le module = home et qu'on reçoit un POST
    if (isset($_POST['email']))
    {
      $email = $_POST["email"];
      $name = $_POST["name"];
      $job = $_POST["job"];
      $message = $_POST["message"];

      // appel de la methode insertContact
      $this->insertContact($email, $name, $job, $message);
    }
    else if(isset($_POST['newsletter_mail'])){
      $email = $_POST['newsletter_mail'];

      $this->insertNewsletter($email);
    }
    else{
      $this->index(0,5);
    }

  }

  function index($limite, $offset)
  {
    define("PAGE_TITLE", "Page d'attente Pronto !");
    $this->load->view('home', 'home.php');
  }

  function insertContact ($email, $name, $job, $message)
  {
    //on appelle la methode contact dans du model
    $data = $this->model->contact($email, $name, $job, $message);

    // si return true on passe la notif ok dans l'url
    if($data)
    {
      header("Location:?module=home&contact=ok");
    }
    else
    {
      header("Location:?module=home&contact=nok");
    }
  }
  function insertNewsletter ($email){

      try {
        $mail_obj = new Mail('alexanrda.angehrn@eemi.com', 'Pronto', 'alexandra.angehrn@eemi.com');
        $mail_obj->ajouter_destinataire($email);
        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml"><head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
              <title>Confirmation d\'inscrition à la newsletter Pronto</title>



        <style type="text/css">
        		#outlook a{
        			padding:0;
        		}
        		body{
        			width:100% !important;
        			-webkit-text-size-adjust:100%;
        			-ms-text-size-adjust:100%;
        			margin:0;
        			padding:0;
        		}
        		.ExternalClass{
        			width:100%;
        		}
        		.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
        			line-height:100%;
        		}
        		#backgroundTable{
        			margin:0;
        			padding:0;
        			width:100% !important;
        			line-height:100% !important;
        		}
        		img{
        			outline:none;
        			text-decoration:none;
        			border:none;
        			-ms-interpolation-mode:bicubic;
        		}
        		a img{
        			border:none;
        		}
        		.image_fix{
        			display:block;
        		}
        		p{
        			margin:0px 0px !important;
        		}
        		table td{
        			border-collapse:collapse;
        		}
        		table{
        			border-collapse:collapse;
        			mso-table-lspace:0pt;
        			mso-table-rspace:0pt;
        		}
        		table[class=full]{
        			width:100%;
        			clear:both;
        		}
        	@media only screen and (max-width: 640px){
        		a[href^=tel],a[href^=sms]{
        			text-decoration:none;
        			color:#ffffff;
        			cursor:default;
        		}

           }	@media only screen and (max-width: 640px){
           		.mobile_link a[href^=tel],.mobile_link a[href^=sms]{
           			text-decoration:default;
           			color:#ffffff !important;
           			pointer-events:auto;
           			cursor:default;
           		}

           }	@media only screen and (max-width: 640px){
           		table[class=devicewidth]{
           			width:440px!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 640px){
           		table[class=devicewidthinner]{
           			width:420px!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 640px){
           		table[class=sthide]{
           			display:none!important;
           		}

           }	@media only screen and (max-width: 640px){
           		img[class=bigimage]{
           			width:420px!important;
           			height:219px!important;
           		}

           }	@media only screen and (max-width: 640px){
           		img[class=col2img]{
           			width:420px!important;
           			height:258px!important;
           		}

           }	@media only screen and (max-width: 640px){
           		img[class=image-banner]{
           			width:440px!important;
           			height:106px!important;
           		}

           }	@media only screen and (max-width: 640px){
           		td[class=menu]{
           			text-align:center !important;
           			padding:0 0 10px 0 !important;
           		}

           }	@media only screen and (max-width: 640px){
           		td[class=logo]{
           			padding:10px 0 5px 0!important;
           			margin:0 auto !important;
           		}

           }	@media only screen and (max-width: 640px){
           		img[class=logo]{
           			padding:0!important;
           			margin:0 auto !important;
           		}

           }	@media only screen and (max-width: 636px){
           		a[href^=tel],a[href^=sms]{
           			text-decoration:none;
           			color:#ffffff;
           			cursor:default;
           		}

           }	@media only screen and (max-width: 636px){
           		.mobile_link a[href^=tel],.mobile_link a[href^=sms]{
           			text-decoration:default;
           			color:#ffffff !important;
           			pointer-events:auto;
           			cursor:default;
           		}

           }	@media only screen and (max-width: 636px){
           		table[id=foot1]{
           			width:170px!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 636px){
           		table[id=foot2]{
           			width:170px!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 480px){
           		a[href^=tel],a[href^=sms]{
           			text-decoration:none;
           			color:#ffffff;
           			cursor:default;
           		}

           }	@media only screen and (max-width: 480px){
           		.mobile_link a[href^=tel],.mobile_link a[href^=sms]{
           			text-decoration:default;
           			color:#ffffff !important;
           			pointer-events:auto;
           			cursor:default;
           		}

           }	@media only screen and (max-width: 480px){
           		table[class=devicewidth]{
           			width:280px!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 480px){
           		table[class=devicewidthinner]{
           			width:260px!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 480px){
           		table[class=sthide]{
           			display:none!important;
           		}

           }	@media only screen and (max-width: 480px){
           		img[class=bigimage]{
           			width:260px!important;
           			height:136px!important;
           		}

           }	@media only screen and (max-width: 480px){
           		img[class=col2img]{
           			width:260px!important;
           			height:160px!important;
           		}

           }	@media only screen and (max-width: 480px){
           		img[class=image-banner]{
           			width:280px!important;
           			height:68px!important;
           		}

           }	@media only screen and (max-width: 480px){
           		table[id=foot1]{
           			width:100%!important;
           			text-align:center!important;
           		}

           }	@media only screen and (max-width: 480px){
           		table[id=foot2]{
           			width:100%!important;
           			text-align:center!important;
           		}

           }
        </style>
        </head>

        <body style="font-family: "Open Sans", sans-serif;">


        <div class="block">
           <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                 <tr>
                    <td>
                       <table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" bgcolor="#f6f4f5">
                          <tbody>
                             <tr>
                                <td>
                                   <!-- logo -->
                                   <table width="100%" cellpadding="0" cellspacing="0" border="0" class="devicewidth" align="center">
                                      <tbody>
                                         <tr>
                                            <td width="100%" height="20"></td>
                                         </tr>
                                         <tr>
                                            <td valign="middle" width="100%" style="padding: 10px 0 10px 20px;" class="logo">
                                               <div class="imgpop" align="center">
                                                  <a href="http://angehrn.etudiant-eemi.com/perso/projet_3A/"><img src="http://dayane.etudiant-eemi.com/doc-pronto/logo.png" border="0" alt="logo-pronto" width="27%rr"> </a>
                                               </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td width="100%" height="10"></td>
                                         </tr>
                                      </tbody>
                                   </table>
                                   <!-- End of logo -->
                                </td>
                             </tr>
                          </tbody>
                       </table>
                    </td>
                 </tr>
              </tbody>
           </table>
           <!-- end of header -->
        </div>


        <div class="block">
           <!-- 3-columns -->
           <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                 <tr>
                    <td>
                       <table bgcolor="#ffffff" width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                          <tbody>
                             <tr>
                                <td>
                                   <table width="540" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                      <tbody>
                                         <tr>
                                            <td>
                                               <!-- col 1 -->
                                               <table width="540" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                  <tbody>
                                                     <!-- image 2 -->
                                                     <tr>
                                                        <td>
                                                           <!-- start of text content table -->
                                                           <table width="400" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                              <tbody>
                                                                 <!-- Spacing -->
                                                                 <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                 </tr>
                                                                 <!-- Spacing -->
                                                                 <!-- content2 -->
                                                                 <tr>
                                                                    <td style="font-size: 14px; color: #817a78; text-align:center;line-height: 20px;">
                                                                       <a href="#" style="text-decoration:none;color:#817a78;">
                                                                          Vous avez été correctement inscrit à la newsletter
                                                                       </a>
                                                                    </td>
                                                                 </tr>
                                                                  <tr>
                                                                    <td width="100%" height="20"> </td>
                                                                 </tr>
                                                              </tbody>
                                                           </table>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                            </td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </td>
                             </tr>
                             <tr>
                                <td>
                                   <hr width="100">
                                </td>
                             </tr>
                          </tbody>
                       </table>
                    </td>
                 </tr>
              </tbody>
           </table>
           <!-- end of 3-columns -->
        </div>




        <div class="block">
           <!-- Full + text -->
           <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                 <tr>
                    <td>
                       <table bgcolor="#ffffff" width="580" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                          <tbody>
                             <tr>
                                <td width="100%" height="20"></td>
                             </tr>
                             <tr>
                                <td>
                                   <table width="540" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidthinner">
                                      <tbody>
                                         <tr>
                                            <td width="100%" height="10"></td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </td>
                             </tr>
                          </tbody>
                       </table>
                    </td>
                 </tr>
              </tbody>
           </table>
        </div>

        <div class="block">
           <!-- Start of preheader -->
           <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                 <tr>
                    <td width="100%">
                       <table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                          <tbody>
                             <!-- Spacing -->
                             <tr>
                                <td width="100%" height="5"></td>
                             </tr>
                             <!-- Spacing -->
                             <!-- Spacing -->
                             <tr>
                                <td width="100%" height="5"></td>
                             </tr>
                             <!-- Spacing -->
                          </tbody>
                       </table>
                    </td>
                 </tr>
              </tbody>
           </table>
           <!-- End of preheader -->
        </div>

        </body></html>';
        $mail_obj->contenu('Newsletter Pronto','',$html);
        if($mail_obj->envoyer()){
          require 'app/model/newsletter.php';
          $newsletter_obj = new Newsletter();
          $newsletter_obj->saveNewsletterMail($email);
          if($newsletter_obj){
            header('location: index.php?module=home&newsletter=ok');
          }else{
            header('location: index.php?module=home&newsletter=nok');
          }
        }
      } catch (Exception $e) {
        header('location: index.php?module=home&newsletter=nok');
      }

    }
}
