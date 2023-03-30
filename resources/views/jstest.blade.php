<script>
    //javascript脚本基础
    var x = 5;
    var y = 6;
    //window.alert(x+y);
    function tfunction(){
        document.getElementById("test").innerHTML=person.fullname();
    }
    var arrays = new Array();
    arrays[0] = 'test1';
    arrays[1] = 'test2';
    arrays[2] = 'test3';
    var arrays2 = new Array("a","b","c");
    var arrays1 = ['1','2','3'];

    var person ={
        firstname:'w',
        lastname:'b',
        id:123,
        //定义对象方法
        fullname : function(){
        return person.firstname+person.lastname;
    }}
</script>
<h1 id='test'>测试内容</h1>
<button onclick='tfunction()'>按键测试</button>