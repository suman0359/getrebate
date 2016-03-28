<div class="dashboard">
    <div class="container">          


<!-------->
<div class="row gg">
    <div id="content">
    <div class="col-md-3">
        <ul id="tabs" class=" nav-tab bg-white" data-tabs="tabs">
            <li class="active">
                <a href="#overview" data-toggle="tab"><i class="fa fa-tasks"></i> <span class="tab-names">Overview</span></a>
            </li>
            <li>
                <a href="#tab2" data-toggle="tab"><i class="fa fa-user"></i> </span> <span class="tab-names"> My Account</span></a>
            </li>
            <li>
                <a href="#tab3" data-toggle="tab"><i class="fa fa-pie-chart"></i> <span class="tab-names">Broker Accounts</span></a>
            </li>
            <li> 
                <a href="#tab4" data-toggle="tab"> <i class="fa fa-line-chart"></i> <span class="tab-names">History</span></a>
            </li>
            <li>
                <a href="#tab5" data-toggle="tab"><i class="fa fa-user-plus"></i> </span> <span class="tab-names">Create Account</span></a>
            </li> <li>
                <a href="#tab6" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> </span> <span class="tab-names">My Reviews</span></a>
            </li> <li>
                <a href="#tab7" data-toggle="tab"><i class="fa fa-bar-chart"></i> </span> <span class="tab-names">Grossing</span></a>
            </li> <li>
                <a href="#tab8" data-toggle="tab"><i class="fa fa-sticky-note-o"></i> </span> <span class="tab-names">Address Book</span></a>
            </li> <li>
                <a href="#tab9" data-toggle="tab"><i class="fa fa-comments"></i> <span class="tab-names">My Tickets</span></a>
            </li>
        </ul>
    </div>
     <!--
    /////////////////////////////////////////////////
    =ser content
    /////////////////////////////////////////////////
--> 
   <div class="col-md-9  ">
