<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 <?php include "head.php"; ?> 
<body dir="rtl" class="grid-container" id="index">
 <?php include "header.php"; ?>
    <main>
 <!-- login -->
 <?php include "login.php"; ?>
         <!-- sign up -->
<?php include "sign_up.php"; ?>
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
                                                                <div class="column slide_im">
                       
                                                                                <div class="card">
                                                                                       <img src="app/public/svg/svgexport-46.svg" class="cr_icon">
                                                                                   <h3 style="color:  hsl(355, 69%, 16%);"> دين</h3>
                                                                                 </div>
                                                                            
                                                                </div>
                                                                <div class="column slide_im">
                              
                                                                                <div class="card">
                                                                               <img src="app/public/svg/svgexport-42.svg" class="cr_icon">
                                                                           <h3 style="color: #ee7428">تاريخ</h3>
                                                                          
                                                                         </div>
                                                                      
                                                                       </div>
                                                                       
                                                                       <div class="column slide_im">
                                                                      
                                                                         <div class="card">
                                                                               <img src="app/public/svg/svgexport-40.svg" class="cr_icon">
                                                                           <h3 style="color: #726598">روايات</h3>
                                                                         </div>
                                                                   
                                                                       </div>
                                               
                                                                       <div class="column slide_im">
                                                                                     
                                                                               <div class="card">
                                                                                     <img src="app/public/svg/svgexport-43.svg" class="cr_icon">
                                                                                 <h3 style="color: #cb3378">سياسة</h3>
                                                                               </div>
                                                                           
                                                                       </div>
                                                                             
                                                                       <div class="column slide_im">
                                                                                     
                                                                               <div class="card">
                                                                                     <img src="app/public/svg/svgexport-45.svg" class="cr_icon">
                                                                                 <h3 style="color: #1d8ebd">اقتصاد</h3>
                                                                               </div>
                                                                              
                                                                       </div>
                                               
                                                                       <div class="column slide_im">
                                                                                     
                                                                                   <div class="card">
                                                                                         <img src="app/public/svg/svgexport-47.svg" class="cr_icon">
                                                                                     <h3 style="color: #61b22f">طبخ</h3>
                                                                                   </div>
                                                                                   
                                                                       </div>
                                                                               
                                                                       <div class="column slide_im">
                                                                                     
                                                                         <div class="card">
                                                                               <img src="app/public/svg/svgexport-48.svg" class="cr_icon">
                                                                           <h3 style="color: #a9163f;">تربية</h3>
                                                                        </div>
                                                                    
                                                                       </div>
                                                     
                                                  </div>
                                                  <span onclick="slideLeft()" class="btn_im"></span>
                                                </div>
                                </div>
                    </div>  


     </section>
     
     <section class="wrapper ">
        <div class="row_wr">
        <img class="myImg" src="app/public/img/slider_img.webp"  onclick="image(event)"  />

        <img class="myImg" src="app/public/img/slider_img2.webp"  onclick="image(event)" />

        <img class="myImg" src="app/public/img/slider_img3.jpg"  onclick="image(event)" />

        <img class="myImg" src="app/public/img/slider_img4.webp"  onclick="image(event)" />

        <img class="myImg" src="app/public/img/55.webp"  onclick="image(event)" style="width:100%; height: 150px;" />

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
                            <div class="card_sal">
                                  <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a>  
                                   <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                     <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button  class="card_icon2" ><img src="app/public/svg/svgexport-54.svg"></button>
                                      <a href="/sal"> <button class="card_icon add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days"></div>:
                                            H<div id="hours"></div>:
                                            M  <div id="minutes"></div>:
                                            S<div id="seconds"></div>
                                    </div>
                            </div>
                            <div class="card_sal">
                                     <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                   <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                     <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                        <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days2"></div>:
                                            H<div id="hours2"></div>:
                                            M  <div id="minutes2"></div>:
                                            S<div id="seconds2"></div>
                                    </div>
                            </div>

                            <div class="card_sal">
                                    <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                   <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                    <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                        <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days3"></div>:
                                            H<div id="hours3"></div>:
                                            M  <div id="minutes3"></div>:
                                            S<div id="seconds3"></div>
                                    </div>
                            </div>

                            <div class="card_sal">
                                    <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                   <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                     <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                        <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days4"></div>:
                                            H<div id="hours4"></div>:
                                            M  <div id="minutes4"></div>:
                                            S<div id="seconds4"></div>
                                    </div>
                            </div>
                            <div class="card_sal">
                                        <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                       <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                        <span>كبريا وهوى(كتاب إلكتروني)</span>
                                         <strong class="price">19.39ر.س.</strong>
                                        <p>شامل الضريبة</p>
                                        <div >
                                            <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                            <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                            <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                        </div>
                                        <div  class="counter-container " >
                                                        <i class="far fa-clock"></i>    D <div id="days5"></div>:
                                                    H<div id="hours5"></div>:
                                                    M  <div id="minutes5"></div>:
                                                    S<div id="seconds5"></div>
                                            </div>
                                </div>
                    </div>
               
        </section>
     
     
      <section class="section">
               
                 <div class="dep_row1">
                                <h3 class="section-title"> الكتب الدينية </h3>  
                                <a href="/category"> عرض المزيد</a>
                </div>
                                <div class="row ">
                                        <div class="card_sal">
                                                <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                                </div>
                                        </div>

                                        <div class="card_sal">
                                                <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                                </div>
                                   
                                        </div>
            
                                        <div class="card_sal">
                                                <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                                </div>
                                     
                                        </div>
                                        <div class="card_sal">
                                                <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                                </div>
                             
                                        </div>
            
                                        <div class="card_sal">
                                                <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                       <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                                </div>
                           
                                        </div>
                                </div>
