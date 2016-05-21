<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>名门·新娘商城</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/Public/Admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/Public/Admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo U('Admin/Job/index');?>">名门·新娘商城 - 后台首页</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="请输入要搜索的信息">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-dashboard fa-fw"></i>管理中心</a>
                        <!--招聘信息管理-->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 招聘信息管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Job/index');?>">招聘信息列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Job/add');?>">添加新招聘信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <!--简历信息管理-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 简历信息管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Resume/index');?>">简历信息列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Resume/add');?>">添加新简历信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <!--社区-优秀婚庆推荐信息管理-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 社区-优秀婚庆信息管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Recommend/index');?>">优秀婚庆推荐信息列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Recommend/add');?>">添加新优秀婚庆推荐信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <!--商品评论信息管理-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 商品评论信息管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Goodscomment/index');?>">商品评论信息列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Goodscomment/add');?>">添加新商品评论信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
	<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">简历信息列表</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            简历信息列表
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="dataTable_wrapper">
              <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">

                <form action="<?php echo U('Admin/Resume/index');?>" method="get">
                    
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="dataTables-example_length">
                      <label>显示 
                        <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
                          <option <?php echo $_GET['num'] == 2 ? 'selected' : '' ?> value="2">2</option>
                          <option <?php echo $_GET['num'] == 5 ? 'selected' : '' ?> value="5">5</option>
                          <option <?php echo $_GET['num'] == 10 ? 'selected' : '' ?> value="10">10</option>
                          <option <?php echo $_GET['num'] == 20 ? 'selected' : '' ?> value="20">20</option>
                        </select>
                        条
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                      <label>招聘职位名称:<input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label>
                      <button type="submit" class="btn btn-info">查询</button>
                    </div>
                  </div>
                </form>

                </div>
                  <!--循环遍历-->
                  <?php if(is_array($resumes)): foreach($resumes as $k=>$vo): ?><div class="row">
                    <div class="col-sm-12">
                    <!-- 用户列表遍历 -->
                      <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
                        <thead class="tid">
                          <tr role="row">
                            <th class="col-md-1">ID</th>
                            <th class="col-md-1">提交时间</th>
                            <th class="col-md-1">求职岗位</th>
                            <th class="col-md-1">生日</th>
                            <th class="col-md-1">性别</th>
                            <th class="col-md-1">电话</th>
                            <th class="col-md-1">邮箱</th>
                            <th class="col-md-2">所在城市</th>
                            <th class="col-md-1">操作</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="gradeA odd" role="row">
                            <td class="sid"><?php echo ($vo["rid"]); ?></td>
                            <td><?php echo ($vo["restime"]); ?></td>
                            <td class="edit"><?php echo ($vo["work"]); ?></td>
                            <td class="editn"><?php echo ($vo["resume_birth"]); ?></td>
                            <td>
                              <?php if(($vo["resume_sex"] == 1) ): ?>男
                                <?php elseif($vo['resume_sex'] == 2): ?>
                                保密
                                <?php else: ?> 
                                女<?php endif; ?>
                            </td>
                            <!-- <td class="editn"><?php echo ($vo["resume_sex"]); ?></td> -->
                            <td class="editp"><?php echo ($vo["resume_phone"]); ?></td>
                            <td class="edite"><?php echo ($vo["resume_email"]); ?></td>
                            <td class="edita"><?php echo ($vo["resume_address"]); ?></td>
                            <td class="center">
                              <button class="btn-xs btn-danger btn-del " type="button"><i class="fa fa-times">&nbsp;删除&nbsp;</i></button><br><br>               
                              <a href="<?php echo U('Admin/Resume/save',array('id'=>$vo['id']));?>" class="btn-sm btn-primary" type="button"><i class="fa fa-list">&nbsp;编辑&nbsp;</i></a>
                            </td>
                          </tr>

                          <!-- <tr>
                            <th colspan="2">简历照片</th>
                            <th colspan="8">个人简介</th>
                          </tr> -->
                          <tr>
                            <td colspan="2"><img src="<?php echo ($vo["resume_pic"]); ?>" width="100px"></td>
                            <td colspan="8"><?php echo ($vo["resume_intro"]); ?></td>
                          </tr>
                            
                        </tbody>
                      </table><?php endforeach; endif; ?>
                  
              </div>
            </div>
               <!--  <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">每页显示5条信息</div>
                  </div> -->
                  <style type="text/css">
                      #pages a,#pages span{ background-color: #fff;
                              border: 1px solid #ddd;
                              color: #337ab7;
                              float: left;
                              line-height: 1.42857;
                              margin-left: -1px;
                              padding: 6px 12px;
                              position: relative;
                              text-decoration: none;}
                      #pages span {
                            background-color: #337ab7;
                            border-color: #337ab7;
                            color: #fff;
                            cursor: default;
                            z-index: 2;
                            }
                  </style>
                 
                  <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                       <div id="pages">
                          <?php echo ($pages); ?>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.table-responsive -->

          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
  </div>
  
 <script type="text/javascript" src="/Public/Admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    //绑定单击事件
    $('.btn-del').click(function(){
      //获取id
      var id = $(this).parents('tr').find('.sid').html();
      var url = "<?php echo U('Admin/Resume/ajaxdel');?>";
      // alert(url);
      var btn = $(this);
         var div = document.getElementsByName('did');
      //ajax
      $.get(url,{id:id},function(data){
        // console.log(data);
        if(data == 1){
        // alert('成功');
          
         btn.parents('table').remove();
         console.log(btn);
        }else{
          alert('失败');
        }
      })
    })

    //双击修改岗位名 绑定双击事件
    $('.edit').dblclick(function(){
      //获取当前的文本
      var v = $(this).html();
      //创建inp
      var inp = $('<input type="text" value="'+v+'" name="work" />')
      //将input插入
      $(this).html(inp);
      //让input处于选中状态
      inp.select();
      var td = $(this);

      //绑定丧失焦点事件
      inp.blur(function(){
        //获取修改后的当前的值
        var newV = $(this).val();
        //获取当前的id
        var id = $(this).parents('tr').find('.sid').html();
        var url = "<?php echo U('Admin/Job/ajaxedit');?>";
        var btn = $(this);
        //ajax
        $.post(url,{id:id,work:newV},function(data){
        if (data == 1) {
         td.html(newV);
        }else{
          alert('修改失败');
        }
      }) 
      })
    })

    //双击修改简历人数 绑定双击事件
    $('.editn').dblclick(function(){
      //获取当前的文本
      var v = $(this).html();
      //创建inp
      var inp = $('<input type="text" value="'+v+'" name="personnum" />')
      //将input插入
      $(this).html(inp);
      //让input处于选中状态
      inp.select();
      var td = $(this);

      //绑定丧失焦点事件
      inp.blur(function(){
        //获取修改后的当前的值
        var newV = $(this).val();
        //获取当前的id
        var id = $(this).parents('tr').find('.sid').html();
        var url = "<?php echo U('Admin/Job/ajaxedit');?>";
        var btn = $(this);
        //ajax
        $.post(url,{id:id,personnum:newV},function(data){
        if (data == 1) {
         td.html(newV);
        }else{
          alert('修改失败');
        }
      }) 
      })
    })

    //双击修改人事邮箱 绑定双击事件
    $('.edite').dblclick(function(){
      //获取当前的文本
      var v = $(this).html();
      //创建inp
      var inp = $('<input type="text" value="'+v+'" name="job_email" />')
      //将input插入
      $(this).html(inp);
      //让input处于选中状态
      inp.select();
      var td = $(this);

      //绑定丧失焦点事件
      inp.blur(function(){
        //获取修改后的当前的值
        var newV = $(this).val();
        //获取当前的id
        var id = $(this).parents('tr').find('.sid').html();
        var url = "<?php echo U('Admin/Job/ajaxedit');?>";
        var btn = $(this);
        //ajax
        $.post(url,{id:id,job_email:newV},function(data){
        if (data == 1) {
         td.html(newV);
        }else{
          alert('修改失败');
        }
      }) 
      })
    })

    //双击修改职位简介及职位要求 绑定双击事件
    $('.editi').dblclick(function(){
      //获取当前的文本
      var v = $(this).html();
      //创建inp
      var inp = $('<input type="text" value="'+v+'" name="job_intro" />')
      //将input插入
      $(this).html(inp);
      //让input处于选中状态
      inp.select();
      var td = $(this);

      //绑定丧失焦点事件
      inp.blur(function(){
        //获取修改后的当前的值
        var newV = $(this).val();
        //获取当前的id
        var id = $(this).parents('tr').find('.sid').html();
        var url = "<?php echo U('Admin/Job/ajaxedit');?>";
        var btn = $(this);
        //ajax
        $.post(url,{id:id,job_intro:newV},function(data){
        if (data == 1) {
         td.html(newV);
        }else{
          alert('修改失败');
        }
      }) 
      })
    })

    //双击修改工作地点 绑定双击事件
    $('.edita').dblclick(function(){
      //获取当前的文本
      var v = $(this).html();
      //创建inp
      var inp = $('<input type="text" value="'+v+'" name="job_address" />')
      //将input插入
      $(this).html(inp);
      //让input处于选中状态
      inp.select();
      var td = $(this);

      //绑定丧失焦点事件
      inp.blur(function(){
        //获取修改后的当前的值
        var newV = $(this).val();
        //获取当前的id
        var id = $(this).parents('tr').find('.sid').html();
        var url = "<?php echo U('Admin/Job/ajaxedit');?>";
        var btn = $(this);
        //ajax
        $.post(url,{id:id,job_address:newV},function(data){
        if (data == 1) {
         td.html(newV);
        }else{
          alert('修改失败');
        }
      }) 
      })
    })
    </script> 

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/Public/Admin/bower_components/raphael/raphael-min.js"></script>
    <!-- <script src="/Public/Admin/bower_components/morrisjs/morris.min.js"></script>
    <script src="/Public/Admin/js/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="/Public/Admin/dist/js/sb-admin-2.js"></script>

</body>

</html>