<!--      User Profile info-->
       <div id="my-tab-content bg-white" class="tab-content ">
       <!--  ///////////////////////////////////////////////  -->
       <?php $this->load->view('admin/my_account'); ?>
        <!-- End  User Profile info -->
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab2">
           
           <div class="my-account">
               <h2>Account details</h2>
            
            <table class=" table-responsive table-striped table-condensed table"><tbody><tr><th>First Name</th><td>Arham</td></tr>
                <tr><th>Last Name</th><td>Sanzid</td></tr>
                <tr><th>Email</th><td>
        			<div class="row">
        				<div class="col-md-4">sanzid@live.com</div>
						<div class="col-md-2"><span class="coral">Primary</span></div>
						<div class="col-md-6 text-right"><a class="text-orange coral" href="#">Edit</a></div>
					</div></td></tr>
                    <tr><th>Gender</th><td>Male</td></tr>
                    <tr><th>Birthday</th><td></td></tr>
                    <tr><th>Country</th><td>Bangladesh</td></tr>
                    <tr><th>Phone</th><td>01671400051</td></tr>
                    <tr><th>Language</th><td>English</td></tr>
                    <tr><th>Time Zone</th><td></td></tr>
                    <tr><th>Password</th><td>******<a class="pull-right coral" href="#">Change password</a></td></tr></tbody></table>
           </div>
            
        </div>
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab3">
            <h2> Broker Accounts</h2>
       
              <div class="db-table-header">
                <div class="btn border"><i class="fa fa-plus"></i>
                    <span class="coral">Add account </span>
                </div>

                <div class="pull-right">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                      <i class="glyphicon glyphicon-export"></i>
                                    <span class="caret"></span>
                                  </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#"><i class="text-info glyphicon glyphicon-floppy-saved"></i> HTML</a></li>
                            <li><a href="#"><i class="text-primary glyphicon glyphicon-floppy-open"></i> CSV</a></li>
                            <li><a href="#"><i class="text-muted glyphicon glyphicon-floppy-save"></i> Text</a></li>
                            <!--   <li role="separator" class="divider"></li>-->
                            <li><a href="#"><i class="text-success glyphicon glyphicon-floppy-remove"></i> Excel</a></li>
                            <li><a href="#"><i class="text-danger glyphicon glyphicon-floppy-disk"></i> PDF</a></li>
                            <li><a href="#"><i class="text-warning glyphicon glyphicon-floppy-open"></i> JSON</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <table class="responsive-table">
            <!-- <caption>Top 10 Grossing Animated Films of All Time</caption> -->
            <thead>
              <tr>
                <th scope="col">Created</th>
                <th scope="col">Broker</th>
                <th scope="col">Broker Account</th>
                <th scope="col">Status</th>
                <th scope="col">Comment</th>

              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="7"><!--  Table footer info--> </td>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <!--  <th scope="row">Frozen</th> -->
                <td data-title="Created"  data-type="date"><span>20/08/2015</span><span>16:18</span></td>
                <td data-title="Broker"  data-type="Broker"><span>AMarkets</span></td>
                <td data-title="Worldwide Gross" data-type="Broker Account"><span>1121215558</span></td>
                <td data-title="Domestic Gross" data-type="Status"><span>Declined</span>	</td>
                <td data-title="Foreign Gross" data-type="comment"><span>Please provide correct Amarkets account.</span></td>
                 
              </tr>
               
         
            </tbody>
          </table>
   
                    
        </div>
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab4">
            <h2> History</h2>
                <div class="db-table-header">
                <div class="btn border"><i class="fa fa-plus"></i>
                    <span class="coral">Add account </span>
                </div>

                <div class="pull-right">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                      <i class="glyphicon glyphicon-export"></i>
                                    <span class="caret"></span>
                                  </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#"><i class="text-info glyphicon glyphicon-floppy-saved"></i> HTML</a></li>
                            <li><a href="#"><i class="text-primary glyphicon glyphicon-floppy-open"></i> CSV</a></li>
                            <li><a href="#"><i class="text-muted glyphicon glyphicon-floppy-save"></i> Text</a></li>
                            <!--   <li role="separator" class="divider"></li>-->
                            <li><a href="#"><i class="text-success glyphicon glyphicon-floppy-remove"></i> Excel</a></li>
                            <li><a href="#"><i class="text-danger glyphicon glyphicon-floppy-disk"></i> PDF</a></li>
                            <li><a href="#"><i class="text-warning glyphicon glyphicon-floppy-open"></i> JSON</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <table class="responsive-table">
            <!-- <caption>Top 10 Grossing Animated Films of All Time</caption> -->
            <thead>
              <tr>
                <th scope="col">Created</th>
                <th scope="col">Broker</th>
                <th scope="col">Broker Account</th>
                <th scope="col">Status</th>
                <th scope="col">Comment</th>

              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="7"><!--  Table footer info--> </td>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <!--  <th scope="row">Frozen</th> -->
                <td data-title="Created"  data-type="date"><span>20/08/2015</span><span>16:18</span></td>
                <td data-title="Broker"  data-type="Broker"><span>AMarkets</span></td>
                <td data-title="Worldwide Gross" data-type="Broker Account"><span>1121215558</span></td>
                <td data-title="Domestic Gross" data-type="Status"><span>Declined</span>	</td>
                <td data-title="Foreign Gross" data-type="comment"><span>Please provide correct Amarkets account.</span></td>
                 
              </tr>
               <tr>
                <!--  <th scope="row">Frozen</th> -->
                <td data-title="Created"  data-type="date"><span>20/08/2015</span><span>16:18</span></td>
                <td data-title="Broker"  data-type="Broker"><span>AMarkets</span></td>
                <td data-title="Worldwide Gross" data-type="Broker Account"><span>1121215558</span></td>
                <td data-title="Domestic Gross" data-type="Status"><span>Declined</span>	</td>
                <td data-title="Foreign Gross" data-type="comment"><span>Please provide correct Amarkets account.</span></td>
                 
              </tr>
              <tr>
                <!--  <th scope="row">Frozen</th> -->
                <td data-title="Created"  data-type="date"><span>20/08/2015</span><span>16:18</span></td>
                <td data-title="Broker"  data-type="Broker"><span>AMarkets</span></td>
                <td data-title="Worldwide Gross" data-type="Broker Account"><span>1121215558</span></td>
                <td data-title="Domestic Gross" data-type="Status"><span>Declined</span>	</td>
                <td data-title="Foreign Gross" data-type="comment"><span>Please provide correct Amarkets account.</span></td>
                 
              </tr>
         
            </tbody>
          </table>
          
              <div class="test">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur similique facilis ullam reiciendis, nesciunt eius quam distinctio doloribus nemo ad ab qui officia laboriosam. Incidunt dolorem, illum officia itaque repellendus!</p>
              </div>     
               
        </div>
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab5">
            <h2> Create a new user account now </h2>
            <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="" novalidate="novalidate">
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Full name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="fullname" type="text">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Address <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy <span class="required">*</span></label>
                                          <div class="col-lg-10 col-sm-9">
                                             <select>
