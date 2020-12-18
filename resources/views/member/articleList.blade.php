<!doctype html>
<html lang="en">
  <head>
    
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
                <th>批改老師</th>
                <th>文章分數</th>
                <th>文章評語</th>
              </tr>
              @foreach($getList as $index=>$value)
              <tr>
              <td style="width:20%;">{{$value['title']}}</td>
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
              <td style="width:10%;">{{$value['checkByWho']}}</td>
              <td style="width:10%;">
                @if($value['scores']==NULL || $value['scores']=='null' || $value['scores']=='NULL')
                 無分數
                @else
                {{$value['scores']}}
                @endif
              </td>
              <td style="width:14%;">
                @if($value['teacherComments']==NULL || $value['teacherComments']=='null' || $value['teacherComments']=='NULL')
                 無評語
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
   </div>
    @include('template.footer')
    <script>


      $('.showContent').click(function(){
        var nowContent=$(this).parent().find('.textShow').text();
          $('.modalArticleContent').text(nowContent);
          $('#articleContent').trigger('click');
      });

      


    </script>
    </body>
</html>