<!-- MAIN WRAPPER -->
<div class="body-wrap">
   <!-- HEADER -->
        <div id="divHeaderWrapper" class="navbar-fixed-top bounceInDown animated">
            <header class="header-standard-2">     
    <!-- MAIN NAV -->
    <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
              
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars icon-custom"></i>
                </button>

                <a class="navbar-brand" href="http://whilo.in" title="Whilo | Job Portal and one stop solution for your career">
                    <img src="/images/logo.png" alt="Whilo | Job Portal and one stop solution for your career">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                   
                    <li class=" mega-dropdown-fluid"><a href="/talents"><i class="fa fa-universal-access" aria-hidden="true"></i>  TALENTS</a></li>
                    <li class=" mega-dropdown-fluid"><a href="/jobs"><i class="fa fa-universal-access" aria-hidden="true"></i>  Jobs</a></li>
					<li class=" mega-dropdown-fluid"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>  COMPANIES</a></li>
					<li class=" mega-dropdown-fluid"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i>  CONSULTANTS</a></li>
			
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i>  COURSES <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Corporate-Leadership-Program"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  Corporate Leadership Program</a></li>
                            <li><a href="/Language-Training"><i class="fa fa-language" aria-hidden="true"></i>  Language Training</a></li>
                         </ul>
</li>
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn" aria-hidden="true"></i>  SERVICES <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/payroll"><i class="fa fa-money" aria-hidden="true"></i>  Payroll</a></li>
                            <li><a href="/trainhire"><i class="fa fa-delicious" aria-hidden="true"></i>  Train, Hire &amp; Deploy</a></li>

     <li><a href="/pricing"><i class="fa fa-credit-card" aria-hidden="true"></i>  Pricing</a></li>
                            <li><a href="/campus-drives"><i class="fa fa-certificate" aria-hidden="true"></i>  Campus Drives</a></li>
         <li><a href="/Employee-Verification"><i class="fa fa-empire" aria-hidden="true"></i>  Employee Verification</a></li>
         <li><a href="/Database-Management"><i class="fa fa-database" aria-hidden="true"></i>  Database Management</a></li>
                         </ul>
</li>
                                     
		        </ul>
				<ul class="nav navbar-nav navbar-right">
                   <?php if(isset($_SESSION['WHILLO']['STATUS'])){ ?>
                   <li class=" mega-dropdown-fluid"><a href="/myaccount"><i class="fa fa-user" aria-hidden="true"></i>  My Account</a></li>
					<li class=" mega-dropdown-fluid"><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a></li>
                   <?php } else { ?>
                   <li class=" mega-dropdown-fluid"><a href="/auth/signin"><i class="fa fa-sign-in" aria-hidden="true"></i>  LOGIN</a></li>
					<li class=" mega-dropdown-fluid"><a href="/auth/signup"><i class="fa fa-registered" aria-hidden="true"></i>  Talent's SignUp</a></li>
					<li class=" mega-dropdown-fluid"><a href="/company/signup" ><i class="fa fa-user-plus" aria-hidden="true"></i>  FOR Employers</a></li>
                    <?php } ?>
		        </ul>
               
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>        </div>

        