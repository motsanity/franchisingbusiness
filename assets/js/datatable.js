(function($){
    $('#sales-data-table').DataTable({
		order: [[0, "desc"]],
		
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });
    $('#items-data-table').DataTable({
		order: [[0, "desc"]],
		
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });
    $('#index-data-table').DataTable({
		order: [[0, "desc"]],
        lengthMenu: [[5], ["All"]],
		
		columnDefs: [
			{
				className: "dt-nowrap"
			}
		]
    });
})(jQuery)