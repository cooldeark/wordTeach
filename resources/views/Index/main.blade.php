<!doctype html>
<html lang="en">
  <head>
    
    @include('template.library')
    {{--JS 放置區 --}}
    <script src="{{asset('js/popper.min.js')}}"></script>
    {{--CSS 放置區--}}
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    

  </head>
  @include('template.topper')
  <body>

    

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url('../images/banner001.jpg');">
            
            <div class="container">
              <div  class="carousel-caption text-center mb-5">
                <h1>180天，讓你的作文能力大增!</h1>
                <p></p>
              <p><a class="btn btn-lg btn-primary" href="{{url('/registerPage')}}" role="button">立即註冊</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item " style="background-image: url('../images/banner007.jpg');">
            
            <div class="container">
              <div class="carousel-caption text-center mb-5">
                <h1>學員心得分享</h1>
                <p>一個心有抱負學生講述了他是如何在短短8個月裡提升作文的故事。</p>
                <p><a class="btn btn-lg btn-primary" href="{{url('/registerPage')}}" role="button">立即註冊</a></p>
              
              </div>
            </div>
          </div>
          <div style="background-color:#e6e6dd2b;" class="carousel-item">
            
            <div class="container">
              <div class="carousel-caption text-center" >
                <div class="row">
                  <div class="row col-md-4 mt-5">
                    <h1 style="color:black;"><b>出書是什麼感覺啊⋯⋯</b><br>
                      來，加入我們就會知道了！
                    </h1>
                    
                  </div>
                <img class="col-md-8 featurette-image img-fluid mx-auto" src="{{asset('images/test.jpg')}}" alt="talk02 image"/>
                <p><a class="btn btn-lg btn-primary" href="{{url('/registerPage')}}" role="button">立即註冊</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      

      <div class="container marketing">
        <div class="h1 text-center mb-5"><b>教師團隊</b></div>
        
        <div class="row">
          <div class="col-lg-4">
          <img class="rounded-circle" src="{{asset('images/man01.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>吳孟霖</h2>
            <p><div class="text-center">學經歷:</div><br>
              旅⾏足跡遍布歐美、中東、亞洲，先後出版《 ⼟土耳其進行曲》、《原來，我們都忘了馬祖》、<br>
              《那⼀所名為旅⾏的大學》，2012年入選為墨刻台灣百⼤旅行家，2015年受邀到<br>
TED x TKU分享《累積的⼒量》。現為樂寫創辦人、聯發科技志工社寫作教育計劃主持人。</p>
            
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('images/man02.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>顏正裕</h2>
            <p><div class="text-center">學經歷:</div><br>
              大學兼任英文講師，得過高雄青年文學獎，紀實劇本工作坊第三名。<br>
              目前擔任樂寫出書計畫總編，持續用文字紀錄與整理自己，<br>
              朝長篇創作計畫邁進。</p>
            
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('images/man03.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>林億昕</h2>
            <p><div class="text-center">學經歷:</div><br>
              斜槓教學工作者，有時候是高中公民老師、補習班作文老師，有時是職探中心服裝老師，<br>
              在專業領域轉換之間，說話、書寫作為表達的橋樑，閱讀作為思考的工具，<br>
              而教學和課程設計本身是一連串不斷修正的過程，期待遇見更多教育路上的夥伴。</p>
            
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="h1 text-center mb-5 mt-5"><b>平台理念</b></div>
        
        <div class="row">
          <div class="col-lg-4">
          <img class="rounded-circle" src="{{asset('images/part01.png')}}" alt="Generic placeholder image" width="140" height="140">
            
            <p><div class="text-center">目標導向</div><br>
              制定個人寫作目標，透過教練指導及線上學習，一步步實現夢想。</p>
            
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('images/part02.png')}}" alt="Generic placeholder image" width="140" height="140">
            
            <p><div class="text-center">遊戲化體驗</div><br>
              讓寫作訓練變成一種遊戲，透過各種關卡挑戰，體驗成就解鎖的魅力。</p>
            
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('images/part03.png')}}" alt="Generic placeholder image" width="140" height="140">
            
            <p><div class="text-center">永續學習</div><br>
              學無止盡，培養寫作的能力及習慣，無論晉升編輯或是成為教練，我們都將一起探索及成長。</p>
            
          </div>
        </div>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <h1 class="text-center mb-5"><b>學員心得</b></h1>
        <div class="row featurette">
          <div class="col-md-7">
            
            <h1 class="featurette-heading"><b>第一屆寫手</b> <span class="text-muted"> 林宛柔</span></h1>
            <p class="lead">在課餘時間持續寫作，雖然辛苦但也沒想過要放棄。最後與夥伴們一起出了一本書、上了廣播節目，甚至成為活動主持人。</p>
          </div>
          <div class="col-md-5">
            
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h1 class="featurette-heading"><b>第二屆寫手</b> <span class="text-muted"> 朱榕珊</span></h1>
            <p class="lead">從每個月的文章進步，從流水帳到隨心所欲建構文章，從素人晉升為新書發表會的總策劃，寫作之路原來可以很有趣。</p>
          </div>
          <div class="col-md-5 order-md-1">
            
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h1 class="featurette-heading"><b>第五屆學員</b> <span class="text-muted"> 曾令懷</span></h1>
            <p class="lead">上課後才發現自己的基本功並不扎實，經過教練指導才掌握寫作技巧！</p>
          </div>
          <div class="col-md-5">
            
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="h1 text-center mb-5 mt-5"><b>關於我們</b></div>
            <div class="text-center mb-5 mt-5" style="margin-left:auto; margin-right:auto; font-size:30px;">
              <p>我們是一群熱血的寫作夥伴，五年的光陰，培育出上百位作家，透過各種創意交流，讓文字更有溫度、更有力量。
              一個人很渺小，但一群人就有無限可能；一個人走得快，但一群人就能走得遠。「讓每個人成為他人的寫作導師」，是樂寫平台的核心理念，或許一開始很辛苦，但如果每個人都能從寫作中受益，它將能鼓勵更多人持續精進，甚至改變人生。
              樂在寫作、樂於分享，現在就是最好的開始！</p></div>
        </div>
        <hr class="featurette-divider">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="h1 text-center mb-5 mt-5"><b>合作夥伴</b></div>
              <div class="mobileHide text-center mb-5 mt-5" style="margin-left:auto; margin-right:auto; ">
                <img class="" src="{{asset('images/logo006.jpg')}}" alt="Generic placeholder image">
                </div>

                <div class="mobileShow text-center mb-5 mt-5" style="margin-left:auto; margin-right:auto; ">
                  <p style="font-size: 25px;"><b>聯發科技志工社 瘋城部落</b><br><b> 人才邦 今周刊</b> <br><b>飽讀電子書 四塊玉</b></p>
                  </div>
          </div>
          
        
      </div><!-- /.container -->
      <hr class="featurette-divider">

      
      @include('template.footer')
    </main>

    <script>
    $('.carousel').carousel({
      interval:4000
    });
    </script>
  
    
    
  </body>
</html>