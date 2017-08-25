window.onload=function(){
    		var obtn=document.getElementById("btn");
    		var clientHeight=document.documentElement.clientHeight; /*获取界面可视区的高度*/
    		var timer=null;
    		var istop=true;
    		window.onscroll=function(){
    			// var ostop= document.documentElement.scrollTop  || document.body.scrollTop;
    			// if (ostop>=clientHeight) {
    			// 	obtn.style.display="block";
    			// }else{obtn.style.display="none"}
    			if (!istop) {
    				clearInterval(timer);
    			}
    			istop=false;
    		}
    		// 设置定时器
    		obtn.onclick=function(){
    			timer=setInterval(function(){/*获取滚动条的高度*/
    			var ostop= document.documentElement.scrollTop  || document.body.scrollTop;
    			var ispeed=Math.floor(-ostop/6);
                  document.documentElement.scrollTop = document.body.scrollTop =ostop+ispeed;
                  istop=true;
                  console.log(ostop-ispeed);
                  if (ostop==0) {
                  	clearInterval(timer);
                  }

},50);
    			
    		}
    	}