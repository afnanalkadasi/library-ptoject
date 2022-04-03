<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 <?php include "head.php"; ?> 
<body dir="rtl" class="grid-container">
<?php include "header.php"; ?>
    <main>
 <!-- login -->

         <!-- sign up -->

<!-- //slider image -->
   <?php include "slider.php";?>

        <section class="section_ca">
                        <ul class="breadcrumb">
                                        <li><a href="/">الرئيسية</a></li>
                                        <li><a href="#">الكتب العربية</a></li>
                                        <li><a href="#">    كتب الكترونية </a></li>
                        </ul>
                   <div class="category1">
                        <div class="cate1">
                           <span> الترتيب حسب: </span> 
                               <select>
                                   <option>الرجاء الاختيار</option>
                                   <option>كتب دينية</option>
                                   <option>كتب اقتصادية</option>
                                   </select>
                        </div>
                          
                            <div class="cate2 book_card">
                                    <img src="svg/svgexport-34.svg" style="margin-left: 10px;" >كتب الالكترونية
                             </div>
                   </div>
                        
<div class="cate-container" id='list' dir="rtl">

                            <div class="card_sal book_card cate3 ">
                                                            
                                <div class="cate_right c3_item">
                                <span> تصفية النتائج</span>
                                
                                </div >  
                                <div class="c3_item">
                                <span>علامة تجارية</span>  
                                <span class="min_span">ـــ</span>
                                </div>
                                <div class="c3_item">
                                <span>السعر</span>    
                                <span class="min_span">ـــ</span>
                            </div>
                                <div class="c3_item">
                            <span> صيغة الكتاب </span>  
                            <span class="min_span">ـــ</span>
                            </div>
                        </div>
                        
                        <?php foreach($params['books'] as $book){?>
                                        <div class="card_sal">
                                                <a href="/details"><img class="im_book" src="images/<?= $book['image'];?>" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 > <?= $book['format'];?> </h2></div>
                                            <span><?= $book['title'];?> </span>
                                            <br><br>
                                                 <strong class="price"><?= $book['price'];?>ر.س</strong>
                                                <p>شامل الضريبة</p>
                                                <span>صيغ أخرى:</span>
                                                <a style="color: blue; font-size: 18px; font-weight: bold;">  <?= $book['format'];?></a>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                                        </div>

                  <?php } ?> 

                      
                            
                        
              
                            
                                <div class=" book_card">
                                  
                         </div>            
                       
                            
                <div class="cate12 book_card"></div>
                
                <div class=" book_card">
                   
         </div>
                
<div class=" book_card">
        <br>
        <br>
</div>


              
</section>
  

                <section class="section1">
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br>   <br><br><br><br><br><br><br><br><br><br><br>
                    </section>
    </main>
    <?php include "footer.php"; ?>

<script src="js/main.js"></script>
<script src="js/cate.js"></script>

 
</body>
</html>