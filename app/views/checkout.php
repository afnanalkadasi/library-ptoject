<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 <?php include "head.php"; ?> 
    <link rel="stylesheet" href="app/public/css/check_style.css" />
   
    
    
  <body>
  <?php include "header.php"; ?>
    <main>
 <!-- login -->
 <?php include "login.php"; ?>
         <!-- sign up -->
<?php include "sign_up.php"; ?>

      <section>
    <form action="#" class="form">
      <h1 class="text-center">تاكيد التسوق</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="معلوماتك"></div>
        <div class="progress-step" data-title="الاتصال"></div>
        <div class="progress-step" data-title="التحقق"></div>
        <div class="progress-step" data-title=" تم الفحص"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">أسم المستخدم</label>
          <input type="text" name="username" id="username" />
        </div>
        <div class="input-group">
          <label for="position">العنوان</label>
          <input type="text" name="position" id="position" />
        </div>
        <div class="input-group">
          <label for="dob">  تاريخ الميلاد</label>
          <input type="date" name="dob" id="dob" />
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">التالي</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="phone">رقم الهاتف</label>
          <input type="text" name="phone" id="phone" />
        </div>
        <div class="input-group">
          <label for="email">البريد الالكتروني</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="#" class="btn btn-next">التالي</a>
        </div>
      </div>
      <div class="form-step">
          <div class="input-group">
              <label for="password">رمز السر</label>
              <input type="password" name="password" id="password" />
            </div>
            <div class="input-group">
              <label for="confirmPassword">التحقق من الرمز </label>
              <input
                type="password"
                name="confirmPassword"
                id="confirmPassword"
              />
            </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="#" class="btn btn-next">التالي</a>
        </div>
      </div>
      <div class="form-step">
          <div>
              <a  class="btn_scc ">تهانينا تم التسوق بنجاح</a>
            </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="/" class="btn"> موافق</a>
        </div>
      </div>
    </form>
    </section>
 </main>
 <?php include "footer.php"; ?>
 <script src="app/public/js/slide.js"></script>
<script src="app/public/js/main.js"></script>
<script src="app/public/js/cate.js"></script>
  </body>
</html>
