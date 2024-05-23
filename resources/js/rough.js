// var spark1 = {
//     chart: {
//         id: 'sparkline1',
//         group: 'sparklines',
//         type: 'area',
//         height: 160,
//         sparkline: {
//             enabled: true
//         },
//     },
//     stroke: {
//         curve: 'straight'
//     },
//     fill: {
//         opacity: 1,
//     },
//     series: [{
//         name: 'Total Applications',
//         data: randomizeArray(sparklineData)
//     }],
//     labels: [...Array(24).keys()].map(n => `2018-09-0${n + 1}`),
//     yaxis: {
//         min: 0
//     },
//     xaxis: {
//         type: 'datetime',
//     },
//     colors: ['#DCE6EC'],
    
//     title: {
//         text: updateChartTitle(), // Call the function here to dynamically set the text
//         offsetX: 30,
//         style: {
//             fontSize: '24px',
//             cssClass: 'apexcharts-yaxis-title'
//         }
//     },
//     subtitle: {
//         text: 'Total Applications',
//         offsetX: 30,
//         style: {
//             fontSize: '14px',
//             cssClass: 'apexcharts-yaxis-title'
//         }
//     }
// };

// // Function to update chart title with total job applications
// function updateChartTitle() {
//     var totalApplications = ''; // Initialize with empty string
//     $.ajax({
//         url: '/total-job-applications',
//         method: 'GET',
//         async: false, // Ensure synchronous execution
//         success: function(response) {
//             totalApplications = '' + response.totalApplications;
//         },
//         error: function(xhr, status, error) {
//             console.error(xhr.responseText);
//         }
//     });
//     return totalApplications; // Return the total applications
// }