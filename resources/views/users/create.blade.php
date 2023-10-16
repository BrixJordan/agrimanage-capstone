<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ANI At KITA RSBSA ENROLLMENT FORM</title>
    <style>
        /* Custom CSS for consistent UI */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h4 {
            color: #007bff;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        span.required {
            color: red;
        }
        
    </style>
</head>
<body>
    @extends('layouts.app')

@section('content')


    <div class="container mt-4">
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-sm-8">
        <h1>ANI At KITA RSBSA ENROLLMENT FORM</h1>
        <h4>REGISTRY SYSTEM FOR BASIC SECTOR IN AGRICULTURE</h4>
    </div>

      <div id="section1">
        <div class="col-sm-4">
            <video id="webcam" width="640" height="480" autoplay></video>
            <button id="capture">Capture</button>
            <canvas id="canvas" width="640" height="480"></canvas>
            <img id="captured-image" src="" alt="Captured Image">
            
                <input type="hidden" name="captured_image" id="captured_image">
                
          
        
            <script>
                const video = document.getElementById('webcam');
                const canvas = document.getElementById('canvas');
                const capturedImage = document.getElementById('captured-image');
                const captureButton = document.getElementById('capture');
                const capturedImageInput = document.getElementById('captured_image');
        
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then((stream) => {
                        video.srcObject = stream;
                    })
                    .catch((error) => {
                        console.error('Error accessing webcam:', error);
                    });
        
                captureButton.addEventListener('click', () => {
                    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                    capturedImage.src = canvas.toDataURL('image/png');
                    capturedImageInput.value = capturedImage.src;
                });
            </script>
        </div>
    

        <h3 class="mt-4">Personal Information</h3>
        
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="surname">Surname <span class="required">*</span>:</label>
                        <input type="text" id="surname" name="surname" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="first_name">First Name <span class="required">*</span>:</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="middle_name">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="extension_name">Extension Name:</label>
                        <input type="text" id="extension_name" name="extension_name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sex">Sex (Gender):</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="male" name="sex" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="female" name="sex" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        
                        
                        
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" id="" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="text" id="" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="text">Email Address</label>
                        <input type="text" id="" name="email_add" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="house_number">House Number:</label>
                        <input type="text" id="house_number" name="house_number" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="barangay">Barangay:</label>
                        <input type="text" id="barangay" name="barangay" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="municipality">Municipality:</label>
                        <input type="text" id="municipality" name="municipality" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <input type="text" id="province" name="province" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="region">Region:</label>
                        <input type="text" id="region" name="region" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="religion">Religion:</label>
                        <input type="text" id="religion" name="religion" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="civil_status">Civil Status:</label>
                        <input type="text" name="civil_status" id="" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="education">Highest Formal Education:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="elementary" name="education" value="elementary">
                            <label class="form-check-label" for="elementary">Elementary</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="high_school" name="education" value="high_school">
                            <label class="form-check-label" for="high_school">High School</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="college" name="education" value="college">
                            <label class="form-check-label" for="college">College</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="post_graduate" name="education" value="post_graduate">
                            <label class="form-check-label" for="post_graduate">Post Graduate</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="disability">Person with Disability:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="disability_yes" name="disability" value="yes">
                            <label class="form-check-label" for="disability_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="disability_no" name="disability" value="no">
                            <label class="form-check-label" for="disability_no">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="four_ps">4P's Beneficiary:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="four_ps_yes" name="four_ps" value="yes">
                            <label class="form-check-label" for="four_ps_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="four_ps_no" name="four_ps" value="no">
                            <label class="form-check-label" for="four_ps_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="government_id">Government ID:</label>
                        <input type="text" id="government_id" name="government_id" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id_number">ID Number:</label>
                        <input type="text" id="id_number" name="id_number" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cooperative_member">Member of Cooperative:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="cooperative_yes" name="cooperative_member" value="yes">
                            <label class="form-check-label" for="cooperative_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="cooperative_no" name="cooperative_member" value="no">
                            <label class="form-check-label" for="cooperative_no">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="coop_specify">Specify Cooperative (if yes):</label>
                <input type="text" id="coop_specify" name="coop_specify" class="form-control">
            </div>

            <div class="form-group">
                <label for="maiden_name">Mother's Maiden Name:</label>
                <input type="text" id="maiden_name" name="maiden_name" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="household_head">Household Head:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="head_yes" name="household_head" value="yes">
                            <label class="form-check-label" for="head_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="head_no" name="household_head" value="no">
                            <label class="form-check-label" for="head_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="head_name">Name of Household Head (if no):</label>
                        <input type="text" id="head_name" name="head_name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="relationship">Relationship to Household Head:</label>
                <input type="text" id="relationship" name="relationship" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emergency_contact">Person to Notify in Case of Emergency:</label>
                        <input type="text" id="emergency_contact" name="emergency_contact" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emergency_contact_number">Contact Number:</label>
                        <input type="tel" id="emergency_contact_number" name="emergency_contact_number" class="form-control" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    </div>
                </div>
            </div>

            <h3 class="mt-4">Part 2: Farm Profile</h3>

            <!-- Fields for Farm Profile here -->

            <div class="form-group">
                <label for="for_farmers">For Farmers(Type for farming activity):</label>
                <input type="text" name="farmers" id="for_farmers" class="form-control">
            </div>

            <div class="form-group">
                <label for="kind_of_work">Kind Of Work (For Farm Worker):</label>
                <input type="text" name="work" id="kind_of_work" class="form-control">
            </div>

            <div class="form-group">
                <label for="type_of_fishing_activity">Type of Fishing Activity (For Fisherfolk):</label>
                <input type="text" name="fishing" id="type_of_fishing_activity" class="form-control">
            </div>

            <div class="form-group">
                <label for="type_of_involvement">Type of Involvement (For AgriYouth):</label>
                <input type="text" name="involvement" id="type_of_involvement" class="form-control">
            </div>

            <div class="form-group">
                <label for="for_gross_annual_income_last_year">Gross Annual Income Last Year:</label>
                <input type="text" name="income" id="for_gross_annual_income_last_year" class="form-control">
            </div>
            <div class="form-group">
                    <label for="farm_location">Farm Location:</label>
                    <input type="text" id="farm_location" name="farm_location" class="form-control" required>
                </div>
        
                <!-- Total Farm Area -->
                <div class="form-group">
                    <label for="total_farm_area">Total Farm Area (in hectares):</label>
                    <input type="number" id="total_farm_area" name="total_farm_area" class="form-control" required>
                </div>
        
                <!-- Within Ancestral Domain (Yes or No) -->
                <div class="form-group">
                    <label>Within Ancestral Domain:</label>
                    <div>
                        <input type="radio" id="ancestral_domain_yes" name="within_ancestral_domain" value="yes">
                        <label for="ancestral_domain_yes">Yes</label>
                    </div>
                    <div>
                        <input type="radio" id="ancestral_domain_no" name="within_ancestral_domain" value="no">
                        <label for="ancestral_domain_no">No</label>
                    </div>
                </div>
        
                <!-- Agrarian Reform Beneficiary (Yes or No) -->
                <div class="form-group">
                    <label>Agrarian Reform Beneficiary:</label>
                    <div>
                        <input type="radio" id="agrarian_reform_yes" name="agrarian_reform_beneficiary" value="yes">
                        <label for="agrarian_reform_yes">Yes</label>
                    </div>
                    <div>
                        <input type="radio" id="agrarian_reform_no" name="agrarian_reform_beneficiary" value="no">
                        <label for="agrarian_reform_no">No</label>
                    </div>
                </div>
        
                <!-- Ownership Document Number -->
                <div class="form-group">
                    <label for="ownership_document_no">Ownership Document Number:</label>
                    <input type="text" id="ownership_document_no" name="ownership_document_no" class="form-control" required>
                </div>
        
                <!-- Ownership Type -->
                <div class="form-group">
                    <label for="ownership_type">Ownership Type:</label>
                    <input type="text" id="ownership_type" name="ownership_type" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            
        </div>  
    </div>

            
        </form>
        
    </div>
    @endsection
</body>
</html>
