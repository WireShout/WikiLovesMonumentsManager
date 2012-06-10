<?php
	require_once('_global/server.php');
	require_once('_global/config.php');
	$_SESSION['pagetitle'] = 'Submit';
	$_SESSION['postverify'] = '';
	require_once('_global/createPage.php');
	require_once('_global/recaptchalib.php');
	require_once('_global/post.php');
?>

      <h1><?php echo $_SESSION['pagetitle']; ?></h1>
      <?php echo submittedArt($privatekey); ?>
      <!-- EDIT THIS PART TO YOUR HEARTS CONTENT -->
      <p>Ready to submit your artwork? Fill out this form.</p>
      <!-- STOP EDITING HERE -->
      <form class="form-horizontal" action="submit.php" method="POST">
        <fieldset>
          <div class="control-group">
            <div class="controls">
              <input type="hidden" id="unique" value="<?php echo session_id(); ?>" name="secID">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="userName">Your Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="userName" <?php if(isset($_SESSION['userNAME'])) { ?> value="<?php echo $_SESSION['userNAME']; ?>"<?php } ?> name="submitter">
              <p class="help-block">Enter your name, first and last please.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="userMail">Your E-Mail</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="userMail" <?php if(isset($_SESSION['userMAIL'])) { ?> value="<?php echo $_SESSION['userMAIL']; ?>"<?php } ?> name="email">
              <p class="help-block">Your e-mail address. This is used for general communications.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="userWCName">WikiMedia Commons Username</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="userWCName" <?php if(isset($_SESSION['userCOMMONS'])) { ?> value="<?php echo $_SESSION['userCOMMONS']; ?>"<?php } ?> name="wcomname">
              <p class="help-block">Your wikimedia commons username. Could also be your Wikipedia username.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="submissionLink">Submission</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on">http://upload.wikimedia.org/</span><input class="span2" id="submissionLink" size="16" type="text" name="link">
              </div>
              <p class="help-block">We've filled in the first bit; just paste the remainder.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
              <textarea class="input-xlarge" id="description" rows="3" name="desc"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="tos">Terms</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="tos" value="agree" name="terms">
                I agree to the terms outlined for <a href="tos.php"><?php echo $option['title']; ?></a>.
              </label>
            </div>
          </div>
          
          <div id="verify" class="modal hide fade" style="display: none; ">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h3>Submit | <?php echo $option['title']; ?></h3>
            </div>
            <div class="modal-body">
              <h4>CAPTCHA</h4>
              
              <?php echo recaptcha_get_html($publickey); ?>
              
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">Close</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          
          <div class="form-actions">
          	<a data-toggle="modal" href="#verify" class="btn btn-primary btn-large">Submit</a>
          </div>
        </fieldset>
      </form>
<?php require_once('_global/endPage.php'); ?>