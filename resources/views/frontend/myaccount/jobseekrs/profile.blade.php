<div class="wp-tabs">
    <ul class="nav nav-pills nav-justified">
            <li class="active"><a href="#tabprofiledetails" data-toggle="tab">Profile Details</a></li>
            <li><a href="#personal" data-toggle="tab">Personal Details</a></li>
            <li><a href="#educational" data-toggle="tab">Educational Details</a></li>
            <li><a href="#professional" data-toggle="tab">Professional Details</a></li>
            <li><a href="#documents" data-toggle="tab">Uploaded Documents</a></li>
   </ul>
   <div class="tab-content tab-content-inverse">
        <div class="tab-pane active" id="tabprofiledetails">
            <h4 class="col-md-4 pull-left">Profile Details</h4>
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
    		<tbody>
            @foreach($data['profile'] as $profile)
                <tr><th>Full Name</th>   <td>{{ $profile->firstName }} {{ $profile->lastName }}</td></tr>
                <tr> <th>Mobile Number</th> <td>{{ $profile->mobileNumber }}</td></tr>
                  <tr> <th>City</th>  <td>{{ $profile->city }}</td></tr>
                  <tr> <th>Pincode</th><td>{{ $profile->pinCode }}</td></tr>
                  <tr> <th>Address</th> <td>{{ $profile->address }}</td></tr>
                  <tr> <th>Gender</th><td>{{ $profile->Gender == 1 ? "Male" : "Female"  }}</td></tr>
              <tr><th>Short Bio</th> <td>{{ $profile->shortBio }}</td></tr>
             
           @endforeach  
      </tbody>
    </table>
   </div>
   <div class="tab-pane" id="personal">
            <h4 class="col-md-4 pull-left">Personal Details</h4>
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                <tbody>
                @foreach($data['personal'] as $personal)
                 <tr><th>Date Of Birth</th>   <td>{{ $personal->dob }}</td></tr>
                    <tr>   <th>Passport</th> <td>{{ $personal->passport }}</td></tr>
                      <tr> <th>Adhar Card</th>  <td>{{ $personal->adharcard }}</td></tr>
                      <tr> <th>PAN Card</th><td>{{ $personal->pancard }}</td></tr>
                      <tr> <th>Marital Status</th> <td>{{ $personal->marital == 1 ? "Yes" : "No" }}</td></tr>
                      <tr> <th>Willing to relocate??</th><td>{{ $personal->relocate == 1 ? "Yes" : "No" }}</td></tr>
                  <tr><th>Flexible with shifts??</th> <td>{{ $personal->shifts == 1 ? "Yes" : "No" }}</td></tr>
                 <tr> <th>Owning a vehicle??</th><td>{{ $personal->vehicle == 1 ? "Yes" : "No" }}</td></tr>
                @endforeach    
                
                  </tbody>
                </table>
            </div>
   
    <div class="tab-pane" id="educational">
       <h4 class="col-md-4 pull-left">Educational Details</h4>
       <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                <tbody>
                    
                    <tr>
                       <th>Highest Qualification</th>
                       <th>Cources</th>
                        <th>Specialization</th>
                        <th>University/College</th>
                        <th>Cource Type</th>
                        <th>Passing Year</th> 
                    </tr>
                @foreach($data['education'] as $education)
                    <tr>
                        <td>{{ $education->qualificationName }}</td>
                        <td>{{ $education->courceName }}</td>
                        <td>{{ $education->specilizationName }}</td>
                        <td>{{ $education->universityName }}</td>
                        <td>{{ $education->courcetypeId == 1 ? "Fulltime" : "Parttime" }}</td>
                        <td>{{ $education->passingYear }}</td>                        
                  </tr>
				@endforeach  
                     
                </tbody>
          </table>
          
    </div>
    
    
    <div class="tab-pane" id="professional">
                     <h4 class="col-md-4 pull-left">Proffessional Details</h4>
                     
                      <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                        <tbody>
                        @foreach($data['professional'] as $professional)
                         <tr><th>Industry Name</th>   <td>{{ $professional->industryName }}</td></tr>
                            <tr><th>exprstatus</th> <td>{{ $professional->exprstatus == 1 ? "Fresher" : "Expirience" }}</td></tr>
                        @endforeach    
                        </tbody>
                        </table>
                    @if(count($data['expirience']) > 0)
                     <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                            <tbody>
                                <tr><th>Company Name</th><th>Description</th><th>StartYear</th><th>End Year</th></tr>
                                @foreach($data['expirience'] as $expirience)
                                <tr><td>{{ $expirience->companyName }}</td><td>{{ $expirience->description }}</td><td>{{ $expirience->startYear }}</td><td>{{ $expirience->endYear }}</td></tr>
                                @endforeach
                               </tbody>
                     </table>
                    @endif 
    
            </div>
            <div class="tab-pane" id="documents">
    <div class="row">
    <div class="col-md-6">
                     <div class="panel panel-default">
      <div class="panel-heading">Educational Documents</div>
      <div class="panel-body">
       <div class="row">
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                <tbody>
                @foreach($data['documents'] as $documents)
                 @if($documents->documentId == 2)<tr><td>{{ $documents->docTitle }}</td><th><a>{{ $documents->actualName }}</a></th></tr>@endif
                @endforeach    
                </tbody>
                </table>
    
    </div>
      </div>
    </div>	
    </div>
    <div class="col-md-6">
                      <div class="panel panel-default">
      <div class="panel-heading">Professional Documents</div>
      <div class="panel-body">
    
       <div class="row">
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                <tbody>
                @foreach($data['documents'] as $documents)
                 @if($documents->documentId == 1)<tr><td>{{ $documents->docTitle }}</td><th><a>{{ $documents->actualName }}</a></th></tr>@endif
                @endforeach    
                </tbody>
                </table>
    
    </div>
    </div>
    </div>
            </div>
        </div>                          
    </div>                 
                          
                        </div>
                    </div>