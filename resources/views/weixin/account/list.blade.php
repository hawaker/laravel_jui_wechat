<form id="pagerForm" method="post" action="demo_page1.html">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
</form>
<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="demo_page1.html" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>我的客户：<input type="text" name="keyword" /></td>
				<td>
					<select class="combox" name="province">
						<option value="">所有省市</option><option value="北京">北京</option><option value="上海">上海</option><option value="天津">天津</option>
					</select>
				</td>
				<td>建档日期：<input type="text" class="date" readonly="true" /></td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				<li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
			</ul>
		</div>
	</div>
</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="weixin/account/create" target="navTab"><span>添加公众号</span></a></li>
			<li><a class="delete" href="demo/common/ajaxDone.html?uid={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="demo_page4.html?uid={sid_user}" target="navTab"><span>编辑</span></a></li>
			<li class="line">line</li>
			<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th>序列号</th><th>名称</th><th>微信号</th><th>类型</th><th>原始ID</th><th>APPID</th><th>Token(令牌)</th><th>EncodingAESKey</th><th>创建日期</th>
			</tr>
		</thead>
		<tbody>
      @foreach($accounts as $account)
			<tr target="account_id" rel="{{$account['id']}}">
				<td>{{$account['id']}}</td>
				<td>{{$account['name']}}</td>
				<td>{{$account['nameid']}}</td>
				<td>{{$account['type']}}</td>
				<td>{{$account['originid']}}</td>
				<td>{{$account['appid']}}</td>
				<td>{{$account['token']}}</td>
				<td>{{$account['EncodingAESKey']}}</td>
				<td>{{$account['created_at']}}</td>
			</tr>
      @endforeach
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
        <option value="20">20</option><option value="50">50</option><option value="100">100</option><option value="200">200</option>
			</select>
			<span>条，共{{$total}}条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="{{$total}}" numPerPage="20" pageNumShown="10" currentPage="1"></div>
	</div>
</div>