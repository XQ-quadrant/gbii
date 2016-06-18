<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<style type="text/css">
		html,body{height:100%;margin:0px;padding:0px;font-family:"微软雅黑";font-size:14px;}
		#allmap{height:500px;width:100%;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=5zbHrfj8vctMpcnX7xydtdhrVSt9Lr7K"></script>
	<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
	<title></title>
</head>
<body>
	<div id="allmap"></div>  
</body>
</html>
<script type="text/javascript" src="http://developer.baidu.com/map/custom/stylelist.js"></script>
<script type="text/javascript">
	var map = new BMap.Map("allmap");
	map.centerAndZoom("天府广场",13);
    //window.map = map;
    map.setCurrentCity("成都");	
	//代码使用如下,即可. 模板页可以查看//http://developer.baidu.com/map/custom/list.htm      
   //map.setMapStyle({style:'midnight'});
    var index;
	var addresse=<?php echo $addresses;?>;
	var myGeo = new BMap.Geocoder();
	window.onload=function repeate(){
		for(index=0;index<addresse.length;index++){
			bdGEO();
		}
	}
	function bdGEO(){
		var address = addresse[index];
		geocodeSearch(address);
	}
	function geocodeSearch(address){
		myGeo.getPoint(address, function(point){
			if (point) {
				//map.addOverlay(new BMap.Marker(point));
				var apoint = new BMap.Point(point.lng, point.lat);
				addMarker(apoint);
			}
	   	}, "成都市");
	}
	// 编写自定义函数,创建标注
	function addMarker(point){
		var marker = new BMap.Marker(point);
		map.addOverlay(marker);
	}
	map.addControl(new BMap.NavigationControl());             // 添加平移缩放控件
	//map.addControl(new BMap.ScaleControl());                    // 添加比例尺控件
	map.addControl(new BMap.OverviewMapControl());                //添加缩略地图控件
	map.enableScrollWheelZoom();                            //启用滚轮放大缩小
	map.addControl(new BMap.MapTypeControl());         //添加地图类型控件

</script>
