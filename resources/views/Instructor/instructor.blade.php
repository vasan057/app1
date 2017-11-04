@extends('Layouts.app')
@section('title')
    @parent
    Instructor
@stop
@section('content')
<form method="post" action="{{route('saveInstructor')}}" id="main_form">
   {{csrf_field()}}
<div class="tab-pill">
         <div class="container">
            <div class="create_new">
               <div class="row">
                  <div class="col-lg-6">
                     <h5><i class="fa fa-arrow-right"></i> Fahrlehrer</h5>
                  </div>
                  <div class="col-lg-6">
                     <ol class="breadcrumb breadcrumb-arrow create_bread text-right">
                        <li><a href="#"><i class="fa fa-tachometer"></i> instructor</a></li>
                        <li class="active"><span>Data</span></li>
                     </ol>
                  </div>
               </div>
            </div>
            <br>
            <ul class="nav nav-tabs">
               <li class="active"><a data-toggle="pill" href="#home"><i class="fa fa-folder-open-o"></i> Allgemein</a></li>
               <li><a data-toggle="pill" href="#menu1"><i class="fa fa-plus"></i> Personaldaten</a></li>
               <li><a data-toggle="pill" href="#menu2"><i class="fa fa-plus"></i> Fahrschüler</a></li>
               <li><a data-toggle="pill" href="#menu3"><i class="fa fa-plus"></i> Fahrtenbuch</a></li>
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
                                                         <select class="form-control">
                                                            <option>sir</option>
                                                            <option>Mrs</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-sm-4">
                                                         <input type="text" class="form-control" id="name1" name="user_title" value="{{$user_details->user_title}}">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Vorname:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="text" class="form-control" id="firstname" name="user_first_name" value="{{$user_details->user_first_name}}">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Nachname:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="text" class="form-control" id="Surename" name="user_sur_name" value="{{$user_details->user_sur_name}}">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Kürzel: </label>
                                                      <div class="col-sm-6"> 
                                                         <input type="text" name="user_abbreviation_name" class="form-control" id="Surename" value="{{$user_details->user_abbreviation_name}}">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Geburtsdatum:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="text" name="user_dob" class="form-control" id="Surename" value="{{$user_details->user_dob}}">
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
                                                      <span></span><input type="file" name="user_image_name" class="form-control"/>
                                                   </div>
                                                   <div class="col-sm-6 text-center"> 
                                                      <br>
                                                      <img src="{{$user_details->user_image_name}}" width="55%">
                                                   </div>
                                                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab3">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Notiz</p>
                                                <div>
                                                   <div class="col-lg-6">
                                                      <textarea class="form-control"  name="user_note">{{$user_details->user_note}}</textarea>
                                                      <br>
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
                                                      <input type="text" name="user_street_number" class="form-control" id="name1" value="{{$user_details->user_street_number}}" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">PLZ und Ort:</label>
                                                   <div class="col-sm-2"> 
                                                      <input type="text" name="user_postcode1" class="form-control" id="Surename" value="{{$user_details->user_postcode}}">
                                                   </div>
                                                   <div class="col-sm-4"> 
                                                      <input type="name" name="user_postcode2" class="form-control" id="firstname" value="{{$user_details->user_postcode}}">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Land:</label>
                                                   <div class="col-sm-6">
                                                      <select class="form-control" name="user_state">
                                                         <option value="{{$user_details->user_state}}">India</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Bundesland: </label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" name="user_city" class="form-control" value="{{$user_details->user_city}}" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Telefon:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" name="user_phone" class="form-control" id="Surename" value="{{$user_details->user_phone}}">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Handy:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" name="user_mobile" class="form-control" id="Surename" value="{{$user_details->user_mobile}}">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">E-mail:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="email" name="user_email" class="form-control" id="email" value="{{$user_details->user_email}}">
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
                                                      <input type="text" class="form-control" id="name1" value="{{$user_details->user_street_number}}" name="user_street_number">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">PLZ und Ort
                                                   :</label>
                                                   <div class="col-sm-2"> 
                                                      <input type="text" class="form-control" id="Surename" value="{{$user_details->user_postcode}}" name="user_postcode1">
                                                   </div>
                                                   <div class="col-sm-4"> 
                                                      <input type="text" class="form-control" value="{{$user_details->user_postcode}}" name="user_postcode2" id="firstname" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Land
                                                   Land wählen
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <select class="form-control" name="user_state1">
                                                         <option value="{{$user_details->user_state}}"></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Bundesland: </label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" value="{{$user_details->user_city}}" name="user_city1" class="form-control" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="checkbox">
                                                   <label><input type="checkbox">von Organisation übernehmen</label>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Telefon:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" value="{{$user_details->user_phone}}" name="user_phone" class="form-control" id="Surename">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">Handy:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="text" value="{{$user_details->user_mobile}}" name="user_mobile1" class="form-control" id="Surename" >
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="pwd">E-mail:</label>
                                                   <div class="col-sm-6"> 
                                                      <input type="email" name="{{$user_details->user_email}}" class="form-control" id="email">
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
                                    <div role="tabpanel" class="tab-pane" id="tab6">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Klassen</p>
                                                <div>
                                                   <div class="col-lg-3">
                                                      <div class="class">
                                                         <h4>B</h4>
                                                         <span>PKM</span>
                                                      </div>
                                                      <br>
                                                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Klassenauswahl
                                                      </button>
                                                      <!-- Modal -->
                                                      <div class="modal fade" id="myModal" role="dialog">
                                                         <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                               <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  <h4 class="modal-title">Klassenauswahl
                                                                  </h4>
                                                               </div>
                                                               <div class="modal-body">
                                                                  <p>This is a large modal.</p>
                                                               </div>
                                                               <div class="modal-footer">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                    <div role="tabpanel" class="tab-pane" id="tab7">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Fahrzeuge ( * = Auswahl )</p>
                                                <div>
                                                   <div class="form-group">
                                                      <div class="col-lg-8">
                                                         <input type="name" class="form-control" id="Fahrzeuge" placeholder="Enter Fahrzeuge">
                                                         <br>
                                                      </div>
                                                   </div>
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab8">
                                       <div class="col-lg-12">
                                          <div class="image">
                                             <p>Filialen</p>
                                             <div class="row">
                                                <div>
                                                   <div class="form-group">
                                                      <div class="col-lg-8">
                                                         <div class="checkbox">
                                                            <label><input type="checkbox">Fahrschule Mentor George Sood</label>
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
                              <div class="col-sm-3">
                                 <ul class="nav nav-pills brand-pills nav-stacked nav_create" role="tablist">
                                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Allgemein</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Bild</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Notiz</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Privat</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Betrieblich</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Klassen</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Fahrzeuge ( * = Auswahl )</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Filialen</a></li>
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
                                    <div role="tabpanel" class="tab-pane active" id="ta1">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general">
                                                <p>Steuerangaben</p>
                                                <div class="form-horizontal">
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="email">Familienstatus</label>
                                                      <div class="col-sm-6">
                                                         <select class="form-control" name="family_status">
                                                            <option>ledig</option>
                                                            <option>verheiratet</option>
                                                            <option>geschieden</option>
                                                            <option>verwitwet</option>
                                                            
                                                         </select>
                                                      </div>
                                          
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Steuerklasse</label>
                                                    <div class="col-sm-2">
                                                         <select class="form-control">
                                                            <option>sir</option>
                                                            <option>Mrs</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-sm-4">
                                                         <input type="text" class="form-control" id="name1" name="tax_bracket">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-sm-2" for="pwd">Krankenversicherung:</label>
                                                      <div class="col-sm-6"> 
                                                         <input type="name" class="form-control" id="Surename" name="tax_bracket">
                                                      </div>
                                                   </div>
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ta2">
                                          <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general">
                                                <p>Steuerangaben</p>
                                                <div class="form-horizontal">
                                                      <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Minuten/Lehreinheit</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="mins_teachingunit">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Grundlohn</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="basic_wage">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Übungsstunde</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="practice_session">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Autobahnfahrt</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="highway_driving">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Überlandfahrt</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="overland_journey">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Beleuchtungsfahrt</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="ligithing_ride">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Grundfahraufgaben</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="Maneuvers">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Zuschlag für Fahrstunden nach 20:00 Uhr</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="Surcharge">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Unterrichte</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="lessons">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Unterweisung am Fahrzeug</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="Instruction">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Prüfungen</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="exams">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Sonstige Tätigkeiten</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="Other">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Bonus A1</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="bonas1">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Bonus A2</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="bonusA2">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Bonus A3</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="bonusA3">
                                    </div>
                                  </div>
                                 

                                </div>

                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ta3">

                                       <div class="col-lg-12">
                                          <div class="image">
                                             <div class="row">
                                                <p>Einstellungsdatum und Urlaub</p>
                                                <div class="form-horizontal">
                                                   <div class="box-body">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-3 control-label">Eintrittsdatum</label>

                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" name="entry_date">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-3 control-label">Urlaubstage</label>

                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" name="holidays">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-3 control-label">Resturlaub</label>

                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" name="remaining_holidays">
                                  </div>
                                </div>

                              </div>
                               <div class="form-group">
                              <div class="col-sm-3 col-sm-offset-3">
                                  <button type="button" class="btn btn-success btn-block btn-round">Nächster &nbsp;&nbsp; <i class="fa fa-arrow-right"></i></button>
                                </div>
                             </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ta4">
                                       <div class="col-lg-12">
                                          <div class="private">
                                             <p>Weitere Tätigkeiten</p>
                                             <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label class="control-label col-sm-2" for="email">Zugleich tätig bei
                                                   :</label>
                                                   <div class="col-sm-6">
                                                      <input type="name" class="form-control" id="name1" name="actives">
                                                   </div>
                                                </div>
                              
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ta5">
                                       <div class="col-lg-12">
                                          <div class="operation">
                                             <p>Bankverbindung</p>
                                             <div class="form-horizontal">
                                               <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Kreditinstitut</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="credit_ins">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Bankleitzahl</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="bank_code">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kontonummer</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="account_number">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">IBAN</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="Iban">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Swift-BIC</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="swiftBIC">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kontoinhaber</label>

                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="accunt_owner">
                                    </div>
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
                                    <li role="presentation" class="brand-nav active"><a href="#ta1" aria-controls="ta1" role="tab" data-toggle="tab">Steuerangaben</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#ta2" aria-controls="ta2" role="tab" data-toggle="tab">Gehalt</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#ta3" aria-controls="ta3" role="tab" data-toggle="tab">Einstellungsdatum und Urlaub</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#ta4" aria-controls="ta4" role="tab" data-toggle="tab">Weitere Tätigkeiten</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#ta5" aria-controls="ta5" role="tab" data-toggle="tab">Bankverbindung</a></li>
                                 
                                                                </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="menu2" class="tab-pane fade">
                  <div class="box-header">
                  <h3 class="box-title">Fahrschüler</h3>

                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->

                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <tr><th>Bild</th>
                      <th>Fahrschüler</th>
                      <th>Kontaktdaten</th>
                    </tr></thead>
                    <tbody>
                      <tr><td>Keine Fahrschüler vorhanden</td>
                    </tr></tbody>
                  </table>
                </div>
               </div>
               <div id="menu3" class="tab-pane fade">
                 
               </div>
            </div>
         </div>
      </div>
   </form>
@stop
@push('foot')
<script type="text/javascript">
   $(document).on('click','#main_save_btn',function(){
      $('#main_form').submit(); 
   });
</script>
@endpush