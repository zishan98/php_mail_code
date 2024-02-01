<?php 
    session_start();
    if(isset($_POST['send'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $website= $_POST['website'];
        $msg= $_POST['msg'];
        $toMail = "alexjohn@gmail.com";
        $toSubject = "Mail From Inquiry Form From website";
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
        $paragraph = '<html>
                            <head></head>
                            <body style="background-color:grey">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="550" bgcolor="white" style="border:2px solid black">
                        <tbody>
                                <tr>
                                <td align="center">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="col-550" width="550">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="background-color:#fff; height: 200px; display:flex;justify-content: center;
                                                        align-items: center; gap: 20px; border-bottom:1px solid; ;">   
                                                    
                                                        <img height="150"src="https://sulcdn.azureedge.net/biz-live/img/swiffysoft-pvt-ltd--11052776-58756b34.jpeg" width="auto" />  
                                                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr style="display: inline-block;">
                                    <td style="height: 150px; padding: 20px; border: none; background-color: white;">
                                            <h2 style="text-align: left; align-items: center;">
                                                Name: '.$name.' <br>
                                                Email : '.$email.' <br>   
                                                Phone : '.$phone.' <br>
                                                Website Url : '.$website.'<br>                                                    
                                                Message :'.$msg.'
                                            </h2>
                                    </td>
                                </tr>               
                                <tr style="border: none;
                                background: linear-gradient(75deg, #4f286d 20%, #a31e57) !important;
                                height: 40px;
                                color: white;
                                padding-bottom: 20px;
                                text-align: center;
                                justify-content: center;
                                display: flex;
                                font-family: sans-serif;">
                                    <td height="40px" align="center">
                                        <p style="color:white;  margin: 25px 0 10px; font-size: 1rem;">
                                            &#169; Copyright Swiffysoft. All Rights Reserved. Designed By : &hearts; <a href="https://swiffysoft.com/" style="color:#fff;">Swiffysoft</a>
                                        </p>                     
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>';
                    //  $body = join(PHP_EOL, $bodyParagraphs);
                    $body = $paragraph;
            if(mail($toMail, $toSubject, $body, $headers)){
                $_SESSION['message'] = "Message sent! Thanks for contacting us.";
                header('Location:index.php');
            }else{
                $_SESSION['error'] = "Oops, something went wrong. Please try again later";
                header('Location:index.php');
            }                           
    }
?>
