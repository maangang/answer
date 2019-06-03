<?php  
$ChartDiameter = 80; //图表直径
$ChartData = array(30,20,50);//用于生成图表的数据，可通过数据库来取得来确定也可以多个不过和颜色数组对应
function radians($degrees){return($degrees*(pi()/180.0));}
//取得在圆心为（0，0）圆上 x,y点的值
function circle_point($degrees,$diameter){$x=cos(radians($degrees))*($diameter/2);$y=sin(radians($degrees))*($diameter/2);return (array($x,$y));}
//把角度转换为弧度
//确定图形的大小
$ChartWidth = $ChartDiameter + 20;
$ChartHeight = $ChartDiameter + 20;
//确定统计的总数
$ChartTotal = NULL;
for($i = 0;$i < count($ChartData);$i++){
	$ChartTotal += $ChartData[$i];
}
$ChartCenterX = $ChartDiameter/2 + 10;
$ChartCenterY = $ChartDiameter/2 + 10;
//生成空白图形
$image = imagecreate($ChartWidth, $ChartHeight);
//分配颜色
$colorBody = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$colorBorder = imagecolorallocate($image, 0xFFFF00, 0xFFFF00, 0xFFFF00);
$colorText = imagecolorallocate($image, 0x9900FF, 0x9900FF, 0x9900FF);
$colorSlice[] = imagecolorallocate($image, 0xEE7621, 0xEE7621, 0xEE7621);//这里是和你上面写的数组对应的颜色
$colorSlice[] = imagecolorallocate($image, 0xFFFF66, 0xFFFF66, 0x9999CC);
$colorSlice[] = imagecolorallocate($image, 0x8888CC, 0x8888CC, 0x8888CC);

//填充背境
imagefill($image, 0, 0, $colorBody);
//画每一个扇形
$Degrees = 0;
for($index = 0; $index < count($ChartData); $index++){
$StartDegrees = round($Degrees);
$Degrees += (($ChartData[$index]/$ChartTotal)*360);
$EndDegrees = round($Degrees);
$CurrentColor = $colorSlice[$index%(count($colorSlice))];
//画图F
imagearc($image,$ChartCenterX,$ChartCenterY,$ChartDiameter,$ChartDiameter,$StartDegrees,$EndDegrees, $CurrentColor);
//画直线
list($ArcX, $ArcY) = circle_point($StartDegrees, $ChartDiameter);
imageline($image,$ChartCenterX,$ChartCenterY,floor($ChartCenterX + $ArcX),
floor($ChartCenterY + $ArcY),$CurrentColor);
//画直线
list($ArcX, $ArcY) = circle_point($EndDegrees, $ChartDiameter);
imageline($image,$ChartCenterX,$ChartCenterY,ceil($ChartCenterX + $ArcX),
ceil($ChartCenterY + $ArcY),$CurrentColor);
//填充扇形
$MidPoint = round((($EndDegrees-$StartDegrees)/2) + $StartDegrees);
list($ArcX, $ArcY) = circle_point($MidPoint, $ChartDiameter/2);
imagefilltoborder($image,floor($ChartCenterX + $ArcX),floor($ChartCenterY + $ArcY),
$CurrentColor,$CurrentColor);
}
//到此脚本 已经生了一幅图像的，现在需要的是把它发到浏览器上，重要的一点是要将标头发给浏览器，让它知道是一个GIF文件。不然的话你只能看到一堆奇怪的乱码
header("Content-type: image/png");
imagegif($image);