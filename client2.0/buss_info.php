 <!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>可辛个人中心</title>

    <link href="Css/index.css" rel="stylesheet">
    <link href="Css/person_info.css" rel="stylesheet">
    <link href="Css/buss_info.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="Css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- header头部搜索  注册  登录 -->
    <header class="ease" id="head">
		<a href="/">
		   <img class="logo ease" alt="" src="Images/1.png">
		</a>
		<div class="header-main center ease">
			<a class="slogan" href="/">
			   <h1 class="s-main"></h1>
			   <div class="s-submain"></div>
			   <img alt="西安邮电大学最安全方便的校园兼职市场" src="">
		    </a>
			<div class="search-box-wr ease">
				<form class="search-box center" method="get" action="">
					 <input class="search-submit" type="submit" value="搜索">
					<div class="input-wr">
					<span class="search-icon glyphicon glyphicon-search"></span>
					   <!-- <img class="search-icon" src="" > -->
						<div class="search-input">
						   <input id="keyword" type="text" placeholder="搜索你想做的校园兼职" x-webkit-speech="" name="keyword">  
						</div>

					</div>

				</form>
				
			</div>
			      <?php
        session_start();
        //session_unset();
        //登录时     
        if(isset($_SESSION['user_name'])){
          $user_name = $_SESSION['user_name'];
          if($_SESSION['user_type'] == 1){
            //学生时
            $href_user_info = "./person_info.php";  
          }else{
            //老师时
            $href_user_info = "business_info.php";  
          }
          
          echo "  
                <div class='log-reg ease'>
                  <ul>
                   <li class='first'><a href='$href_user_info'>$user_name</a></li>&nbsp; ";
          if($_SESSION['user_type'] == 1){
            echo "
                   <li class='second' id='message_count'></li>";
              }     
          echo  "
                   <li class='third'><a href='../server/logout.php'>退出</a></li>
                  </ul>
                </div>
            ";
        }else{
        //未登录时
        echo "
              <div class='log-reg ease'>
              <div class='button' data-type='l' id='log_in'>登录</div>
              <div class='button' data-type='r' id='reg'>注册</div>
              </div>
            ";
        }


      ?>
         
		</div>
    </header>
    

    <div id="con_box">
       <!-- 侧边导航栏 -->
       <div id="navbar" class="ease">
        <div id="position">
          <span class="glyphicon glyphicon-map-marker"></span>
          <p><a href="#">西安邮大学</a></p>
        </div>
       	<ul id="menu">
          <li><a href='search.php?type=t1'> 打扫卫生</a></li>
          <li><a href="search.php?type=t2"> 图书助理</a></li>
          <li><a href="search.php?type=t3">餐厅助理</a></li>
          <li><a href="search.php?type=t4">校园代理</a></li>
          <li><a href="search.php?type=t5">个人家教</a></li>
          <li><a href="search.php?type=t6">促销员</a></li>
          <li><a href="search.php?type=t7">发传单</a></li>
          <li><a href="search.php?type=t8">其他</a></li>
        </ul>
       </div>

       <!-- 右侧兼职工作展示 -->
       <div id="index_con" style="background-color: white" class="max_height">
           <div id="person_info_head">
              <div class="left_img"><img src="Images/you.jpg" width="200px" height="200px"></div>
              <div class="right_info">
                <div class="private_infors">
                  <span class="private_infors_name">小丸子</span>
                  <img class="pic_lev" src="Images/ico_lv2.png" width="67px" height="40px" style="margin-top:0 ">
                  <p class="sell_position">已卖出3件商品</p>
                </div>
                <div class="bank">
                  <table>
                    <tr>
                      <td class="now_bank">当前等级：</td>
                      <td class="now_bank_value">2</td>
                      
                    </tr>
                    <tr>
                      <td class="now_grade">当前积分：</td>
                      <td class="now_grade_value">44</td>
                      
                    </tr>
                    <tr>
                      <td class="risebank_need">升级还需：</td>
                      <td class="risebank_need_value">45</td>
                      
                    </tr>
                  </table>
                </div>
              </div>
           </div>
           <div class="for_choice">
           <div id="person_con">
             <ul>
               <li>个人资料</li>
               <li>我的发布</li>
               <li>消息中心</li>
               <li>我的工作</li>
               <li>个人经验</li>
             </ul>
           </div>
          <div id="choice_card">
                   <div class="person_private" class="tab_show">
                          <p class="s_name">学生姓名：</p>
                           <div class="stu_name">小丸子</div>
                           <p class="s_num">学号：</p>
                           <div class="stu_num">123456789</div>
                           <p class="s_school">所属学校：</p>
                           <div class="stu_school">西安邮电大学</div>
                           <p class="s_label">标签：</p>
                           <div class="stu_label">心累</div>
                           <p class="s_rank">经验值：</p>
                           <div class="stu_rank">100</div>
                   </div>
                   <div id="buss_do" class="tab_show"> 
                       <table id="handle_work">
                         <thead>
                           <td class="work_title">工作标题</td>
                           <td class="workstu_name">参加工作学生姓名</td>
                           <td class="do">操作</td>
                         </thead>
                         <tbody id="handle_work_con">
                           <!-- <tr >
                             <td class="work_title">23</td>
                             <td class="workstu_name">32</td>
                             <td class="do"><a class="gray">已拒绝</a></td>
                         </tr> -->
                         </tbody>

                       </table>   
                   </div>
             <div class="person_message" class="tab_show">
                 <p class="unread">最新消息</p>
                
                           <div class="message_mian">
                              <div class="maker">
                              <span>发信人：</span>
                              <span class="message_sender">张三</span>
                              <span class="make_time">2016-05-14</span>
                              </div>
                              <p class="message_body">打扫东区教学楼，自习室等等打扫东区教学楼，自习室等等打扫东区教学楼，自习室等等打扫东区教学楼，自习室等等</p>
                             
                              <input class="message_off" type="button" value="未读"></input>

                           </div>
                               
             </div>
             <div class="person_work" class="tab_show">
               <div class="work_content">
                      <div class="work_pic">
                          <img src="Images/you.jpg" width="200px" height="208px">
                      </div>
                      <div class="work_mian">
                                    <p class="work_name">打扫卫生</p>
                                    <div class="boss">
                                      <span>发布人：</span>
                                      <span class="work_boss">张三</span>
                                    </div>
                                    <p class="work_body">打扫东区教学楼，自习室等等打扫东区教学楼，自习室等等打扫东区教学楼，自习室等等打扫东区教学楼，自习室等等</p>
                                   </div>
                      <p class="work_off">未下架</p>
               </div>
             </div>
             <div class="person_experience"></div>
          </div>
          </div>
       </div>

       <div id="footer" style="background:url('Images/footer-bg.png');">
      
        </div>
    </div>  


    <div class="mask"></div>
    <div  id="register_mask"></div>
    <div id="agree_mask"> 
      <div id="agree_con" >
        <div class="form-group">
          <label for="interview_time">面试时间</label>
          <input type="text" class="form-control" id="interview_time">
        </div>
        <div class="form-group">
          <label for="interview_place">面试地点</label>
          <input type="text" class="form-control" id="interview_place">
        </div>
        <button id="close">close</button>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="Js/jquery.js"></script>
    <script src="Js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Js/bootstrap.min.js"></script>
 
    <!--  窗口滚动导航缩放-->
    <script type="text/javascript" src="Js/scroll.js"></script>
    <script type="text/javascript" src="Js/person_info.js"></script>
