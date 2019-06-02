@extends('layouts.default')
@section('title', '主页')

@section('content')

@stop

<html>

<head>
    <title>留言板</title>
    <style type="text/css"></style>
</head>
<body>


    <table width = "600" border = "0" cellpadding = "20">
        <tr>
            <td><div class="title1">标题：</div></td>
            <td><input type = "text" name = "title"></td>
        </tr>
        <tr>
            <td><div class="title1">留言者：</div></td>
            <td><input type = "text" name = "author"></td>
        </tr>
        <tr>
            <td><div class="title2">留言内容：</div></td>
            <td><textarea   rows = "10"  cols = "40" name = "content"></textarea></td>
        </tr>
        <tr>

            <td colspan = "2" align = "center"><input type = "submit" value = "提交">
                    <input type = "reset" value = "重置"></td>
        </tr>

    </table>
</body>
</html>

<?php
$title=$content=$author="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $title = test_input($_POST["title"]);
    $content = test_input($_POST["content"]);
    $author = test_input($_POST["author"]);
}
?>
