<?php
include_once("header.php");
?>
<?php
include_once("sidebar.php");
?>
<?php
include_once("colorswitcher.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Profile</title>
    <style>
      
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: black;
        }
        header {
            text-align: center;
            background-color:rgb(7, 37, 94);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        header h1 {
            margin: 0;
        }
        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .profile-info {
            flex: 1;
            margin-left: 20px;
        }
        .profile-info h2 {
            margin: 0;
            font-size: 24px;
            color: black;
        }
        .profile-info p {
            margin: 5px 0;
        }
        .section-title {
            background-color: #f1f1f1;
            padding: 10px;
            margin: 20px 0 10px;
            font-size: 18px;
            border-radius: 5px;
        }
        .appointment {
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container col-md-6">
    
    <header>
        <h1>Hospital Patient Profile</h1>
    </header>

    <div class="profile-header">
        <img src="assets/images/UserImage/user.jpg" alt="Patient Avatar">
        <div class="profile-info">
            <h2>Sana</h2>
            <p><strong>Age:</strong> 5</p>
            <p><strong>Gender:</strong> Male</p>
            <p><strong>Guardian Contact:</strong> (123) 456-7890</p>
            <p><strong>Guardian Email:</strong> john.doe@example.com</p>
        </div>
    </div>

    <div class="section-title">Medical History</div>
    <div class="medical-history">
        <p><strong>Known Allergies:</strong> None</p>
        <p><strong>Current Medications:</strong> none</p>
        <p><strong>Previous Surgeries:</strong> none</p>
    </div>

    <div class="section-title">Upcoming Appointments</div>
    <div class="appointments">
        <div class="appointment">
            <p><strong>Doctor:</strong> Dr. Sarah Lee</p>
            <p><strong>Specialty:</strong> Immunologists</p>
            <p><strong>Date:</strong> February 5, 2025</p>
            <p><strong>Time:</strong> 10:00 AM</p>
        </div>
        <div class="appointment">
            <p><strong>Doctor:</strong> Dr. Michael Turner</p>
            <p><strong>Specialty:</strong> Child specialist</p>
            <p><strong>Date:</strong> February 12, 2025</p>
            <p><strong>Time:</strong> 2:30 PM</p>
        </div>
    </div>

    <div class="section-title">Recent Tests</div>
    <table>
        <tr>
            <th>Test Name</th>
            <th>Test Date</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>Immunization Status Review</td>
            <td>December 15, 2024</td>
            <td>Normal</td>
        </tr>
        <tr>
            <td>Antibody Titers Test</td>
            <td>November 25, 2024</td>
            <td>Elevated</td>
        </tr>
    </table>

</div>

</body>
</html>
