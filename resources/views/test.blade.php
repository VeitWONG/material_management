<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vue 测试实例 - 菜鸟教程(runoob.com)</title>
	<script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>
</head>
<body>
	<div id="vue_det">
        <h1>site : </h1>
        <h1>url : </h1>
        <h1>Alexa : </h1>
    </div>
    <script type="text/javascript">
    // 数据对象
    var data = { site: "菜鸟教程", url: "www.runoob.com", alexa: 10000}
    var vm = new Vue({
        el: '#vue_det',
        data: data
    })

    document.write(vm.$data === data) // true
    document.write("<br>")
    document.write(vm.$el === document.getElementById('vue_det')) // true
    var x,length
    x = 5
    length = 6
    document.getElementById("vue_det").innerHTML = "测试";
    </script>
</body>
</html>
