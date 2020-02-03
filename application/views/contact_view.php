<?php require 'inc/header_view.php'; ?>

<?php require 'home/home_one_view.php'; ?>

<?php require 'home/home_two_view.php'; ?>

<?php require 'home/home_three_view.php'; ?>

    
<?php require 'home/home_four_view.php'; ?>

<?php require 'home/home_five_view.php'; ?>

<?php require 'home/home_six_view.php'; ?>

<!-- Contact -->

<div class="container">
    <section>
      <div class="page-header" id="contact">
          <h2>Contact Us.<small> Contact us for more.</small></h2>
        </div><!-- End Page Header -->

        <div class="row">
          <div class="col-lg-4">
            <p>Send us a message, or contact us from the address below</p>


            <address>
              <strong>Mobile-Wiz Pvt Ltd.</strong></br>
              111, Blvd. Magheru </br>
              Plot no. 45</br>
              Bucharest - 110017</br>
              P: +04 0215334123
            </address>
          </div>
          
          <div class="col-lg-8">
          <?php echo form_open('contact/swift_mail','class="form-horizontal"'); ?>	
                <div class="form-group">
                  <label for="user-name" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="username" id="user-name" placeholder="Enter you name">
                  </div>
                  <div>
					<?php echo form_error('username', '<div class="error-contact pull-right text-danger">', '</div>'); ?>
				 </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <label for="user-email" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="useremail" id="user-email" placeholder="Enter you Email Address">
                  </div>
                  <div>
					<?php echo form_error('useremail', '<div class="error-contact pull-right text-danger">', '</div>'); ?>
				 </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <label for="user-url" class="col-lg-2 control-label">Your Website</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="userweb" id="user-url" placeholder="If you have Any.">
                  </div>
                  <div>
					<?php echo form_error('userweb', '<div class="error-contact pull-right text-danger">', '</div>'); ?>
				 </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <label for="user-message" class="col-lg-2 control-label">Any Message</label>
                  <div class="col-lg-10">
                    <textarea name="usermessage" class="form-control" id="user-message" cols="20" rows="10" placeholder="Enter your Message"></textarea>
                  </div>
                  <div>
					<?php echo form_error('usermessage', '<div class="error-contact pull-right text-danger">', '</div>'); ?>
				 </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
            </form>
          </div>
        </div><!-- End the row -->
    </section>
  </div>


<?php require 'inc/footer_view.php'; ?>

<script>

$(document).ready(function() {
    window.scrollTo(720,3900);
});

</script>