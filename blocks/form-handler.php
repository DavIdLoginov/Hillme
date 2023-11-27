<?php
  /* Example success message after submitting a form */
	$result = new stdClass();
	$result->success = true;
	$result->message = '
		<div class="popup-window">
      <div class="popup-window__logo">
        <img src="images/logo.svg" alt="">
      </div>
      <div class="popup-window__content">
        <h2>Thank You!</h2>
        <p>We will contact you shortly</p>
      </div>
      <div class="popup-window__buttons">
        <div class="row justify-content-center">
          <div class="col-6">
            <button type="button" class="btn btn_block btn_round js-years-verify-yes" data-fancybox-close>Ok!</button>
          </div>
        </div>
      </div>
    </div>
	';
	echo json_encode($result);
?>