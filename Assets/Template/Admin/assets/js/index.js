document.addEventListener('DOMContentLoaded', function () {


	var script = document.createElement('script');
	script.src = '../Assets/JQ/jQuery.js';
	script.type = 'text/javascript';
	document.getElementsByTagName('head')[0].appendChild(script);

	// Wait for jQuery to load
	script.onload = function () {
		$(document).ready(function () {
			"use strict";


			// chart 1
			// Make an AJAX request to fetch the JSON data
			$.ajax({
				url: "../Assets/AjaxPages/AjaxFishChart.php",
				success: function (jsonResult) {
					// Parse the JSON data
					var data = JSON.parse(jsonResult);

					var ctx = document.getElementById("chart2").getContext('2d');


					function generateRandomColors(numColors) {
						const colors = [];
						for (let i = 0; i < numColors; i++) {
							const color = `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 1)`;
							colors.push(color);
						}
						return colors;
					}

					new Chart(ctx, {
						type: 'pie',
						data: {
							labels: data.subcategories, // Use the subcategories from the JSON data
							datasets: [{
								backgroundColor: generateRandomColors(data.subcategories.length), // Generate colors dynamically
								data: data.quantities, // Use the quantities from the JSON data
								borderWidth: 0
							}]
						},
						options: {
							maintainAspectRatio: true,
							legend: {
								position: "bottom",
								display: true,
								labels: {
									fontColor: '#ddd',
									boxWidth: 15
								}
							},
							tooltips: {
								displayColors: true
							}
						}
					});



					var ctx = document.getElementById('chart1').getContext('2d');


					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
							datasets: [{
								label: 'Users',
								data: data.currentUserCounts,
								backgroundColor: '#fff',
								fill: false,
								borderColor: '#fff',
								tension: 0.1
							}]
						},




						options: {
							maintainAspectRatio: true,
							legend: {
								display: true,
								labels: {
									fontColor: '#fff',
									boxWidth: 40
								}
							},
							tooltips: {
								displayColors: true
							},
							scales: {
								xAxes: [{
									ticks: {
										beginAtZero: true,
										fontColor: '#ddd'
									},
									gridLines: {
										display: true,
										color: "rgba(221, 221, 221, 0.08)"
									},
								}],
								yAxes: [{
									ticks: {
										beginAtZero: true,
										fontColor: '#ddd'
									},
									gridLines: {
										display: true,
										color: "rgba(221, 221, 221, 0.08)"
									},
								}]
							}

						}
					});

					function getRandomColor() {
						var letters = '0123456789ABCDEF';
						var color = '#';
						for (var i = 0; i < 6; i++) {
							color += letters[Math.floor(Math.random() * 16)];
						}
						return color;
					}

					var barColors = data.dataArrayBarLength.map(function () {
						return getRandomColor();
					});

					var ctx = document.getElementById('barChart').getContext('2d');

					var barChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: data.dataArrayBar, // Define your bar labels
							datasets: [
								{
									label: 'Bar Chart Data',
									data: data.dataArrayBarLength, // Use the mock data array here
									backgroundColor: barColors, // Use the generated random colors
									borderColor: 'rgba(75, 192, 192, 1)', // Specify the bar border color
									borderWidth: 1, // Specify the bar border width
								},
							],
						},
						options: {
							maintainAspectRatio: false,
							legend: {
								display: false,
								labels: {
									fontColor: '#ddd',
									boxWidth: 40,
								},
							},
							tooltips: {
								displayColors: true,
							},
							scales: {
								xAxes: [
									{
										ticks: {
											beginAtZero: false,
											fontColor: '#ddd',
										},
										gridLines: {
											display: false,
											color: 'rgba(221, 221, 221, 0.08)',
										},
									},
								],
								yAxes: [
									{
										ticks: {
											beginAtZero: true,
											fontColor: '#ddd',
										},
										gridLines: {
											display: true,
											color: 'rgba(221, 221, 221, 0.08)',
										},
									},
								],
							},
						},
					});


				}
			});





		});
	};
})
