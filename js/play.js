
function getLength(str){
	return str.replace(/[^\x00-xff]/g,"XX").length;	
}

function findStr(str,n){
	var tmp=0;
	for(var i=0; i<str.length ; i++){
		if(str.charAt(i)==n){			
			tmp++		
		}	
	}	
	return tmp;	
}


window.onload = function(){
	
	
	var oName = document.getElementById('input-name');
	var numbers = document.getElementById('input-numbers');

	var pwd = document.getElementById('input-password');
	var pwd2 = document.getElementById('input-r-password');;
	
	
	var name_msg = document.getElementById('p-name');
	var numbers_msg = document.getElementById('p-numbers');

	var pwd_msg = document.getElementById('p-password');
	var pwd2_msg = document.getElementById('p-r-password'); 
	
	
	var name_length = 0;
	
	

   
   //用户名
   
   oName.onfocus = function(){
	   name_msg.style.display="block";
	   name_msg.innerHTML = '请输入2-25个字符,推荐使用中文会员名。'	     
   }
   
   
   
   
   
   
   
   oName.onblur = function(){
	   
	   //含有非法字符
	    var re = /[^\w\u4e00-\u9fa5]/g;  
		if(re.test(this.value)){			
			name_msg.innerHTML = ' <i class ="no"></i> 含有非法字符' ;					
			}
	      
	   //不能为空	   
	   else if(this.value ==""){		   
		name_msg.innerHTML = ' <i class ="no"></i> 用户名不得为空！' ;    	   
	   }
	   	   
	   //长度不能超出25个字符
	   else if(this.value.length>25){	   
		   name_msg.innerHTML = ' <i class ="no"></i> 用户名长度不得超出25个字符' ; 		   
	   }
	   
	   	   //长度不少于2个字符	   
	  	   else if(this.value.length<2){		   
		   name_msg.innerHTML = ' <i class ="no"></i> 用户名长度不得少于2个字符' ; 		   
	   } 
	   	   
	   //OK
	    else{
			name_msg.innerHTML = ' <i class ="ok"></i> 可以注册！' ; 
		}
	     	   
   }
   //学号
    
    numbers.onfocus = function(){
		numbers_msg.style.display = "block";
		numbers_msg.innerHTML = '请输入8位数字';				
	}
	
	
	
	
	
	numbers.onblur = function(){
		
		var m = findStr(numbers.value,numbers.value[0]);
		var re_n = /[^\d]/g;
		var re_t = /[^a-zA-Z]/g;
		
		//不能为空		
		if(this.value ==""){
			numbers_msg.innerHTML = '<i class="no"> </i> 学号不得为空！';		
		}	
		
			
		//不能用相同字符		
		else if( m== this.value.length){			
			numbers_msg.innerHTML = '<i class="no"> </i> 不能使用相同字符！';
		}		
			
		//长度应该为8个字符
		else if( this.value.length!=8){			
			numbers_msg.innerHTML = '<i class="no"> </i> 输入的学号应为8个字符！';
		}
		
		
		
		//不能全为字母
		else if( !re_t.test(this.value)){
			numbers_msg.innerHTML = '<i class="no"> </i> 不能是字母！';
		}
		
		
		//OK
		else{
			numbers_msg.innerHTML = '<i class="ok"> </i> 可以使用！';
		}		
	}
	

	
	
	
	//密码
	
	pwd.onfocus = function(){
		pwd_msg.style.display = "block";
		pwd_msg.innerHTML = '6-16个字符，请使用字母加数字加符号组成';				
	}
	
	
	
	
	
	pwd.onblur = function(){
		
		var m = findStr(pwd.value,pwd.value[0]);
		var re_n = /[^\d]/g;
		var re_t = /[^a-zA-Z]/g;
		
		//不能为空		
		if(this.value ==""){
			pwd_msg.innerHTML = '<i class="no"> </i> 密码不得为空！';		
		}	
		
			
		//不能用相同字符		
		else if( m== this.value.length){			
			pwd_msg.innerHTML = '<i class="no"> </i> 不能使用相同字符！';
		}		
			
		//长度应该为6-16个字符
		else if( this.value.length<6 || this.value.length>16){			
			pwd_msg.innerHTML = '<i class="no"> </i> 输入的密码应在6-16个字符之间！';
		}
		
		
		//不能全为数字	
		else if( !re_n.test(this.value)){
			pwd_msg.innerHTML = '<i class="no"> </i> 不能全是数字！';
		}
		
		//不能全为字母
		else if( !re_t.test(this.value)){
			pwd_msg.innerHTML = '<i class="no"> </i> 不能全是字母！';
		}
		
		
		//OK
		else{
			pwd_msg.innerHTML = '<i class="ok"> </i> 可以使用！';
		}		
	}
	
	

	//确认密码	
	pwd2.onblur = function(){		
		if(this.value!=pwd.value){
			pwd2_msg.innerHTML = '<i class="no"> </i> 两次密码输入的不一样！';
		}		
		else{
			pwd2_msg.innerHTML = '<i class="ok"> </i> 输入正确！';
		}				
	}
	
	
	
	
}