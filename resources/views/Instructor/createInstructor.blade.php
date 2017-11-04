@extends('Layouts.app')
@section('title')
    @parent
    Instructor
@stop
@section('content')
<form action="{{route('createUser')}}" id="main_form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="tab-pill">
	     <div class="container">
	        <div class="create_new">
	           <div class="row">
	              <div class="col-lg-6">
	                 <h5><i class="fa fa-arrow-right"></i> Benutzer anlegen</h5>
	              </div>
	              <div class="col-lg-6">
	                 <ol class="breadcrumb breadcrumb-arrow create_bread text-right">
	                    <li><a href="#"><i class="fa fa-tachometer"></i> instructor</a></li>
	                    <li class="active"><span>Data</span></li>
	                 </ol>
	              </div>
	           </div>
	        </div>
		<div class="section1">
	     <div class="container">
	        <div class="row">
	              <br>
	           <ul class="nav nav-tabs">
	              <li class="active"><a data-toggle="tab" href="#home">Allgemein</a></li>
	              <li><a data-toggle="tab" href="#menu1">Konteneinstellungen</a></li>
	              <li><a data-toggle="tab" href="#menu2">Rechteverwaltung</a></li>
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
	                                                     <input type="text" name="user_title" class="form-control" id="name1" >
	                                                  </div>
	                                               </div>
	                                               <div class="form-group">
	                                                  <label class="control-label col-sm-2" for="pwd">Vorname:</label>
	                                                  <div class="col-sm-6"> 
	                                                     <input type="text" name="user_first_name" class="form-control" id="firstname" >
	                                                  </div>
	                                               </div>
	                                               <div class="form-group">
	                                                  <label class="control-label col-sm-2" for="pwd">Nachname:</label>
	                                                  <div class="col-sm-6"> 
	                                                     <input type="text" name="user_sur_name" class="form-control" id="Surename" >
	                                                  </div>
	                                               </div>
	                                               <div class="form-group">
	                                                  <label class="control-label col-sm-2" for="pwd">Kürzel: </label>
	                                                  <div class="col-sm-6"> 
	                                                     <input type="text" name="user_abbreviation_name" class="form-control" id="Surename">
	                                                  </div>
	                                               </div>
	                                               <div class="form-group">
	                                                  <label class="control-label col-sm-2" for="pwd">Geburtsdatum:</label>
	                                                  <div class="col-sm-6"> 
	                                                     <input type="text" name="user_dob" class="form-control" id="Surename">
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
	                                                  <span></span><input type="file" name="user_image_name" multiple class="form-control"/>
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
	                                <div role="tabpanel" class="tab-pane" id="tab3">
	                                   <div class="col-lg-12">
	                                      <div class="image">
	                                         <div class="row">
	                                            <p>Notiz</p>
	                                            <div>
	                                               <div class="col-lg-6">
	                                                  <textarea class="form-control" name="user_note"></textarea>
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
	                                                  <input type="text" name="user_street_number" class="form-control" id="name1" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">PLZ und Ort:</label>
	                                               <div class="col-sm-2"> 
	                                                  <input type="text" name="user_postcode1" class="form-control" id="Surename" >
	                                               </div>
	                                               <div class="col-sm-4"> 
	                                                  <input type="text" name="user_postcode2" class="form-control" id="firstname" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Land:</label>
	                                               <div class="col-sm-6">
	                                                  <select class="form-control" name="user_state">
	                                                     <option></option>
	                                                  </select>
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Bundesland: </label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="text" name="user_city" class="form-control" id="Surename" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Telefon:</label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="text" name="user_phone" class="form-control" id="Surename" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Handy:</label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="text" name="user_mobile" class="form-control" id="Surename">
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">E-mail:</label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="email" name="user_email" class="form-control" id="email">
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
	                                                  <input type="text" name="user_street_number1" class="form-control" id="name1" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">PLZ und Ort
	                                               :</label>
	                                               <div class="col-sm-2"> 
	                                                  <input type="text" name="user_postcode_town1" class="form-control" id="Surename" >
	                                               </div>
	                                               <div class="col-sm-4"> 
	                                                  <input type="text" name="user_city1" class="form-control" id="firstname" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Land
	                                               Land wählen
	                                               :</label>
	                                               <div class="col-sm-6">
	                                                  <select class="form-control" name="user_country1">
	                                                     <option></option>
	                                                  </select>
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Bundesland: </label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="text" name="user_sta1" class="form-control" id="Surename" >
	                                               </div>
	                                            </div>
	                                            <div class="checkbox">
	                                               <label><input type="checkbox">von Organisation übernehmen</label>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Telefon:</label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="text" name="user_phone1" class="form-control" id="Surename">
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">Handy:</label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="text" name="user_mobile1" class="form-control" id="Surename" >
	                                               </div>
	                                            </div>
	                                            <div class="form-group">
	                                               <label class="control-label col-sm-2" for="pwd">E-mail:</label>
	                                               <div class="col-sm-6"> 
	                                                  <input type="email" name="user_email1" class="form-control" id="email">
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
	                 <div class="row">
	                    <div class="col-lg-6">
	                       <div class="account">
	                          <div class="form-horizontal">
	                             <div class="form-group">
	                                <label class="control-label col-sm-3" for="pwd">E-Mailadresse*: </label>
	                                <div class="col-sm-6"> 
	                                   <input type="email" name="email" class="form-control" id="email" placeholder="Enter email addres">
	                                </div>
	                                <div class="col-sm-10 ">
	                                   <div class="checkbox">
	                                      <label><input type="checkbox">E-Mailadresse automatisch generieren</label>
	                                   </div>
	                                </div>
	                             </div>
	                             <div class="form-group">
	                                <label class="control-label col-sm-3" for="pwd">Nickname*:</label>
	                                <div class="col-sm-6"> 
	                                   <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Enter nickname">
	                                </div>
	                                <div class="col-sm-10 text-center">
	                                   <div class="checkbox">
	                                      <label><input type="checkbox">Nickname automatisch generieren</label>
	                                   </div>
	                                </div>
	                             </div>
	                          </div>
	                       </div>
	                    </div>
	                 </div>
	              </div>
	              <div id="menu2" class="tab-pane fade">
	                 <div class="row">
	                    <div class="col-lg-6">
	                       <div class="roll">
	                          <div class="form-horizontal">
	                             <div class="form-group">
	                                <label class="control-label col-sm-2" for="pwd">Manager: </label>
	                                <div class="col-sm-10">
	                                   <select class="form-control">
	                                      <option>Kein Zugriff</option>
	                                      <option>manger admistration</option>
	                                      <option>Fahrlehrer</option>
	                                      <option>Aushilfe</option>
	                                      <option>Bürokraft</option>
	                                   </select>
	                                </div>
	                             </div>
	                             <div class="form-group">
	                                <label class="control-label col-sm-6" for="pwd">Mobile Client </label>
	                                <div class="col-sm-4">
	                                   <div class="checkbox">
	                                      <label><input type="checkbox"></label>
	                                   </div>
	                                </div>
	                             </div>
	                             <div class="form-group">
	                                <label class="control-label col-sm-6" for="pwd">OP's auf Mobile Client anzeigen </label>
	                                <div class="col-sm-4">
	                                   <div class="checkbox">
	                                      <label><input type="checkbox"></label>
	                                   </div>
	                                </div>
	                             </div>
	                             <div class="form-group">
	                                <label class="control-label col-sm-6" for="pwd">In der FL-Übersicht anzeigen</label>
	                                <div class="col-sm-4">
	                                   <div class="checkbox">
	                                      <label><input type="checkbox"></label>
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