<?php 
	
    if( isset( $_GET['alert'] ) ) {
        
        //new client added
        if ( $_GET['alert'] == 'success' ) {
            $alertMessage = "<div class='alert alert-success'>Registration Successful<a class='close' data-dismiss='alert'>&times;</a></div>";
        } 
	}

   	include('includes/header.php')
?>

	
	<?php echo $alertMessage; ?>
	<!-- Modal -->
	<div class="modal fade" id="memberModal7" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="memberModalLabel7">Registration successful!</h4>
		  </div>
		  <div class="modal-body">
				<p>Thank you for registering with us</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>

      <div class="jumbotron bg-inverse" id="jumbotron">
          <div class="jumbotron-text">
			  <h1 class="display-3">You probably haven’t heard of us</h1>
			  <p class="lead">Welcome to <img src="images/logo.png"></p>
			  <hr class="m-y-2 bg-faded">
			  <p class="lead"><em>Productivity is never an accident. It is always the result of a commitment to excellence, intelligent planning, and focused effort.</em></p>

			  <a class="btn btn-primary btn-lg" href="signup.php" role="button" id="signup2">Register!</a>
		  </div>      
      </div>
	  
	  <section class="testimonial">
        <div class="container">
            <blockquote>
                &ldquo; You never change things by fighting the existing reality.
