                                        <?php
$vemailx="stotomasweb022@gmail.com";
$vuseremail="stotomasweb022@gmail.com";
                                        $to      = $vemailx;
                                        $subject = 'Seed Request';
                                        $message = 'Dear '.$vfirstnamex."\r\n"."\r\n".' , You have a seed request from '.$vuser.'.'."\r\n"."\r\n".'Thank you.';
                                        $headers = 'From: '.$vuseremail. "\r\n" .
                                        'Reply-To:'.$vuseremail. "\r\n" .
                                        'X-Mailer: PHP/' . phpversion();

                                        mail($to, $subject, $message, $headers);
                                        
                                        ?>