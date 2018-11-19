  <?php
  //if "email" variable is filled out, send email
    if (isset($_REQUEST['submit']))  {
    
    //Email information
    $admin_email = $_REQUEST['toemail'];
    $email = $_REQUEST['fromemail'];
    $subject = $_REQUEST['subject'];
    $comment = $_REQUEST['comment'];
    
    //send email
    mail($admin_email, "$subject", $comment, "From:" . $email);
    
    //Email response
    echo "Your email has been sent !";
    }
    
    //if "email" variable is not filled out, display the form
    else  {
  ?>
  <body bgcolor="#c3c3c3">
  <center>
    <h3>
   <form method="post">

    From Email: <input name="fromemail" type="text" /><br>
    To Email: <input type="email" name="toemail"><br>
    Subject: <input name="subject" type="text" /><br>

    Message:

    <textarea name="comment" rows="5" cols="20"></textarea><br>

    <input type="submit" value="Submit" style="margin: 10px;padding: 10px;" />
    </form>
  </h3>
  
    </center>
    </body>
  <?php
    }
  ?>

