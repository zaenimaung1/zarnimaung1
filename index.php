<?php 
    require_once('component/layout/header.php');
?>
    <div class="container-fluid pt-3">
      <div class="content" style="position: relative; overflow: hidden;">
        <img src="component/images/mainpt.jpg" alt="" class="img-fluid rounded">
        <div class="content-text text-center pt-3 text-light" >
            <h3>မင်္ဂလာပါရှင့်</h3>
            <p> အိမ်ရှင်မများအတွက်ဟင်းချက်နည်းအမျိုးမျိုးနှင့်တွဲဖက်၍မစားသင့်သောအစားအစာများကိုဖော်ပြပေးထားပါတယ်ရှင့်</p>
        </div>
      </div>
    </div>
    <div class="container-fluid my-4" id="cardContainer">
            <div class="card d-flex justify-content-between   my-3 overflow-hidden" style="height: 100px; background-color: rgba(97, 103, 108, 0.573);" id="firstCard">
                <div class="row ">
                     <div class="col-5">
                         <img src="component/images/hnin.jpg" alt="" class="img-fluid" style="height: 100px;width: 150px; object-fit: cover;">
                     </div>
                     <div class="col-7 text-center mt-4 fw-bold">
                         <p>ဟင်းချက်နည်းအမျိူးမျိူး</p>
                     </div>
                </div>
              </div>
            <div class="card d-flex justify-content-between  overflow-hidden" style="height: 100px; background-color: rgba(97, 103, 108, 0.573);" id="secondCard">
                <div class="row ">
                    <div class="col-5">
                        <img src="component/images/sup.jpg" alt="" class="img-fluid" style="height: 100px;width: 150px; object-fit: cover;">
                    </div>
                    <div class="col-7 text-center mt-4 fw-bold">
                        <p>တွဲဖက်၍မစားသင့်သောအစားအစာများ</p>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <hr>
    <footer >
            <p class="text-center">&copy; Copyright EainShinMa. All Rights Reserved
                Developed by Zar Ni Maung.</p>
        
    </footer>
  <script src="component/bootstrap/js/bootstrap.min.js"></script>
    <script src="component/assests/script.js"></script>
</body>
</html>