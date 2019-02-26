<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/result.css">
    <link rel="stylesheet" href="/static/home/css/common.css">
    <link rel="stylesheet" href="/static/home/css/cooperation.css">
    <title>代理合作</title>
</head>

<body>
    <!-- 引入头部 -->
    @include('home.pub.header')
    <!-- 引入头部 -->
    <div style='margin:100px 30px;'>
        <table>
            <tr>
                <td>姓名</td>
                <td>电话</td>
                <td>地址</td>
                <td>公司</td>
                <td>操作</td>
            </tr>
            @foreach ($lists as $list)
            <tr>
                <td>{{$list->name}}</td>
                <td>{{$list->phone}}</td>
                <td>{{$list->position}}</td>
                <td>{{$list->company}}</td>
                <td><a href="javascript:;">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;">删除</a></td>
            </tr>
            @endforeach
        </table>
    </div>


    <!-- 引入底部 -->
    @include('home.pub.footer')
    <!-- 引入底部 -->


</body>

</html> 