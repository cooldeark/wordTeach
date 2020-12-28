<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('template.library')
    {{--JS 放置區 --}}
  <script src="{{asset('js/register.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{URL::asset('js/semantic/semantic.min.css')}}"/>
    {{--CSS 放置區--}}
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/material.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script type="text/javascript" src="{{URL::asset('js/dataTable/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/semantic/semantic.min.js')}}"></script>


    <style>
.textShow {
  display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.container {
    width: 90em;
    background: #fff;
    /* margin-left: 165px; */
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    -ms-border-radius: 10px; }
    </style>

  </head>
  @include('template.topper')
  <body>

    
    <div class="mt-5">
      <div class="container">
         <div  class="appointment-form" id="articleList"> 
         <h1 class="mt-3">文章列表</h1>
          <table id="tableList" class="ui celled table">
            <thead>
              <tr>
                <th>文章標題</th>
                <th>文章內容</th>
                <th>批改狀態</th>
                <th>上傳時間</th>
                <th>作者名稱</th>
                <th>文章分數</th>
                <th>文章評語</th>
              </tr>
              @foreach($getList as $index=>$value)
              <tr>
              <td class="articleTitle" style="width:20%;">{{$value['title']}}</td>
              <td style="width:15%;">
	      <div class="textShow">{{$value['content']}}</div>
                <button class="showContent ml-5 btn-success">詳細內容..</button>
              </td>
              <td style="width:10%;">
                @if($value['status']==0)
                未批改
                @elseif($value['status']==1)
                已批改
                @endif
              </td>
              <td style="width:15%;">{{date('Y-m-d H:i:s',strtotime($value['created_at']))}}</td>
              <td style="width:10%;">{{$value['createByWho']}}</td>
              <td style="width:10%;">
                @if($value['scores']==NULL || $value['scores']=='null' || $value['scores']=='NULL')
                 無分數
                @else
                {{$value['scores']}}
                @endif
              </td>
              <td style="width:14%;">
                @if($value['teacherComments']==NULL || $value['teacherComments']=='null' || $value['teacherComments']=='NULL')
                 <button class="btn btn-primary giveComments">給予評語</button>
                @else
                <div class="textShow">{{$value['teacherComments']}}</div>
                <button class="showContent ml-5 btn-success">評語內容</button>
                @endif
              </td>
              </tr>
              @endforeach
            </thead>
            <tfoot></tfoot>
          </table>
         </div>
         
      </div>

      <button style="display:none;" id="articleContent" type="button" data-toggle="modal" data-target="#optionContent">
        ModalOption
      </button>

      <button style="display:none;" id="giveTeacherComments" type="button" data-toggle="modal" data-target="#giveComments">
        giveComments
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="optionContent" tabindex="-1" role="dialog" aria-labelledby="optionContentTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLongTitle">內容</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modalArticleContent" style="font-size: 16px;">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="giveComments" tabindex="-1" role="dialog" aria-labelledby="giveCommentsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">評語內容</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="font-size: 16px;">
              <h2 class="articleTitleModal"></h2>
              <textarea class="form-control giveArticleContent" rows="10"></textarea>
              <h2 class="modal-title">文章分數</h2>
              
              <select class="giveArticleScores">
                     <option slected value="0">0</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success teacherCommentsBtnSave" data-dismiss="modal">儲存</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
            </div>
          </div>
        </div>
      </div>
   </div>
    @include('template.footer')
    <script>
      var getTitle='';

      $('.showContent').click(function(){
        var nowContent=$(this).parent().find('.textShow').text();
          $('.modalArticleContent').html(nowContent.replace(/\n/g, "<br/>"));
          $('#articleContent').trigger('click');
      });

      $('.giveComments').click(function(){
        getTitle=$(this).parent().parent().find('.articleTitle').text();
        $('.articleTitleModal').text('文章標題-'+getTitle);
        $('#giveTeacherComments').trigger('click');
      });

      $('.teacherCommentsBtnSave').click(function(){
        $(this).attr('disabled',true);
        var scorecheck=new RegExp('^\\d+$');
        scorecheck=scorecheck.test($(this).parent().parent().find('.giveArticleScores').val());
        var getNowTitle=$(this).parent().parent().find('.articleTitleModal').text();
        getNowTitle=getNowTitle.replace('文章標題-','');
        
        
        if($(this).parent().parent().find('.giveArticleContent').val()!="" && $(this).parent().parent().find('.giveArticleContent').val()!=null && scorecheck){
          $.ajax({
                  url:'/updateComments',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data:{articleTeacherComment:$(this).parent().parent().find('.giveArticleContent').val(),articleTeacherScores:$(this).parent().parent().find('.giveArticleScores').val(),articleTitleFind:getNowTitle},
                  type:'POST',
                  success:function(suMessage){
                     if(suMessage['status']==200){
                        window.location.href="{{url('/checkArticle')}}";
                     }else{
                        $('#errormessageDiv').css('display','block');
                        $('#errormessageDiv').text(suMessage['message']);
                     }
                  }
               }).fail(function(eMe){
                  alert('請聯繫管理員');
                  $(this).attr('disabled',false);
               });
               $(this).parent().parent().find('.giveArticleContent').val('');
               $(this).parent().parent().find('.giveArticleScores').val(0);
        }else if(($(this).parent().parent().find('.giveArticleContent').val()=="" || $(this).parent().parent().find('.giveArticleContent').val()==null) && !scorecheck){
          alert('評語未輸入，分數格式不正確，只能輸入數字!');
          $(this).attr('disabled',false);
        }else if($(this).parent().parent().find('.giveArticleContent').val()=="" || $(this).parent().parent().find('.giveArticleContent').val()==null){
          alert('評語未輸入!');
          $(this).attr('disabled',false);
        }else if(!scorecheck){
          alert('分數格式不正確，只能輸入數字!');
          $(this).attr('disabled',false);
        }
        
        
      });

      


    </script>
    </body>
</html>
