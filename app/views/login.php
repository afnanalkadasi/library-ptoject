<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 <?php include "head.php"; ?> 
<body dir="rtl" class="grid-container" id="index">
 <?php include "header.php"; ?>
    <main>
 <!-- login -->

<section>
            
            
            <div id="" class="">
            <!-- <span  onclick="document.getElementById('idlog').style.display='none' " class="close2" title="Close Modal">&times;</span> -->
            <form class="modal-content animate" action="#" method="post">
                <div class="textcontainer">
                          <h2>تسجيل الدخول</h2>
                          <hr>
                </div>
            <div class="container">
            <input type="email" placeholder="  البريد الإلكتروني أو رقم الجوال   " name="uname" required>
            
            <div style="display: inline;">
                <input type="password" placeholder="كلمة السر" name="psw" required> 
                <span class="psw"> <a href="#">نسيت؟</a></span> 
            </div> 
            
            <button class="login_btn" type="submit ">تسجيل الدخول  </button> 
            </div>
            <div class="container2">
            <p>ليس لديك  حساب؟</p>
            <a class="login_btn2" href="/sign_up"> إنشاء حساب جديد </a>
            
            </div>
            </form>
            
            </div>       
            </section>
</main>
<script src="js/slide.js"></script>
<script src="js/main.js"></script>
<script src="js/cate.js"></script>
</body>
</html>