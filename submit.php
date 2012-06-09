<?php
	require_once('_global/server.php');
	require_once('_global/config.php');
	$_SESSION['pagetitle'] = 'Submit';
	$_SESSION['postverify'] = '';
	require_once('_global/createPage.php');
?>

      <h1><?php echo $_SESSION['pagetitle']; ?></h1>
      
      <!-- EDIT THIS PART TO YOUR HEARTS CONTENT -->
      <p>Ready to submit your artwork? Fill out this form.</p>
      <!-- STOP EDITING HERE -->
      <form class="form-horizontal" action="_global/post.php" method="POST">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="userName">Your Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="userName" name="submitter">
              <p class="help-block">Enter your name, first and last please.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="userMail">Your E-Mail</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="userMail" name="email">
              <p class="help-block">Your e-mail address. This is used for general communications.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="userWCName">WikiMedia Commons Username</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="userWCName" name="wcomname">
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
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </fieldset>
      </form>
<?php require_once('_global/endPage.php'); ?>