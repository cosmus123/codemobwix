<?php require 'inc/header_view.php'; ?>

<?php require 'home/home_one_view.php'; ?>

<?php require 'home/home_two_view.php'; ?>

<!-- call to action -->
<section>
		<div class="well">
			<div class="container text-center">
				<h3>Subscribe for more free stuff</h3>
				<p>Enter your name and email</p>
					<?php //echo validation_errors(); ?>
					<?php echo form_open('subscribe/send_mail','class="form-inline"'); ?>	
						<div class="form-group">
							<div>
								<label for="subscription">Subscribe</label>
								<input type="text" class="form-control" value="<?php //echo set_value('name'); ?>" name="name" placeholder="Your name">							
								</div>
								<div>
								<?php echo form_error('name', '<div class="error-subscribe text-danger">', '</div>'); ?>
								</div>
							
						</div>
						<div class="form-group">
							<div>
								<label for="email">Email address</label>
								<input type="text" class="form-control" id="name" value="<?php //echo set_value('email'); ?>" name='email' placeholder="Enter your Email">
							</div>
							<div>
								<?php echo form_error('email', '<div class="error-subscribe text-danger">', '</div>'); ?>
								</div>
							
						</div>	
						
						<div class="form-group">
							<div class="col-sm-2">
									<button type="submit" id="subscribe_view" class="btn btn-default">Subscribe</button>
							</div>
			      </div>
						
					</form>

			</div><!-- end Container-->

		</div><!-- end well-->
    </section><!-- Call to action -->
    
<?php require 'home/home_four_view.php'; ?>

<?php require 'home/home_five_view.php'; ?>

<?php require 'home/home_six_view.php'; ?>

<?php require 'home/home_seven_view.php'; ?>

<?php require 'inc/footer_view.php'; ?>

<script>

$(document).ready(function() {
    window.scrollTo(650, 600);
});

</script>