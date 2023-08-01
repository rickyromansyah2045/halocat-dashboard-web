<script>
    $(function(){
        $.ajax({
            url: "<?= $_ENV['API_URL']; ?>/admin/dashboard/statistics",
            type: 'GET',
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
            },
            success: function(response) {
                if (response.success) {
                    let data = response.data;
                    $('#statistics-campaigns').html(`
                        Total: <b>${data.total_donation}</b><br>
                        Running: <b>${data.total_donation - data.donation_completed}</b><br>
                        Completed: <b>${data.donation_completed}</b>
                    `);

                    // $('#statistics-transactions').html(`
                    //     Total: <b>${data.total_transaction}</b><br>
                    //     Success: <b>${data.total_transaction_success}</b><br>
                    //     Another Status: <b>${data.total_transaction - data.total_transaction_success}</b>
                    // `);

                    // $('#statistics-withdrawal_requests').html(`
                    //     Total: <b>${data.total_withdrawal_requests}</b><br>
                    //     Pending: <b>${data.total_withdrawal_requests - data.total_withdrawal_requestes_processed}</b><br>
                    //     Processed: <b>${data.total_withdrawal_requestes_processed}</b>
                    // `);

                    $('#statistics-user_registered').html(`
                        Total: <b>${data.user_registered}</b><br>
                        User Role: <b>${data.user_registered - data.user_admin_registered}</b><br>
                        Admin Role: <b>${data.user_admin_registered}</b>
                    `);
                }
            },
            error: function(xhr, error, code) {
                console.log(xhr, error, code);
            }
        });

        // function generateChartData(name) {
        //     let responseGenerateChartData = {
        //         content: "[0,0,0,0,0,0,0,0,0,0]",
        //         date: "-",
        //         time: "-"
        //     };

        //     $.ajax({
        //         url: `<?= $_ENV['API_URL']; ?>/admin/dashboard/chart?chart=${name}`,
        //         type: 'GET',
        //         async: false,
        //         beforeSend: function(xhr) {
        //             xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
        //         },
        //         success: function(response) {
        //             if (response.success) {
        //                 let data = response.data;
        //                 let dateTime = moment(data?.created_at.Time).format('DD MMMM YYYY||HH:MM:SS').split("||");
        //                 let date = dateTime[0];
        //                 let time = dateTime[1];

        //                 responseGenerateChartData.content = data.content;
        //                 responseGenerateChartData.date = date;
        //                 responseGenerateChartData.time = time;
        //             } else {
        //                 Swal.fire({
        //                     icon: 'error',
        //                     text: response.error
        //                 });
        //             }
        //         },
        //         error: function(xhr, error, code) {
        //             Swal.fire({
        //                 icon: 'error',
        //                 text: xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
        //             });
        //         },
        //         complete: function() {}
        //     });

        //     return responseGenerateChartData;
        // }

        // let chartDataWebsiteActivity = generateChartData("website_activity");
        // let chartDataNewUserRegistration = generateChartData("new_user_registration");

        // let chartWebsiteActivity = new Chart(document.getElementById("chartWebsiteActivity"), {
        //     type: "bar",
        //     data: {
        //         labels: [
        //             "Jan",
        //             "Feb",
        //             "Mar",
        //             "Apr",
        //             "May",
        //             "Jun",
        //             "Jul",
        //             "Aug",
        //             "Sep",
        //             "Oct",
        //             "Nov",
        //             "Dec"
        //         ],
        //         datasets: [{
        //             label: "Website Activity",
        //             backgroundColor: "rgba(0, 97, 242, 1)",
        //             hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
        //             borderColor: "#4e73df",
        //             data: JSON.parse(chartDataWebsiteActivity.content),
        //             maxBarThickness: 25
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         layout: {
        //             padding: {
        //                 left: 10,
        //                 right: 25,
        //                 top: 25,
        //                 bottom: 0
        //             }
        //         },
        //         scales: {
        //             xAxes: [{
        //                 time: {
        //                     unit: "month"
        //                 },
        //                 gridLines: {
        //                     display: false,
        //                     drawBorder: false
        //                 }
        //             }],
        //             yAxes: [{
        //                 ticks: {
        //                     min: 0,
        //                     padding: 5,
        //                     precision: 0,
        //                     callback: function(value, index, values) {
        //                         return value;
        //                     }
        //                 },
        //                 gridLines: {
        //                     color: "rgb(234, 236, 244)",
        //                     zeroLineColor: "rgb(234, 236, 244)",
        //                     drawBorder: false,
        //                     borderDash: [2],
        //                     zeroLineBorderDash: [2]
        //                 }
        //             }]
        //         },
        //         legend: {
        //             display: false
        //         },
        //         tooltips: {
        //             titleMarginBottom: 10,
        //             titleFontColor: "#6e707e",
        //             titleFontSize: 14,
        //             backgroundColor: "rgb(255,255,255)",
        //             bodyFontColor: "#858796",
        //             borderColor: "#dddfeb",
        //             borderWidth: 1,
        //             xPadding: 15,
        //             yPadding: 15,
        //             displayColors: false,
        //             caretPadding: 10,
        //             callbacks: {
        //                 label: function(tooltipItem, chart) {
        //                     let datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || "";
        //                     return `${datasetLabel}: ${tooltipItem.yLabel}`;
        //                 }
        //             }
        //         }
        //     }
        // });

        // $("#chartWebsiteActivity-date").html(chartDataWebsiteActivity.date);
        // $("#chartWebsiteActivity-time").html(chartDataWebsiteActivity.time);

        // let chartNewUserRegistration = new Chart(document.getElementById("chartNewUserRegistration"), {
        //     type: "bar",
        //     data: {
        //         labels: [
        //             "Jan",
        //             "Feb",
        //             "Mar",
        //             "Apr",
        //             "May",
        //             "Jun",
        //             "Jul",
        //             "Aug",
        //             "Sep",
        //             "Oct",
        //             "Nov",
        //             "Dec"
        //         ],
        //         datasets: [{
        //             label: "New User Registration",
        //             backgroundColor: "rgba(0, 97, 242, 1)",
        //             hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
        //             borderColor: "#4e73df",
        //             data: JSON.parse(chartDataNewUserRegistration.content),
        //             maxBarThickness: 25
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         layout: {
        //             padding: {
        //                 left: 10,
        //                 right: 25,
        //                 top: 25,
        //                 bottom: 0
        //             }
        //         },
        //         scales: {
        //             xAxes: [{
        //                 time: {
        //                     unit: "month"
        //                 },
        //                 gridLines: {
        //                     display: false,
        //                     drawBorder: false
        //                 }
        //             }],
        //             yAxes: [{
        //                 ticks: {
        //                     min: 0,
        //                     padding: 5,
        //                     precision: 0,
        //                     callback: function(value, index, values) {
        //                         return value;
        //                     }
        //                 },
        //                 gridLines: {
        //                     color: "rgb(234, 236, 244)",
        //                     zeroLineColor: "rgb(234, 236, 244)",
        //                     drawBorder: false,
        //                     borderDash: [2],
        //                     zeroLineBorderDash: [2]
        //                 }
        //             }]
        //         },
        //         legend: {
        //             display: false
        //         },
        //         tooltips: {
        //             titleMarginBottom: 10,
        //             titleFontColor: "#6e707e",
        //             titleFontSize: 14,
        //             backgroundColor: "rgb(255,255,255)",
        //             bodyFontColor: "#858796",
        //             borderColor: "#dddfeb",
        //             borderWidth: 1,
        //             xPadding: 15,
        //             yPadding: 15,
        //             displayColors: false,
        //             caretPadding: 10,
        //             callbacks: {
        //                 label: function(tooltipItem, chart) {
        //                     let datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || "";
        //                     return `${datasetLabel}: ${tooltipItem.yLabel}`;
        //                 }
        //             }
        //         }
        //     }
        // });

        // $("#chartNewUserRegistration-date").html(chartDataNewUserRegistration.date);
        // $("#chartNewUserRegistration-time").html(chartDataNewUserRegistration.time);


        $.ajax({
            error: function(xhr, error, code) {
                Swal.fire({
                    icon: 'error',
                    text: xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
                });
            },
            complete: function() {
                $("#loading-text").hide();
                $("#dashboard-summary").fadeIn();
            }
        });
    });
</script>