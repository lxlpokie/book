<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<link href="/book/Public/install/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function agree()
{
	if (document.getElementById('btn_license').checked)
	{
		document.getElementById('submit').disabled=false;
		document.getElementById('submit').className='btn';	
	}
	else
	{
		document.getElementById('submit').disabled='disabled';	
		document.getElementById('submit').className='btnGray';	
	}
}
</script>
</head>
<body>
<div id="wrapper">
	<div class="logo"><a href="#" target="_blank"><img src="/book/Public/install/logo.png" alt="YGBOOK" title="YGBOOK" /></a></div>
	<div class="license">
		<ul>
			<textarea name="request" cols="90" rows="15" readonly="readonly">
感谢您选择YGBOOK小说内容管理系统（以下简称YGBOOK），YGBOOK提供一个轻量级小说网站解决方案，基于 ThinkPHP + MySQL 的技术开发。

为了使您正确并合法的使用本软件，请您在使用前务必阅读清楚下面的协议条款： 
一、本授权协议适用且仅适用于 YGBOOK 1.x.x 版本，开发团队对本授权协议拥有最终解释权。

二、协议许可的权利
1.您在购买商业授权之前，无权使用本产品，且不得有破解传播等行为。
2.您购买商业授权之后，即为商业用户，可以在协议规定的约束和限制范围内修改 YGBOOK 界面风格以适应您的网站要求。
3.您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。
4.自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。

三、协议规定的约束和限制
1.未获商业授权之前，不得使用YGBOOK进行建站、传播、破解等行为。
2.未经官方许可，禁止在 YGBOOK 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。
3.如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。

四、有限担保和免责声明
1.本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。
2.用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。
3.电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装YGBOOK，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
4.如果本软件带有其它软件的整合API示范例子包，这些文件版权不属于本软件官方，并且这些文件是没经过授权发布的，请参考相关软件的使用许可合法的使用。
			</textarea>
			<div class="agree">
				<label>
					<input name="confirm" type="checkbox" onclick="agree();" align="absMiddle" id="btn_license"/>
					<b>同意协议</b>
				</label>
			</div>
		</ul>
		<p class="action">
			<input type="button" class="btnGray" name="submit" value="继续" disabled="disabled" id="submit" onclick="location.href='<?php echo U('index/check');?>'"/>
			<input type="button" class="btn fr" value="购买授权" onclick=""/>
		</p>
	</div>
</div>
</body>
</html>