<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
    <link rel="stylesheet" href="submod_style/counseling.css"/>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="./images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block">User Name</h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="./images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="login/login.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
        <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
              <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="profiling.php">
                <i class="bx bx-palette"></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            <li>
              <div class="iocn-link arrow">
                <a class="">
                  <i class="bx bx-message-square-error"></i>
                  <span class="links_name">Counseling Service</span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Counseling Service</a></li>
                <li><a href="individual.php">Individual Counseling</a></li>
                <li><a href="group.php">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            <li>
              <a href="appointment.php">
                <i class="bx bx-palette"></i>
                <span class="links_name">Appointment</span>
              </a>
              <span class="tooltip">Appointment</span>
            </li>
            <li>
              <a href="visitlogs.php">
                <i class="bx bx-message-dots"></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation.php">
                <i class="bx bx-edit-alt"></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship.php">
                <i class="bx bx-table"></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res.php">
                <i class="bx bx-cog"></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="student_evaluation.php">
                <i class="bx bx-cog"></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="reports.php">
                <i class="bx bx-cog"></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
        <section class="home-section ms-3 p-5 bg-light rounded shadow">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->

<div class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
</div>



          <h2>PROFILING</h1>
<div class="d-flex justify-content-between align-items-center">
            <div class="dropdown d-flex align-items-center">
            <button href="index.php" type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
              <button type="file" class="btn btn-secondary ms-1 text-light ">Import</button>
                
</div>   
<nav class="navbar bg-body-tertiary ">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="dropdown py-3 ">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 10 </a>
              <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">10</a></li>
                 <li><a class="dropdown-item" href="#">25</a></li>
                 <li><a class="dropdown-item" href="#">50</a></li>
                 <li><a class="dropdown-item" href="#">100</a></li>
             </ul>
</div>
  
         <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Student Number</th>
                <th scope="col">Student Name</th>
                <th scope="col">Counseling Type</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
         <tbody>
             <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Cognitive Therapy</td>
                <td>Regular</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".profile">View</button></td>
             </tr>
          </tbody>
        </table>    
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>
      </div>
    </main>

 <!-- Add Student Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
      </div>
      <div class="modal-body ">
          <div class="mb-3">
            <label for="message-text" class="col-form-label">*Student Number</label>
            <input type="#" id="" class="form-control" placeholder="ex. 190***22">
            <label for="message-text" class="col-form-label">*Email Address</label>
            <input type="email" id="" class="form-control" placeholder="ex. email.@gmail.com">
            <label for="message-text" class="col-form-label">*Contact Number</label>
            <input type="email" id="" class="form-control" placeholder="ex. 0950*******">
            <label for="message-text" class="col-form-label">*First Name</label>
            <input type="email" id="" class="form-control" placeholder="First Name">
            <label for="message-text" class="col-form-label">*Middle Name</label>
            <input type="email" id="" class="form-control" placeholder="Middle Name">
            <label for="message-text" class="col-form-label">*Last Name</label>
            <input type="email" id="" class="form-control" placeholder="Last Name">
            <label for="message-text" class="col-form-label">*Course</label>
            <input type="email" id="" class="form-control" placeholder="ex. 190***22">
            <label for="message-text" class="col-form-label">*Year</label>
            <input type="email" id="" class="form-control" placeholder="Year">
            <label for="message-text" class="col-form-label">*Section</label>
            <div class="dropdown py-3 ">
              <label for="message-text" class="col-form-label">*Gender</label><br>
                <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Choose Gender</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Male</a></li>
                    <li><a class="dropdown-item">Female</a></li>
                  </ul>
            </div>
            <input type="email" id="" class="form-control" placeholder="ex. 190***22">
            <label for="message-text" class="col-form-label">*Birth Date</label>
            <input type="date" id="" class="form-control" placeholder="ex. 190***22">
            <div class="dropdown py-3 ">
              <label for="message-text" class="col-form-label">*Student Status</label><br>
                <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Choose Status</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Regular Student</a></li>
                    <li><a class="dropdown-item">Irregular Student</a></li>
                  </ul>
            </div>
            <label for="message-text" class="col-form-label">*Address</label>
            <input type="date" id="" class="form-control" placeholder="Enter your home/ Permanent address">
            
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div> 
    </div>
  </div>
</div> 

<!-- View Student Profile Modal 450 -->

 <div class="modal fade profile"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Student Profile</h1>
      </div>
      <div class="modal-body">

      <div class="div d-flex justify-content-between align-items-center">
        <div class="bg-light p-2">
          <img class="ms-0 ms-sm-3" src="assets/images/man.png" width="150" height="150" alt="profile-picture"><br>
          <label for="message-text" class="col-form-label">Jorquia, Kenneth</label><br>
          <label for="message-text" class="col-form-label">19014022</label><br>
          <label for="message-text" class="col-form-label">BSIT 41014</label><br>
          <label for="message-text" class="col-form-label">Status: Regular</label><br>
        </div>
        
      </div>

      <div class="bg-primary text-light mt-2 p-2">
          <label for="message-text" class="col-form-label">VISITS</label>
        </div>
        <div class="p-2">
        <div class="d-flex justify-content-between bg-light align-items-center p-3">
          <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Excuse Letter </a>
              <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Excuse Letter</a></li>
                 <li><a class="dropdown-item" href="#">Cert of Candidacy</a></li>
                 <li><a class="dropdown-item" href="#">Clearance</a></li>
             </ul>
          <input type="email" id="" class="form-control" placeholder="Other Details...">
          <button type="button" class="btn btn-primary">+</button>
        </div>
        </div>

        <div class="accordion accordion-flush p-2" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        EDUCTAIONAL BACKGROUND
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> graduate ng elementary tas tambay nalang.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        HOME AND FAMILY BACKGROUND
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Nakakulong si papa si mama nag totongits</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        HEALTH BACKGROUND
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">May TB ako stage 5 level 6</div>
    </div>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div> 
    </div>
  </div>
</div> 
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
