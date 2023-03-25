<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->


    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        
    </header><!-- End Header -->
    <div class="container">
      <form action="/action_page.php">
        <input type="hidden" name="form_id" value="{{ $form_key }}">
        <div class="row">
          <div class="card col-6">
            <div class="card-header">
              Gesuchstellende Perso
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="md-3">
                    <label for="name" class="form-label">Vorname:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Vorname" name="name">
                  </div>                 
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <label for="surname" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
                  </div>                  
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="md-6">
                    <label for="inlineRadioOptions" class="form-label">Geschlecht:</label>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="F">
                      <label class="form-check-label" for="inlineRadio1">weiblich</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="M">
                      <label class="form-check-label" for="inlineRadio2">männlich</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="O">
                      <label class="form-check-label" for="inlineRadio3">divers</label>
                    </div>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-6">                  
                    <label for="name" class="form-label">Zivilstand:</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>                                  
                </div>  
                <div class="col-6">                 
                    <label for="birthdate" class="form-label">Geburtsdatum:</label>
                    <input type="date"  class="form-control" id="birthdate" name="birthdate">    
                </div>                
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="street_no" class="form-label">Strasse / Nr:</label>
                  <input type="text"  class="form-control" id="street_no" name="street_no">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="postcode_city" class="form-label">Postleitzahl / Ort:</label>
                  <input type="text"  class="form-control" id="postcode_city" name="postcode_city">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="telephone" class="form-label">Telefon / Mobile:</label>
                  <input type="text"  class="form-control" id="telephone" name="telephone">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="email" class="form-label">E-Mai:</label>
                  <input type="email"  class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="employment" class="form-label">Erwerbstätigkeit:</label>
                  <input type="text"  class="form-control" id="employment" name="employment">
                  <input type="number"  class="form-control" id="employment_percent" name="employment_percent">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="nationality" class="form-label">Nationalität:</label>
                  <input type="text"  class="form-control" id="nationality" name="nationality">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="permission_id" class="form-label">Bewilligung:</label>
                  <select class="form-select" aria-label="Default select example">
                    <option name="permission_id" selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card col-6">
            <div class="md-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card col-12">
            <div class="card-header">
              Anzahl Personen im Haushal
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col">
                  <label for="child_total" class="form-label">Kinder / Jugendliche (bis Ende 17. Lebensjahr):</label>
                  <input type="number" class="form-control" aria-label="First name" name="child_total">
                </div>
                <div class="col">
                  <label for="adults_total" class="form-label">Erwachsene (ab 18. Geburtstag): </label>
                  <input type="number" class="form-control" name="adults_total">
                </div>
              </div>
              <div class="row g-3">              
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="card-header">
              Kinder, für die Sie sorgen (bei mehr als vier Kindern bitte separat auflisten)
            </div>
            <div class="clearfix"></div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Vorname</th>
                  <th scope="col">Name</th>
                  <th scope="col">Geburtsdatum</th>
                  <th scope="col">Gender</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_1"></td>
                  <td> <input type="text" class="form-control" name="csurname_1"></td>
                  <td> <input type="date" class="form-control" name="cbirthdate_1"></td>
                  <td> <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="cgender_1" id="inlineRadio1" value="F">
                    <label class="form-check-label" for="inlineRadio1">weiblich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_1" id="inlineRadio2" value="M">
                    <label class="form-check-label" for="inlineRadio2">männlich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_1" id="inlineRadio3" value="O">
                    <label class="form-check-label" for="inlineRadio3">divers</label>
                  </div></td>
                </tr>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_2"></td>
                  <td> <input type="text" class="form-control" name="csurname_2"></td>
                  <td> <input type="date" class="form-control" name="cbirthdate_2"></td>
                  <td> <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="cgender_2" id="inlineRadio1" value="F">
                    <label class="form-check-label" for="inlineRadio1">weiblich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_2" id="inlineRadio2" value="M">
                    <label class="form-check-label" for="inlineRadio2">männlich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_2" id="inlineRadio3" value="O">
                    <label class="form-check-label" for="inlineRadio3">divers</label>
                  </div></td>
                </tr>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_3"></td>
                  <td> <input type="text" class="form-control" name="csurname_3"></td>
                  <td> <input type="date" class="form-control" name="cbirthdate_3"></td>
                  <td> <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="cgender_3" id="inlineRadio1" value="F">
                    <label class="form-check-label" for="inlineRadio1">weiblich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_3" id="inlineRadio2" value="M">
                    <label class="form-check-label" for="inlineRadio2">männlich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_3" id="inlineRadio3" value="O">
                    <label class="form-check-label" for="inlineRadio3">divers</label>
                  </div></td>
                </tr>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_4"></td>
                  <td> <input type="text" class="form-control" name="csurname_4"></td>
                  <td> <input type="date" class="form-control" name="cbirthdate_4"></td>
                  <td> <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="cgender_4" id="inlineRadio1" value="F">
                    <label class="form-check-label" for="inlineRadio1">weiblich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_4" id="inlineRadio2" value="M">
                    <label class="form-check-label" for="inlineRadio2">männlich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender_4" id="inlineRadio3" value="O">
                    <label class="form-check-label" for="inlineRadio3">divers</label>
                  </div></td>
                </tr>
              </tbody>
            </table>
            <label for="desc_situation" class="form-label">Situationsbeschreibung und Problemschilderung:</label>
            <textarea class="form-control" id="desc_situation" name="desc_situation"></textarea>
            <label for="needed_support" class="form-label">Benötigte Unterstützung:</label>
            <textarea class="form-control" id="needed_support" name="needed_support"></textarea>
            <div class="card-header">
              Monatliches Budget: Übersicht über die finanzielle Situation des Haushaltes
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Einnahmen von allen im Haushalt lebenden Personen</th>
                  <th scope="col">genauere Bezeichnung </th>
                  <th scope="col">Netto pro Monat</th>                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_1"></td>
                  <td> <input type="text" class="form-control" name="csurname_1"></td>
                  <td> <input type="text" class="form-control" name="cbirthdate_1"></td>
                 
                </tr>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_2"></td>
                  <td> <input type="text" class="form-control" name="csurname_2"></td>
                  <td> <input type="text" class="form-control" name="cbirthdate_2"></td>
                  
                </tr>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_3"></td>
                  <td> <input type="text" class="form-control" name="csurname_3"></td>
                  <td> <input type="text" class="form-control" name="cbirthdate_3"></td>
                  
                </tr>
                <tr>
                  <td> <input type="text" class="form-control" name="cname_4"></td>
                  <td> <input type="text" class="form-control" name="csurname_4"></td>
                  <td> <input type="text" class="form-control" name="cbirthdate_4"></td>
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>   
        <div class="row">
          <div class="col-12">
            <label for="street_no" class="form-label">Strasse / Nr:</label>
            <textarea class="form-control" id="street_no" name="street_no"></textarea>
          </div>
        </div>     
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>
    

</body>

</html>
