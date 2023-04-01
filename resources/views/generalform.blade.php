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
        <h3>Winterhilfe Unterstützungsgesuch</h3>
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
                <span class="bs-stepper-label">Person</span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-4">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">4</span>
                <span class="bs-stepper-label">Partener / in</span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-5">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">5</span>
                <span class="bs-stepper-label">Kinder</span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-6">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">6</span>
                <span class="bs-stepper-label">Gesuchsteller / in</span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-7">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">7</span>
                <span class="bs-stepper-label">Extrainfo</span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-nl-8">
              <button type="button" class="btn step-trigger">
                <span class="bs-stepper-circle">8</span>
                <span class="bs-stepper-label">Extrainfo -2 </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">
            <form name="frm" id="frm" action="{{route('form.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="form_id" id="form_id" value="{{ $form_key }}">
            <div id="test-nl-1" class="content">
                <label for="needed_support" class="form-label">Benötigte Unterstützung:</label>
                <textarea class="form-control" id="needed_support" name="needed_support"></textarea>
              <div class="card row">
                <div class="card-header">
                  Monatliches Budget: Übersicht über die finanzielle Situation des Haushaltes
                </div>
                <div class="card-body">
                  
                  <div class="row">
                    @foreach ($revTypes as $item)
                    <div class="row">
                      <div class="col-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="revenue[]" value="{{$item['id']}}" id="revType{{$item['id']}}">
                      <label class="form-check-label" for="revType{{$item['id']}}">
                        {{$item['text']}}
                      </label>
                    </div>
                      </div>
                      <div class="col-3">
                      <input type="file" class="form-control" id="revenue_file{{$item['id']}}" name="revenue_file[]"/>
                      </div>
                    </div>
                    @endforeach         
                  </div>
              </div>
              </div>
              <button class="btn btn-primary"  type="button" onclick="stepper.next()">Next</button>
            </div>
            <div id="test-nl-2" class="content">
              <div class="col-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="einkommantwort" id="einkommantwort1" value="Y">
                  <label class="form-check-label" for="einkommantwort1">Ja</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="einkommantwort" id="einkommantwort2" value="N">
                  <label class="form-check-label" for="einkommantwort2">Nein</label>
                </div>
              </div>              
              <div class="col-12 antwortfile">
                <label for="street_no" class="form-label">Files: </label>
                <input type="file" class="form-control" id="file_antwort" name="file_antwort"/>
              </div>
              <button class="btn btn-primary" type="button" onclick="stepper.next()">Next</button>
            </div>
            <div id="test-nl-3" class="content">
              <div class="card col-12">
                <div class="card-header">
                  Gesuchstellende Person
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                    <label for="lang" class="form-label">Korrespondenzssprache:</label>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="lang" id="lang1" value="D">
                      <label class="form-check-label" for="lang1">deutsch</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="lang" id="lang2" value="F">
                      <label class="form-check-label" for="lang2">französisch</label>
                    </div>
                    </div>
                  </div>
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
                          @foreach ($meritalstatus as $item)
                          <option value="{{$item['id']}}">{{$item['text']}}</option>
                          @endforeach
                        </select>                                  
                    </div>  
                    <div class="col-6">                 
                        <label for="birthdate" class="form-label">Geburtsdatum:</label>
                        <input type="date"  class="form-control" id="birthdate" name="birthdate">    
                    </div>                
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="street" class="form-label">Strasse:</label>
                      <input type="text"  class="form-control" id="street" name="street">
                    </div>
                    <div class="col-6"> 
                      <label for="street_no" class="form-label">Nr:</label>
                      <input type="text"  class="form-control" id="street_no" name="street_no">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="postcode" class="form-label">Postleitzahl:</label>
                      <input type="text"  class="form-control" id="postcode" name="postcode">
                    </div>
                    <div class="col-6"> 
                      <label for="city" class="form-label">Ort:</label>
                      <input type="text"  class="form-control" id="city" name="city">
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
                      <label for="nationality" class="form-label">Nationalität:</label>
                      <input type="text"  class="form-control" id="nationality" name="nationality">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"> 
                      <label for="permission_id" class="form-label">Bewilligung:</label>
                      <select name="permission_id" class="form-select" aria-label="Default select example">
                      @foreach ($permissions as $item)
                      <option value="{{$item['id']}}">{{$item['text']}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"> 
                      <label for="employment" class="form-label">Berufliche Tätigkeit:</label>
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="work" id="work1" value="Y">
                        <label class="form-check-label" for="work1">Ich arbeite</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="work" id="work2" value="N">
                        <label class="form-check-label" for="work2">Ich arbeite im Moment nicht</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="employment" class="form-label">Erwerbstätigkeit:</label>
                      <input type="text"  class="form-control" id="employment" name="employment">
                    </div>
                    <div class="col-6">
                      <label for="employment" class="form-label">Stellenprozente:</label>
                      <select name="employment_percent" class="form-select" aria-label="Default select example">
                          <option value="0">Select</option>
                          <option value="10">10%</option>
                          <option value="20">20%</option>
                          <option value="30">30%</option>
                          <option value="40">40%</option>
                          <option value="50">50%</option>
                          <option value="60">60%</option>
                          <option value="70">70%</option>
                          <option value="80">80%</option>
                          <option value="90">90%</option>
                          <option value="100">100%</option>
                      </select> 
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-12"> 
                      <label for="family_situation" class="form-label">Familiäre Situation:</label>
                      <select name="family_situation" class="form-select" aria-label="Default select example">
                        <option value="EP">Einzelperson</option>
                        <option value="PMK">Paar mit Kinder</option>
                        <option value="POK">Paar ohne Kinder</option>
                        <option value="AZ">Alleinerziehend</option>
                      </select>                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="child_total" class="form-label">Anzahl Kinder (bis und mit 17 Jahren) im Haushalt:</label>
                      <input type="number"  class="form-control" id="child_total" name="child_total">            
                    </div>
                    <div class="col-6"> 
                      <label for="totalpeople" class="form-label">Anzahl Personen im Haushalt inkl. Kinder:</label>
                      <input type="number"  class="form-control" id="totalpeople" name="totalpeople">            
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <button class="btn btn-primary"  type="button" onclick="stepper.next()">Next</button>
              <button class="btn btn-primary"  type="button" onclick="stepper.previous()">Previous</button>
            </div>
            <div id="test-nl-4" class="content">
              <div class="card col-12">
                <div class="card-header">
                  Partner/in
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="md-3">
                        <label for="pname" class="form-label">Vorname:</label>
                        <input type="text" class="form-control" id="pname" placeholder="Enter Vorname" name="pname">
                      </div>                 
                    </div>
                    <div class="col-6">
                      <div class="mb-3">
                        <label for="psurname" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="psurname" placeholder="Enter Name" name="psurname">
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
                          @foreach ($meritalstatus as $item)
                          <option value="{{$item['id']}}">{{$item['text']}}</option>
                          @endforeach
                        </select>                                  
                    </div>  
                    <div class="col-6">                 
                        <label for="pbirthdate" class="form-label">Geburtsdatum:</label>
                        <input type="date"  class="form-control" id="pbirthdate" name="pbirthdate">    
                    </div>                
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="pstreet" class="form-label">Strasse:</label>
                      <input type="text"  class="form-control" id="pstreet" name="pstreet">
                    </div>
                    <div class="col-6"> 
                      <label for="pstreet_no" class="form-label">Nr:</label>
                      <input type="text"  class="form-control" id="pstreet_no" name="pstreet_no">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="ppostcode" class="form-label">Postleitzahl:</label>
                      <input type="text"  class="form-control" id="ppostcode" name="ppostcode">
                    </div>
                    <div class="col-6"> 
                      <label for="pcity" class="form-label">Ort:</label>
                      <input type="text"  class="form-control" id="pcity" name="pcity">
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
                      <label for="pwork" class="form-label">Berufliche Tätigkeit:</label>
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="pwork" id="pwork1" value="Y">
                        <label class="form-check-label" for="work1">Ich arbeite</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pwork" id="pwork2" value="N">
                        <label class="form-check-label" for="pwork2">Ich arbeite im Moment nicht</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="pemployment" class="form-label">Erwerbstätigkeit:</label>
                      <input type="text"  class="form-control" id="pemployment" name="pemployment">
                    </div>
                    <div class="col-6">
                      <label for="pemployment" class="form-label">Stellenprozente:</label>
                      <select name="pemployment_percent" class="form-select" aria-label="Default select example">
                          <option value="0">Select</option>
                          <option value="10">10%</option>
                          <option value="20">20%</option>
                          <option value="30">30%</option>
                          <option value="40">40%</option>
                          <option value="50">50%</option>
                          <option value="60">60%</option>
                          <option value="70">70%</option>
                          <option value="80">80%</option>
                          <option value="90">90%</option>
                          <option value="100">100%</option>
                      </select> 
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
                        @foreach ($permissions as $item)
                        <option value="{{$item['id']}}">{{$item['text']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary"  type="button" onclick="stepper.next()">Next</button>
              <button class="btn btn-primary"  type="button" onclick="stepper.previous()">Previous</button>
            </div>
            <div id="test-nl-5" class="content">
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
                  @for($i=0;$i<7;$i++)
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
              <button class="btn btn-primary"  type="button" onclick="stepper.next()">Next</button>
              <button class="btn btn-primary"  type="button" onclick="stepper.previous()">Previous</button>
            </div>
            <div id="test-nl-6" class="content">
              <div class="card col-6">
                <div class="card-header">
                  Gesuchsteller / in
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12"> 
                      <label for="gcompany" class="form-label">Firma/Organisation:</label>
                      <input type="text"  class="form-control" id="gcompany" name="gcompany">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="md-3">
                        <label for="gname" class="form-label">Vorname:</label>
                        <input type="text" class="form-control" id="gname" placeholder="Enter Vorname" name="gname">
                      </div>                 
                    </div>
                    <div class="col-6">
                      <div class="mb-3">
                        <label for="gsurname" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="gsurname" placeholder="Enter Name" name="gsurname">
                      </div>                  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="md-6">
                        <label for="inlineRadioOptions" class="form-label">Geschlecht:</label>
                        <div class="form-check form-check-inline ">
                          <input class="form-check-input" type="radio" name="ggender" id="ggender1" value="F">
                          <label class="form-check-label" for="ggender1">weiblich</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ggender" id="ggender2" value="M">
                          <label class="form-check-label" for="ggender2">männlich</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ggender" id="ggender3" value="O">
                          <label class="form-check-label" for="ggender3">divers</label>
                        </div>
                      </div>    
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">                  
                      <label for="gstreet" class="form-label">Strasse:</label>
                      <input type="text"  class="form-control" id="gstreet" name="gstreet">                               
                    </div>  
                    <div class="col-6">                 
                      <label for="gstr_no" class="form-label">Nr:</label>
                      <input type="text"  class="form-control" id="gstr_no" name="gstr_no">      
                    </div>                
                  </div>
                  <div class="row">
                    <div class="col-6"> 
                      <label for="gpostcode" class="form-label">Postleitzahl:</label>
                      <input type="text"  class="form-control" id="gpostcode" name="gpostcode">
                    </div>
                    <div class="col-6"> 
                      <label for="gcity" class="form-label">Ort:</label>
                      <input type="text"  class="form-control" id="gcity" name="gcity">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"> 
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"> 
                      <label for="gtelephone" class="form-label">Telefon / Mobile:</label>
                      <input type="text"  class="form-control" id="gtelephone" name="gtelephone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"> 
                      <label for="gemail" class="form-label">E-Mai:</label>
                      <input type="email"  class="form-control" id="gemail" name="gemail">
                    </div>
                  </div>
                  
                </div>
              </div>
              <button class="btn btn-primary"  type="button" onclick="stepper.next()">Next</button>
              <button class="btn btn-primary"  type="button" onclick="stepper.previous()">Previous</button>
            </div>
            <div id="test-nl-7" class="content">
              <label for="desc_situation" class="form-label">Situationsbeschreibung und Problemschilderung:</label>
              <textarea class="form-control" id="desc_situation" name="desc_situation"></textarea>
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
                  
                </tbody>
              </table>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Vermögen von allen im Haushalt lebenden Personen</th>
                    <th scope="col">genauere Bezeichnung</th>
                    <th scope="col">Betrag</th>                  
                  </tr>
                </thead>
                <tbody>
                  @for($i=0;$i<5;$i++)  
                  <tr>
                    <td>                    
                      <input type="text" class="form-control" name="asset_name[]">
                    </td>
                    <td> <input type="file" class="form-control" name="asset_file[]"></td>
                    <td> <input type="text" class="form-control" name="asset_amount[]"></td>                 
                  </tr>
                  @endfor               
                  
                </tbody>
              </table>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Schulden von allen im Haushalt lebenden Personen</th>
                    <th scope="col">genauere Bezeichnung</th>
                    <th scope="col">Betrag</th>                  
                  </tr>
                </thead>
                <tbody>
                  @for($i=0;$i<5;$i++)  
                  <tr>
                    <td>                    
                      <input type="text" class="form-control" name="debt_name[]">
                    </td>
                    <td> <input type="file" class="form-control" name="debt_file[]"></td>
                    <td> <input type="text" class="form-control" name="debt_amount[]"></td>                 
                  </tr>
                  @endfor               
                  
                </tbody>
              </table>
              
            </div>
            <div id="test-nl-8" class="content">
              <div class="card col-12">
                <div class="card-header">
                  Finanzierungsplan (bei einem Betrag über CHF 2'000)
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="md-3">
                        <label for="required_financial" class="form-label">Benötigte finanzielle Unterstützung (Übernahme von Rechnungen) :</label>
                        <input type="text" class="form-control" id="required_financial" name="required_financial">
                      </div>                 
                    </div>
                    <div class="col-6">
                      <div class="mb-3">
                        <label for="own_contribution" class="form-label">Eigener Beitrag:</label>
                        <input type="text" class="form-control" id="own_contribution"  name="own_contribution">
                      </div>                  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="md-3">
                        <label for="application_to_winter" class="form-label">Antrag an die Winterhilfe:</label>
                        <input type="text" class="form-control" id="application_to_winter" name="application_to_winter">
                      </div>                 
                    </div>
                    <div class="col-6">
                      <div class="mb-3">
                        <label for="aply_others" class="form-label">Antrag an weitere Organisation(en) gestellt?:</label>
                        <div class="form-check form-check-inline ">
                          <input class="form-check-input" type="radio" name="aply_others" id="aply_others1" value="Y">
                          <label class="form-check-label" for="aply_others1">Ja</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="aply_others" id="aply_others2" value="N">
                          <label class="form-check-label" for="aply_others2">Nein</label>
                        </div>
                      </div>                  
                    </div>
                  </div>
                  <div class="row">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Organisation</th>
                          <th scope="col">Entscheid?</th>
                          <th scope="col">Betrag</th>                  
                        </tr>
                      </thead>
                      <tbody>
                        @for($i=0;$i<5;$i++)  
                        <tr>
                          <td>                    
                            <input type="text" class="form-control" name="orgs_other[]">
                          </td>
                          <td>
                            <select name="orgs_decision[]" class="form-select" aria-label="Default select example">
                              <option value="">Select</option>
                              <option value="Zusage">Zusage</option>
                              <option value="pendent">pendent</option>
                              <option value="Absage">Absage</option>
                          
                            </select> 
                          </td>
                          <td> <input type="text" class="form-control" name="orgs_amount[]"></td>                 
                        </tr>
                        @endfor               
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <label for="street_no" class="form-label">Files: </label>
                      <input type="file" class="form-control" id="file" name="file"/>
                    </div>
                  </div>
                </div>
              </div>
               
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div> 
        
          
        
        
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
