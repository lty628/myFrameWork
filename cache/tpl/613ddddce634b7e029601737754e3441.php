<?php include "../cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php";?>

  <!-- content start -->
  <div class="admin-content" style="min-height:800px">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">学院信息表</strong> / <small>Table</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button type="button" id="delAll" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 导出/保存</button>
            <!-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button> -->
            
          </div>
        </div>
      </div>
<!--       <div class="am-u-sm-12 am-u-md-3">
        <div class="am-form-group">
          <select data-am-selected="{btnSize: 'sm'}">
            <option value="option1">所有类别</option>
            <option value="option2">IT业界</option>
            <option value="option3">数码产品</option>
            <option value="option3">笔记本电脑</option>
            <option value="option3">平板电脑</option>
            <option value="option3">只能手机</option>
            <option value="option3">超极本</option>
          </select>
        </div>
      </div> -->
<!--       <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
        </div>
      </div> -->
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <!-- <form class="am-form"> -->
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" id="btn" /></th><th class="table-id">ID</th><th class="table-title">学员姓名</th><th class="table-type">联系号码</th><th class="table-author am-hide-sm-only">获奖类型</th><th class="table-date am-hide-sm-only">领奖认证ID</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach($data as $key=>$val) :?>
            <tr class="cols_del">
              <td><input type="checkbox" class="childCheck" value="<?=$val['id'];?>"/></td>
              <td class="userid"><?=$val['id'];?></td>
              <td><a href="javascript:;"><?=$val['username'];?></a></td>
              <td><a href="javascript:;"><?=$val['phone'];?></a></td>
              <td class="am-hide-sm-only"><?=$val['awardType'];?></td>
              <td class="am-hide-sm-only"><?=$val['award'];?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary crupt" cid="<?=$val['id'];?>" ><span class="am-icon-pencil-square-o"></span> 编辑</button>
                   <!--  <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button> -->
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only dels_click" did="<?=$val['id'];?>""><span class="am-icon-trash-o"></span>删除</button>
                  </div>
                </div>
              </td>
            </tr>
           <?php endforeach;?>
          </tbody>
        </table>

<!--           <div class="am-cf">
  共 15 条记录
  <div class="am-fr"> -->
    <ul class="am-pagination">
      <li><a href="<?=$page['first'];?>">首页</a></li>
      <li><a href="<?=$page['prev'];?>">上一页</a></li>
      <!-- <li><a href="">2</a></li>
      <li><a href="javascript:;">3</a></li>
      <li><a href="javascript:;">4</a></li> -->
      <li><a href="<?=$page['next'];?>">下一页</a></li>
      <li><a  href="<?=$page['end'];?>">尾页</a></li>
    </ul>
  </div>
</div>
          <hr />
         <!--  <p>注：.....</p> -->
<!--         </form> -->
      </div>

    </div>
  </div>

<?php include "../cache/tpl/c84406e919af2225ef073a88917030ca.php";?>
<script type="text/javascript">
        $(function (){
          //点击删除在这里
          var dels_click = $(".dels_click");
          dels_click.each(function (i){
            $(this).click(function (){
              var arr = [];
              $(this).parent().parent().parent().parent().remove();
              arr = $(this).attr('did');
              //alert(arr);
              delUser(arr);//找对象去~~~~
            })
          })
          // 编辑资料
          $(".crupt").each(function (i){
              $(this).click(function (){
                if($(this).attr('cid')){
                  window.location='?c=Admin&a=crupt&cid='+$(this).attr('cid');
                }else{
                   window.location='?c=Admin&a=crupt';
                }     
            });
          })
          //联动全选在这里
          $("#btn").click(function (){
            //alert($(this).prop('checked'))
            if($(this).prop('checked')){
              $(".childCheck").each(function (i){
                $(this).prop('checked',true);
              })
            }else{
              $(".childCheck").each(function (i){
                $(this).prop('checked',false);
              })
            }
          })
          $(".childCheck").each(function (i){
            $(this).click(function (){
                var j = 0;//检测都少个是选中的
                for(i=0;i<$(".childCheck").length;i++){
                  if($(".childCheck").eq(i).prop('checked')){
                    j++;
                  }
                };
                //alert(j);
                if(j == $(".childCheck").length){
                  $("#btn").prop('checked',true);
                }else{
                  $("#btn").prop('checked',false);
                }
              });
            });//联动全选结束啦~~~~~不要迷恋哥~哥只是一个传说~~~~
          //开始搞全选删除~！！！！比较暴力
          $("#delAll").click(function (){
           // alert('搞起');
            var arr = [];
            for(i=0;i<$(".childCheck").length;i++){
                  $(".childCheck").each(function(i){
                    if($(this).prop('checked')){
                      arr[i] = $(this).val();
                      $(this).parent().parent().remove();
                    }
                  });
                };
                //alert(arr);
                //找ajax函数去
              delUser(arr);
          });//全部删除结束~SO EASY！！！
          //函数，用的时候调一下~~~
          function delUser(arr = '')
          {
              $.ajax({
                 type: "POST",
                 url: "?c=Admin&a=delUser",
                 data: {uid:arr},
                 success: function(msg){
                   //alert( "Data Saved: " + msg );
                 }
              });
          }


          });

</script>