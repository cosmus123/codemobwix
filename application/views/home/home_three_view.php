


<!-- call to action -->
<section>
		<div class="well">
			<div class="container text-center">
				<h3>Subscribe for more free stuff</h3>
				<p>Enter your name and email</p>
					<?php echo form_open('subscribe/send_mail','class="form-inline"'); ?>	
						<div class="form-group">
							<div>
								<label for="subscription">Subscribe</label>
								<input type="text" class="form-control" value="" id="subscription" name="name" placeholder="Your name">
							</div>
						</div>
						<div class="form-group">
							<div>
								<label for="email">Email address</label>
								<input type="text" class="form-control" value="" id="email" name='email' placeholder="Enter your Email">
						    </div>
						</div>						
						<button type="submit" id="subscribe" class="btn btn-default">Subscribe</button>
           </form>

			</div><!-- end Container-->

		</div><!-- end well-->
	</section><!-- Call to action -->
