


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Enrollment Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body {
          font-family: 'Inter', sans-serif;
        }
        table{
           border: 1px solid black;
            width: 100%;
        }
        .formbold-mb-3 {
          margin-bottom: 15px;
        }
        .left-input {
    float: left;
}

.right-input {
    float: right;
    margin-right: 20px;
}

        .form-container {
            align-items: center;
            width: 60%;
            margin:  auto;
            padding: 20px;
            border: 1px solid black; /* Add border styles here */
            border-radius: 5px; /* Add border-radius for rounded corners */
        }
        .broken-line {
            border-top: 2px dashed #ccc; /* You can change the color and style (dashed, dotted, etc.) */
            margin: 20px 0; /* Adjust the margin to control the spacing */
        }
        .formbold-main-wrapper {
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 48px;
        }
        p{
            margin-left: 20px;
        }
        .formbold-form-wrapper {
          margin: 0 auto;
          max-width: 570px;
          width: 100%;
          background: white;
          padding: 40px;
        }
      
        .formbold-img {
          display: block;
          margin: 0 auto 45px;
        }
      
        .formbold-input-wrapp > div {
          display: flex;
          gap: 20px;
        }
      
        .formbold-input-flex {
          display: flex;
          gap: 20px;
          margin-bottom: 15px;
        }
        .formbold-input-flex > div {
          width: 50%;
        }
        .formbold-form-input {
          width: 100%;
          padding: 13px 22px;
          border-radius: 5px;
          border: 1px solid #dde3ec;
          background: #ffffff;
          font-weight: 500;
          font-size: 16px;
          color: #536387;
          outline: none;
          resize: none;
        }
        .formbold-form-input1 {
          width: 10%;
          padding: 13px 22px;
          border-radius: 2px;
          border: 1px solid black;
          background: #ffffff;
          font-weight: 500;
          font-size: 5px;
          color: #536387;
          outline: none;
          resize: none;
        }
        .formbold-form-input::placeholder,
        select.formbold-form-input,
        .formbold-form-input[type='date']::-webkit-datetime-edit-text,
        .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
        .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
        .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
          color: rgba(83, 99, 135, 0.6);
        }
      
        .formbold-form-input:focus {
          border-color: #6a64f1;
          box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
        .formbold-form-label {
          color: #07074D;
          font-weight: 500;
          font-size: 14px;
          line-height: 24px;
          display: block;
          margin-bottom: 10px;
        }
      
        .formbold-form-file-flex {
          display: flex;
          align-items: center;
          gap: 20px;
        }
        .formbold-form-file-flex .formbold-form-label {
          margin-bottom: 0;
        }
        .formbold-form-file {
          font-size: 14px;
          line-height: 24px;
          color: #536387;
        }
        .formbold-form-file::-webkit-file-upload-button {
          display: none;
        }
        .formbold-form-file:before {
          content: 'Upload file';
          display: inline-block;
          background: #EEEEEE;
          border: 0.5px solid #FBFBFB;
          box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
          border-radius: 3px;
          padding: 3px 12px;
          outline: none;
          white-space: nowrap;
          
          cursor: pointer;
          color: #637381;
          font-weight: 500;
          font-size: 12px;
          line-height: 16px;
          margin-right: 10px;
        }
      
        .formbold-btn {
          text-align: center;
          width: 100%;
          font-size: 16px;
          border-radius: 5px;
          padding: 14px 25px;
          border: none;
          font-weight: 500;
          background-color: #6a64f1;
          color: white;
          cursor: pointer;
          margin-top: 25px;
        }
        .formbold-btn:hover {
          box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
      
        .formbold-w-45 {
          width: 45%;
        }
        .flex-row {
    display: flex;
}
        /* Style the form container to resemble a document */
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style fieldset and legend elements */
        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
        }

        /* Style table for input fields */
        table {
            width: 100%;
        }

        table tr td {
            padding: 5px;
        }

        /* Style buttons */
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')


 

<div class="form-container">
        <h1>Farmer Enrollment Form</h1>
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
    @csrf

    <!-- Part 1: Personal Information -->
    <fieldset>
        <legend>Part 1: Personal Information</legend>
        <table>
            <tr>
                <td><label for="farmer_surname">Surname</label></td>
                <td><input type="text" name="farmer_surname" id="farmer_surname" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="farmer_firstname">First Name</label></td>
                <td><input type="text" name="farmer_firstname" id="farmer_firstname" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="farmer_middlename">Middle Name</label></td>
                <td><input type="text" name="farmer_middlename" id="farmer_middlename" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="farmer_extension">Extension Name</label></td>
                <td><input type="text" name="farmer_extension" id="farmer_extension" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="farmer_sex">Sex</label></td>
                <td>
                    <input type="radio" name="farmer_sex" value="Male" id="male"> <label for="male">Male</label>
                    <input type="radio" name="farmer_sex" value="Female" id="female"> <label for="female">Female</label>
                    
                </td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><textarea name="address" id="address" class="form-control" required></textarea></td>
            </tr>
            <tr>
                <td> <label for="religion">Religion</label></td>
                <td>
                    <input type="text" name="religion" id="religion" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label for="status">Status</label></td>
                <td>
                    <input type="text" name="status" id="status" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label>Education</label></td>
                <td>
                    <input type="text" name="education" id="education" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label for="disability">Person with Disability</label></td>
                <td>
                    <input type="radio" name="disability" value="Yes" id="disability-yes"> <label for="disability-yes">Yes</label>
                    <input type="radio" name="disability" value="No" id="disability-no"> <label for="disability-no">No</label>
                </td>
            </tr>
            <tr>
                <td><label for="fourps">4P's Beneficiary</label></td>
                <td>
                    <input type="radio" name="fourps" value="Yes" id="fourps-yes"> <label for="fourps-yes">Yes</label>
                    <input type="radio" name="fourps" value="No" id="fourps-no"> <label for="fourps-no">No</label>
                </td>
            </tr>
            <tr>
                <td><label for="gov_id">With Government ID?</label></td>
                <td>
                    <input type="radio" name="gov_id" value="Yes" id="gov-id-yes"> <label for="gov-id-yes">Yes</label>
                    <input type="radio" name="gov_id" value="No" id="gov-id-no"> <label for="gov-id-no">No</label>
                </td>
            </tr>
            <tr>
                <td><label for="id_type">ID Type</label></td>
                <td>
                    <input type="text" name="id_type" id="id_type" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label for="id_number">ID Number</label></td>
                <td>
                    <input type="text" name="id_number" id="id_number" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label for="farmer_association">Member of Farmer Association/Cooperative?</label></td>
                <td>
                    <input type="radio" name="farmer_association" value="Yes" id="association-yes"> <label for="association-yes">Yes</label>
                    <input type="radio" name="farmer_association" value="No" id="association-no"> <label for="association-no">No</label>
                </td>
            </tr>
            <tr>
                <td><label for="association_details">Specify Association/Cooperative</label></td>
                <td> <input type="text" name="association_details" id="association_details" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="emergency_contact">Person to Notify in Case of Emergency</label></td>
                <td><input type="text" name="emergency_contact" id="emergency_contact" class="form-control"></td>
            </tr>
        </table>
    </fieldset>

    <!-- Part 2: Contact Information -->
    <fieldset>
        <legend>Part 2: Contact Information</legend>
        <table>
            <tr>
                <td><label>Farm Profile</label></td>
                <td>
                    <input type="text" name="farm_profile" id="farm_profile" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label>Type of Farming Activity</label></td>
                <td>
                    <input type="text" name="farming_activity" id="farming_activity" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label>Kind of Work (for Farmworker/Laborer)</label></td>
                <td>
                    <input type="text" name="work_kind" id="work_kind" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label>Type of Fishing Activity (for Fisherfolk)</label></td>
                <td>
                    <input type="text" name="fishing_activity" id="fishing_activity" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label>Type of Involvement (for Agri Youth)</label></td>
                <td>
                    <input type="text" name="youth_involvement" id="youth_involvement" class="form-control">
                </td>
            </tr>
            <tr>
                <td><label>Gross Annual Income Last Year</label></td>
                <td>
                    Farming: <input type="text" name="gross_income_farming" class="form-control"><br>
                    Non-Farming: <input type="text" name="gross_income_non_farming" class="form-control">
                </td>
            </tr>
        </table>
        <button type="submit">Enroll Farmer</button>
        <button id="printButton" type="button">Print</button>
</form>
    </fieldset>
    

    <!-- Add more fieldsets for other sections as needed -->

    



    </div><br>
    <div class="form-container">
        <center><h2>Registry System for Basic Sector in Agriculture (RSBSA)</h2>
        <h1>ENROLLMENT CLIENT'S COPY</h1></center><br>
    <form action="https://formbold.com/s/FORM_ID" method="POST">
        <div class="formbold-mb-3">
            <label for="age" class="formbold-form-label"> Reference/Contact No.: </label>
            <input
              type="text"
              class="formbold-form-input"
            />
          </div>
        <div class="formbold-input-flex">
          <div>
            <label for="surname" class="formbold-form-label">  Surname </label>
            <input
              type="text"
              name="surname"
              id="surname"
              placeholder="Your first name"
              class="formbold-form-input"
            />
          </div>

          <div>
            <label for="firstname" class="formbold-form-label"> Firstname </label>
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Your last name"
              class="formbold-form-input"
            />
          </div>
          
        </div>

       
        <div class="formbold-input-flex">
            <div>
                <label for="middlename" class="formbold-form-label"> Middlename </label>
                <input
                  type="text"
                  name="middlename"
                  id="middlename"
                  placeholder="Your last name"
                  class="formbold-form-input"
                />
              </div>
          
      
              <div>
                <label for="extensionname" class="formbold-form-label"> Extension Name </label>
                <input
                  type="text"
                  name="extensionname"
                  id="extensionname"
                  placeholder="Your last name"
                  class="formbold-form-input"
                />
              </div>
           
          
        </div>

        <div class="broken-line"></div>
       
        
      

  <table border="1">
    <thead>
     <tr>
      

    <th colspan="7">
        <div class="left-input">
            <h5>No. of Farm Parcels:<input class="w3-input" type="text" style="width:40%" required> </h5>
        </div>
        <div class="right-input">
            <h5>Agrarian Reform Beneficiary: <input id="yes" type="radio" name="gender" value="yes">
                <label for="yes">YES</label>
                <input id="no" type="radio" name="gender" value="no">
                <label for="no">NO</label></h5>
        </div>
    </th>
    <tr>
        <th style="font-size: smaller;">Farm<br> Parcel<br> No.</th>
        <th style="font-size: smaller;">Farm Land Description</th>
        <th style="font-size: smaller;">Crop/Commodity<br>(Rice/corn/Hvc/<br>LiveStock/Poultry/<br>Agri-fishery)<br>For LiveStock/Fishery<br>(specify type<br>of animals)</th>
        <th style="font-size: smaller;">Size  (ha)</th>
        <th style="font-size: smaller;">NO. OF HEAD (for LiveStock<br>or Poultry)</th>
        <th style="font-size: smaller;">Farm Type <br> **</th>
        <th style="font-size: smaller;">Organic Practitioner <br> (Y/N)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
       <td rowspan="6"><center>1</center></td>
       <td rowspan="6"><br>
        <p>Location(Baranggay&Municipality):<br><input class="w3-input" type="text" style="width:90%" required></p><br>
        <p>Total Farm Area: <input class="w3-input" type="text" style="width:90%" required>ha</p>
        <p style="font-weight: bolder;">*Ownership Document No. <input class="w3-input" type="text" style="width:40%" required></p><br>
        <p><input type="checkbox">Registered Owner</p><br>
        <p><input type="checkbox">Tenant(Name of <br>Land Owner:</p>
        <p><input type="text">)</p><br>
        <p><input type="checkbox">Lesse(Name of <br>Land Owner:</p>
        <p><input type="text">)</p><br>
        <p><input type="checkbox">Others:</p>
        <p><input type="text"></p><br>

    
    </td>
    </tr>
   
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>


      
      
    


    
    
     
    </tbody>
    <tbody>
      <tr>
        <td rowspan="6"><center>2</center></td>
       <td rowspan="6"><br>
        <p>Location(Baranggay&Municipality):<br><input class="w3-input" type="text" style="width:90%" required></p><br>
        <p>Total Farm Area: <input class="w3-input" type="text" style="width:90%" required>ha</p>
        <p style="font-weight: bolder;">*Ownership Document No. <input class="w3-input" type="text" style="width:40%" required></p><br>
        <p><input type="checkbox">Registered Owner</p><br>
        <p><input type="checkbox">Tenant(Name of <br>Land Owner:</p>
        <p><input type="text">)</p><br>
        <p><input type="checkbox">Lesse(Name of <br>Land Owner:</p>
        <p><input type="text">)</p><br>
        <p><input type="checkbox">Others:</p>
        <p><input type="text"></p><br>

    
    </td>
       

      </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>

    </tbody>
    <tbody>
      <tr>
        <td rowspan="6"><center>3</center></td>
       <td rowspan="6"><br>
        <p>Location(Baranggay&Municipality):<br><input class="w3-input" type="text" style="width:90%" required></p><br>
        <p>Total Farm Area: <input class="w3-input" type="text" style="width:90%" required>ha</p>
        <p style="font-weight: bolder;">*Ownership Document No. <input class="w3-input" type="text" style="width:40%" required></p><br>
        <p><input type="checkbox">Registered Owner</p><br>
        <p><input type="checkbox">Tenant(Name of <br>Land Owner:</p>
        <p><input type="text">)</p><br>
        <p><input type="checkbox">Lesse(Name of <br>Land Owner:</p>
        <p><input type="text">)</p><br>
        <p><input type="checkbox">Others:</p>
        <p><input type="text"></p><br>

    
    </td>
  

      </tr>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

    </tbody>
    <tbody>
      <tr>
        <td colspan="5"><center><h4>Ownership Document*</h4></center>
          <div class="left-input">
          <p>1. Certificate of Land Transfer</p>
          <p>2.  Emancipation Patent</p>
          <p>3.  Individual Certificate of <br>Land Ownership Award(CLOA)</p>
          <p>4.  Coolective CLOA</p>
          <p>5.  Co-ownership CLOA</p>
          </div>
          <div class="right-input">
            <p>6. Agricultural sales patent</p>
            <p>7. Homestead patent</p>
            <p>8. Free Patent</p>
            <p>9. Certificate of Title or Regular Title</p>
            <p>10. Certificate of Ancestral Domain Title</p>
            <p>11. Certificate of Ancestral Land Title</p>
            <p>12. Tax Declaration</p>
          </div>

        </td>
        
        <td colspan="2"><center><h4>Farm Type**</h4></center>
          <p>1- Irrigated</p>
          <p>2-Rainfed Upland</p>
          <p>3-Rainfed Lowland</p>
          <td>
        </tr>
        <tbody>
          <tr>
            <td colspan="7">
              <p style="margin-block: 10px;font-size: smaller;"> I hereby declare that all information indicated above are true and correct,
                and that they may used by Department of Agriculture for the purposes of registration to the Registry System for Basic Sectors in Agriculture(RSBSA) and 
              other legitimate interests of the Department pursuant to its mandates.</p>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td> <center><input type="date" name="" id=""></center> </td>
            <td ><center><input style="width: 90%; height: 50%;" type="text" name="" id=""></center></td>
            <td colspan="3">**signature lods*</td>
            <td colspan="3">**thumbmark dito**</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td style="background-color: black;color: white;"> <center>DATE</center> </td>
            <td style="background-color: black;color: white;"> <center>PRINTED NAME OF APPLICANT</center> </td>
            <td colspan="3" style="background-color: black;color: white;"> <center>SIGNATURE</center> </td>
            <td colspan="3" style="background-color: black;color: white;"> <center>THUMBMARK</center> </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
           <td colspan="7"> <h5>VERIFIED TRUE AND CORRECT BY:</h5></td>
           
            

          </tr>
          <tbody>
            <td colspan="7" style="background-color: black;color: white;"><center><h4>DATA PRIVACY POLICY</h4></center></td>
          </tbody>
          <tbody>
            <tr>
              <td colspan="7">
                <p style="margin-block: 10px;font-size: smaller;">
                The collection of personal information is for documentation planning,
                reporting and processing purposes in availing agricultural related interventions.
                Pocessed data shall only be shared to partner agencies for planning,reporting and other use in aacordance
                to the mandate of the agency. This in compliance with the Data Sharing Policy of the Department. <br>
                You have the right to ask for a copy of your personal data that we hold about you as well as to ask for it to be corrected if 
                you think it is wrong. To do so, please contact "ContactPerson and Contact Details>>"
                </p>
              </td>
            </tr>
        </tbody>
    </tbody>
    <tbody>
      <tr><td colspan="7"><center><h3>THIS FORM IS NOT FOR SALE</h3></center></td></tr>
    </tbody>
    <tbody>
      <tr>
        <td colspan="7"> <h5>VERIFIED TRUE AND CORRECT BY:</h5></td>
        
      

       </tr>
       
    </tbody>
   </table>
   <script>
    // Function to print the form when the "Print" button is clicked
    function printForm() {
        var printContent = document.getElementById("printableContent"); // Replace with the ID of the element you want to print
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContent.innerHTML;
        window.print();

        document.body.innerHTML = originalContents;
    }

    // Add an event listener to the "Print" button
    var printButton = document.getElementById("printButton");
    printButton.addEventListener("click", printForm);
</script>
   
    @endsection

    

</body>
</html>
