@extends('Layouts.app')
@section('title')
    @parent
    Instructor
@stop
@section('alerts')

@stop
@section('content')
<form method="post" action="{{ route('postprofile')}}" enctype="multipart/form-data">
   {{ csrf_field() }}
 <div class="tab-pill">
         <div class="container">
            <div class="create_new">
               <div class="row">
                   <div class="col-lg-12">
                  <div class="col-lg-7">
                     <h5><i class="fa fa-arrow-right"></i> Mein Konto</h5>
                     <h5> @if (Session::has('success'))
                        <div style="color:red">{{ Session::get('success') }}</div>
                        @endif</h5>
                  </div>
                  <div class="col-lg-4 text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-hdd-o"></i> Save</button>
                  </div>
                            <div class="col-lg-1">
                    <button type="button" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      <div class="section1">
         <div class="container">
            <div class="row">
                  <br>
               <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-folder-open-o"></i> Allgemein</a></li>
                  <li><a data-toggle="tab" href="#menu1"><i class="fa fa-plus"></i> Benutzerkonto</a></li>
                  <li><a data-toggle="tab" href="#menu2"><i class="fa fa-plus"></i> Personaldaten</a></li>
               </ul>
               <br>
               <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                  <div class="section1">
                     <div class="container">
                        <div class="row">
                           <div role="tabpanel">
                              <div class="col-sm-9">
                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab1">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general">
                                                <p>Allgemein</p>
                                                <div class="form-horizontal">
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="email">Anrede/Titel:</label>
                                                      <div class="col-sm-2">
                                                         <select class="form-control" name="user_title">
                                                            <option value="0">sir</option>
                                                            <option value="1">Mrs</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-sm-4">
                                                         <input type="text" name="user_title_name" value="" class="form-control" id="name1" >
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Vorname:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="text" name="user_sur_name" class="form-control" id="firstname" >
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Nachname:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="text" name="user_abbreviation_name" class="form-control" id="Surename" >
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Kürzel: </label>
                                                      <div class="col-sm-6"> 
                                                         <input type="name" class="form-control" id="Surename">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Geburtsdatum:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="name" class="form-control" id="Surename">
                                                      </div>
                                                   </div>
                                                
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab2">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Bild</p>
                                                <div>
                                                   <div class="col-sm-6"> 
                                                      <span></span><input type="file" multiple class="form-control"/>
                                                   </div>
                                                   <div class="col-sm-6 text-center"> 
                                                      <br>
                                                      <img src="images/im.png" width="55%">
                                                   </div>
                                                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                
                                    <div role="tabpanel" class="tab-pane" id="tab4">
                                       <div class="col-lg-12">
                                          <div class="private">
                                             <p>Privat</p>
                                             <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="email">Strasse und Hausnr*
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="name" class="form-control" id="name1" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">PLZ und Ort:</label>
                                                   <div class="col-sm-2"> 
                                                      <input type="name" class="form-control" id="Surename" >
                                                   </div>
                                                   <div class="col-sm-4"> 
                                                      <input type="name" class="form-control" id="firstname" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Land:</label>
                                                   <div class="col-sm-6">
                                                      <select class="form-control">
                                                         <option></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Bundesland: </label>
                                                   <div class="col-sm-6"> 
                                                      <input type="name" class="form-control" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Telefon:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="name" class="form-control" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Handy:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="name" class="form-control" id="Surename">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">E-mail:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="email" class="form-control" id="email">
                                                   </div>
                                                </div>
                                            
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab5">
                                       <div class="col-lg-12">
                                          <div class="operation">
                                             <p>Betrieblich</p>
                                             <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="email">Strasse und Hausnr
                                                   </label>
                                                   <div class="col-sm-6">
                                                      <input type="name" class="form-control" id="name1" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">PLZ und Ort
                                                   :</label>
                                                   <div class="col-sm-2"> 
                                                      <input type="name" class="form-control" id="Surename" >
                                                   </div>
                                                   <div class="col-sm-4"> 
                                                      <input type="name" class="form-control" id="firstname" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Land
                                                   Land wählen
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <select class="form-control">
                                                         <option></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Bundesland: </label>
                                                   <div class="col-sm-6"> 
                                                      <input type="name" class="form-control" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="checkbox">
                                                   <label><input type="checkbox">von Organisation übernehmen</label>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Telefon:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="name" class="form-control" id="Surename">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Handy:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="name" class="form-control" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">E-mail:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="email" class="form-control" id="email">
                                                   </div>
                                                </div>
                                                <div class="checkbox">
                                                   <label><input type="checkbox">von Organisation übernehmen
                                                   </label>
                                                </div>
                                              
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                   
                              
                               
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <ul class="nav nav-pills brand-pills nav-stacked nav_create" role="tablist">
                                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"> Allgemein</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Bild</a></li>
                              
                                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Privat</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Betrieblich</a></li>
                            
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                  <div id="menu1" class="tab-pane fade">
                    <div class="section1">
                     <div class="container">
                        <div class="row">
                           <div role="tabpanel">
                              <div class="col-sm-9">
                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="acc1">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general">
                                                <p>E-Mailadresse ändern</p>
                                              <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Aktuelle E-Mailadresse
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Neue E-Mailadresse
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">E-Mailadresse bestätigen
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                     <div class="col-sm-12 text-center">
                                                      <button class="btn btn-success">E-Mailadresse ändern</button>
                                                   </div>
                                                </div>
                                             </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="acc2">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Passwort ändern</p>
                                                <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Aktuelles Passwort
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Neues Passwort
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Passwort bestätigen
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="col-sm-12 text-center">
                                                      <button class="btn btn-success">Passwort ändern</button>
                                                   </div>
                                                </div>
                                             </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                
                                    <div role="tabpanel" class="tab-pane" id="acc3">
                                       <div class="col-lg-12">
                                          <div class="private">
                                             <p>Benachrichtigungen</p>
                                             <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">bei neuer Nachricht
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="checkbox">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">bei neuem Fahrschüler:</label>
                                                   <div class="col-sm-2"> 
                                                      <input type="checkbox">
                                                   </div>
                                                  
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Newsletter abonnieren:</label>
                                                   <div class="col-sm-6">
                                                                                                            <input type="checkbox"  id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Fragen an Fahrlehrer: </label>
                                                   <div class="col-sm-6"> 
                                                      <input type="checkbox" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Einrichtungsassistent aktivieren:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="checkbox"  disabled="disabled">
                                                   </div>
                                                </div>
                                              
                                            
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="acc4">
                                       <div class="col-lg-12">
                                          <div class="operation">
                                             <p>Nickname ändern</p>
                                             <div class="form-horizontal">
                                               <div class="form-group">
                                                 <label class="control-label col-sm-2" for="pwd"> Nickname:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="email" class="form-control" id="email">
                                                   </div>
                                               </div>
                                              
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                   
                              
                               
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <ul class="nav nav-pills brand-pills nav-stacked nav_create" role="tablist">
                                    <li role="presentation" class="brand-nav active"><a href="#acc1" aria-controls="acc1" role="tab" data-toggle="tab">E-Mailadresse ändern</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#acc2" aria-controls="acc2" role="acc2" data-toggle="tab">Passwort ändern</a></li>
                              
                                    <li role="presentation" class="brand-nav"><a href="#acc3" aria-controls="acc3" role="acc3" data-toggle="tab">Benachrichtigungen</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#acc4" aria-controls="acc4" role="acc4" data-toggle="tab">Nickname ändern</a></li>
                            
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div id="menu2" class="tab-pane fade">
                      <div class="section1">
                     <div class="container">
                        <div class="row">
                           <div role="tabpanel">
                              <div class="col-sm-9">
                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="per1">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general">
                                                <p>Steuerangaben</p>
                                              <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Familienstatus
                                                   :</label>
                                                   <div class="col-sm-6">
                                                     <select class="form-control">
                                                         <option>ledig </option>
                                                      </select>
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Steuerklasse
                                                   :</label>
                                                   <div class="col-sm-3">
                                                      <select class="form-control">
                                                         <option>klasse i</option>
                                                      </select>
                                                   </div>
                                                    <label class="control-label col-sm-3" for="email">Kinder
                                                   :</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Krankenversicherunz
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                
                                             </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="per2">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Einstellungsdatum und Urlaub</p>
                                                <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Eintrittsdatum
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="email">Urlaubstage
                                                   :</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                     <label class="control-label col-sm-3 text-left" for="email">
