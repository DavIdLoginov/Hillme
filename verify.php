<?php $page = 'verify'; ?>
<?php require 'blocks/head.php'; ?>
<body>
  <?php require 'blocks/header.php'; ?>

  <div class="content">
    <div class="section">
      <div class="container">
        <div class="verify__cont">
          <div class="text">Enter the 18-digit security code to verify, or scan the QR Code via your phone.</div>
          <div class="form-field">
            <input type="text" class="form-control" placeholder="Enter the 18-digit code">
          </div>
          <div class="form-field">
            <button>
              VERIFY
            </button>
          </div>
        </div>
      </div>
    </div>  
  </div>

  <?php require 'blocks/footer.php'; ?>
  <?php require 'blocks/svg-sprite.php'; ?>
  <?php require 'blocks/foot.php'; ?>
</body>
</html>
