"use strict";
// document ready event listener
$(document).ready(function() {
	//retrieving "team" (section and section leader) data from json file
	$.getJSON("http://localhost:8081/api/teams", function(data) {
		if (data.length == 0) {
			$("#noSectionMsg").css("display", "block");
		}
		//loop to populate drop down options
		for (let i = 0; i < data.length; i++) {
			$("#sectionDropDown").append(`<option value='${data[i].TeamId}'>${data[i].TeamName}</option>`);
			$("#managerDropDown").append(`<option value='${data[i].TeamId}'>${data[i].ManagerName}</option>`);
			createHtml(data[i], i);
		}
	});
	//retrieving "league"(instrument family) data from json file
	$.getJSON("http://localhost:8081/api/leagues", function(data) {
		//loop to populate drop down options
		for (let i = 0; i < data.length; i++) {
			$("#leagueDropDown").append(`<option value='${data[i].Code}'>${data[i].Name}</option>`);
		}
	});

	// call to leagues api to pull teams matching drop down selection
	$("#leagueDropDown").on("change", function() {
		$("#sectionCardDiv").empty();
		if ($("#leagueDropDown").val() != "-1") {
			$.getJSON("http://localhost:8081/api/teams/byleague/" + $("#leagueDropDown").val(), function(data) {
				for (let i = 0; i < data.length; i++) {
					createHtml(data[i], i);
				}
			});
		}
	});

	// call to teams api to pull teams matching drop down selection
	$("#sectionDropDown").on("change", function() {
		$("#sectionCardDiv").empty();
		callGetTeams($("#sectionDropDown"), "http://localhost:8081/api/teams/");
	});

	// call to teams api to pull teams matching drop down selection
	$("#managerDropDown").on("change", function() {
		$("#sectionCardDiv").empty();
		callGetTeams($("#managerDropDown"));
	});
});

function callGetTeams(dropDownField) {
	if (dropDownField.val() != "-1") {
		$.getJSON("http://localhost:8081/api/teams/" + dropDownField.val(), function(data) {
			createHtml(data, dropDownField.val());
		});
	}
}
function createHtml(section, i) {
	//appending section cards to card div
	$("#sectionCardDiv").append(
		$("<div />")
			.addClass("card col-12 col-md-6 col-xl-3 float-left m-4 .d-flex")
			.attr("id", `cardId${[i]}`)
	);

	//appending image to card
	$(`#cardId${[i]}`).append(
		$("<img />")
			.addClass("card-img-top cardImages")
			.attr({ src: section.Picture, alt: "Marching Band Member" })
	);
	// code for src attr once pictures are found src: section.Picture
	//appending card body to card
	$(`#cardId${[i]}`).append(
		$("<div />")
			.addClass("card-header")
			.attr("id", `cardHeadingDiv${[i]}`)
	);

	//appending header to title div
	$(`#cardHeadingDiv${[i]}`).append(
		$("<h2 />")
			.addClass("card-title")
			.attr("id", `cardHeading${[i]}`)
			.html(section.TeamName)
	);

	//appending header to title div
	$(`#cardId${[i]}`).append(
		$("<div />")
			.addClass("list-group")
			.attr("id", `list-groupId${[i]}`)
	);

	//appending header to title div
	$(`#list-groupId${[i]}`).append(
		$("<p />")
			.addClass("font-weight-bold")
			.html("Section Leader:")
	);
	$(`#list-groupId${[i]}`).append($("<p />").html(section.ManagerName));

	//appending header to title div
	$(`#cardId${[i]}`).append(
		$("<div />")
			.addClass("card-body text-center")
			.attr("id", `cardBtnDiv${[i]}`)
	);

	let btnHref = encodeURI(
		"team_details.php?id=" + section.TeamId + "&name=" + section.TeamName + "&code=" + section.League
	);
	//appending header to title div
	$(`#cardBtnDiv${[i]}`).append(
		$("<a />")
			.addClass("btn btn-sm btn-info col-9 cardBodyText mx-2")
			.attr("href", btnHref)
			.html("Manage Section")
	);
}
