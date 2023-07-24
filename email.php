


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }

      html,
body {
  height: 100%;
}

.form-signin {
  max-width: 530px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
</head>
<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
     <a class="navbar-brand" href="./admin/dash.php">CRM System</a>
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="./admin/logout.php" class="nav-link">Logout</a>
        </li>
        
    </ul>
  </div>
</nav>

    
    <form action="" method="POST">
    <div class="container mt-5">
            <div class="row">
                 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header">
                        <h4>Send Mail
                        <a href="../queries/query_view.php" class="btn btn-info float-end">BACK</a>
                        </h4>

    <div class="form-floating mb-2">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">TO:</label>
    </div>
    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingPassword" name="subject" placeholder="abc">
      <label for="floatingPassword">Subject:</label>
    </div>
    <div class="form-floating mb-2">
      <textarea name="message" id="" cols="100" rows="10" class="card" placeholder="Write your messages"></textarea>
      <label for="floatingPassword"></label>
    </div>

    <button class="btn btn-primary w-10 py-2" type="submit" name="Send">Send</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['Send'])){
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
    $from = $_POST['iamluffy72@gmail.com'];
    $headers = "to: $to";

    mail($to,$subject,$message,$headers);
    echo "mail sent";
    }

?>