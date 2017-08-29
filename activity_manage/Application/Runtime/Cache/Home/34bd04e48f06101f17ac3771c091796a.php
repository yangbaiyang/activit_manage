<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>house365</title><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/activity_manage/Public/Public/css/AdminLogin/bootstrap.min.css">
    <link rel="stylesheet" href="/activity_manage/Public/Public/css/AdminLogin/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/activity_manage/Public/Public/css/AdminLogin/matrix-login.css">
    <link href="/activity_manage/Public/Public/css/AdminLogin/font-awesome.css" rel="stylesheet">
    <link href="/activity_manage/Public/Public/css/AdminLogin/login-fonts.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        input{
            font-family: "Microsoft Yahei";
        }
        .control-label{
            color: #2EB4D8;
            padding-left: 4px;
        }
        a:hover{
            color: red;
        }
    </style>
</head>
<body onkeydown="">

<div id="loginbox" class="sign" >
    <div class="control-group normal_text">
        <h2 style="color:#2EB4D8;font-size:28px;">报名</h2>
    </div>
    <form id="loginform" class="form-vertical" action="/activity_manage/Public/index.php/Home/Index/baoming?id=<?php echo ($id); ?>" method="post">
        <div class="control-group2">
            <label class="control-label">名字</label>
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on"><i class='' style="font-size:13px;"></i></span><input type="text" name="username" id="cg2" onchange="return c2()" placeholder="用户名">
                    <span2 id="sp2"></span2>
                </div>
            </div>
        </div>
        <div class="control-group3">
            <label class="control-label">联系方式</label>
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on "><i class="" style="font-size:16px;"></i></span><input type="text" name="contactway" id="cg6" onchange="return c6()" placeholder="联系方式(手机号)">
                    <span2 id="sp6"></span2>
                </div>
            </div>
        </div>
        <div class="form-actions text-center">
                <span class="">
                    <input type="submit" onclick="return sbm()" id="checkBtn" class="btn btn-info" style="width:30%;" value=" 报&nbsp;&nbsp;名 "/>
                    <input type="reset" id="" class="btn btn-warning" style="width:30%;" value=" 重&nbsp;&nbsp;置 "/>
                    <br/><br>
                    <br><br>
                    <span3> <a href="/activity_manage/Public/index.php">返回首页面</a></span3>
                </span>
        </div>
    </form>
</div>
<div></div>
</body>

<script src="/activity_manage/Public/Public/js/jq.js"></script>
<script>

    function sbm(){


        var t6=$('#cg6').val();
        if(t6==''){
            $('#sp6').text('联系信息不能为空');
            return false;
        }else{
            $('#sp6').text('');
        }
        if(c2() && c6()){
            return true;
        }else{
            return false;
        }
    }
    function c2(){
        var t6=$('#cg2').val();
        if(t6==''){
            $('#sp2').text('用户名不能为空');
            return false;
        }else{
            $('#sp2').text('');
        }
        return true;
    }
    function c6(){
        var t=$('#cg6').val();
        var z= /^1\d{10}$/;
        if(z.test(t)){
            $('#sp6').text('');
            return true;
        }else{
            $('#sp6').text('电话号码格式不对');
            return false;
        }
    }
</script>

</html>