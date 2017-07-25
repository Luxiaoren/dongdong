<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script charset="utf-8" src="./kinde/kindeditor-all.js"></script>
	<script charset="utf-8" src="./kinde/kindeditor文件夹名/lang/zh-CN.js"></script>

<script type="text/javascript">
    //KindEditor脚本
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('#editor_id', {
        });
    });
</script>
</head>
<body>
<textarea id="editor_id" name="content" style="width:700px;height:300px;">
&lt;strong&gt;HTML内容&lt;/strong&gt;
</textarea>
</body>
</html>