<option value="">option one</option
</select>
                                              <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree">
                                              
                                          </div>
                                          
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
        </div>
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab6">
            <h1> My Reviews</h1>
             
            <div class="test">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur similique facilis ullam reiciendis, nesciunt eius quam distinctio doloribus nemo ad ab qui officia laboriosam. Incidunt dolorem, illum officia itaque repellendus!</p>
              </div>   
     </div>           
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab7">
       
           
          <table class="responsive-table">
            <caption>Top 10 Grossing Animated Films of All Time</caption>
            <thead>
              <tr>
                <th scope="col">Film Title</th>
                <th scope="col">Released</th>
                <th scope="col">Studio</th>
                <th scope="col">Worldwide Gross</th>
                <th scope="col">Domestic Gross</th>
                <th scope="col">Foreign Gross</th>

              </tr>
            </thead>
            <tfoot>
              <tr>

                <td colspan="7"><!--  Table footer info--> </td>
              </tr>
            </tfoot>
            <tbody>
              <tr>
        <!--        <th scope="row">Frozen</th>-->
                <td data-title="Released">2013</td>
                <td data-title="Studio">Disney</td>
                <td data-title="Worldwide Gross" data-type="currency">$1,279,852,693</td>
                <td data-title="Domestic Gross" data-type="currency">$400,738,009	</td>
                <td data-title="Foreign Gross" data-type="currency">$873,481,000</td>
                <td data-title="Budget" data-type="currency">$150,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Toy Story 3</th>-->
                <td data-title="Released">2010</td>
                <td data-title="Studio">Disney Pixar</td>
                <td data-title="Worldwide Gross" data-type="currency">$1,063,171,911</td>
                <td data-title="Domestic Gross" data-type="currency">$415,004,880</td>
                <td data-title="Foreign Gross" data-type="currency">$648,167,031</td>
                <td data-title="Budget" data-type="currency">$200,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Minions</th>-->
                <td data-title="Released">2015</td>
                <td data-title="Studio">Universal</td>
                <td data-title="Worldwide Gross" data-type="currency">$1,018,901,000</td>
                <td data-title="Domestic Gross" data-type="currency">$324,755,670</td>
                <td data-title="Foreign Gross" data-type="currency">$694,100,000	</td>
                <td data-title="Budget" data-type="currency">$74,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">The Lion King</th>-->
                <td data-title="Released">1994</td>
                <td data-title="Studio">Disney</td>
                <td data-title="Worldwide Gross" data-type="currency">$987,483,777</td>
                <td data-title="Domestic Gross" data-type="currency">$422,783,777</td>
                <td data-title="Foreign Gross" data-type="currency">$564,700,000</td>
                <td data-title="Budget" data-type="currency">$45,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Despicable Me 2</th>-->
                <td data-title="Released">2013</td>
                <td data-title="Studio">Universal</td>
                <td data-title="Worldwide Gross" data-type="currency">$970,761,885</td>
                <td data-title="Domestic Gross" data-type="currency">$368,061,265</td>
                <td data-title="Foreign Gross" data-type="currency">$602,700,620</td>
                <td data-title="Budget" data-type="currency">$76,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Finding Nemo</th>-->
                <td data-title="Released">2003</td>
                <td data-title="Studio">Pixar</td>
                <td data-title="Worldwide Gross" data-type="currency">$936,743,261</td>
                <td data-title="Domestic Gross" data-type="currency">$380,843,261</td>
                <td data-title="Foreign Gross" data-type="currency">$555,900,000</td>
                <td data-title="Budget" data-type="currency">$94,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Shrek 2</th>-->
                <td data-title="Released">2004</td>
                <td data-title="Studio">Dreamworks</td>
                <td data-title="Worldwide Gross" data-type="currency">$919,838,758</td>
                <td data-title="Domestic Gross" data-type="currency">$441,226,247</td>
                <td data-title="Foreign Gross" data-type="currency">$478,612,511</td>
                <td data-title="Budget" data-type="currency">$150,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Ice Age: </th>-->
                <td data-title="Released">2009</td>
                <td data-title="Studio">Fox</td>
                <td data-title="Worldwide Gross" data-type="currency">$886,686,817</td>
                <td data-title="Domestic Gross" data-type="currency">$196,573,705</td>
                <td data-title="Foreign Gross" data-type="currency">$690,113,112	</td>
                <td data-title="Budget" data-type="currency">$90,000,000</td>
              </tr>
              <tr>
        <!--        <th scope="row">Ice Age:  </th>-->
                <td data-title="Released">2012</td>
                <td data-title="Studio">Fox</td>
                <td data-title="Worldwide Gross" data-type="currency">$877,244,782</td>
                <td data-title="Domestic Gross" data-type="currency">$161,321,843</td>
                <td data-title="Foreign Gross" data-type="currency">$715,922,939</td>
                <td data-title="Budget" data-type="currency">$95,000,000</td>   
              </tr>
              <tr>
        <!--        <th scope="row">Shrek the Third</th>-->
                <td data-title="Released">2007</td>
                <td data-title="Studio">Dreamworks</td>
                <td data-title="Worldwide Gross" data-type="currency">$798,958,162</td>
                <td data-title="Domestic Gross" data-type="currency">$322,719,944</td>
                <td data-title="Foreign Gross" data-type="currency">$476,238,218</td>
                <td data-title="Budget" data-type="currency">$160,000,000</td>
              </tr>
            </tbody>
          </table>
 
        </div>
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab8">
            <h1>Address Book</h1>

        </div>
        <!--  ///////////////////////////////////////////////  -->
        <div class="tab-pane" id="tab9">
            <h1>My Tickets</h1>
            <p>My Tickets</p>
        </div>
    </div>
   </div>
    
</div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    
</div> <!-- container -->  
</div>
  