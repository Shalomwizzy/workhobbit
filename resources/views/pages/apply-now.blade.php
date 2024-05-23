@extends('layouts.app')

@section('content')
    
<section>
    <div class="d-flex flex-col items-center justify-center h-screen m-">
        <div class="job-form-container">
            <h2 class="job-form-title">Job Application Form</h2>

            <form id="job-form" class="job-form" method="POST" action="{{ route('submit.form') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="temporary_identifier" value="{{ $temporaryIdentifier }}">
               

                <div id="section1" class="form-section">
                    <div class="input-group">
                        <input type="text" class="job-form-input" placeholder="First Name" name="first_name" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="job-form-input" placeholder="Last Name" name="last_name" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" class="job-form-input" placeholder="Email" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="job-form-input" name="phone_number" placeholder="Phone Number" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="job-form-input" placeholder="LinkedIn Profile URL">
                    </div>

                    <div class="input-group">
                        <select class="job-form-input" id="job-select" name="job" onchange="showOtherInput()">
                            <option value="">Select a job</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Data Scientist">Data Scientist</option>
                            <option value="UX/UI Designer">UX/UI Designer</option>
                            <option value="Product Manager">Product Manager</option>
                            <option value="DevOps Engineer">DevOps Engineer</option>
                            <option value="Network Administrator">Network Administrator</option>
                            <option value="Cybersecurity Analyst">Cybersecurity Analyst</option>
                            <option value="Cloud Architect">Cloud Architect</option>
                            <option value="Frontend Developer">Frontend Developer</option>
                            <option value="Backend Developer">Backend Developer</option>
                            <option value="Full Stack Developer">Full Stack Developer</option>
                            <option value="Machine Learning Engineer">Machine Learning Engineer</option>
                            <option value="Systems Analyst">Systems Analyst</option>
                            <option value="Database Administrator">Database Administrator</option>
                            <option value="AI Specialist">AI Specialist</option>
                            <option value="Blockchain Developer">Blockchain Developer</option>
                            <option value="Game Developer">Game Developer</option>
                            <option value="IT Consultant">IT Consultant</option>
                            <option value="Mobile App Developer">Mobile App Developer</option>
                            <option value="Network Engineer">Network Engineer</option>
                            <option value="QA Engineer">QA Engineer</option>
                            <option value="Scrum Master">Scrum Master</option>
                            <option value="Systems Engineer">Systems Engineer</option>
                            <option value="Technical Writer">Technical Writer</option>
                            <option value="Web Developer">Web Developer</option>
                            <option value="UX Researcher">UX Researcher</option>
                            <option value="UI Developer">UI Developer</option>
                            <option value="Software Tester">Software Tester</option>
                            <option value="Embedded Systems Engineer">Embedded Systems Engineer</option>
                            <option value="Computer Vision Engineer">Computer Vision Engineer</option>
                            <option value="AR/VR Developer">AR/VR Developer</option>
                            <option value="Data Engineer">Data Engineer</option>
                            <option value="Data Analyst">Data Analyst</option>
                            <option value="Business Analyst">Business Analyst</option>
                            <option value="Product Owner">Product Owner</option>
                            <option value="IT Project Manager">IT Project Manager</option>
                            <option value="IT Support Specialist">IT Support Specialist</option>
                            <option value="Network Security Engineer">Network Security Engineer</option>
                            <option value="Backend Engineer">Backend Engineer</option>
                            <option value="Frontend Engineer">Frontend Engineer</option>
                            <option value="Technical Architect">Technical Architect</option>
                            <option value="Software Development Manager">Software Development Manager</option>
                            <option value="Data Warehouse Architect">Data Warehouse Architect</option>
                            <option value="AI Engineer">AI Engineer</option>
                            <option value="Big Data Engineer">Big Data Engineer</option>
                            <option value="Cloud Engineer">Cloud Engineer</option>
                            <option value="Solutions Architect">Solutions Architect</option>
                            <option value="Information Security Analyst">Information Security Analyst</option>
                            <option value="Other">Other</option>
                           
                        </select>
                        <span class="required-star">*</span>
                        <input type="text" class="job-form-input" id="other-job-input" placeholder="Enter your job" style="display: none;">
                    </div>

                    
                    <div>
                        <label for="resume-upload" class="upload-label">Upload your resume</label>

                        <div class="input-group">
                        
                            <input type="file" id="resume" name="resume" class="job-form-input" accept=".doc, .docx, .pdf" required>
                            <span class="required-star">*</span>
                        </div>
                    </div>
                   
                    <button type="button" class="job-form-button" onclick="nextSection()">Next</button>
                </div>

                <div id="section2" class="form-section" style="display: none;">
                   <h6>Verify Your Identity</h6>

                   <div class="input-group">
                    <input type="text" class="job-form-input" placeholder="Country" name="country" value="United States" readonly required>
                    <span class="required-star">*</span>
                </div>
                
                <div class="input-group" id="state-dropdown">
                    <select class="job-form-input" id="state-select" name="state">
                        <option value="">Select a state</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
                    <span class="required-star">*</span>
                </div>
                
                

                    <div class="input-group">
                        <input type="text" class="job-form-input" placeholder="Address" name="address" required>
                        <span class="required-star">*</span>
                    </div>

                    <div class="input-group">
                        <input type="text" class="job-form-input"  placeholder="Social Security Number (Ssn)" name="ssn"   required>
                        <span class="required-star">*</span>
                    </div>

                    {{-- <div>
                        <label for="ssn-picture" class="upload-label">Upload the front picture of your Social Security Number(Ssn)</label>
                        <div class="input-group">
                            <input type="file" class="job-form-input" id="ssn_picture" name="ssn_picture"  required>
                            <span class="required-star">*</span>
                        </div>
                     </div> --}}


                 <div>
                    <label for="front-picture" class="upload-label">Upload Driver's License or State ID (Front)</label>
                    <div class="input-group">
                        <input type="file" class="job-form-input" id="front_picture" name="front_picture"  required>
                        <span class="required-star">*</span>
                    </div>
                 </div>

                 


               <div>
                <label for="back-picture" class="upload-label">Upload Driver's License or State ID (Back)</label>
                <div class="input-group">
                    <input type="file" class="job-form-input" id="back_picture" name="back_picture" required>
                    <span class="required-star">*</span>
                </div>
               </div>
                    
                    <div class="button-group">
                        <button type="button" class="job-form-button" onclick="previousSection()">Go Back</button>
                        <button type="submit" class="job-form-button" onclick="submitForm()">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    function nextSection() {
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'block';
    }

    function previousSection() {
        document.getElementById('section1').style.display = 'block';
        document.getElementById('section2').style.display = 'none';
    }

    function showOtherInput() {
        var select = document.getElementById("job-select");
        var otherInput = document.getElementById("other-job-input");
        if (select.value === "Other") {
            otherInput.style.display = "block";
        } else {
            otherInput.style.display = "none";
        }
    }



</script>



@endsection
