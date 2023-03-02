<script>
    $(function(){
        $.ajax({
            url: `<?= $_ENV['API_URL']; ?>/campaigns/exclusive/user`,
            type: 'GET',
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
            },
            success: function(response) {
                if (response.success) {
                    let data = response.data;
                    if (data.length > 0) {
                        $('#reward-notification').append("<hr>");
                        $('#reward-notification').append("<h4>Reward Notification From Exclusive Campaign:</h4>");
                        $('#reward-notification').append(`<ul class="mb-0">`);

                        for (let i = 0; i < data.length; i++) {
                            let rewardStatus = "pending or on processing";
                            let reward = "";

                            if (data[i].is_paid_off) {
                                rewardStatus = "paid off";
                            }

                            if (data[i].is_reward_money) {
                                reward = `${formatRupiah(data[i].reward)}`;
                            } else {
                                reward = data[i].reward;
                            }

                            $('#reward-notification').append(`<li>
                                Congrats! you are the chosen (winner) to get the rewards from the exclusive campaign.
                                <ul class="mb-0">
                                    <li>Link campaign: <a href="<?= site_url('donate'); ?>/${data[i].campaign_id}">click this for go to the campaign link</a>.</li>
                                    <li>Reward: <b>${reward}</b>.</li>
                                    <li>Reward status: <b>${rewardStatus}</b>.</li>
                                </ul>
                            </li>`);
                        }

                        $('#reward-notification').append(`</ul>`);
                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: response.error
                    });
                }
            },
            error: function(xhr, error, code) {
                Swal.fire({
                    icon: 'error',
                    text: xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
                });
            },
            complete: function() {}
        });

        function generateChartData(name) {
            let responseGenerateChartData = {
                content: "[0,0,0,0,0,0,0,0,0,0]",
                date: "-",
                time: "-"
            };

            $.ajax({
                url: `<?= $_ENV['API_URL']; ?>/admin/dashboard/chart?chart=${name}`,
                type: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                },
                success: function(response) {
                    if (response.success) {
                        let data = response.data;
                        let dateTime = moment(data?.created_at.Time).format('DD MMMM YYYY||HH:MM:SS').split("||");
                        let date = dateTime[0];
                        let time = dateTime[1];

                        responseGenerateChartData.content = data.content;
                        responseGenerateChartData.date = date;
                        responseGenerateChartData.time = time;
                    } else {
                        Swal.fire({
                            icon: 'error',
                            text: response.error
                        });
                    }
                },
                error: function(xhr, error, code) {
                    Swal.fire({
                        icon: 'error',
                        text: xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
                    });
                },
                complete: function() {}
            });

            return responseGenerateChartData;
        }

        let chartDataWebsiteActivity = generateChartData("website_activity");
        let chartDataTransactions = generateChartData("transactions");
        let chartDataCashFlowIncome = generateChartData("cash_flow_income");
        let chartDataCashFlowExpanse = generateChartData("cash_flow_expanse");
        let chartDataNewUserRegistration = generateChartData("new_user_registration");

        let chartWebsiteActivity = new Chart(document.getElementById("chartWebsiteActivity"), {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec"
                ],
                datasets: [{
                    label: "Website Activity",
                    backgroundColor: "rgba(0, 97, 242, 1)",
                    hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
                    borderColor: "#4e73df",
                    data: JSON.parse(chartDataWebsiteActivity.content),
                    maxBarThickness: 25
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "month"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            padding: 5,
                            callback: function(value, index, values) {
                                return value;
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || "";
                            return `${datasetLabel}: ${tooltipItem.yLabel}`;
                        }
                    }
                }
            }
        });

        $("#chartWebsiteActivity-date").html(chartDataWebsiteActivity.date);
        $("#chartWebsiteActivity-time").html(chartDataWebsiteActivity.time);

        let chartTransactions = new Chart(document.getElementById("chartTransactions"), {
            type: "line",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec"
                ],
                datasets: [{
                    label: "Transaction Activity",
                    lineTension: 0.3,
                    backgroundColor: "rgba(0, 97, 242, 0.05)",
                    borderColor: "rgba(0, 97, 242, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointBorderColor: "rgba(0, 97, 242, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: JSON.parse(chartDataTransactions.content)
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "date"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            padding: 5,
                            callback: function(value, index, values) {
                                return value;
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: "index",
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || "";
                            return `${datasetLabel}: ${tooltipItem.yLabel}`;
                        }
                    }
                }
            }
        });

        $("#chartTransactions-date").html(chartDataTransactions.date);
        $("#chartTransactions-time").html(chartDataTransactions.time);
    });
</script>