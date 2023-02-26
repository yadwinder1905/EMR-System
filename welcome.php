<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Role of EMR in patient care">
    <meta name="keywords" content="Electronic Health Record, Electronic Medical Record, EMR, EHR">
    <meta name="author" content="yadwinder singh">
    <title>EMR In Healthcare| Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">EMR In</span> Healthcare</h1>
        </div>
        <nav>
          <ul>
          <li><a href="welcome.php">home</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="Services.php">Services</a></li>
          </ul>
         </nav>
      </<div>
    </header>

    <section id="showcase"
      <div class="container">
        <h1>Electronic Medical Record In Patient Care</h1>
        <p>EMRs are widely adopted and used by healthcare providers, such as hospitals, clinics, and private practices to improve the efficiency, quality, and continuity of care for patients</p>
      </div>
    </section>

    <section id="registration">
      <div class="container">
       <h1>For More Information</h1>
       <form>
         <input type="search" placeholder="Type Here...">
         <button type="submit" class="button_1">Google</button>
        </form>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/logo_html.jpg">
          <h3>Patient Appointment</h3>
          <p>Welcome to our patient appointment section! We are dedicated to providing the highest quality of care to our patients and making the appointment scheduling process as easy as possible.</p>
        </div>
        <div class="box">
          <img src="./img/logo_css.jpg">
          <h3>Medical Information</h3>
          <p>Welcome to our medical information section! We understand that staying informed about your health is important, and we want to make that process as easy as possible for you.</p>
          </div>
          <div class="box">
            <img src="./img/logo_brush.jpg">
            <h3>Billing</h3>
            <p>Welcome to our billing section! We offer variety of payment options, including online bill pay, credit card, and cash. If you are facing any difficulties, we will help you to find assistance and resources.</p>
          </div>
      </div>
    </section>

     <table id="patient-data">
       <thead>
         <tr>
           <th>Name</th>
           <th>Disease</th>
           <th>Symptom</th>
           <th>Medication</th>
          </tr>
       </thead>
       <tbody>
         <tr>
           <td>Sarah Johnson</td>
           <td>Diabties</td>
           <td>Excessive thirst and urination</td>
           <td>Metformin</td>
         </tr>
         <tr>
           <td>Michael Smith</td>
           <td>Hypertension</td>
           <td>High blood pressure readings</td>
           <td>Amlodipine</td>
         </tr>
         <tr>
           <td>Emily Davis</td>
           <td>Asthma</td>
           <td>Shortness of breathe and weezing</td>
           <td>Albuterol</td>
         </tr>
         <tr>
           <td>David Brown</td>
           <td>Depression</td>
           <td>Low mood, loss of interest, and feelings of hopelessness</td>
           <td>Fluoxetine</td>
         </tr>
         <tr>
           <td>Katie Wilson</td>
           <td>Rheumatoid Arthritis</td>
           <td>Joint pain, stiffness, and swelling</td>
           <td>Methotrexate</td>
         </tr>
         <tr>
           <td>John Doe</td>
           <td>Acne</td>
           <td>Pimples and blackheads on the face, neck, and back</td>
           <td>Tretinoin</td>
         </tr>
         <tr>
           <td>Jane Doe</td>
           <td>Migrane</td>
           <td>Severe headache, nausea, and sensitivity to light and sound</td>
           <td>Sumatriptan</td>
         </tr>
         <tr>
           <td>Brian Wilson</td>
           <td>Apnea</td>
           <td>Snoring, gasping, and choking during sleep</td>
           <td>Continuous positive airway pressure (CPAP) machine</td>
         </tr>
         <tr>
           <td>Amanda Johnson</td>
           <td>Irritable Bowl Syndrome</td>
           <td>Abdominal pain, bloating, and alternating constipation and diarrhea</td>
           <td>Fiber supplements and antispasmodic drugs</td>
         </tr>
       </tbody>
     </table>



<footer>
  <p>EMR, copyright &copy; 2017</p>
</footer>
