var DatatablesBasicScrollable = function() {

	var initTable1 = function() {
		var table = $('#m_table_1');

		// begin first table
		table.DataTable({
			scrollY: '50vh',
			scrollX: true,
			scrollCollapse: true,
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        `;
					},
				},
				{
					targets: 8,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Pending', 'class': 'm-badge--brand'},
							2: {'title': 'Delivered', 'class': ' m-badge--metal'},
							3: {'title': 'Canceled', 'class': ' m-badge--primary'},
							4: {'title': 'Success', 'class': ' m-badge--success'},
							5: {'title': 'Info', 'class': ' m-badge--info'},
							6: {'title': 'Danger', 'class': ' m-badge--danger'},
							7: {'title': 'Warning', 'class': ' m-badge--warning'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="m-badge ' + status[data].class + ' m-badge--wide">' + status[data].title + '</span>';
					},
				},
				{
					targets: 9,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Online', 'state': 'danger'},
							2: {'title': 'Retail', 'state': 'primary'},
							3: {'title': 'Direct', 'state': 'accent'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="m-badge m-badge--' + status[data].state + ' m-badge--dot"></span>&nbsp;' +
							'<span class="m--font-bold m--font-' + status[data].state + '">' + status[data].title + '</span>';
					},
				},
			],
		});
	};

	var initTable2 = function() {
		var table = $('#m_table_2');

		// begin second table
		table.DataTable({
			scrollY: '50vh',
			scrollX: true,
			scrollCollapse: true,
			createdRow: function(row, data, index) {
				var status = {
					1: {'title': 'Pending', 'class': 'm-badge--brand'},
					2: {'title': 'Delivered', 'class': ' m-badge--metal'},
					3: {'title': 'Canceled', 'class': ' m-badge--primary'},
					4: {'title': 'Success', 'class': ' m-badge--success'},
					5: {'title': 'Info', 'class': ' m-badge--info'},
					6: {'title': 'Danger', 'class': ' m-badge--danger'},
					7: {'title': 'Warning', 'class': ' m-badge--warning'},
				};
				var badge = '<span class="m-badge ' + status[data[18]].class + ' m-badge--wide">' + status[data[18]].title + '</span>';
				row.getElementsByTagName('td')[18].innerHTML = badge;

				status = {
					1: {'title': 'Online', 'state': 'danger'},
					2: {'title': 'Retail', 'state': 'primary'},
					3: {'title': 'Direct', 'state': 'accent'},
				};
				badge = '<span class="m-badge m-badge--' + status[data[19]].state + ' m-badge--dot"></span>&nbsp;' +
					'<span class="m--font-bold m--font-' + status[data[19]].state + '">' + status[data[19]].title + '</span>';
				row.getElementsByTagName('td')[19].innerHTML = badge;
			},
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        `;
					},
				}],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
			initTable2();
		},

	};

}();

jQuery(document).ready(function() {
	DatatablesBasicScrollable.init();
});