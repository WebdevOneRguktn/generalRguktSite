<!DOCTYPE html>

<html lang="en">
<head>
	<title>Mechanical Engineering</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="./Mechanical Engineering_files/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    .faculty-card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      margin-bottom: 20px;
      height: 100%;
      border-radius: 20px;
    }

    img{
        border-radius: 20px;
    }
  </style>



<body>
    <!-- -----------------------------------------------  header ------------------------------------------     -->
      <?php include "header.php"?>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
		
		  
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
			<a class="nav-link text-dark" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				HOME
			  </a></li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			PEOPLE
		  </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
			<a class="dropdown-item" href="#">Faculty</a>
  			<a class="dropdown-item" href="#">Distinguished Alumini Awardees</a>
  			<a class="dropdown-item" href="#">Visitors</a>
			  <a class="dropdown-item" href="#">Student Representatives</a>
		  </div>
		</li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			RESEARCH
		  </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
			<!-- Submenu items go here -->
			<a class="dropdown-item" href="#">Research Focus</a>
  			<a class="dropdown-item" href="#">Laboratories</a>
  			<a class="dropdown-item" href="#">Graduate Research</a>
			<a class="dropdown-item" href="#">Collaborations</a>
		  </div>
		</li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			ACADEMICS
		  </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
			<a class="dropdown-item" href="#">Overview</a>
  			<a class="dropdown-item" href="#">curriculum</a>
  			<a class="dropdown-item" href="#">B.Tech/M.Tech</a>
			  <a class="dropdown-item" href="#"></a>
		  </div>
		</li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			EVENTS
		  </a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
			<!-- Submenu items go here -->
			<a class="dropdown-item" href="#">Conferences/Workshops</a>
  			<a class="dropdown-item" href="#">Short Term Courses</a>
  			<a class="dropdown-item" href="#">---</a>
			  <a class="dropdown-item" href="#">----</a>
		  </div>
		</li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			FACILITIES
		  </a>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<!-- Submenu items go here -->
			<a class="dropdown-item" href="#">---</a>
			<a class="dropdown-item" href="#">----</a>
			<a class="dropdown-item" href="#">---</a>
			<a class="dropdown-item" href="#">----</a>
		  
		  </div>
		</li>
		
	  </ul>
	</div>
  </nav>
  
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <!-- --------------------------------- FaCULTY ------------------------------------------------------------------------------------------------------  -->
    
    <div class="container mt-4">
      <h2 class="mb-4">Faculty Details</h2>
  
      <div class=" row align-items-stretch">
        <!-- Faculty 1 -->
        <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
          <div class="card  faculty-card">
            <img class="" src="./Mechanical Engineering_files/images/srinivasrao.jpg" alt="team">
           <!-- <img src="./Mechanical Engineering_files/images/srinivasrao.jpg" class="card-img-top" alt="Faculty 1 Photo">-->
            
          </div>
          <div class="text-center">
            <h5 class="">Dr.J.Srinivasa Rao</h5>
            <p class="">Assistant Professor</p>
            <!--<p class="card-text">ResearchIntrests: </p>
            <p class="card-text">Email: jagusrao@rguktn.ac.in</p>-->
          </div>
        </div>
  
        <!-- Faculty 2 -->
        <div class="col-lg-3 col-md-6  col-sm-6 pb-3">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/ahmadbasha.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Dr.Shail Ahammad Basha</h5>
              <p class="card-text">Designation: Associate Professor(c)</p>
              <p class="card-text">ResearchIntrests: Safety Engineering and Management</p>
              <p class="card-text">Email: basha@rguktn.ac.in</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/mohanbabu.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Mr.G.Mohan Rao</h5>
              <p class="card-text">Designation: Associate Professor(c)</p>
              <p class="card-text">ResearchIntrests: Metal Cutting and Machining</p>
              <p class="card-text">Email: mohanmech322@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/naidubabu.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Mr.Y.Naidu Babu</h5>
              <p class="card-text">Designation: Associate Professor(c)</p>
              <p class="card-text">ResearchIntrests</p>
              <p class="card-text">Email: naidubabu@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/amitkumar.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Mr.Amit Kumar Panigraphy</h5>
              <p class="card-text">Designation: Associate Professor(c)</p>
              <p class="card-text">ResearchIntrests:
                High speed and low speed flows,Automotive aerodynamics,Internal Combustion engines,Jet and Rocket propulsion, refrigeration systems
              </p>
              <p class="card-text">Email: amitkumar322@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/pradeepkumar.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Mr.P.Pradeep Kumar</h5>
              <p class="card-text">Designation: Associate Professor</p>
              <p class="card-text">ResearchIntrests: friction Stir welding/processing</p>
              <p class="card-text">Email: pradeep@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/mechhod.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Mr.K.Rajasekhar</h5>
              <p class="card-text">Designation: Associate Professor</p>
              <p class="card-text">researchIntrests: Finite element method</p>
              <p class="card-text">Email: rajasekhar@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/satyadev.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Mr.M.Satyadev</h5>
              <p class="card-text">Designation: Associate Professor</p>
              <p class="card-text">ResearchIntrests: Advanced metal cutting process</p>
              <p class="card-text">email: satya@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/pavani.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name: Dr.U.pavani</h5>
              <p class="card-text">Designation: Associate Professor</p>
              <p class="card-text">ResearchIntrests: Composite Materials</p>
              <p class="card-text">Email:pavani@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/lakshmanarao.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name:Dr. B.Lakshmana Rao</h5>
              <p class="">Designation: Associate Professor</p>
              <p class="">Research Interests:Adhesive Bonding</p>
              <p class="">Email:lakshman@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/bhanukiran.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name:Dr. G. Bhanu Kiran</h5>
              <p class="card-text">Designation: Associate Professor</p>
              <p class="card-text">Research Interests:Polymer Nano composites</p>
              <p class="card-text"> Email:bk_1381@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card faculty-card">
            <img src="./Mechanical Engineering_files/images/nagaprasad.jpg" class="card-img-top" alt="Faculty 2 Photo">
            <div class="card-body">
              <h5 class="card-title">Name:Mr. V.Naga Prasad</h5>
              <p class="card-text">Designation: Associate Professor</p>
              <p class="card-text">Research Interests:Metrology</p>
              <p class="card-text">Email:vnprasad500@rguktn.ac.in</p>
            </div>
          </div>
        </div>

        
        <!-- Add more faculty cards as needed -->
  
      </div>
    </div>
