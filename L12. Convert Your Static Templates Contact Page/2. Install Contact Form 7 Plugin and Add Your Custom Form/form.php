
        	<div class="row">
        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="sr-only" for="contact-name">Name</label>
        				<!-- <input type="text" class="form-control input-lg" id="contact-name" placeholder="Your name"> -->
                        [text* your-name class:form-control class:input-lg id:contact-name placeholder "Your name"]
        			</div>
        		</div>
        		
        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="sr-only" for="contact-email">Email</label>
        				<!-- <input type="text" class="form-control input-lg" id="contact-email" placeholder="Your email"> -->
                        [email* your-email class:form-control class:input-lg id:contact-email placeholder "Your email"]
        			</div>
        		</div>
        		
        		<div class="col-sm-12">
        			<div class="form-group">
        				<label class="sr-only" for="contact-subject">Message</label>
                        [text* your-subject class:form-control class:input-lg id:contact-subject placeholder "Your subject"]
        				<!-- <textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3"></textarea> -->
                        [textarea* your-message class:form-control class:input-lg id:contact-words x3 placeholder "Your message"]
        			</div>
        		</div>
        	</div>
        	<!-- <input type="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;"> -->
            [submit class:bin class:btn-info class:btn-lg class:pull-right "Get in touch"]
