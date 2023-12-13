<!DOCTYPE HTML>
<html>
<head>
<style>
@import "compass/css3";

body{
  font:13px/1.3 'Lucida Grande',sans-serif;
  color:#666;
}

.chart{
  display:table;
  table-layout: fixed;   
  
  width:60%;
  max-width:700px;
  height:200px;
  margin:0 auto;
  
  background-image:linear-gradient(bottom, rgba(0, 0, 0, 0.1) 2%, transparent 2%);
  background-size: 100% 50px;
  background-position: left top;
  
  li{
    position:relative;
    display:table-cell;
    vertical-align:bottom;
    height:200px;
  }
  
  span{
    margin:0 1em;
    display: block;
    background: rgba(#d1ecfa, .75);
    animation: draw 1s ease-in-out;
    
    &:before{
      position:absolute;
      left:0;right:0;top:100%;
      padding:5px 1em 0;
  		display:block;
      text-align:center;
      content:attr(title);
      word-wrap: break-word;
    }
    
  }
  
}

@keyframes draw{
  0%{height:0;} 
}
</style>
</head>
<body>

<ul class="chart">
  <li>
    <span style="height:5%" title="ActionScript"></span>
  </li>
  <li>
    <span style="height:70%" title="JavaScript"></span>
  </li>
  <li>
    <span style="height:50%" title="CoffeScript"></span>
  </li>
  <li>
    <span style="height:15%" title="HTML"></span>
  </li>
</ul>    

</body>
</html>