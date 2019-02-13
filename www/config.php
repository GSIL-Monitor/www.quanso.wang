<?php
date_default_timezone_set ( "Asia/Shanghai" );
error_reporting ( 0 );
define ( 'WWW_DIR', __DIR__ );
define ( 'LIB_PATH', dirname ( __DIR__ ) . '/library' );
define ( 'APP_PATH', dirname ( __DIR__ ) . '/application' );
define ( 'TPL_DIR_NAME', 'templates' );
define ( 'TPL_DIR', WWW_DIR . '/' . TPL_DIR_NAME );
define ( 'WEB_URL', '/' );
define ( 'IS_INSTALL', FALSE );
define ( 'IN_ZYCPS', TRUE );
define ( 'TIMES', time () );
define ( 'SITE_GRADE', 4 );
define ( 'DATETIMES', date ( "Y-m-d H:i:s", TIMES ) );
define ( 'DAYS', date ( 'Y-m-d', TIMES ) );
define ( 'APP_DEBUG', 0 );
define ( 'APP_REWRITE',  0);
 

require WWW_DIR . '/settings.php';


$GLOBALS ['mysql'] = array (
		'dbhost' => 'localhost',
		'dbport' => '3306',
		'dbuser' => 'root',
		'dbpwd' => 'root',
		'dbname' => 'www_quanso_wang',
		'charset' => 'utf8',
		'sql_mode' => '1',
		'slaves' => false 
); 
 

//广告位置配置
$GLOBALS ['sitelist'] = array (
		1000 => "fd",
  		1002 => "bm",
  		1001 => "tp",
  		1003 => "se"
);

 
/**
 * 支持银行 配置 1 = 开启 0 = 关闭
 */

$GLOBALS ['c_bank'] = array (
		'工商银行' => array (
				'icbc',
				1 
		),
		'招商银行' => array (
				'cmbc',
				1 
		),
		'建设银行' => array (
				'ccb',
				1 
		),
		'农业银行' => array (
				'abc',
				1 
		),
		'中国银行' => array (
				'boc',
				0 
		),
		'支付宝' => array (
				'alipay',
				1 
		),
		'财付通' => array (
				'tenpay',
				0 
		) 
);

/**
 * 充值网关 配置 1 = 开启 0 = 关闭
 */

$GLOBALS ['c_onlinepay'] = array (
		'支付宝' => array (
				'alipay',
				1 
		),
		'财付通' => array (
				'tenpay',
				1 
		),
		'快钱' => array (
				'99bill',
				1 
		),
		'网银在线' => array (
				'chinabank',
				1 
		) 
);
$GLOBALS ['article_type'] = array (
		'1' => '公告内容',
		'2' => '最新活动',
		'3' => '站长帮助',
		'4' => '广告商帮助' 
);

$GLOBALS ['article_type'] = array (
		'1' => '公告内容',
		'2' => '最新活动',
		'3' => '站长帮助',
		'4' => '广告商帮助' 
);

$GLOBALS ['class_type'] = array (
		'1' => '网站分类',
		'2' => '计划分类' 
);

$GLOBALS ['gift_type'] = array (
		'时尚数码',
		'休闲生活',
		'办公用品',
		'经典书籍',
		'实用家居',
		'其它' 
);


$GLOBALS ['tpl'] = array (
		'index' => 'index/def',
		'main' => array (
				'affiliate' => 'affiliate',
				'advertiser' => 'advertiser',
				'service' => 'service',
				'commercial' => 'commercial' 
		),
		'admin' => 'admin',
		'install' => 'install',
);

