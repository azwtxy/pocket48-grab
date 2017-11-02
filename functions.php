<?php
//定义常量

//api地址
define("LIVE_API", "https://plive.48.cn/livesystem/api/live/v1/memberLivePage");

//直播分享地址前缀
define("LIVE_SHARE", "https://h5.48.cn/2017appshare/memberLiveShare/index.html?id=");

//图片、弹幕服务器
define("LIVE_PIC", "https://source.48.cn");

//数据表顺序
$order=array(
	"memberId",
	"title",
	"subTitle",
	"liveType",
	"startTime",
	"picPath",
	"liveId",
	"streamPath",
	"lrcPath",
	"picLoopTime",
	"screenMode",
);

//groupId表
$grouptable=[
	"SNH48" => "10",
	"BEJ48" => "11",
	"GNZ48" => "12",
	"SHY48" => "13",
];

//memberId表
$membertable= [ "官方" => [ "官方" => [ "SNH48" => "5973", "BEJ48" => "327682", "GNZ48" => "327683", "SHY48" => "460933", "袋王" => "63", "影视君" => "9073", "SNH48-星梦剧院" => "526172", "GNZ48-星梦剧院" => "524597", ], ],  "SNH48" => [ "SII" => [ "陈观慧" => "3", "陈思" => "37", "成珏" => "286973", "戴萌" => "38", "蒋芸" => "17", "孔肖吟" => "19", "李宇琪" => "20", "吕一" => "399631", "莫寒" => "35", "潘燕琦" => "399652", "钱蓓婷" => "36", "邱欣怡" => "40", "沈之琳" => "9", "孙芮" => "8", "温晶婕" => "11", "吴哲晗" => "39", "徐晨辰" => "18", "徐子轩" => "14", "许佳琪" => "21", "袁丹妮" => "67", "袁雨桢" => "5", "张语格" => "1", "赵晔" => "6429", ], "NII" => [ "陈佳莹" => "4", "陈问言" => "68", "董艳芸" => "6", "冯薪朵" => "7", "葛佳慧" => "593999", "龚诗淇" => "26", "何晓玉" => "10", "黄婷婷" => "22", "黄彤扬" => "286976", "江真仪" => "399662", "金莹玥" => "538735", "鞠婧祎" => "48", "李艺彤" => "16", "林思意" => "24", "刘菊子" => "399664", "刘瀛" => "399667", "陆婷" => "34", "唐安琪" => "12", "万丽娜" => "25", "许逸" => "399668", "易嘉爱" => "33", "曾艳芬" => "49", "张雅梦" => "399665", "张雨鑫" => "5574", "赵粤" => "27", "周怡" => "49003", ], "HII" => [ "郭倩芸" => "530584", "郝婉晴" => "32", "姜涵" => "594002", "李清扬" => "28", "林楠" => "5562", "刘炅然" => "1544", "刘佩鑫" => "46", "沈梦瑶" => "6738", "孙珍妮" => "286977", "王柏硕" => "47", "王露皎" => "49006", "王奕" => "594003", "文文" => "534729", "吴燕文" => "5564", "谢妮" => "45", "熊沁娴" => "594005", "徐晗" => "2470", "许杨玉琢" => "5566", "徐伊人" => "43", "杨惠婷" => "5567", "袁航" => "49007", "袁一琦" => "399669", "张昕" => "2508", "赵梦婷" => "540106", ], "X" => [ "陈琳" => "6431", "冯晓菲" => "6432", "李晶" => "6734", "李钊" => "6735", "林忆宁" => "286980", "祁静" => "399672", "邵雪聪" => "6737", "宋昕冉" => "6738", "孙歆文" => "6739", "孙亚萍" => "593820", "汪佳翎" => "6740", "汪束" => "6741", "王晓佳" => "6742", "谢天依" => "6743", "杨冰怡" => "6744", "杨韫玉" => "6746", "姚祎纯" => "419966", "张丹三" => "6747", "张嘉予" => "286979", ], "XII" => [ "陈韫凌" => "63551", "费沁源" => "63555", "贺苏堃" => "592320", "洪珮雲" => "63558", "姜杉" => "63560", "蒋舒婷" => "63561", "李佳恩" => "286983", "林歆源" => "541132", "刘增艳" => "63566", "吕梦莹" => "286982", "潘瑛琪" => "63567", "宋雨珊" => "63570", "陶波尔" => "533852", "徐诗琪" => "399674", "许嘉怡" => "592348", "严佼君" => "63574", "於佳怡" => "63575", "曾晓雯" => "399673", "张文静" => "2508", "张怡" => "63582", "邹佳佳" => "63579", ], ], "BEJ48" => [ "B" => [ "陈美君" => "63549", "段艺璇" => "63554", "胡丽芝" => "528094", "胡晓慧" => "63559", "李沐遥" => "528106", "林溪荷" => "327578", "刘崇恬" => "528101", "刘姝贤" => "327579", "毛其羽" => "528118", "牛聪聪" => "327586", "青钰雯" => "327581", "沈小爱" => "538697", "宋思娴" => "63568", "孙姗" => "327582", "孙晓艳" => "528329", "田姝丽" => "63571", "熊素君" => "63573", "闫明筠" => "6745", "张梦慧" => "327580", "郑依灵" => "", ], "E" => [ "陈姣荷" => "327588", "陈倩楠" => "327601", "冯思佳" => "327587", "黄子璇" => "528331", "李娜" => "407132", "李想" => "327594", "李媛媛" => "327592", "李梓" => "327591", "刘胜男" => "327602", "罗雪丽" => "327589", "马玉灵" => "327596", "苏杉杉" => "327597", "顼凘炀" => "327600", "徐静" => "444081", "杨一帆" => "407135", "张笑盈" => "327598", "赵笛儿" => "528334", "郑一凡" => "327595", ], "J" => [ "陈雅钰" => "407101", "房蕾" => "407103", "葛司琪" => "407104", "黄恩茹" => "407106", "金锣赛" => "528335", "兰昊" => "528336", "李泓瑶" => "407108", "刘闲" => "407110", "刘一菲" => "528337", "乔钰珂" => "528339", "任心怡" => "407112", "任玥霖" => "407114", "石羽莎" => "407119", "孙语姗" => "407121", "王雨煊" => "407168", "许婉玉" => "444081", "杨晔" => "407126", "叶苗苗" => "407124", "张韩紫陌" => "407130", "张怀瑾" => "407127", ], ], "GNZ48" => [ "G" => [ "陈佳莹" => "530431", "陈俊宏" => "530433", "陈珂" => "63548", "陈乐添" => "530434", "陈雨琪" => "63552", "程一心" => "530435", "杜雨微" => "63553", "方晓瑜" => "530436", "高源婧" => "63557", "胡怡莹" => "327557", "黄黎蓉" => "410175", "李沁洁" => "63564", "梁可" => "530443", "林嘉佩" => "63562", "刘梦雅" => "63563", "刘小末" => "530444", "刘筱筱" => "63565", "罗寒月" => "327558", "向芸" => "410177", "谢蕾蕾" => "63572", "阳青颖" => "63576", "曾艾佳" => "63577", "张凯祺" => "63580", "张琼予" => "327560", "周倩玉" => "327561", "朱怡欣" => "530452", ], "NIII" => [ "陈慧婧" => "327562", "陈楠茜" => "327563", "陈欣妤" => "327564", "冯嘉希" => "327565", "高雪逸" => "530439", "洪静雯" => "327566", "李伊虹" => "410180", "刘力菲" => "327567", "刘倩倩" => "327568", "卢静" => "327569", "孙馨" => "327570", "唐莉佳" => "327571", "唐诗怡" => "530446", "冼燊楠" => "327572", "肖文铃" => "327573", "谢艾琳" => "530447", "熊心瑶" => "327574", "郑丹妮" => "327575", "郑悦" => "530451", "左嘉欣" => "327576", "左婧媛" => "327577", ], "Z" => [ "陈桂君" => "417311", "陈梓荧" => "417315", "代玲" => "417316", "杜秋霖" => "417317", "赖俊亦" => "530440", "刘嘉怡" => "417318", "龙亦瑞" => "417320", "农燕萍" => "417321", "王翠菲" => "417324", "王炯义" => "417325", "王偲越" => "417326", "王盈" => "417328", "王秭歆" => "417329", "杨可璐" => "417330", "杨媛媛" => "417331", "于珊珊" => "417332", "张秋怡" => "530450", "张心雨" => "417333", "赵欣雨" => "417335", "赵翊民" => "417336", ], ], "SHY48" => [ "SIII" => [ "陈婧文" => "460000", "陈奕君" => "529991", "冯译莹" => "460003", "付紫琪" => "460002", "关思雨" => "459996", "韩家乐" => "459999", "菅瑞静" => "530378", "赖梓惜" => "459995", "李慧" => "458335", "刘娇" => "459993", "刘娜" => "459992", "卢天惠" => "459991", "南翎璞" => "458358", "秦玺" => "459994", "孙敏" => "460007", "王诗蒙" => "459989", "徐静妍" => "459988", "杨允涵" => "460004", "叶锦童" => "530380", "臧聪" => "530381", "赵佳蕊" => "460005", "郑诗琪" => "530383", "朱燕" => "459997", ], "HIII" => [ "董思佳" => "480656", "方诗涵" => "530384", "高崇" => "530385", "高志娴" => "480665", "龚梦婷" => "530386", "寇承希" => "480666", "李晴" => "480668", "李熙凝" => "480670", "刘静晗" => "480667", "逯芳竹" => "530387", "曲悦萌" => "480671", "任雨情" => "480672", "王菲妍" => "530388", "王金铭" => "286978", "王睿琦" => "530390", "徐斐然" => "480673", "杨肖" => "480674", "张爱静" => "480675", "张儒轶" => "480678", "张羽涵" => "530392", "张云梦" => "480679", "郑洁丽" => "480676", ], ], ];


