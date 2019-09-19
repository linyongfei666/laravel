﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>我的购物车 - 京东商城</title>
        <link type="text/css" rel="stylesheet"  href="css/782b30c7048f482d9eda7e1290dafe31.css"/>
        <script type="text/javascript" src="js/jquery-1.6.4.js"></script>
        <script type="text/javascript" src="js/base.js"></script>
        <link source="widget" href="css/9f1791db40b84f48898403e8861f788f.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet"  href="css/8fe3731c0c0c41b280bdbeaa6ad6d845.css" source="widget"/>
<script type="text/javascript">
   try{	
        window._alysAA =  window._alysAA || [];
        var _alysAA = window._alysAA;
        _alysAA.push( [ 'init',  'ifc', 'T-000014-01' ] );
        ;(function() {
        var idgJsPath = "//misc.360buyimg.com/lib/js/2012";
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = idgJsPath + '/idigger.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
        })();
     }catch(err) {}
</script>
</head>
<body>
<script type="text/javascript">
		pageConfig.fridgeFlagRebuy = '0';
		pageConfig.fridgeFLagMenus = '0';
		pageConfig.fridgeFlagSeason = '0';
</script>
<!--shortcut start-->
<div id="shortcut-2014">
	<div class="w">
    	<ul class="fl">
    		<li id="ttbar-home"><i class="iconfont">&#xe608;</i><a href="//www.jd.com/" target="_blank">京东首页</a></li>
    		<li class="dorpdown" id="ttbar-mycity"></li>
    	</ul>
    	<ul class="fr">
			<li class="fore1" id="ttbar-login">
				<a href="javascript:login();" class="link-login">你好，请登录</a>&nbsp;&nbsp;<a href="javascript:regist();" class="link-regist style-red">免费注册</a>
			</li>
			<li class="spacer"></li>
			<li class="fore2">
				<div class="dt">
					<a target="_blank" href="/order.blade.php/order.jd.com/center/list.action">我的订单</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore3 dorpdown" id="ttbar-myjd">
				<div class="dt cw-icon">
					<!-- <i class="ci-right"><s>◇</s></i> -->
					<a target="_blank" href="//home.jd.com/">我的京东</a><i class="iconfont">&#xe605;</i>
				</div>
				<div class="dd dorpdown-layer"></div>
			</li>
			<li class="spacer"></li>
			<li class="fore4" id="ttbar-member">
				<div class="dt">
					<a target="_blank" href="//vip.jd.com/">京东会员</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore5"   id="ttbar-ent">
				<div class="dt">
					<a target="_blank" href="//b.jd.com/">企业采购</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore6 dorpdown" id="ttbar-serv">
				<div class="dt cw-icon">
					<!-- <i class="ci-right"><s>◇</s></i> -->
					客户服务<i class="iconfont">&#xe605;</i>
				</div>
				<div class="dd dorpdown-layer"></div>
			</li>
			<li class="spacer"></li>
			<li class="fore7 dorpdown" id="ttbar-navs">
				<div class="dt cw-icon">
					<!-- <i class="ci-right"><s>◇</s></i> -->
					网站导航<i class="iconfont">&#xe605;</i>
				</div>
				<div class="dd dorpdown-layer"></div>
			</li>
			<li class="spacer"></li>
			<li class="fore8 dorpdown" id="ttbar-apps">
				<div class="dt cw-icon">
					<!-- <i class="ci-left"></i> -->
					<!-- <i class="ci-right"><s>◇</s></i> -->
					<a target="_blank" href="//app.jd.com/">手机京东</a>
				</div>
			</li>
    	</ul>
		<span class="clr"></span>
    </div>
</div>
<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>
<!--shortcut end-->
<div class="w w1 header clearfix">
	<div id="logo-2014">
		<a href="http://www.jd.com/" class="logo"></a>
		<a href="#none" class="link2"><b></b>购物车</a>
	</div>
	<div class="cart-search">
		<div class="form">
			<input id="key" type="text" class="itxt" autocomplete="off" accesskey="s">
			<input type="button" class="button" value="搜索" clstag="clickcart|keycount|xincart|cart_search" onclick="javascript:void(0);">
		</div>
	</div>
