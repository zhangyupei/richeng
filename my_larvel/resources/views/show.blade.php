
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>


	</style>
	<script src="{{ URL::asset('js/js/laydate.js')}}"></script>

</head>
<body>
	
	<center>
		  时间：<input placeholder="请输入日期" name="add_time" id="add_time" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">


		日程：<input type="text" class="zhi"><!-- <input type="text" class="sj"> --><input type="button" value="添加日程" class="dian">
	 <table border="">
			 <tr class="biao">
               <td>id</td><td>日程内容</td><td>时间</td><td>用户</td><td>操作</td>
            </tr>
         <?php foreach($data as $content){ ?>
             <tr class="biao">
               <td><?php echo $content->id;?></td><td><?php echo $content->content;?></td><td><?php echo $content->time;?></td><td><?php echo $content->user;?></td><td><a href="javascript:void(0);" class="del" where=<?php echo $content->id;?>>删除</a></td>
            </tr>
         	
         <?php  }?>

		</table>
		<input type="hidden" value="456" class="u_name">
		
	</center>
</body>
<script src="http://localhost/week9/basic/views/site/jquery.1.12.js"></script>
<script>
$(".dian").on("click",function(){
	var content = $(".zhi").val();
	var time = $(".laydate-icon").val();
	var u_name = $(".u_name").val();
	//alert(u_name)
	$.ajax({
		type:"get",
		url:"jdjg_add",
		data:{content:content,u_name:u_name,time:time},
		success:function(r){
			if(r==1){
               location.href = "show";
			}else{
				alert("添加失败");
			}
			// alert(r)

				
		}
	})
	
	
})

$('.del').on("click",function(){
	var obj = $(this);
	var id = obj.attr("where");
	$.ajax({
		type:"get",
		url:"del",
		data:{id:id},
		success:function(r){
			if(r==1)
			{
				location.href = "show";
			}else{
				alert("删除失败");

			}
		}
	})
})


</script>
</html>