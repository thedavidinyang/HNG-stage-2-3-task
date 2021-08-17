<section class="intro d-flex align-items-center parallax" >
        <div class="container">
            <div class="content">
                <div class="row ">
                   
                    <div class="col-md-6 wow slideInLeft" >
                        <div class="left"  >
							<h1 class="mb-1">
								 <?php echo($lng['name']); ?>
							</h1>
							<p> <?php echo($lng['role']); ?> 
							<br>
							<?php echo($lng['phone']); ?> 
							<br>
							<?php echo($lng['email']); ?> </p>
							
							<div class="row">
								
								<div class="col-sm-1 social"><a href="https://twiter.com/thedavidinyang"><i class="fa fa-twitter"></i></a></div>
								<div class="col-sm-1 social"><a href="https://facebook.com/thedavidinyang"><i class="fa fa-facebook"></i></a></div>
								<div class="col-sm-1 social"><a href="https://instagram.com/thedavidinyang"><i class="fa fa-instagram"></i></a></div>
								<div class="col-sm-1 social"><a href="https://github.com/thedavidinyang"><i class="fa fa-github"></i></a></div>
							</div>
							
							<div class="row">
								
								<div class="col-lg-6"><a href="#about-me" class="cta-btn"> More info</a></div>
								<div class="col-lg-6"><a href="#contact-me" class="cta-btn"> Get in touch</a></div>
							</div>
							
							
						</div>
                    </div>
                   
                    <div class="col-md-6  wow fadeIn ">
                        <div class="right">
							<img src="images/WBS_1504.jpg" alt="slider-img" class="img-fluid " data-wow-offset="1">
						</div>
                    </div>
                </div>
            </div>
            <br>
        </div>
         
    </section>      
        

 <section class="about-me" id="about-me">
            <div class="container">
                <div class="row d-flex align-items-center">
                  
                    <div class="col-md-4 wow fadeIn" >
                        <img  src="images/WBS_1512.jpg"  class="img-fluid img ">
                    </div>
                   
                    <div class="col-md-7 wow slideInRight">
                        <div class="right">
                            <h2><?php echo($lng['about']) ; ?></h2>
                            <p> <?php echo($lng['about-me']) ; ?></p>
                        </div>
                    </div>
                </div>
       
               <br>
                <div class="row d-flex align-items-center">
                    
                    <div class="col-md-4 wow slideInLeft">
                        <div class="left">
                            <h2><?php echo($lng['bio']) ; ?></h2>
                            
                            <table class="table responsive">
                            <tbody>
                              <?php foreach($bio as $bio => $val) { ?>
									<tr>
                            		<td><?php echo($bio) ; ?></td>
                            		<td><?php echo($val) ; ?></td>
                            	</tr>
									<?php } ?>
                            	
                            </tbody>
                            	
                            </table>
                           
                        </div>
                    </div>
                    
                    <div class="col-md-4 wow slideIncenter">
                        <div class="middle">
                            <h2><?php echo($lng['edu']) ; ?></h2>
                            
                            <table class="table responsive">
                            <tbody>
                            <?php
								
								foreach($education as $edu => $val) {
									?>
									<tr>
                            		<td><?php echo($edu) ; ?></td>
                            		<td><?php echo($val) ; ?></td>
                            	</tr>
									<?php } ?>
                            	
                            </tbody>
                            	
                            </table>
                           
                        </div>
                    </div>
                    
                     <div class="col-md-4 wow slideInRight" >
                       <div class="right">
                            <h2><?php echo($lng['skils']) ; ?></h2>
                            <ul class="ul">
                              <?php
								
								foreach($skills as $skill) {
									?>
                            	<li><?php echo($skill) ; ?></li>
                            	<?php } ?>
                            </ul>
                            
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact-me" >
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                 
                    <!-- Box-2 -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="items">
                            <h3><?php echo($lng['in-touch']) ; ?></h3>
                            <div class="line mx-auto"></div>
                            <h4><?php echo($lng['in-touch-info']) ; ?></h4>
                        </div>
                    </div>
                    
                     <div class="col-md-6 ">

                    <form id="contact-me">
                    <br>
						<div class="row">
                            <div class="col-sm-12 form-group">
                                <input type="text" class="form-control" placeholder="Full Name " name="name">
                            </div>
                           
                            <div class="col-sm-12 form-group">
                                <input type="text" class="form-control" placeholder="Email " name="email">
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="number" class="form-control" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-sm-12 form-group">
                               <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <div id="login_message" class="text-center">
                                                                                                        </div>
                                <button class="btn btn-block cta-btn text-smaller" id="dave" type="button" onClick="sendmes()"><?php echo($lng['send-message']) ; ?></button>
                               
                               <br>
                 
                                
                                
                            </div>
                        </div>
                    </form>
                    
                     <script>
					 
					function sendmes() {
                            document.getElementById("dave").disabled="disabled";
                            $("#dave").html('<span class="fa fa-circle-o-notch fa-spin"></span>');
                            var data = $("#contact-me").serialize();
                            jQuery.ajax({
                              url: './?u=contact_me',
                              data:data,
                              type: "POST",
                              success:function(data){
                                if(data==1){
                                  new PNotify({
                                    title: 'Awesome',
                                    text: 'Message sent succesfully',
                                    type: 'success',
                                    nonblock: {
                                      nonblock: true
                                    },
                                    styling: 'bootstrap3'
                                  });
                                  $("#dave").html('<span class="fa fa-check"> Done</span>');
                                 
                                } else {
                                  document.getElementById("dave").disabled="";
                                  $("#dave").html('<?php echo($lng['send-message']) ; ?>');
                                  new PNotify({
                                     title: 'Hey! you missed something',
                                     text: data,
                                     type: 'error',
                                     //nonblock: {
                                        //     nonblock: true
                                        // },
                                        styling: 'bootstrap3'
                                      });
                                    }
                                  },
                                  error:function (){
                                    document.getElementById("dave").disabled="";
                                    $("#dave").html('<?php echo($lng['send-message']) ; ?>');
                                    new PNotify({
                                      title: 'Network Error!',
                                      text: 'Please check your network connection and try again',
                                      type: 'error',
                                      //nonblock: {
                                        //     nonblock: true
                                        // },
                                        styling: 'bootstrap3'
                                      });
                                    }
                                  });
                                }
                                </script>
                                
                </div>
                
                 
                    
                </div>
            </div>

        </section>
        
        <section class="footer">
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                 
                    <!-- Box-2 -->
                    <div class="col-lg-4 col-sm-12">
                       <img src="./images/zuri-logo-full.svg" width="50%">
                    </div>
                    
                    <div class="col-lg-4 col-sm-12">
                       <img src="./images/hng.png" width="50%">
                    </div>
                    
                    <div class="col-lg-4 col-sm-12">
                       <img src="./images/I4G.png" width="50%">
                    </div>
                    
                
                 
                    
                </div>
            </div>

        </section>