</div>
<!-- 分类购物车枚举 -->
<!-- main -->
<div id="container" class="cart" ecarddg="0"  cartAlwaysDg="0" t="0">
			<div class="w">
    <div id="chunjie" class="mb10"></div>
	<input type="hidden" id="isLogin" value="0" />
	<input id="hidebx" type="hidden" value="1">
		<div class="cart-empty">
		<div class="message">
			<ul>
							<li class="txt">
					购物车内暂时没有商品，登录后将显示您之前加入的商品
				</li>
				<li>
					<a href="#none" class="btn-1 login-btn mr10">登录</a>
										<a href="//www.jd.com/" class="ftx-05">
						去购物&gt;
					</a>
																													</li>
						</ul>
		</div>	
	</div>
</div>			<div class="w">
		<div class="m m1" id="c-tabs-new">
    <div class="mt">
        <div class="extra-l">
                        <a href="#none" class="c-item curr">猜你喜欢</a>
                    </div>
        <div class="extra-r">
        </div>
    </div>
    <div class="mc c-panel-main">
                <div class="c-panel" id="guess-products"></div>
                        <div class="c-panel" id="favorite-products"></div>
                    </div>
</div>	</div>
	<div class="w"></div>
</div>
<input id="hidebx" type="hidden" value="1">
<input type="hidden" id="isMiscdg" value="0" />
<input type="hidden" id="hideMiscls" value="0" />
<!-- /main -->

<!--service start-->
<div id="service-2017">
	<div class="w">
		<ol class="slogen">
			<li class="item fore1">
				<i>多</i>品类齐全，轻松购物
			</li>
			<li class="item fore2">
				<i>快</i>多仓直发，极速配送
			</li>
			<li class="item fore3">
				<i>好</i>正品行货，精致服务
			</li>
			<li class="item fore4">
				<i>省</i>天天低价，畅选无忧
			</li>
		</ol>
	</div>
	<div class="jd-help">
		<div class="w">
			<div class="wrap">
				<dl class="fore1">
					<dt>购物指南</dt>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-29.html">购物流程</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-151.html">会员介绍</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-297.html">生活旅行/团购</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue.html">常见问题</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-136.html">大家电</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/custom.html">联系客服</a>
					</dd>
				</dl>
				<dl class="fore2">
					<dt>配送方式</dt>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-81-100.html">上门自提</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-81.html">211限时达</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/103-983.html">配送服务查询</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/109-188.html">配送费收取标准</a>
					</dd>
					<dd>
						<a target="_blank" href="//help.joybuy.com/help/question-list-201.html">海外配送</a>
					</dd>
				</dl>
				<dl class="fore3">
					<dt>支付方式</dt>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-172.html">货到付款</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-173.html">在线支付</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-176.html">分期付款</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-174.html">邮局汇款</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-175.html">公司转账</a>
					</dd>
				</dl>
				<dl class="fore4">
					<dt>售后服务</dt>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/321-981.html">售后政策</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-132.html">价格保护</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/130-978.html">退款说明</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//myjd.jd.com/repair/repairs.action">返修/退换货</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//help.jd.com/user/issue/list-50.html">取消订单</a>
					</dd>
				</dl>
				<dl class="fore5">
					<dt>特色服务</dt>
					<dd>
						<a target="_blank" href="//1paipai.jd.com">夺宝岛</a>
					</dd>
					<dd>
						<a target="_blank" href="//help.jd.com/user/issue/list-134.html">DIY装机</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//fuwu.jd.com/">延保服务</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//o.jd.com/market/index.action">京东E卡</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//mobile.jd.com/">京东通信</a>
					</dd>
					<dd>
						<a rel="nofollow" target="_blank" href="//smart.jd.com/">京鱼座智能</a>
					</dd>
				</dl>
				<span class="clr"></span>
			</div>
		</div>
	</div>