<!-- -----------------------------------staff-------------------------------------------->

<div class="container mt-4">
  <h2 class="mb-4">Staff Details</h2>

  <div class="row">
    <!-- Faculty 1 -->
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/chaitanyakumar.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. K.Chaitanya Kumar</h5>
          <p class="card-text">Lab Assistant</p>
          <p class="card-text">DIPLOMA</p>
          <p class="card-text"> karlachaitanya@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/joshibabu.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. Joshi Babu</h5>
          <p class="card-text">Lab Assistant</p>
          <p class="card-text">DIPLOMA</p>
          <p class="card-text">joshimamidi@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/kirankumar.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. G.Kiran Kumar</h5>
          <p class="card-text">Lab Technician</p>
          <p class="card-text">ITI</p>
          <p class="card-text"> goginenikirankumar@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/chinnababu.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. T.Chinna Babu</h5>
          <p class="card-text">Lab Technician</p>
          <p class="card-text">ITI</p>
          <p class="card-text"> tcbabu12@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/suryanarayana.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. A.Surya Narayana</h5>
          <p class="card-text">Lab Technician</p>
          <p class="card-text">ITI</p>
          <p class="card-text">appineni.surya@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/yernaidu.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. B.Yernaidu</h5>
          <p class="card-text">Lab Assistant</p>
          <p class="card-text">DIPLOMA</p>
          <p class="card-text">bynaidu@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/sardar.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. SK.Sardar</h5>
          <p class="card-text">Lab Technician</p>
          <p class="card-text">ITI</p>
          <p class="card-text">sardarshaik@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/ayubkhan.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. Ayub Khan</h5>
          <p class="card-text">Lab Technician</p>
          <p class="card-text">ITI</p>
          <p class="card-text"> ayubkhan@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card faculty-card">
        <img src="./Mechanical Engineering_files/images/chandrasekhar.jpg" class="card-img-top" alt="Faculty 1 Photo">
        <div class="card-body">
          <h5 class="card-title">Mr. T.Chandra Sekhar</h5>
          <p class="card-text">Lab Technician</p>
          <p class="card-text">ITI</p>
          <p class="card-text"> tsekhar@rguktn.ac.in</p>
        </div>
      </div>
    </div>

    <!-- ----------------------------------------- footer --------------------------------------->
    <?php include "footer.php"?>
    

    <!-- Bootstrap JS and Popper.js -->
    </body>  