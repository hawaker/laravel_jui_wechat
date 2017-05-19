<h2 class="contentTitle">添加/编辑 微信公众号信息</h2>
<div class="pageContent">
	<form method="post" action="weixin/account/create.html" class="pageForm required-validate" onsubmit="return validateCallback(this)">
		<div class="pageFormContent nowrap" layoutH="97">
			<dl><dt>名称</dt><dd><input type="text" name="name" maxlength="20" class="required" /></dd></dl>
			<dl><dt>微信号</dt><dd><input type="text" name="nameid" class="required" /></dd></dl>
			<dl><dt>类型</dt><dd><input type="text" name="type" class="required" /></dd></dl>
			<dl><dt>原始ID</dt><dd><input type="text" name="originid" class="required" /></dd></dl>
			<dl><dt>AppID</dt><dd><input type="text" name="appid" class="required" /></dd></dl>
			<dl><dt>AppSecret</dt><dd><input type="text" name="secret" class="required" /></dd></dl>
			<dl><dt>Token(令牌)</dt><dd><input type="text" name="token" class="required" /></dd></dl>
			<dl><dt>EncodingAESKey</dt><dd><input type="text" name="EncodingAESKey" /></dd></dl>			
			<div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div>
			<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
			<div class="divider"></div>
      <p>提示信息</p>
		</div>
  </form>
</div>
<script type="text/javascript">
function customvalidXxx(element){
	if ($(element).val() == "xxx") return false;
	return true;
}
</script>
