<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 <?php include "head.php"; ?> 
<body dir="rtl" class="grid-container" id="index">
 <?php include "header.php"; ?>
    <main>
 <!-- login -->

         <!-- sign up -->

<!-- //slider image -->
   <?php include "slider.php";?>

        <section class="section_dep">

                <div class="dep_row1">
                                <h2> تصفح حسب القسم </h2>
                                <a href="/category"> عرض المزيد</a>
                </div>
                
                <div class="row">
                                <div id="container_im">
                                                <div id="slider-container_im">
                                                  <span onclick="slideRight()" class="btn_im"></span>
                                                    <div id="slider">

<?php foreach($params['categories']  as $category){?>

          <div class="column slide_im">
                        
                        <div class="card">
                        <img src="images/<?= $category['image'];?>" class="cr_icon">
                        <h3 style="color:  hsl(355, 69%, 16%); font-size:18px;"> <?= $category['name'];?></h3>
                        </div>
                
        </div>
 <?php } ?>
                                                            
                                                     
                                                  </div>
                                                  <span onclick="slideLeft()" class="btn_im"></span>
                                                </div>
                                </div>
                    </div>  


     </section>
     
     <section class="wrapper ">
        <div class="row_wr">
        <img class="myImg" src="images/slider_img.webp"  onclick="image(event)"  />

        <img class="myImg" src="images/slider_img2.webp"  onclick="image(event)" />

        <img class="myImg" src="images/slider_img3.jpg"  onclick="image(event)" />

        <img class="myImg" src="images/slider_img4.webp"  onclick="image(event)" />

        <img class="myImg" src="images/55.webp"  onclick="image(event)" style="width:100%; height: 150px;" />

        <!-- The Modal -->
        <div id="myModal1" class="modal_sh_ho">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content_sh" id="img01">

        </div>
</div>
    </section>
 
   <!-- //show books -->
        <section class="section1">
                        <div class="dep_row1">
                                        <h2 class="section-title">العروض الحالية</h2>   
                                        <a href="/category"> عرض المزيد</a>
                        </div>
                      
                    <div class="row ">
                         
                     
                            <?php foreach($params['books'] as $book){?>
                                        <div class="card_sal">
                                      
                                                <a href="/details/<?php echo $book['id'];?>"><img class="im_book" src="images/<?= $book['image'];?>" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 > <?= $book['format'];?> </h2></div>
                                                                                      <span><?= $book['title'];?> (<?= $book['format'];?>)</span>
                                                                                      <br>
                                                 <strong class="price"><?= $book['price'];?>ر.س</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                                            <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days"></div>:
                                                    H<div id="hours"></div>:
                                                    M  <div id="minutes"></div>:
                                                    S<div id="seconds"></div>
                                            </div>
                                        </div>

                  <?php } ?>  
                            
                           
                    </div>
               
        </section>
     
     
      <section class="section">
     
            <?php foreach($params['categories']  as $category){?>

  <div class="dep_row1">
                                <h3 class="section-title"> الكتب <?= $category['name'];?> </h3>  
                                <a href="/category"> عرض المزيد</a>
                </div>
              

        <div class="row ">
        <?php foreach($params['books'] as $book){?>
                                        <div class="card_sal">
                                      
                                                <a href="/details/<?php echo $book['id'];?>"><img class="im_book" src="images/<?= $book['image'];?>" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 > <?= $book['format'];?> </h2></div>
                                                                                      <span><?= $book['title'];?> (<?= $book['format'];?>)</span>
                                                                                      <br>
                                                 <strong class="price"><?= $book['price'];?>ر.س</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                                        </div>

                  <?php } ?>                    
        </div>
    


 <?php } ?>   
               
                        
</section>
                                                  
    </main>
<?php include "footer.php"; ?>
<script src="js/slide.js"></script>
<script src="js/main.js"></script>
<script src="js/cate.js"></script>
</body>
</html>