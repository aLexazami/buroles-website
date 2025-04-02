<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/feedback-form.css">
  <title>Feedbacking Form</title>
</head>
<body>
  <header>
    <a href="index.php">
      <img src="/img/logo.png" alt="BES Logo" class="bes-logo1">
    </a>
  </header>

  <section>
        <!-- Feedback Form Container -->
            <div class="feedback_form_container">
              <div class="feedback_form_header">
                    <h2>109843 BUROL ELEMENTARY SCHOOL Client Satisfaction Measurement (CSM) (2025)</h2>
              </div>
              <br>
              <div class="feedback_form_box">
                <form action="citizen_charter.php" method="POST" class="feedback_form">
                  <h4>The Client Satisfaction (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide better service. Personal information shared will be kept confidential and you always have the option to not answer this form
                  </h4>
                  <br>
                  <br>
                  <label>Client Information</label>
                  <br>
                  <label><i>Pangalan</i></label>
                  <input type="text" id="name" name="name" required placeholder="Name (Optional)">
                  <br>
                  <label><i>Petsa</i></label>
                  <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required placeholder="Date">
                  <br>
                  <label><i>Edad</i></label>
                  <select id="age" name="age" required>
                    <option value="" disabled selected>Age</option>
                    <option value="under-19">19 or lower / 19 pababa</option>
                    <option value="20-34">20 - 34</option>
                    <option value="35-49">35 - 49</option>
                    <option value="50-64">50 - 64</option>
                    <option value="65-up">65 and higher / 65 pataas</option>
                  </select>
                  <br>
                  <label><i>Kasarian</i></label>
                  <select id="sex" name="sex" required>
                    <option value="" disabled selected>Sex</option>
                    <option value="Female">Female / Babae</option>
                    <option value="Male">Male / Lalaki</option>
                  </select>
                  <br>
                  <label><i>Uri ng Kliyente</i></label>
                  <select id="customer-type" name="customer-type" required onchange="updateServiceOptions()">
                  <option value="" disabled selected>Customer Type</option>
                    <option value="business">Business</option>
                    <option value="citizen">Citizen</option>
                    <option value="government">Government</option>
                  </select>
                  <p><b>Notes:</b> <br>
                  <b>Business</b> (private school, corporations, etc.)<br>
                  <b>Citizen</b> (general public, learners, parents, former DepEd employees, researchers, NGOs etc)<br>
                  <b>Government</b> (current DepEd employees or employees of other government agencies & LGU)</p>
                  </p>
                  <br>
                  <label><i>Serbisyong Natanggap</i></label>
                  <select id="service-availed" name="service-availed" required>
                  <option value="" disabled selected>Service Availed</option>
                  </select>
                  <br>
                  <label><i>Rehiyon</i></label>
                  <select id="region" name="region" required>
                    <option value="" disabled selected>Region</option>
                    <option value="north">Region I - Ilocos Region</option>
                    <option value="north">Region II - Cagayan Valley</option>
                    <option value="north">Region III - Central Luzon</option>
                    <option value="north">Region IV-A - Calabarzon</option>
                    <option value="north">MIMAROPA - Southwestern Tagalog</option>
                    <option value="north">Region V - Bicol Region</option>
                    <option value="north">Region VI - Western Visayas</option>
                    <option value="north">Region VII - Central Visayas</option>
                    <option value="north">Region VIII - Eastern Visayas</option>
                    <option value="north">Region IX - Zambaonga Peninsula</option>
                    <option value="north">Region X - Northern Mindanao</option>
                    <option value="north">Region XI - Davao Region</option>
                    <option value="north">Region XII - SOCCSKSARGEN</option>
                    <option value="north">Region XIII - Caraga</option>
                    <option value="north">NCR - National Capital Region</option>
                    <option value="north">CAR- Cordillera Administrative Region </option>
                    <option value="north">BARMM - Bangsamoro Autonomous Region</option>
                  </select>
                  <br>
                  <button type="button" value="next" form="" onclick="document.location='citizen_charter.php'">Next</button>
                </form>
              </div>
            </div>
  </section>
  <script type="module" src="script.js"></script>
</body>
</html>
<?php
  include "footer.html";

?>