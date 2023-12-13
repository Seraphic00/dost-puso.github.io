<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOST PUSO - Admin</title>

    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="test.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/logo/logo.png" type="image/x-icon">

</head>
<body data-new-gr-c-s-check-loaded="14.1143.0" data-gr-ext-installed="">
    
  <div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
    <div class="offcanvas-header">
            <img src="img/logo/header-logo.png" alt="" width="90%" height="auto">
            <button type="button" class="btn-close text-reset" id="closeButton" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr>
    <div class="offcanvas-body px-0">
      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start navpad" id="menu">
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('aboutus')">
            About Us
          </a>
          <ul>
            <li><a class="tab-link" href="">History</a></li>
            <li><a class="tab-link" href="">DOST PUSO Logo</a></li>
            <li><a class="tab-link" href="">Vision</a></li>
            <li><a class="tab-link" href="">Mission</a></li>
            <li><a class="tab-link" href="">Officers</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('proandpro')">
            Programs and Projects
          </a>
          <ul>
            <li><a class="tab-link" href="">Calendar of Activities</a></li>
            <li><a class="tab-link" href="">Gallery</a></li>
            <li><a class="tab-link" href="">News</a></li>
            <li><a class="tab-link" href="">Resources</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('scholarship')">
            Scholarships
          </a>
          <ul>
            <li><a class="tab-link" href="">Junior Level Science Scholarships (JLSS)</a></li>
            <li><a class="tab-link" href="">S&T Undergraduate Scholarship</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('contacts')">
            Contacts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('messages')">
            Messages
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('membership')">
            Membership Request
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="changeTab('accounts')">
            Accounts
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="p-4 fixed-top nv">
        <button class="btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
          <i class="fs-3 material-icons" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">menu</i>
        </button>
        <h1 class="title">DOST - PSU UCC Scholars’ Organization</h3>
        <div class="navbar-nav d-flex ms-auto">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#" onclick="confirmSignOut()">Sign out</a>
          </div>
        </div>
      </div>
      <div class="p-4 seccontent">
        <div class="tabsection" id="aboutus">
          <h4>About Us</h4>
          <p>This is the content for the "About Us" tab. </p>
          <table>
            <thead>
              <tr>
                <th>Position</th>
                <th>Name</th>
              </tr>
            </thead>
          </table>
        </div>
            
        <div class="tabsection" id="proandpro">
          <h4>Programs and Projects</h4>
          <p>This is the content for the "Programs and Projects" tab.</p>
        </div>
    
        <div class="tabsection" id="scholarship">
          scholarship
        </div>
    
        <div class="tabsection" id="contacts">
          contact
        </div>

        <div class="tabsection" id="messages">
          messages
        </div>

        <div class="tabsection" id="membership">
          membership
        </div>
    
        <div class="tabsection" id="account">
          account
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/bundles/4.20.0/compiled.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="..."></script>
  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>


  <!-- SIGNOUT -->
  <script>
    function confirmSignOut() {
      Swal.fire({
          title: 'Are you sure?',
          text: 'You will be signed out!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, sign me out!',
          confirmButtonColor: '#09c7e0',
          cancelButtonText: 'Cancel',
          cancelButtonColor: 'black'
      }).then((result) => {
          if (result.isConfirmed) {
              signOut();
          }
      });
    }

    function signOut() {
        window.location.href = 'index.html';
    }
  </script>

  <!-- CHANGE TABS -->
  <script>
    var tabSections = document.getElementsByClassName('tabsection');
    for (var i = 1; i < tabSections.length; i++) {
      tabSections[i].style.display = 'none';
    }

    function changeTab(tabId) {
        var closeButton = document.querySelector('[data-bs-dismiss="offcanvas"]');
        closeButton.click();
        for (var i = 0; i < tabSections.length; i++) {
            tabSections[i].style.display = 'none';
        }
        var selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.style.display = 'block';
        }
    }
  </script>
</body>
</html>