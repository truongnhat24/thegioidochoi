var Search = {
	GLOBAL: {},

	CONSTS: {},

	SELECTORS: {
		search: 		".content .card .search-user",
        search_btn:     ".search-btn",
        search_input:   ".search-input",
        filter_btn:     ".filter-btn",
	},

	init: function () {
		Search.search();
	},

	search: function () {
		$(Search.SELECTORS.search).on("click", Search.SELECTORS.search_btn, function (event) {
			event.stopPropagation();
			tc = $(this);
			url = tc.attr("alt");

			$.ajax({
				url: url,
				type: "GET",
				data: {
					content: $(Search.SELECTORS.search_input).val(),
				},
				dataType: "json",
			})
			.done(function (data) {
				
			})

			.fail(function (xhr, status, errorThrown) {
				alert("Sorry, there was a problem!");
				console.log("Error: " + errorThrown);
				console.log("Status: " + status);
				console.dir(xhr);
			});
			return false;
		});
	},

	alt: function (id) {
		return `[alt = "${id}"]`;
	}
};

$(document).ready(function () {
	Search.init();
});
