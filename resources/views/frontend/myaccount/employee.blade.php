@extends('frontend.layouts.master')

@section('content')
<div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>My Account</h2>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Myaccount</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

 <section class="slice bg-white" style="margin-top:5%">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 tabbable">
                        <div class="user-profile-img">
                           @foreach($data['profile'] as $list) <img src="companylogo.get/{{ $list->imageCategory }}/{{ $list->dirYear }}/{{ $list->dirMonth }}/{{ $list->imageName }}/{{ $list->crTime }}/s.{{ $list->imgExt }}" alt="">@endforeach  
						                        </div>
                        <ul class="categories mt-20 nav nav-pills nav-stacked" name="myaccountasside">
<li ><a href="#CompanyProfile" data-toggle="tab">Company Profile</a></li>
<li ><a href="#Postnewjobs" data-toggle="tab">Post New Jobs</a></li>
<li ><a href="#postedjobs" data-toggle="tab">Posted Jobs</a></li>
<li ><a href="#ShortlistedCandidates" data-toggle="tab">Shortlisted Candidates</a></li>
<li ><a href="#SearchedCandidates" data-toggle="tab">Searched Candidates</a></li>
<li ><a href="#AppliedCandidates" data-toggle="tab">Applied Candidates</a></li>
<li><a href="#ChangePassword" data-toggle="tab">Change Password</a></li>
<li class="active"><a href="#accountsetting" data-toggle="tab">Account Settings</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9"> 
					<div class="tab-content ">
                    <div class="tab-pane" id="CompanyProfile">
                      @include('frontend.myaccount.jobseekrs.profile')
					</div>
                    <div class="tab-pane " id="Postnewjobs">
                        <div class="panel panel-default">
                          
                          <div class="panel-body">
                                 <h4 class="col-md-4 pull-left">Applied Jobs</h4>
                                 <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                                       <tbody>
                                            <tr><th>Comapany Name</th><th>Designation</th><th>Status</th></tr>
                                            <tr><td><a href="#">HP</a></td><td>accounts</td><td><span class="base clearfix">Not Shortlisted</span></td></tr>
<tr><td><a href="#">HP</a></td><td>accounts</td><td><span class="base clearfix">Shortlisted</span></td></tr>
<tr><td><a href="#">HP</a></td><td>accounts</td><td><span class="base clearfix">Not Shortlisted</span></td></tr>
                                           </tbody>
                 </table>
  </div>
</div>

</div>
  <div class="tab-pane" id="postedjobs">
<div class="panel panel-default">
  
  <div class="panel-body">
         <h4 class="col-md-4 pull-left">Shortlisting History</h4><table class="table table-orders table-bordered table-striped table-responsive no-margin">


                                        <tbody>
                                            <tr><th>Comapany Name</th><th>Position Applied For</th><th>Location</th></tr>
                                            <tr><td><a href="#">HP</a></td><td>accounts</td><td>Bangalore</td></tr>
<tr><td><a href="#">HP</a></td><td>accounts</td><td>Mangalore</td></tr>
<tr><td><a href="#">HP</a></td><td>accounts</td><td>Mangalore</td></tr>
                                           </tbody>
                 </table>
  </div>
</div>

</div>
<div class="tab-pane active" id="ShortlistedCandidates">
<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form"> 
                            <div class="form-header">
                                <h2>Change your Password</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
                    </div>

</div>
<div class="tab-pane active" id="SearchedCandidates">
<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form"> 
                            <div class="form-header">
                                <h2>Change your Password</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
                    </div>

</div>
<div class="tab-pane active" id="AppliedCandidates">
<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form"> 
                            <div class="form-header">
                                <h2>Change your Password</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
                    </div>

</div>

<div class="tab-pane active" id="ChangePassword">
<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form"> 
                            <div class="form-header">
                                <h2>Change your Password</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
                    </div>

</div>
<!-- new one -->
<div class="tab-pane active" id="accountsetting">
<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form"> 
                            <div class="form-header">
                                <h2>Change your Password</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
                    </div>

</div>
                </div>   

            </div>
        </div>
    </div></div></section>
    
       
@endsection

@section('after-scripts-end')
    <script>
       
    </script>
@stop