</div>
<!--service end-->
<!--footer start-->
<div id="footer-2017" Includefile_Footer_id="1002">
	<div class="w">
		<div class="copyright_links">
			<p>
				<a href="//about.jd.com" target="_blank">关于我们</a><span class="copyright_split">|</span>
				<a href="//about.jd.com/contact/" target="_blank">联系我们</a><span class="copyright_split">|</span>
				<a href="//help.jd.com/user/custom.html" target="_blank">联系客服</a><span class="copyright_split">|</span>
				<a href="//lai.jd.com" target="_blank">合作招商</a><span class="copyright_split">|</span>
				<a href="//helpcenter.jd.com/venderportal/index.html" target="_blank">商家帮助</a><span class="copyright_split">|</span>
				<a href="//jzt.jd.com" target="_blank">营销中心</a><span class="copyright_split">|</span>
				<a href="//app.jd.com/" target="_blank">手机京东</a><span class="copyright_split">|</span>
				<a href="//club.jd.com/links.aspx" target="_blank">友情链接</a><span class="copyright_split">|</span>
				<a href="//media.jd.com/" target="_blank">销售联盟</a><span class="copyright_split">|</span>
				<a href="//pro.jd.com/mall/active/3WA2zN8wkwc9fL9TxAJXHh5Nj79u/index.html" target="_blank">京东社区</a><span class="copyright_split">|</span>
				<a href="//pro.jd.com/mall/active/3TF25tMdrnURET8Ez1cW9hzfg3Jt/index.html" target="_blank">风险监测</a><span class="copyright_split">|</span>
				<a href="//about.jd.com/privacy/" target="_blank">隐私政策</a><span class="copyright_split">|</span>
				<a href="//gongyi.jd.com" target="_blank">京东公益</a><span class="copyright_split">|</span>
				<a href="//en.jd.com/" target="_blank">English Site</a><span class="copyright_split">|</span>
				<a href="//corporate.jd.com/" target="_blank">Media & IR</a>
			</p>
		</div>
		<div class="copyright_info">
			<p>
				<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000088" target="_blank">京公网安备 11000002000088号</a><span class="copyright_split">|</span><span>京ICP证070359号</span><span class="copyright_split">|</span>
				<a href="//img30.360buyimg.com/poprx/jfs/t1/45702/1/7206/3652062/5d4d3f4fE7ea82da4/207332da28ae8230.png" target="_blank">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a><span class="copyright_split">|</span><span>新出发京零 字第大120007号</span></p>
			<p><span>互联网出版许可证编号新出网证(京)字150号</span><span class="copyright_split">|</span>
				<a href="//pro.jd.com/mall/active/3bVDLXHdwVmdQksGF8TtS7ocq1NY/index.html" target="_blank">出版物经营许可证</a><span class="copyright_split">|</span>
				<a href="//misc.360buyimg.com/wz/wlwhjyxkz.jpg" target="_blank">网络文化经营许可证京网文[2014]2148-348号</a><span class="copyright_split">|</span><span>违法和不良信息举报电话：4006561155</span></p>
			<p><span class="copyright_text">Copyright &copy; 2004 - <em id="copyright_year">2019</em>  京东JD.com 版权所有</span><span class="copyright_split">|</span><span>消费者维权热线：4006067733</span>
				<a href="//pro.jd.com/mall/active/38PitHBfR7ZopNHRSHnuuWR5AMDL/index.html" target="_blank" class="copyright_license">经营证照</a>
				<span class="copyright_split">|</span>
				<span>(京)网械平台备字(2018)第00003号</span>
				<span class="copyright_split">|</span>
				<a href="//storage.jd.com/imgtools/cbdaa22553-dccaf290-d1af-11e8-a840-89f99f5f0056.jpeg" target="_blank" class="mod_business_license">营业执照</a>
			</p>
			<p class="mod_copyright_inter">
				<a class="mod_copyright_inter_lk" href="//www.joybuy.com/?source=1&visitor_from=3" target="_blank" clstag="h|keycount|btm|btmnavi_null0501"><i class="mod_copyright_inter_ico mod_copyright_inter_ico_global"></i><span class="languagefont">&#xe901;</span></a>
				<span class="copyright_split">|</span>
				<a class="mod_copyright_inter_lk" href="//www.jd.ru/?source=1&visitor_from=3" target="_blank" clstag="h|keycount|btm|btmnavi_null0502"><i class="mod_copyright_inter_ico mod_copyright_inter_ico_rissia"></i><span class="languagefont">&#xe904;</span></a>
				<span class="copyright_split">|</span>
				<a class="mod_copyright_inter_lk" href="//www.jd.id/?source=1&visitor_from=3" target="_blank" clstag="h|keycount|btm|btmnavi_null0503"><i class="mod_copyright_inter_ico mod_copyright_inter_ico_indonesia"></i><span class="languagefont">&#xe902;</span></a>
				<span class="copyright_split">|</span>
				<a class="mod_copyright_inter_lk" href="//www.joybuy.es/?source=1&visitor_from=3" target="_blank" clstag="h|keycount|btm|btmnavi_null0504"><i class="mod_copyright_inter_ico mod_copyright_inter_ico_spain"></i><span class="languagefont">&#xe903;</span></a>
				<span class="copyright_split">|</span>
				<a class="mod_copyright_inter_lk" href="//www.jd.co.th/?source=1&visitor_from=3" target="_blank" clstag="h|keycount|btm|btmnavi_null0505"><i class="mod_copyright_inter_ico mod_copyright_inter_ico_thailand"></i><span class="languagefont">&#xe900;</span></a>
			</p>
			<p><span>京东旗下网站：</span>
				<a href="https://www.jdpay.com/" target="_blank">京东钱包</a><span class="copyright_split">|</span>
				<a href="https://www.jdcloud.com" target="_blank">京东云</a>
			</p>
		</div>
		<p class="copyright_auth">
			<script type="text/JavaScript">function CNNIC_change(eleId){var str= document.getElementById(eleId).href;var str1 =str.substring(0,(str.length-6));str1+=CNNIC_RndNum(6);
				document.getElementById(eleId).href=str1;}function CNNIC_RndNum(k){var rnd=""; for (var i=0;i
				< k;i++) rnd+=Math.floor(Math.random()*10); return rnd;};(function(){var d=new Date;document.getElementById(
				 "copyright_year").innerHTML=d.getFullYear()})();</script>
					<a id="urlknet" class="copyright_auth_ico copyright_auth_ico_2" onclick="CNNIC_change('urlknet')" oncontextmenu="return false;"
					 name="CNNIC_seal" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&ct=df&pa=294005" target="_blank">可信网站信用评估</a>
					<a class="copyright_auth_ico copyright_auth_ico_3" href="http://www.cyberpolice.cn/" target="_blank">网络警察提醒你</a>
					<a class="copyright_auth_ico copyright_auth_ico_4" href="https://search.szfw.org/cert/l/CX20120111001803001836" target="_blank">诚信网站</a>
					<a class="copyright_auth_ico copyright_auth_ico_5" href="http://www.12377.cn" target="_blank">中国互联网举报中心</a>
					<a class="copyright_auth_ico copyright_auth_ico_6" href="http://www.12377.cn/node_548446.htm" target="_blank">网络举报APP下载</a>
		</p>
	</div>
