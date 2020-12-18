<header>
  <style>
    .input_change{
      padding: 8px;
    display: block;
    border: none;
    border-bottom: 1px solid #ccc;
    width: 100%;
    }
  </style>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color:#3b5e84;">
    <a class="navbar-brand"  style="font-size: 2em;color:#fbfcf8;" href="{{url('/')}}">樂寫</a>
    {{--手機板將上方banner內容包裝成漢堡--}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          @if(Session::get('userName')==null)
          <li class="nav-item active">
          <a class="nav-link" href="{{url('/registerPage')}}">註冊 <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/login')}}">登入 <span class="sr-only"></span></a>
            </li>
            @else
            {{-- <li class="nav-item active">
              <a class="nav-link" href="{{url('/member')}}">會員專區 <span class="sr-only"></span></a>
              </li> --}}
            @endif
        </ul>

        <ul class="navbar-nav ">
          <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(Session::get('userName')!=null)
              歡迎回來，{{Session::get('userName')}}
              @else
              您好，訪客
              @endif
            </button>
            @if(Session::get('userName')!=null)
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a class="dropdown-item" type="button"  data-toggle="modal" data-target="#changePWModal">修改密碼</a>              
              @if(Session::get('whoRegister')==0){{--學生--}}
              <a class="dropdown-item" type="button"  href="{{url('/studentText')}}">發表文章</a>
              <a class="dropdown-item" type="button"  href="{{url('/studentArticleList')}}">文章管理</a>
              @else{{--老師--}}
              <a class="dropdown-item" type="button"  href="{{url('/checkArticle')}}">批改管理</a>
              @endif
              <a class="dropdown-item" type="button"  href="{{url('/memberData')}}">會員資料</a>
              <a class="dropdown-item" type="button" href="{{url('/logout')}}">登出</a>
            </div>
            @else
            
            @endif
          </div>
        </ul>
      </div>
      
    </nav>
  </header>
  
  <!-- Modal -->
  <div class="modal fade" id="changePWModal" tabindex="-1" role="dialog" aria-labelledby="changePWModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle"><b>變更密碼</b></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form name="changePWForm" action="{{url('/changePassword')}}" method="POST">
          {{csrf_field()}}
          <h4><b>舊密碼</b></h4>
          <input class="input_change" type="password" id="oldPassword" name="oldPassword" placeholder="old password"/>
          <h4 class="mt-4"><b>新密碼</b></h4>
          <input class="input_change" type="password" id="newpassword" name="newpassword" placeholder="new password"/>
          <h4 class="mt-4"><b>再次輸入新密碼</b></h4>
          <input class="input_change" type="password" id="agnewpassword" name="agnewpassword" placeholder="new passowrd again"/>
          
          </form>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary" id="changePWBtn">變更密碼</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $('#changePWBtn').click(function(){
      $(this).attr('disabled',true);
      if($('#newpassword').val()!="" && $('#agnewpassword').val()!=""){      
      if($('#newpassword').val()==$('#agnewpassword').val() && $('#oldPassword').val()!=""){
        document.changePWForm.submit();
      }else if($('#newpassword').val()!=$('#agnewpassword').val() && $('#oldPassword').val()=="" ){
        alert('新密碼不一樣，且舊密碼無輸入');
        $(this).attr('disabled',false);
      }else if($('#newpassword').val()==$('#agnewpassword').val() && $('#oldPassword').val()=="" ){
        alert('舊密碼無輸入');
        $(this).attr('disabled',false);
      }else if($('#newpassword').val()!=$('#agnewpassword').val() && $('#oldPassword').val()!="" ){
        alert('新密碼不一樣!');
        $(this).attr('disabled',false);
      }
    }else{
      alert('新密碼為空!');
      $(this).attr('disabled',false);
    }
    
    });
    @if($errors->first('oldPWError'))
          alert('舊密碼錯誤!');
          $(this).attr('disabled',false);
    @endif
  </script>