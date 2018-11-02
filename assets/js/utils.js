function applyScrollBody(tableName) {
	$("#" + tableName)
			.wrap(
					"<div class='dataTables_scrollBody' style='overflow: auto; width: 100%;'>");
}