Resturlaub
                                                   :</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control">
                                                   </div>
                                                </div>
                                                 
                                             
                                             </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                
                                    <div role="tabpanel" class="tab-pane" id="per3">
                                         <div class="col-lg-12">
                                          <div class="operation">
                                             <p>Weitere Tätigkeiten</p>
                                             <div class="form-horizontal">
                                               <div class="form-group">
                                                 <label class="control-label col-sm-2" for="pwd"> Zugleich tätig bei:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" class="form-control" id="email">
                                                   </div>
                                               </div>
                                              
                                             </div>
                                          </div>
                                       </div>
                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="per4">
                                                     <div class="col-lg-12">
                                          <div class="private">
                                             <p>Bankverbindung</p>
                                             <div class="form-horizontal">
                                                   <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Kreditinstitut:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Bankleitzahl:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Kontonummer:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">IBAN:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Swift-BIC:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Kontoinhaber:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                              
                                            
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                     <div role="tabpanel" class="tab-pane" id="per5">
                                                       <div class="col-lg-12">
                                          <div class="private">
                                             <p>Gehalt</p>
                                             <div class="form-horizontal">
                                                   <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Stunden/Arbeitstag:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Minuten/Lehreinheit:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Grundlohn:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                  <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Übungsstunde:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Autobahnfahrt:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Überlandfahrt:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Beleuchtungsfahrt:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Grundfahraufgaben:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                    <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Zuschlag für Fahrstunden nach 20:00 Uhr:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                    <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Unterrichte:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                    <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Unterweisung am Fahrzeug:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Prüfungen:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Sonstige Tätigkeiten:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Bonus A1:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Bonus A2:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                                 <div class="form-group">
                                                   <label class="control-label col-sm-3" for="pwd">Bonus A3:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text"  class="form-control" >
                                                   </div>
                                                </div>
                                              
                                            
                                             </div>
                                          </div>
                                       </div>
                                     

                                       
                                     </div>
                                   
                              
                               
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <ul class="nav nav-pills brand-pills nav-stacked nav_create" role="tablist">
                                    <li role="presentation" class="brand-nav active"><a href="#per1" aria-controls="per1" role="tab" data-toggle="tab">Steuerangaben</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#per2" aria-controls="acc2" role="acc2" data-toggle="tab">Einstellungsdatum und Urlaub</a></li>
                              
                                    <li role="presentation" class="brand-nav"><a href="#per3" aria-controls="acc3" role="acc3" data-toggle="tab">Weitere Tätigkeiten</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#per4" aria-controls="acc4" role="acc4" data-toggle="tab">Bankverbindung</a></li>
                                     <li role="presentation" class="brand-nav"><a href="#per5" aria-controls="acc4" role="acc4" data-toggle="tab">Gehalt</a></li>
                            
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</form>
@stop