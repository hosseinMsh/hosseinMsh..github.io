<!DOCTYPE html>
<html>

<head>
    <title>Sent Data</title>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif
        }
        .sent_data{
          text-align: center;
          background: #f2fff0;
          border: 1px solid #a5d09e;
          padding: 25px;
          border-radius: 10px;
          font-size: 16px;
        }
    </style>
</head>

<body>
  <div class="sent_data">
    <?php
    if(isset($_POST['submit']))
    {
    $Name = "Name:".$_POST['fname']."
    ";
    $Email = "Email:".$_POST['email']."
    ";
    $Phone = "Telephone:".$_POST['tphone']."
    ";
    $Message = "Message:".$_POST['message']."
    ";
    $text = $Name . $Email . $Phone . $Message . "\n";
    $file=fopen("info.txt", "a");
    if(fwrite($file, $text))  {
      echo 'Data Sent Successfully';
    }
    fclose($file);
    }
    ?>
  </div>
</body>
</html>