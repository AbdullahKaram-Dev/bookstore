<?php
require_once VIEWS . 'web/inc/header.php';
?>

<section class="ftco-section bg-light">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">

        <div class="contact-wrap w-100 p-md-5 p-4">
            <h3 class="mb-4">Register - Now</h3>
            <?php require VIEWS . "web/inc/errors.php"; ?>
            <form method="POST" action="<?php url('do-register'); ?>" id="contactForm" name="contactForm" class="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label" for="username">username : <?= (! empty($errors["username"]) ? '<span style="color:red;"> '.$errors['username'].' </span>' : '') ?></label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label" for="email">Email Address : <?= (! empty($errors["email"]) ? '<span style="color:red;"> '.$errors['email'].' </span>' : '') ?></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label" for="password">Password : <?= (! empty($errors["password"]) ? '<span style="color:red;"> '.$errors['password'].' </span>' : '') ?></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label" for="phone">Phone : <?= (! empty($errors["phone"]) ? '<span style="color:red;"> '.$errors['phone'].' </span>' : '') ?></label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="label" for="address">Address : <?= (! empty($errors["address"]) ? '<span style="color:red;"> '.$errors['address'].' </span>' : '') ?></label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="address">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Register-Now" class="btn btn-info">
                            <div class="submitting"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

   </div>
  </div>
 </div>
</section>

<?php
require_once VIEWS . 'web/inc/footer.php';
?>