To change something, build a new model that makes the existing model obsolete. &rdquo;
                <cite>&mdash;  R. Buckminster Fuller</cite>
            </blockquote>  
        </div>
      </section>

	<section id="adventure" class="container-fluid">
		   <h3 class="section-title">Choose Your Adventure</h3>
			<div class="row">
				<div class="col-sm-4">
					<button type="button" class="btn btn-primary btn-lg action-box" id="event1" data-toggle="modal" data-target="#myModal1">
						<span class="action-box-content">
							<b>Paper</b><strong> Presentation</strong>
						</span>
					</button>
				</div>
				<div class="col-sm-4">
					<button type="button" class="btn btn-primary btn-lg action-box" id="event2" data-toggle="modal" data-target="#myModal2">
						<span class="action-box-content">
							<b>Poster</b><strong> Presentation</strong>
						</span>
					</button>
				</div>
				<div class="col-sm-4">
					<button type="button" class="btn btn-primary btn-lg action-box" id="event3" data-toggle="modal" data-target="#myModal3">
						<span class="action-box-content">
							<b>Project</b><strong> Expo</strong><b> / Robo</b><strong> Race</strong>
						</span>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<button type="button" class="btn btn-primary btn-lg action-box" id="event4" data-toggle="modal" data-target="#myModal4">
							<span class="action-box-content">
								<b>Movie</b><strong> Making</strong>
							</span>
					</button>
				</div>
		<!--		<div class="col-sm-4">
					<button type="button" class="btn btn-primary btn-lg action-box" id="event5" data-toggle="modal" data-target="#myModal5">
							<span class="action-box-content">
								<b>Lan</b><strong> Gaming</strong>
							</span>
					</button>
				</div>
			</div>
		-->
		<div class="modal fade bd-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1"><b>PAPER PRESENTATION</b></h4>
				  </div>
				  <div class="modal-body">
					
                      <h5><b>ABSTRACT:</b></h5>
                      
                        <p>The abstract should not be longer than one page (i.e.) approx 300-450 words.</p>

                        <p>Remember that your abstract must outline the following very clearly:</p>
                        <ul>
                            <li> Objectives.</li>
                            <li> Methodology.</li>
                            <li> Major outcomes expected.</li>
                            <li> Practical implication (if any).</li>
                            <li> Mention the Student Names, Roll No.s and College Name of the participants.</li>
                            <li> Inter college teams are allowed
                                <ul>
                                    <li>Mail your abstract to <span>technimble.nsrit@gmail.com</span> on or before 21/12/2016.</li>
                                    <li>Intimation will  be given through mail.</li>
                                </ul>
                            </li>
                        </ul><br>
                      
                      <h5><b>PREPARATION OF PAPER:</b></h5>
                      <p>Bring 2 Hard Copies of paper (if intimated) to the event satisfying the following rules and regulations:</p>
                      
                      <ul>
                        <li>Participants are invited from B.tech. (all branches) / M.C.A / M.B.A / M.Tech.</li>
                        <li>Maximum number of authors for presentation is  four (4) per paper.</li>
                        <li>Registration fee is Rs.150/- per participtant.</li>
                        <li>The papers should be in IEEE  format (6-8 pages).</li>
                        <li>8+2 minutes will be given for presentation (8 mins for presentation and 2 mins for queries).</li>
                        <li>All participants should bring their college ID cards at the time of the event.</li>
                        <li>Decision of the judges is final &amp; there will be no further scope for argument.</li>
                      </ul><br><br>
                      
                      
                      <h5><b>PAPER PRESENTATION  TOPICS:</b></h5><br>
                      
                      <div class="row">
                        <div class="col-sm-4">
                            <h6><b>COMPUTER SCIENCE</b></h6>
                            <ul>
                                <li>Cloud Computing</li>
                                <li>Wireless Technologies</li>
                                <li>Virtual Reality and Petrinets</li>
                                <li>Robotics</li>
                                <li>Artificial Intelligence &amp; Neural Networks</li>
                                <li>Data Engineering</li>
                                <li>Semantic Web</li>
                                <li>Nano technology</li>
                                <li>e-Learning</li>
                                <li>Image Processing</li>
                                <li>Network Security &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                        <div class="col-sm-4">
                            <h6><b>ELECTRONICS AND COMMUNICATIONS</b></h6>
                            <ul>
                                <li>Digital Image Or Signal Processing</li>
                                <li>VLSI Design</li>
                                <li>Advanced Communications</li>
                                <li>Embedded Systems</li>
                                <li>Wireless Sensor Networks</li>
                                <li>Smart Antennas</li>
                                <li>Nano Technology &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                        <div class="col-sm-4">
                            <h6><b>ELECTRICAL AND ELECTRONICS</b></h6>
                            <ul>
                                <li>Renewable Energy Sources</li>
                                <li>Recent Trends In Power Systems</li>
                                <li>Artificial Intelligence Techniques</li>
                                <li>Hybrid Electric Vehicles</li>
                                <li>SCADA &amp; PLC</li>
                                <li>Smart End Micro Grids</li>
                                <li>Distributed Generation &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                            <h6><b>MECHANICAL</b></h6>
                            <ul>
                                <li>Robotics CAD CAM FMSM CLN CFD</li>
                                <li>Mechatronics</li>
                                <li>IC Engines</li>
                                <li>Nano Technology</li>
                                <li>Renewable Energy Sources And Biofuels</li>
                                <li>Rapid Prototyping &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                        <div class="col-sm-6">
                            <h6><b>CIVIL</b></h6>
                            <ul>
                                <li>Advances In Structural Engineering</li>
                                <li>Advances In Transportation Engineering</li>
                                <li>Advances In Geotechnical Engineering</li>
                                <li>RS And GIS Applications</li>
                                <li>Green Environment</li>
                                <li>Advances In Water Resources Engineering</li>
                                <li>Advances In Water Construction Engineering &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                      </div>
				  </div>
				  <div class="modal-footer">
						...
				  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel2"><b>POSTER PRESENTATION</b></h4>
                    
				  </div>
				  <div class="modal-body">
					
                      <h5><b>ABSTRACT:</b></h5>
                      
                        <p>The abstract should not be longer than one page (i.e.) approx 300-450 words.</p>

                        <p>Remember that your abstract must outline the following very clearly:</p>
                        <ul>
                            <li> Objectives.</li>
                            <li> Methodology.</li>
                            <li> Major outcomes expected.</li>
                            <li> Practical implication (if any).</li>
                            <li> Mention the Student Names, Roll No.s and College Name of the participants.</li>
                            <li> Inter college teams are allowed
                                <ul>
                                    <li>Mail your abstract to <span>technimble.nsrit@gmail.com</span> on or before 21/12/2016.</li>
                                    <li>Intimation will  be given through mail.</li>
                                </ul>
                            </li>
                        </ul><br>
                      
                        <h5><b>GUIDELINES:</b></h5>
                        <ul>
                            <li>The difference between poster and oral presentations is that you should let your poster do most of the 'talking'; that is; the material presented should convey the essence of your message.</li>
                            <li>Keep the material simple. Make full use of the space, but do not cramp a page full of information as the result can often appear messy.</li>
                            <li>Be concise and do not waffle. Use only pertinent information to convey your message.</li>
                            <li>Be selective when showing results. Present only those that illustrate the main points of the project. However, you may want to have handouts the explain the information in more detail.</li>
                            <li>The Size of the poster should be <b>"Engineering Drawing Sheet Size".</b></li>
                        </ul>
                        
                       <h5><b>RULES AND REGULATIONS:</b></h5>
                      <ul>
                        <li>Participants are invited from B.tech. (all branches) / M.C.A / M.B.A / M.Tech.</li>
                        <li>Maximum number of participants are four (4) per team.</li>  
                        <li>Registration fee is Rs.150/- per participant</li>  
                        <li>All participants should bring their college Id cards at the time of the event.</li>  
                        <li>Decision of the judge is final &amp; there will be no further scope for argument.</li>  
                      </ul><br><br>
                      
                      <h5><b>POSTER PRESENTATION  TOPICS:</b></h5><br>
                      <div class="row">
                        <div class="col-sm-4">
                            <h6><b>COMPUTER SCIENCE</b></h6>
                            <ul>
                                <li>Cloud Computing</li>
                                <li>Wireless Technologies</li>
                                <li>Virtual Reality and Petrinets</li>
                                <li>Robotics</li>
                                <li>Artificial Intelligence &amp; Neural Networks</li>
                                <li>Data Engineering</li>
                                <li>Semantic Web</li>
                                <li>Nano technology</li>
                                <li>e-Learning</li>
                                <li>Image Processing</li>
                                <li>Network Security &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                        <div class="col-sm-4">
                            <h6><b>ELECTRONICS AND COMMUNICATIONS</b></h6>
                            <ul>
                                <li>Digital Image Or Signal Processing</li>
                                <li>VLSI Design</li>
                                <li>Advanced Communications</li>
                                <li>Embedded Systems</li>
                                <li>Wireless Sensor Networks</li>
                                <li>Smart Antennas</li>
                                <li>Nano Technology &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                        <div class="col-sm-4">
                            <h6><b>ELECTRICAL AND ELECTRONICS</b></h6>
                            <ul>
                                <li>Renewable Energy Sources</li>
                                <li>Recent Trends In Power Systems</li>
                                <li>Artificial Intelligence Techniques</li>
                                <li>Hybrid Electric Vehicles</li>
                                <li>SCADA &amp; PLC</li>
                                <li>Smart End Micro Grids</li>
                                <li>Distributed Generation &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                            <h6><b>MECHANICAL</b></h6>
                            <ul>
                                <li>Robotics CAD CAM FMSM CLN CFD</li>
                                <li>Mechatronics</li>
                                <li>IC Engines</li>
                                <li>Nano Technology</li>
                                <li>Renewable Energy Sources And Biofuels</li>
                                <li>Rapid Prototyping &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                        <div class="col-sm-6">
                            <h6><b>CIVIL</b></h6>
                            <ul>
                                <li>Advances In Structural Engineering</li>
                                <li>Advances In Transportation Engineering</li>
                                <li>Advances In Geotechnical Engineering</li>
                                <li>RS And GIS Applications</li>
                                <li>Green Environment</li>
                                <li>Advances In Water Resources Engineering</li>
                                <li>Advances In Water Construction Engineering &amp; any other allied areas..</li>
                            </ul>  
                        </div>
                      </div>
                      
				  </div>
				  <div class="modal-footer">
						...
				  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade bd-example-modal-lg" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel3"><b>PROJECT EXPO / ROBO RACE</b></h4>
				  </div>
				  <div class="modal-body">
					   
                      <p>This event has two segments:</p>
                      <ol>
                        <li>Demonstration of working models.</li>
                        <li>Display working models.</li>
                      </ol><br>
                      
                      <h5><b>ABSTRACT:</b></h5>
                      <p>The abstract should not be longer than one page (i.e.) approx: 300-450 words.</p>
                      
                      <p>Remember that your abstract must outline the following clearly:</p>
                      <ul>
                        <li>Objectives.</li>
                        <li>Methodology.</li>
                        <li>Operation of the Circuit / Applications.</li>
                        <li>Working model diagram / Circuit Diagram if any.</li>
                        <li>Mention the Student Names, Roll No.s and College Name of the participants.</li>
                        <li>Inter college teams are allowed.
                            <ul>
                                <li>Mail your abstract to <span>technimble.nsrit@gmail.com</span> on or before 21/12/16.</li>
                                <li>Intimation willl be given through mail. </li>
                            </ul>  
                        </li>
                      </ul><br>
                      
                      <h5><b>RULES AND REGULATIONS:</b></h5>
                      <ul>
                        <li>Participants are invited from B.tech. (all branches) / M.C.A / M.B.A / M.Tech.</li>
                        <li>Maximum number of participants are four (4) per team.</li>  
                        <li>Registration fee is Rs.150/- per participant</li>  
                        <li>All participants should bring their college Id cards at the time of the event.</li>  
                        <li>Decision of the judge is final &amp; there will be no further scope for argument.</li>  
                      </ul>
                      
				  </div>
				  <div class="modal-footer">
						...
				  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade bd-example-modal-lg" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel4"><b>MOVIE MAKING</b></h4>
				  </div>
				  <div class="modal-body">
					<p>Documentary is an undertaking to egg-on budding film makers all over the state, to showcase their talent, and compete with some of the best in their cadre. Whether you want to have pleasurable moments, get gratitude, or walk away with some jaw-dropping prize money, Documentary will leave you with an experience you won't seem to forget.</p><br>
                    
                    <h5><b>ABSTRACT:</b></h5>
                      
                    <p>The abstract should not be longer than one page (i.e.) approx 300-450 words.</p>
                    
                    <p>Remember that your abstract must online the following very clearly:</p>
                    <ul>
                        <li> Theme of the Movie.</li>
                        <li> Playable Format.</li>
                        <li> Mention the Student Names, Roll No.s and College Name of the participants.</li>
                        <li>inter college teams are allowed
                            <ul>
                                <li>Mail your abstract to <span>technimble.nsrit@gmail.com</span> on or before 21/12/2016.</li>
                                <li>Intimation will  be given through mail.</li>
                            </ul>
                        </li>
                    </ul><br>
                      
                    <h5><b>GUIDELINES:</b></h5>
                      
                    <p>The length / runtime of the film should not exceed 10 minutes Sample topics:</p>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li>Current IT Field </li>
                                <li>Global Warming</li>
                                <li>Women Education in India</li>
                            </ul>
                        </div>  
                        <div class="col-sm-6">
                            <ul>
                                <li>Child Labor</li>
                                <li>Health</li>
                                <li>Moblies in Campus</li>
                            </ul>
                        </div>  
                    </div>  
                    <p>and any other <b>Message Oriented Film...</b></p><br>
                    
                    <h5><b>RULES AND REGULATIONS:</b></h5>
                    <ul>
                        <li>Participants are invited from B.tech. (all branches) / M.C.A / M.B.A / M.Tech.</li>
                        <li>Maximum number of participants are four (4) per Movie.</li>  
                        <li>Registration fee is Rs.150/- per participant</li>  
                        <li>All participants should bring their college Id cards at the time of the event.</li>  
                        <li>Decision of the judge is final &amp; there will be no further scope for argument.<br>(Note: Participants should bring the required software CDs / DVDs for their films to be played their own).</li>  
                    </ul>
				  </div>
				  <div class="modal-footer">
                    ...
				  </div>
			</div>
		  </div>
		</div>
		
	<!--	<div class="modal fade bd-example-modal-lg" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Lan Gaming</h4>
				  </div>
				  <div class="modal-body">
					...
				  </div>
				  <div class="modal-footer">
						...
				  </div>
			</div>
		  </div>
		</div>
    -->
	</section>
	 
	<section id="sponsors">
        <div class="container-fluid row">
            <h6 class="display-4">OUR  COMMITTEE  MEMBERS</h6><br><br>
             <div class="col-sm-2">
                <img src="images/chairman.jpg" height="128" width="128" alt="men" class="img-circle"><br><br>
                <h5>CHIEF PATRON</h5>
                <h6>Sri N.Satyanarayana Raju</h6>
                <p class="text-muted">President</p>
            </div>
            <div class="col-sm-2">
                <img src="images/secratary.jpg" height="128" width="128" alt="men" class="img-circle"><br><br>
                <h5>PATRON</h5>
                <h6>Dr.N.Prasada Raju</h6>
                <p class="text-muted">Secretary &amp; Correspondent</p>
            </div>
            <div class="col-sm-2">
                <img src="images/principal.jpg" height="128" width="128" alt="men" class="img-circle"><br><br>
                <h5>CHAIRMAN</h5>
                <h6>Dr.B.V.R Ravi Kumar</h6>
                <p class="text-muted">Principal</p>
            </div>
            <div class="col-sm-2">
                <img src="images/cse2.jpg" height="128" width="128" alt="men" class="img-circle"><br><br>
                <h5>CONVENER</h5>
                <h6>Sri G.Rajasekharam</h6>
                <p class="text-muted">HOD, CSE</p>
            </div>
            <div class="col-sm-2">
                <img src="images/ece2.jpg" height="128" width="128" alt="men" class="img-circle"><br><br>
                <h5>Co-Convener</h5>
                <h6>Sri B.Ravi Chandra</h6>
                <p class="text-muted">HOD, ECE</p>
            </div>
        </div>
		
		<div class="container-fluid row">
			<div class="col-sm-6">
				<div class="list-group" id="cmembers1">
					<h6 class="list-group-item active">FACULTY COORDINATOR(S)</h6>
					<p class="list-group-item list-group-item-action">Sri R.Kumara Swamy<span class="text-muted designation">Sr.Asst.Prof ECE</span></p>
					<p class="list-group-item list-group-item-action">Sri M.Chandu Jagan Sekhar<span class="text-muted designation">Asst.Prof CSE</span>
				</div>
				<div class="list-group" id="cmembers2">
					<h6 class="list-group-item active">ADVISORY COMMITTEE</h6>
					<p class="list-group-item list-group-item-action">Sri K.S.Ramanjaneyulu<span class="text-muted designation">HOD EEE</span></p>
					<p class="list-group-item list-group-item-action">Sri P.V.S.Murali Krishna<span class="text-muted designation">HOD ME</span></p>
					<p class="list-group-item list-group-item-action">Sri B.Srinivasa Rao<span class="text-muted designation">HOD S&amp;H</span></p>
					<p class="list-group-item list-group-item-action">Sri M.Rama Rao<span class="text-muted designation">HOD MBA</span></p>
					<p class="list-group-item list-group-item-action">Sri A.M.Prasad<span class="text-muted designation">HOD CE</span></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="list-group" id="cmembers3">
					<h6 class="list-group-item active">STUDENT COORDINATOR(S)</h6>
					<p class="list-group-item list-group-item-action">Mr.A.Sagar<span class="text-muted designation">ECE</span></p>
					<p class="list-group-item list-group-item-action">Ms.P.Revathi<span class="text-muted designation">ECE</span></p>
					<p class="list-group-item list-group-item-action">Mr.Pradeep Deepak<span class="text-muted designation">EEE</span></p>
					<p class="list-group-item list-group-item-action">Mr.K.Satish<span class="text-muted designation">EEE</span></p>
					<p class="list-group-item list-group-item-action">Mr.Pavan Kumar<span class="text-muted designation">ME</span></p>
					<p class="list-group-item list-group-item-action">Mr.S.Srikanth<span class="text-muted designation">ME</span></p>
					<p class="list-group-item list-group-item-action">Mr.D.Konda Babu<span class="text-muted designation">MBA</span></p>
					<p class="list-group-item list-group-item-action">Ms.K.Sudha Rani<span class="text-muted designation">MBA</span></p>
					<p class="list-group-item list-group-item-action">Mr.D.Ram Babu<span class="text-muted designation">CSE</span></p>
					<p class="list-group-item list-group-item-action">Mr.U.H.Suneel Kumar<span class="text-muted designation">CSE</span></p>
					<p class="list-group-item list-group-item-action">Mr.G.A.Krishna<span class="text-muted designation">CE</span></p>
					<p class="list-group-item list-group-item-action">Mr.P.Murali<span class="text-muted designation">CE</span></p>
				</div>
			</div>
		</div>
      </section>  
	  
<?php 
   	include('includes/footer.php')
?>