$GLOBALS ['C_isp'] = array (
		0 => '其它',
		1 => "电信",
		2 => "联通",
		3 => "铁通",
		4 => "移动",
		5 => "教育网",
		6 => "网吧",
		7 => "公司",
		8 => "学校",
		9 => "长城网",
		10 => "有线通",
		11 => "广电网",
		12 => "天威视讯",
		13 => "珠江宽频",
		14 => "世纪互联",
		15 => "油田宽带",
		16 => "歌华宽带",
		17 => "华数宽带",
		18 => "中电华通",
		19 => "科技网",
		20 => "华通宽带",
		21 => "视讯宽带",
		22 => "方正宽带",
		23 => "中海宽带",
		24 => "中电飞华",
		25 => "中科院",
		26 => "科学院网",
		27 => "金桥网",
		28 => "电子政务网",
		29 => "视通网络",
		30 => "E家宽频",
		31 => "经济信息网",
		32 => "盈联宽带",
		33 => "聚友网络",
		34 => "中信网络" 
);
$GLOBALS ['C_province'] = array (
		0 => '其它',
		1 => "直辖市",
		2 => "河北",
		3 => "山西",
		4 => "内蒙古",
		5 => "辽宁",
		6 => "吉林",
		7 => "黑龙江",
		8 => "江苏",
		9 => "浙江",
		10 => "安徽",
		11 => "福建",
		12 => "江西",
		13 => "山东",
		14 => "河南",
		15 => "湖北",
		16 => "湖南",
		17 => "广东",
		18 => "广西",
		19 => "海南",
		20 => "四川",
		21 => "贵州",
		22 => "云南",
		23 => "西藏",
		24 => "陕西",
		25 => "甘肃",
		26 => "青海",
		27 => "宁夏",
		28 => "新疆",
		29 => "北京",
		30 => "上海",
		31 => "重庆",
		32 => "天津",
		33 => "香港",
		34 => "澳门",
		35 => "台湾" 
);
$GLOBALS ['C_city'] = array (
		0 => '其它',
		1 => "北京",
		2 => "上海",
		3 => "重庆",
		4 => "天津",
		5 => "石家庄",
		6 => "唐山",
		7 => "秦皇岛",
		8 => "邯郸",
		9 => "邢台",
		10 => "保定",
		11 => "张家口",
		12 => "承德",
		13 => "沧州",
		14 => "廊坊",
		15 => "衡水",
		16 => "太原",
		17 => "大同",
		18 => "阳泉",
		19 => "长治",
		20 => "晋城",
		21 => "朔州",
		22 => "晋中",
		23 => "运城",
		24 => "忻州",
		25 => "临汾",
		26 => "吕梁地",
		27 => "呼和浩特",
		28 => "包头",
		29 => "乌海",
		30 => "赤峰",
		31 => "通辽",
		32 => "鄂尔多斯",
		33 => "呼伦贝尔",
		34 => "乌兰察布",
		35 => "锡林郭勒",
		36 => "巴彦淖尔",
		37 => "阿拉善",
		38 => "兴安",
		39 => "沈阳",
		40 => "大连",
		41 => "鞍山",
		42 => "抚顺",
		43 => "本溪",
		44 => "丹东",
		45 => "锦州",
		46 => "葫芦岛",
		47 => "营口",
		48 => "盘锦",
		49 => "阜新",
		50 => "辽阳",
		51 => "铁岭",
		52 => "朝阳",
		53 => "长春",
		54 => "吉林",
		55 => "四平",
		56 => "辽源",
		57 => "通化",
		58 => "白山",
		59 => "松原",
		60 => "白城",
		61 => "延边",
		62 => "哈尔滨",
		63 => "齐齐哈尔",
		64 => "鹤岗",
		65 => "双鸭山",
		66 => "鸡西",
		67 => "大庆",
		68 => "伊春",
		69 => "牡丹江",
		70 => "佳木斯",
		71 => "七台河",
		72 => "黑河",
		73 => "绥化",
		74 => "大兴安岭",
		75 => "南京",
		76 => "徐州",
		77 => "连云港",
		78 => "淮安",
		79 => "宿迁",
		80 => "盐城",
		81 => "扬州",
		82 => "泰州",
		83 => "南通",
		84 => "镇江",
		85 => "常州",
		86 => "无锡",
		87 => "苏州",
		88 => "杭州",
		89 => "宁波",
		90 => "温州",
		91 => "嘉兴",
		92 => "湖州",
		93 => "绍兴",
		94 => "金华",
		95 => "衢州",
		96 => "舟山",
		97 => "台州",
		98 => "丽水",
		99 => "合肥",
		100 => "芜湖",
		101 => "蚌埠",
		102 => "淮南",
		103 => "马鞍山",
		104 => "淮北",
		105 => "铜陵",
		106 => "安庆",
		107 => "黄山",
		108 => "滁州",
		109 => "阜阳",
		110 => "宿州",
		111 => "巢湖",
		112 => "六安",
		113 => "亳州",
		114 => "池州",
		115 => "宣城",
		116 => "福州",
		117 => "厦门",
		118 => "三明",
		119 => "莆田",
		120 => "泉州",
		121 => "漳州",
		122 => "南平",
		123 => "龙岩",
		124 => "宁德",
		125 => "南昌",
		126 => "景德镇",
		127 => "萍乡",
		128 => "九江",
		129 => "新余",
		130 => "鹰潭",
		131 => "赣州",
		132 => "吉安",
		133 => "宜春",
		134 => "抚州",
		135 => "上饶",
		136 => "济南",
		137 => "青岛",
		138 => "淄博",
		139 => "枣庄",
		140 => "东营",
		141 => "潍坊",
		142 => "烟台",
		143 => "威海",
		144 => "济宁",
		145 => "泰安",
		146 => "日照",
		147 => "莱芜",
		148 => "临沂",
		149 => "德州",
		150 => "聊城",
		151 => "滨州",
		152 => "菏泽",
		153 => "郑州",
		154 => "开封",
		155 => "洛阳",
		156 => "平顶山",
		157 => "焦作",
		158 => "鹤壁",
		159 => "新乡",
		160 => "安阳",
		161 => "濮阳",
		162 => "许昌",
		163 => "漯河",
		164 => "三门峡",
		165 => "南阳",
		166 => "商丘",
		167 => "信阳",
		168 => "周口",
		169 => "驻马店",
		170 => "武汉",
		171 => "黄石",
		172 => "襄樊",
		173 => "十堰",
		174 => "荆州",
		175 => "宜昌",
		176 => "荆门",
		177 => "鄂州",
		178 => "孝感",
		179 => "黄冈",
		180 => "咸宁",
		181 => "随州",
		182 => "恩施",
		183 => "长沙",
		184 => "株洲",
		185 => "湘潭",
		186 => "衡阳",
		187 => "邵阳",
		188 => "岳阳",
		189 => "常德",
		190 => "张家界",
		191 => "益阳",
		192 => "郴州",
		193 => "永州",
		194 => "怀化",
		195 => "娄底",
		196 => "湘西",
		197 => "广州",
		198 => "深圳",
		199 => "珠海",
		200 => "汕头",
		201 => "韶关",
		202 => "河源",
		203 => "梅州",
		204 => "惠州",
		205 => "汕尾",
		206 => "东莞",
		207 => "中山",
		208 => "江门",
		209 => "佛山",
		210 => "阳江",
		211 => "湛江",
		212 => "茂名",
		213 => "肇庆",
		214 => "清远",
		215 => "潮州",
		216 => "揭阳",
		217 => "云浮",
		218 => "南宁",
		219 => "柳州",
		220 => "桂林",
		221 => "梧州",
		222 => "北海",
		223 => "防城港",
		224 => "钦州",
		225 => "贵港",
		226 => "玉林",
		227 => "百色",
		228 => "贺州",
		229 => "河池",
		230 => "来宾",
		231 => "崇左",
		232 => "海口",
		233 => "三亚",
		234 => "成都",
		235 => "自贡",
		236 => "攀枝花",
		237 => "泸州",
		238 => "德阳",
		239 => "绵阳",
		240 => "广元",
		241 => "遂宁",
		242 => "内江",
		243 => "乐山",
		244 => "南充",
		245 => "宜宾",
		246 => "广安",
		247 => "达州",
		248 => "眉山",
		249 => "雅安",
		250 => "巴中",
		251 => "资阳",
		252 => "阿坝",
		253 => "甘孜",
		254 => "凉山",
		255 => "贵阳",
		256 => "六盘水",
		257 => "遵义",
		258 => "安顺",
		259 => "铜仁地",
		260 => "毕节地",
		261 => "黔西南",
		262 => "黔东南",
		263 => "黔南",
		264 => "昆明",
		265 => "曲靖",
		266 => "玉溪",
		267 => "保山",
		268 => "昭通",
		269 => "思茅",
		270 => "临沧",
		271 => "丽江",
		272 => "文山",
		273 => "红河",
		274 => "西双版纳",
		275 => "楚雄",
		276 => "大理",
		277 => "德宏",
		278 => "怒江",
		279 => "迪庆",
		280 => "拉萨",
		281 => "那曲",
		282 => "昌都",
		283 => "山南",
		284 => "日喀则",
		285 => "阿里",
		286 => "林芝",
		287 => "西安",
		288 => "铜川",
		289 => "宝鸡",
		290 => "咸阳",
		291 => "渭南",
		292 => "延安",
		293 => "汉中",
		294 => "榆林",
		295 => "安康",
		296 => "商洛",
		297 => "兰州",
		298 => "金昌",
		299 => "白银",
		300 => "天水",
		301 => "嘉峪关",
		302 => "武威",
		303 => "张掖",
		304 => "平凉",
		305 => "酒泉",
		306 => "庆阳",
		307 => "定西",
		308 => "陇南",
		309 => "甘南",
		310 => "临夏",
		311 => "西宁",
		312 => "海东",
		313 => "海北",
		314 => "黄南",
		315 => "海南",
		316 => "果洛",
		317 => "玉树",
		318 => "海西",
		319 => "银川",
		320 => "石嘴山",
		321 => "吴忠",
		322 => "固原",
		323 => "乌鲁木齐",
		324 => "克拉玛依",
		325 => "吐鲁番",
		326 => "哈密",
		327 => "和田",
		328 => "阿克苏",
		329 => "喀什",
		330 => "克孜勒苏",
		331 => "巴音郭楞",
		332 => "昌吉",
		333 => "博尔塔拉",
		334 => "伊犁",
		335 => "塔城",
		336 => "阿勒泰" 
);