</div>
<!--footer end--><script type="text/javascript" src="js/config.js"></script>
	<script type="text/javascript" src="js/cart-recommend.js"></script>
	<script type="text/javascript" src="js/ceilinglamp.js"></script>
		<script type="text/javascript" src="js/im_cart_v1.js"></script>
				<script type="text/javascript" src="js/9fb08a8c0e0d4e3c9b583e7ed671bde4.js"></script>
	<script type="text/javascript">
    seajs.use("/js/cart.new.js?v=201801162217");
</script>
<!--统计代码 -->
<script type="text/javascript">
    (function() { 
        var ja = document.createElement('script'); 
        ja.type = 'text/javascript'; 
        ja.async = true;
        ja.src = '//wl.jd.com/wl.js';
        var s = document.getElementsByTagName('script')[0]; 
        s.parentNode.insertBefore(ja, s); 
    })();
</script>
<script src="js/td.js"></script>
<script src="js/jdwebm.js"></script>
<script language="JavaScript">
    try{
        var eid, fp;
        getJdEid(function(a,b,udfp){
            eid = a;
            fp = b;
        });
        var shfp = getFingerPrint();
    }catch(e){}
</script>
<!-- 公共头尾js end -->
<OBJECT ID="ddplugin-msie" CLASSID="CLSID:B35D742C-5983-40C1-A8C0-A7DBFA2EF05E" width="0" height="0"></OBJECT>
<embed id="ddplugin" type="application/dd-plugin" width="0" height="0">
</body>
</html>