//获取直播、录播json数据
function live_get ($limit='100',$lasttime='0',$groupId='0',$memberId='0',$type='0',$api=LIVE_API,$giftUpdTime='1498211389003')
{
$data = array(
	"lastTime" => $lasttime,	//从此刻起获取之前的直播，毫秒时间戳
	"groupId" => $groupId,	//xxx48组
	"type" => $type,
	"memberId" => $memberId,	//成员Id
	"giftUpdTime" => $giftUpdTime,	//礼物更新时间，毫秒时间戳
	"limit" => $limit	//最多多少条
	);                              
$data_string = json_encode($data);
$ch = curl_init($api);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'os: android',
	'version: 5.0.1',
	'Content-Type: application/json',
	'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($ch);
return $result;
}

//解析数据未来可以考虑在浏览器js完成

//解析数据
function live_print ($result) {
	$data=json_decode($result,true);
	if(!empty($data["content"]["liveList"])){
	echo '<tr><td colspan="8"><span style="color:Red">----------分界线，以下为直播----------</span></td></tr>';
		foreach ($data["content"]["liveList"] as $id => $content) {
		echo '<tr>';
		tablelist($content);
		echo '</tr>';
	}
	}
	if(!empty($data["content"]["reviewList"])){
	echo '<tr><td colspan="8"><span style="color:Red">----------录播分界线，以下为录播----------</span></td></tr>';
	foreach ($data["content"]["reviewList"] as $id => $content) {
		echo '<tr>';
		tablelist($content);
		echo '</tr>';
	}
	}
}

