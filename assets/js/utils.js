function applyScrollBody(tableName) {
	$("#" + tableName)
			.wrap(
					"<div class='dataTables_scrollBody' style='overflow: auto; width: 100%;'>");
}

function requestAjax(method, url, data, callback){
	$.ajax({
	    type: method,
	    dataType: "json",
	    url  : url,
	    data: data,
	    success : function(data) {
	        callback(data);
	    },
	    error: function(error, x, y)
	    {
	        console.log(error);
	    }
	});
}