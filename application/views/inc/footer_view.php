
<!-- Footer -->

<footer>
      <hr>
        <div class="container text-center">
        <h3>Subscribe for more free stuff</h3>
        <p>Enter your name and email</p>

        <?php echo form_open('submore/send_phpmailer','class="form-inline"'); ?>	
          <div class="form-group">
            <label for="subscription">Subscribe</label>
            <input type="text" class="form-control" id="subscription" placeholder="Your name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" placeholder="Enter your Email">
          </div>
          <button type="submit" class="btn btn-default">Subscribe</button>
          
        </form>

        <hr>
        <ul class="list-inline">
          <li><a href="http://www.twitter.com">Twitter</a></li>
          <li><a href="http://www.facebook.com">Facebook</a></li>
          <li><a href="http://www.youtube.com">YouTube</a></li>
        </ul>

        <p>&copy; Copyright @ 2019 | Made by CM</p>

      </div><!-- end Container-->
      

    </footer>

  <script type="text/javascript" src="<?php echo base_url('public/node_modules/jquery/dist/jquery.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js');?>"></script>
  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/script.js');?>"></script>

</body>	
</html>