//辅助函数 将直播、录播数据提取的内容打印成一列

function tablelist($content) {
	global $order;
	foreach ($order as $key) {
		$value=$content[$key];
		switch ($key) {
			case "liveId": //07官方地址
				echo '<td class="t7"><a href="'.LIVE_SHARE.$value.'"  target="_blank">'.LIVE_SHARE.$value.'</a></td>';
				break;
			case "title": //02标题
				echo '<td class="t2">'.$value.'</td>';
				break;
			case "subTitle": //03副标题
				echo '<td class="t3">'.$value.'</td>';
				break;
			case "picPath": //06配图地址
				echo '<td class="t6">';
				$pics = explode(',',$value);
				foreach ($pics as $values) {
				echo '<img src="'.LIVE_PIC.$values.'" style="max-width:30px; max-height:30px" />';
				};
				echo '</td>';
				break;
			case "startTime": //05直播开始时间
				echo '<td class="t5">'.date("Y-m-d",substr($value,0,10)).'<br />'.date("H:i:s",substr($value,0,10)).'</td>';
				break;
			case "memberId": //01成员ID
				//echo '<td class="t1">'.$value.'</td>';
				break;
			case "liveType": //04直播类型
				echo '<td class="t4">';
				if ($value=="1") {
					echo '视频';
				}
				else if ($value=="2") {
					echo '电台';
				}
				else {
					echo 'U_'.$value;
				}
				echo '</td>';
				break;
			case "picLoopTime": //10图片循环时间
				//echo '<td class="t10">'.$value.'</td>';
				break;
			case "lrcPath": //09弹幕文件地址
				echo '<td class="t9"><a href="'.LIVE_PIC.$value.'"  target="_blank">'.LIVE_PIC.$value.'</a></td>';
				break;
			case "streamPath": //08视频源地址
				echo '<td class="t8"><a href="'.$value.'"  target="_blank">'.$value.'</a></td>';
				break;
			case "screenMode": //??
				//echo '<td class="t11">'.$value.'</td>';
				break;
		}
	}
}

//打印groupId表
function get_group_table(){
	global $grouptable;
	foreach ($grouptable as $key => $value) {
		echo'<label id='.$key."_g".'>[<input name="g" type="radio" value="'.$value.'" />'.$key.']</label>';
	}
}
//打印memberId表
function get_member_table(){
	global $membertable;
	foreach ($membertable as $group => $teams) {
		echo '<fieldset id="'.$group.'" style="display: none">';
		foreach ($teams as $team => $members) {
			echo '<fieldset>';
			echo '<label>【Team'.$team.'】</label>';
			foreach ($members as $member => $mid) {
				echo '<label><input name="me" type="radio" value="'.$mid.'" />'.$member.'</label>';
			}
			echo '</fieldset>';
		}
		echo '</fieldset>';
	}
}

?>