<!-- 登录注册页面的显示隐藏  -->
  <script type="text/javascript" src="Js/request_logoin_register.js"></script>
<!-- 消息数量统计 -->
 <script type="text/javascript" src="Js/mess.js"></script>

  <script type="text/javascript">
    $(function(){
      $.ajax({
        url:'../server/buscheckstu.php',
        type:"POST",
        success:function(data){
          var obj=eval("("+data+")");
           for(var i=0;i<obj.data.length;i++)
           {
              $("#handle_work_con").append('<tr><td class="work_title"></td><td class="workstu_name"></td><td class="do"></td></tr>');
              $('#handle_work_con .work_title').eq(i).html(obj.data[i].wkct_title)
              $('#handle_work_con .workstu_name').eq(i).html(obj.data[i].wkct_people_name)
              if(obj.data[i].wk_status==0)
              {
                  $('#handle_work_con .do').eq(i).append('<a id="bus_endwork" style="cursor:pointer;">工作结束</a>');
                  var wkId=obj.data[i].wkct_id;
                  var stuId=obj.data[i].stu_id;   
                  $('#bus_endwork').click(function(){
                        $.ajax({
                          url:'../server/interview.php',
                          type:'POST',
                          data:{
                            'func':'endworkbuss',
                            'wkct_id':wkId,
                            'stu_id':stuId
                          },
                          success:function(data){
                              var obj=eval("("+data+")");
                              alert(obj.code+obj.data)
                          }
                        })
                        window.location='buss_info.php';
                    
                    })
              }
              if(obj.data[i].wk_status==1)
              {
                  $('#handle_work_con .do').eq(i).append('<a id="refuse" style="cursor:pointer;">拒绝面试</a>&nbsp;&nbsp;<a id="agree" style="cursor:pointer;">同意面试</a>');
                   var wkId=obj.data[i].wkct_id;
                   var stuId=obj.data[i].stu_id;   
                   $('#refuse').click(function(){
                        $.ajax({
                          url:'../server/interview.php',
                          type:'POST',
                          data:{
                            'func':'refuseinterview',
                            'wkct_id':wkId,
                            'stu_id':stuId
                          },
                          success:function(data){
                              var obj=eval("("+data+")");
                              alert(obj.code+obj.data)
                          }
                        })
                         window.location='buss_info.php';
                    })

                   $('#agree').click(function(){
                        $('#agree_mask').css('display','block');
                        $('#close').click(function(){
                          $('#agree_mask').css('display','none');

                            var time=$('#interview_time').val();
                            var place=$('#interview_place').val();
                            var data=time+place;
                               $.ajax({
                                url:'../server/interview.php',
                                type:'POST',
                                data:{
                                  'func':'agreeinterview',
                                  'wkct_id':wkId,
                                  'stu_id':stuId,
                                  'interview_data':data
                                },
                                success:function(data){
                                    var obj=eval("("+data+")");
                                    alert(obj.code+obj.data)
                                }
                              })
                               window.location='buss_info.php'; 
                        })   
                    })
              }
               if(obj.data[i].wk_status==2)
              {
                  $('#handle_work_con .do').eq(i).append('<a class="gray">已拒绝</a>')
              }
              if(obj.data[i].wk_status==3)
              {
                  $('#handle_work_con .do').eq(i).append('<a id="adoptinterview" style="cursor:pointer;">面试通过</a>&nbsp;&nbsp;<a id="notadoptinterview" style="cursor:pointer;">不通过</a>');
                  var wkId=obj.data[i].wkct_id;
                   var stuId=obj.data[i].stu_id;   
                   $('#adoptinterview').click(function(){
                        $.ajax({
                          url:'../server/interview.php',
                          type:'POST',
                          data:{
                            'func':'adoptinterview',
                            'wkct_id':wkId,
                            'stu_id':stuId
                          },
                          success:function(data){
                              var obj=eval("("+data+")");
                              alert(obj.code+obj.data)
                          }
                        })
                         window.location='buss_info.php';
                    })

                    $('#notadoptinterview').click(function(){
                        $.ajax({
                          url:'../server/interview.php',
                          type:'POST',
                          data:{
                            'func':'notadoptinterview',
                            'wkct_id':wkId,
                            'stu_id':stuId
                          },
                          success:function(data){
                              var obj=eval("("+data+")");
                             alert(obj.code+obj.data)
                          }
                        })
                    })
              }
              if(obj.data[i].wk_status==4)
              {
                  $('#handle_work_con .do').eq(i).append('<a class="gray">面试未通过</a>')
              }
              if(obj.data[i].wk_status==5)
              {
                  $('#handle_work_con .do').eq(i).append('<a class="gray" >商家结束工作</a>')

              }
              if(obj.data[i].wk_status==6)
              {
                  $('#handle_work_con .do').eq(i).append('<a class="gray">学生结束工作</a>')
              }
           }
        }

      })
    })
  </script>


  </body>
</html>