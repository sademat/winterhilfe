<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Winter Hilfe Form- Index</title>
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

    <link href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        
    </header><!-- End Header -->
    <div class="container">
      <div class="col-md-12 mt-5">
        <h2>Non linear stepper</h2>
        <div id="stepper" class="bs-stepper">
          <div class="bs-stepper-header">
            <div class="step" data-target="#test-nl-1">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">1</span>
                <span class="bs-stepper-label">First step</span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-2">
              <div class="btn step-trigger">
                <span class="bs-stepper-circle">2</span>
                <span class="bs-stepper-label">Second step</span>
              </div>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-3">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label">Third step</span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">
            <div id="test-nl-1" class="content">
              <div class="card row">
                <div class="card-header">
                  Monatliches Budget: Übersicht über die finanzielle Situation des Haushaltes
                </div>
                <div class="card-body">
                  <div class="row">
                    @foreach ($revTypes as $item)
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="revenue[]" value="{{$item['id']}}" id="revType{{$item['id']}}">
                      <label class="form-check-label" for="revType{{$item['id']}}">
                        {{$item['text']}}
                      </label>
                    </div> 
                    @endforeach         
                  </div>
              </div>
              </div>
              <button class="btn btn-primary" onclick="stepper.next()">Next</button>
            </div>
            <div id="test-nl-2" class="content">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <button class="btn btn-primary" onclick="stepper.next()">Next</button>
            </div>
            <div id="test-nl-3" class="content">
              <p class="text-center">test 5</p>
              <button class="btn btn-primary" onclick="stepper.next()">Next</button>
              <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
            </div>
          </div>
        </div>
      </div>

      
       
      
      <form name="frm" id="frm" action="{{route('form.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="form_id" id="form_id" value="{{ $form_key }}">
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
                    <input type="text" class="form-control" id="surname" placeholder="Enter Name" name="surname">
                  </div>                  
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="md-6">
                    <label for="inlineRadioOptions" class="form-label">Geschlecht:</label>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="gender" id="gender1" value="F">
                      <label class="form-check-label" for="gender1">weiblich</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="gender2" value="M">
                      <label class="form-check-label" for="gender2">männlich</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="gender3" value="O">
                      <label class="form-check-label" for="gender3">divers</label>
                    </div>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-6">                  
                    <label for="maritalstatus_id" class="form-label">Zivilstand:</label>
                    <select name="maritalstatus_id" class="form-select" aria-label="Default select example">
                      
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
                  <select name="permission_id" class="form-select" aria-label="Default select example">
                    
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card col-6">
            <div class="card-header">
              Partner/in
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
                    <input type="text" class="form-control" id="surname" placeholder="Enter Name" name="surname">
                  </div>                  
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="md-6">
                    <label for="inlineRadioOptions" class="form-label">Geschlecht:</label>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="pgender" id="pgender1" value="F">
                      <label class="form-check-label" for="pgender1">weiblich</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pgender" id="pgender2" value="M">
                      <label class="form-check-label" for="pgender2">männlich</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pgender" id="pgender3" value="O">
                      <label class="form-check-label" for="pgender3">divers</label>
                    </div>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-6">                  
                    <label for="name" class="form-label">Zivilstand:</label>
                    <select name="pmaritalstatus_id" class="form-select" aria-label="Default select example">
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>                                  
                </div>  
                <div class="col-6">                 
                    <label for="pbirthdate" class="form-label">Geburtsdatum:</label>
                    <input type="date"  class="form-control" id="pbirthdate" name="pbirthdate">    
                </div>                
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="pstreet_no" class="form-label">Strasse / Nr:</label>
                  <input type="text"  class="form-control" id="pstreet_no" name="pstreet_no">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="ppostcode_city" class="form-label">Postleitzahl / Ort:</label>
                  <input type="text"  class="form-control" id="ppostcode_city" name="ppostcode_city">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="ptelephone" class="form-label">Telefon / Mobile:</label>
                  <input type="text"  class="form-control" id="ptelephone" name="ptelephone">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="pemail" class="form-label">E-Mai:</label>
                  <input type="email"  class="form-control" id="pemail" name="pemail">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="pemployment" class="form-label">Erwerbstätigkeit:</label>
                  <input type="text"  class="form-control" id="pemployment" name="pemployment">
                  <input type="number"  class="form-control" id="pemployment_percent" name="pemployment_percent">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="pnationality" class="form-label">Nationalität:</label>
                  <input type="text"  class="form-control" id="pnationality" name="pnationality">
                </div>
              </div>
              <div class="row">
                <div class="col-12"> 
                  <label for="ppermission_id" class="form-label">Bewilligung:</label>
                  <select name="ppermission_id" class="form-select" aria-label="Default select example">                    
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
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
                @for($i=0;$i<5;$i++)
                <tr>
                  <td> <input type="text" class="form-control" name="cname[]"></td>
                  <td> <input type="text" class="form-control" name="csurname[]"></td>
                  <td> <input type="date" class="form-control" name="cbirthdate[]"></td>
                  <td> <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="cgender{{$i}}[]" id="cgenderw{{$i}}" value="F">
                    <label class="form-check-label" for="cgenderw{{$i}}">weiblich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender{{$i}}[]" id="cgenderm{{$i}}" value="M">
                    <label class="form-check-label" for="cgenderm{{$i}}">männlich</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cgender{{$i}}[]" id="cgenderd{{$i}}" value="O">
                    <label class="form-check-label" for="cgenderd{{$i}}">divers</label>
                  </div></td>
                </tr>
                @endfor
              </tbody>
            </table>
            <label for="desc_situation" class="form-label">Situationsbeschreibung und Problemschilderung:</label>
            <textarea class="form-control" id="desc_situation" name="desc_situation"></textarea>
            <label for="needed_support" class="form-label">Benötigte Unterstützung:</label>
            <textarea class="form-control" id="needed_support" name="needed_support"></textarea>
           
            <label class="form-check-label" for="total_amount">Benötigte Finanzielle Unterstützung (Übernahme von Rechnung/en) Totalbetrag</label>
            <input class="form-control" type="text" name="total_amount" id="total_amount" >             
            

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
                @for($i=0;$i<5;$i++) 
                <tr>
                  <td>                    
                    <select name="type_id_rev[]" class="form-select" aria-label="Default select example">
                      <option value="">Select</option>
                      @foreach ($revTypes as $item)
                        <option value="{{$item['id']}}" >{{$item['text']}}</option>
                      @endforeach 
                    </select> 
                  </td>
                  <td> <input type="text" class="form-control" name="description_rev[]"></td>
                  <td> <input type="text" class="form-control" name="net_per_month_rev[]"></td>                 
                </tr>
                @endfor 
                <tr>
                  <td></td>
                  <td>Total Einnahmen:</td>
                  <td><input type="text" class="form-control" name="total_revenue"></td>
                  
                </tr>
              </tbody>
            </table>
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Ausgaben von allen im Haushalt lebenden Personen </th>
                  <th scope="col">genauere Bezeichnung </th>
                  <th scope="col">Netto pro Monat</th>                  
                </tr>
              </thead>
              <tbody>
                @for($i=0;$i<5;$i++)  
                <tr>
                  <td>                    
                    <select name="type_id_exp[]" class="form-select" aria-label="Default select example">
                      <option value="">Select</option>
                      @foreach ($expTypes as $item)
                      <option value="{{$item['id']}}" >{{$item['text']}}</option>
                      @endforeach 
                    </select> 
                  </td>
                  <td> <input type="text" class="form-control" name="description_exp[]"></td>
                  <td> <input type="text" class="form-control" name="net_per_month_exp[]"></td>                 
                </tr>
                @endfor               
                
                <tr>
                  <td></td>
                  <td>Total Ausgaben:</td>
                  <td><input type="text" class="form-control" readonly="readonly" name="total_expenditure"></td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Restbetrag (monatliche Einnahmen - Ausgaben)</th>                  
                  <th scope="col">Netto pro Monat</th>                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>für den Lebensunterhalt (Essen / Kleider / Hygiene / Haushalt / Energie / Telekommunikation / Mobilität /
                    Gesundheitskosten / Zahnarzt / Freizeit / Ferien / Bildung / etc.)</td>
                    <td>
                      <input type="text" readonly="readonly" class="form-control">
                    </td>
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
        <div class="row">
          <div class="col-12">
            <label for="street_no" class="form-label">Files: </label>
            <input type="file" class="form-control" id="file" name="file"/>
          </div>
        </div>   
        <div class="form-group">
          <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
          </div>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.js"></script>
    
    <script>
        var stepper = new Stepper(document.querySelector('#stepper'), {
              linear: false,
              animation: true
            });

        $(function () {
          
            $(document).ready(function () {
             
              // AJAX request 
              $('#file').change(function(){
                var files = $('#file')[0].files;
                var formkey=$('#form_id').val();
                var fd = new FormData();
                fd.append('file',files[0]);
                fd.append('_token',"{{ csrf_token() }}");
                fd.append('form_key',formkey);
                $.ajax({
                  url: "{{route('uploadToServer')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  success: function(response){

                    // Hide error container
                    $('#err_file').removeClass('d-block');
                    $('#err_file').addClass('d-none');

                    if(response.success == 1){ // Uploaded successfully

                      // Response message
                      $('#responseMsg').removeClass("alert-danger");
                      $('#responseMsg').addClass("alert-success");
                      $('#responseMsg').html(response.message);
                      $('#responseMsg').show();

                      // File preview
                      $('#filepreview').show();
                      $('#filepreview img,#filepreview a').hide();
                      if(response.extension == 'jpg' || response.extension == 'jpeg' || response.extension == 'png'){

                          $('#filepreview img').attr('src',response.filepath);
                          $('#filepreview img').show();
                      }else{
                          $('#filepreview a').attr('href',response.filepath).show();
                          $('#filepreview a').show();
                      }
                    }else if(response.success == 2){ // File not uploaded

                      // Response message
                      $('#responseMsg').removeClass("alert-success");
                      $('#responseMsg').addClass("alert-danger");
                      $('#responseMsg').html(response.message);
                      $('#responseMsg').show();
                    }else{
                      // Display Error
                      $('#err_file').text(response.error);
                      $('#err_file').removeClass('d-none');
                      $('#err_file').addClass('d-block');
                    } 
                  },
                  error: function(response){
                      console.log("error : " + JSON.stringify(response) );
                  }
                });
              });
            });
        });
    </script>
</body>

</html>
