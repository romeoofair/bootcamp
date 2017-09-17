	<footer>
		<div class="container-fliud" id="footer">
		         <div class="container" id="foot-cont">
                                <div class="row">
                                      <div class="col-sm-5" id="contact">
										  
										  		<h4>Contact Us</h4>
											  	<h6>Staff Coordinator(s)</h6>
											  	<p class="text-muted">M.C. Jagan Sekhar - 9440677755</p>
											  	<p class="text-muted">R.Kumara Swamy - 9553333271</p>
											  	<h6>Student Coordinator(s)</h6>
											  	<p class="text-muted">A.Sagar - 7893004276</p>
											  	<p class="text-muted">D.Rambabu - 9492635710</p>
										  
									  </div>
                                      <div class="col-sm-4" id="address">
									  	  
										  		<h4>Join Us</h4>
											  	<h6 >Address: </h6>
											  	<p class="text-muted">Sontyam, Anandapuram,<br>Pendurti - Anandapuram road,<br> Visakhapatnam,<br> Andhra Pradesh 531173<br></p>
											  	<h6 >Phone:</h6>
											  	<p class="text-muted"> 089332 20126</p>
								
									  </div>
                                      <div class="col-sm-3">
                                          <div id="designer">
										  		<img src="images/designer.png" id="designerl">
											  	<p class="text-muted" id="desiname">2016 &copy; Bharath Kumar, III CSE, NSRIT</p>
										  </div>
                                      </div>
                                 </div>
                        </div>
		</div>  
</footer>

          
      
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js">
    </script>
	      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js">
    </script>
	      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
	  
	<script type="text/javascript">
		
		$("#fname2,#mname2,#lname2").hide();
        $("#fname3,#mname3,#lname3").hide();
        $("#fname4,#mname4,#lname4").hide();
        $("#fname,#mname,#lname").show();
		
	  	$('input[type="radio"]').click(function(){
            
            if($(this).attr("value")=="1"){
                $("#fname2,#mname2,#lname2").hide();
                $("#fname3,#mname3,#lname3").hide();
                $("#fname4,#mname4,#lname4").hide();
                $("#fname,#mname,#lname").show();
            }                                                                                    
            if($(this).attr("value")=="2"){
                $("#fname2,#mname2,#lname2").show();
                $("#fname3,#mname3,#lname3").hide();
                $("#fname4,#mname4,#lname4").hide();
                $("#fname,#mname,#lname").show();
            }
            if($(this).attr("value")=="3"){
                $("#fname2,#mname2,#lname2").show();
                $("#fname3,#mname3,#lname3").show();
                $("#fname4,#mname4,#lname4").hide();
                $("#fname,#mname,#lname").show();
            }
			if($(this).attr("value")=="4"){
                $("#fname2,#mname2,#lname2").show();
                $("#fname3,#mname3,#lname3").show();
                $("#fname4,#mname4,#lname4").show();
                $("#fname,#mname,#lname").show();
            }
        });
		
		
	</script>
      

  </body>
</html>