</section>
<section class="section">
              
                <div class="dep_row1">
                                <h3 class="section-title"> الكتب التاريخية </h3> 
                                <a href="/category"> عرض المزيد</a>
                </div>       
                               <div class="row ">
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                               </div>
                                       </div>

                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                               </div>
                                  
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="app/public/svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="app/public/svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="app/public/svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="app/public/svg/svgexport-55.svg" ></button>
                                               </div>
                                    
                                       </div>
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                            
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                          
                                       </div>
                               </div>
                                             </section>     
                                             <section class="section">
                                                        <div class="dep_row1">
                                                                        <h3 class="section-title">  السياسية </h3>
                                                                        <a href="/category"> عرض المزيد</a>
                                                        </div>               
                                                                       <div class="row ">
                                                                               <div class="card_sal">
                                                                                       <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                               </div>
                                        
                                                                               <div class="card_sal">
                                                                                       <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                          
                                                                               </div>
                                                   
                                                                               <div class="card_sal">
                                                                                       <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                            
                                                                               </div>
                                                                               <div class="card_sal">
                                                                                       <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                    
                                                                               </div>
                                                   
                                                                               <div class="card_sal">
                                                                                       <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                  
                                                                               </div>
                                                                       </div>
                     </section>   
                     <section class="section">
                                <div class="dep_row1">
                                                <h3 class="section-title">  الاقتصاد </h3>
                                                <a href="/category"> عرض المزيد</a>
                                </div>                 
                                               <div class="row ">
                                                       <div class="card_sal">
                                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                                       </div>
                
                                                       <div class="card_sal">
                                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                                  
                                                       </div>
                           
                                                       <div class="card_sal">
                                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                                    
                                                       </div>
                                                       <div class="card_sal">
                                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                            
                                                       </div>
                           
                                                       <div class="card_sal">
                                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                          
                                                       </div>
                                               </div>
</section>          
<section class="section">
               
                <div class="dep_row1">
                                <h3 class="section-title">  الطبخ </h3>
                        <a href="/category"> عرض المزيد</a>
                </div>           
                               <div class="row ">
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                       </div>

                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                  
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                    
                                       </div>
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                            
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                          
                                       </div>
                               </div>
</section>  
<section class="section">    
                <div class="dep_row1">
                                <h3 class="section-title">  أفضل الروايات الرومانسية </h3>
                        <a href="/category"> عرض المزيد</a>
                </div>          
                               <div class="row ">
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                       </div>

                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                  
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                    
                                       </div>
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                            
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="/details"><img class="im_book" src="app/public/img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="/sal"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                          
                                       </div>
                               </div>
</section>                                                    
    </main>
<?php include "footer.php"; ?>
<script src="app/public/js/slide.js"></script>
<script src="app/public/js/main.js"></script>
<script src="app/public/js/cate.js"></script>
</body>
</html>