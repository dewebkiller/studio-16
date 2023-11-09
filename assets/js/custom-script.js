// Calender Script
$(function() {
	$("#ArrivalDate2").datepicker("hide");
	$("#DepartureDate2").datepicker("hide");
	var weekday = new Array(7);
	weekday[0] =  "Sunday";
	weekday[1] = "Monday";
	weekday[2] = "Tuesday";
	weekday[3] = "Wednesday";
	weekday[4] = "Thursday";
	weekday[5] = "Friday";
	weekday[6] = "Saturday";
	
	var month = new Array();
	month[0] = "January";
	month[1] = "Febraury";
	month[2] = "March";
	month[3] = "Aprail";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";
	//var n = month[d.getMonth()];
	$("#ArrivalDate2").datepicker({
		'minDate' : 0,
		
		yearRange:'2019:2022',
		showAnim: 'fade',
		showButtonPanel: false,
		closeText : "Close",
		
		onSelect : function(dateStr) {
			var depart = $.datepicker.parseDate("dd MM, yy", dateStr);
			depart.setDate(depart.getDate() + 1);
			$("#DepartureDate2").datepicker('setDate', depart);
			
			var checkinStr = new Date(dateStr);
		//	alert (weekday[checkinStr.getDay()]);
			$("#ci-date").html(checkinStr.getDate());
			$("#ci-day").html(checkinStr.getFullYear());
			$("#ci-month").html(month[checkinStr.getMonth()]);
			$("#ci-day-name").html(weekday[checkinStr.getDay()]);
			var checkoutStr = new Date(depart);
			$("#co-date").html(checkoutStr.getDate());
			$("#co-day").html(checkoutStr.getFullYear());
			$("#co-month").html(month[checkoutStr.getMonth()]);
			//$("#DepartureDate").datepicker("option", "minDate", depart);
			$("#checkin2").val(change_date(dateStr));
			$("#checkout2").val(change_date(depart));
		}
	});
	$("#DepartureDate2").datepicker({
		'minDate' : 0,
		yearRange:'2019:2020',
		showAnim: 'fade',
		showButtonPanel: false,
		closeText : "Close",
		onSelect : function(selectedDate) {
			var checkoutStr = new Date(selectedDate);
			$("#co-date").html(checkoutStr.getDate());
			$("#co-day").html(weekday[checkoutStr.getYear()]);
			$("#co-month").html(month[checkoutStr.getMonth()]);
			//$("#ArrivalDate").datepicker("option", "maxDate", selectedDate);
			$("#checkout2").val(change_date(selectedDate));
		}
	});
	$( "#DepartureDate2" ).datepicker( "option", "dateFormat", "dd MM, yy");
    $( "#ArrivalDate2" ).datepicker( "option", "dateFormat", "dd MM, yy");
	$(".new-check-out").click(function(){ $("#DepartureDate2").datepicker("show"); });
    $(".new-check-in").click(function(){ $("#ArrivalDate2").datepicker("show"); }); 
});

function change_date(dateStr) {
	var newDateStr = new Date(dateStr);
	return newDateStr.getDate() + "-" + (newDateStr.getMonth() + 1) + "-" + newDateStr.getFullYear();
}

