      <div class="instructor_pos">
         <div class="instructor">
            <div class="container-fluid">
               <ul class="header1">
                  <li class="active"><a href="#"><img src="{{ asset('assets/images/cars_logo.png')}}" width="30px"> MENTOR</a></li>
              
                  <li><a href=""><i class="fa fa-bell-o"></i><span class="label label-danger">8</span></a></a></li>
                
                  
                  <li><a href=""><i class="fa fa-envelope-o"></i><span class="label label-success">4</span></a></li>
                               
    <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-plus"></i> New</a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Page 1-1</a></li>
                     <li><a href="#">Page 1-2</a></li>
                     <li><a href="#">Page 1-3</a></li>
                  </ul>
               </li>
               <li><a href=""><i class="fa fa-cog"></i> Setting</a></li>
                               
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My account <i class="fa fa-user-o"></i></a>
                            <ul class="dropdown-menu my_acc_drop" style="color: black;">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                           <img src="{{ asset('assets/images/user.png') }}" width="100px;">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>John Doe</strong></p>
                                        <p class="text-left small">Johndoe@email.com</p>
                                        <br>
                                        <p class="text-left">
                                            <a href="{{ route('edit_account') }}" class="btn btn-primary btn-block btn-sm"><i class="fa fa-edit"></i> EDIT</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="padding:0px;">
                            <div class="navbar-login navbar-login-session">
                                <div class="row text-center">

                                    <div class="col-lg-12">
                                       <hr>
                                        <p>
                                            <a href="{{ route('getlogout') }}" class="btn btn-danger btn-block"><i class="fa fa-power-off"></i> LOG OUT</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul></li>
                  
                 
                 
              
                 
               </ul>
               <div class="clear"></div>
            </div>
         </div>
         
 <div class="show_id" id="show" style="display: none;">
           <div class="instructor instructor2">
         <div class="container-fluid">
            <ul class="header1 header2">
               <li class="active"><a href="#">Menu</a></li>
               <li><a href="">Manage</a></li>
               <li><a href=""><i class="fa fa-pencil"></i> Edit</a></li>
               <li><a href=""><i class="fa fa-eye"></i> View</a></li>
               <li><a href=""><i class="fa fa-cog"></i> Setting</a></li>
            </ul>
            <div class="clear"></div>
         </div>
      </div>

      <div class="instructor instructor3">
         <div class="container-fluid">
            <ul class="header1 header2">
             
               <li><a href="#"><i class="fa fa-ban"></i> Cancel</a></li>
               <li><label></label></li>
               <li><label></label></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-plus"></i> New</a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Page 1-1</a></li>
                     <li><a href="#">Page 1-2</a></li>
                     <li><a href="#">Page 1-3</a></li>
                  </ul>
               </li>
         
            </ul>
            <div class="clear"></div>
         </div>
      </div>
   </div>
   <div class="hide_id" id="hide" style="display: none;">
      <h4 id="down"><i class="fa fa-arrow-down"></i></h4>
      <h4 id="up" style="display: none;"><i class="fa fa-arrow-up"></i></h4>
   </div>
</div>
       