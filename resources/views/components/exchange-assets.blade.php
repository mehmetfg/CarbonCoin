@push("js")
    <!-- Plugins JS start-->

    <script src="../assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/chart-widget.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script>
        var options = {
            series: [
                {
                    name: "High",
                    data: {!! $assetUsdt->pluck("balance") !!}
                },
            ],
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#f73164'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Ortalama USDT Miktarı',
                align: 'left'
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: {!! $assetUsdt->pluck("created_at") !!},
                title: {
                    text: 'Saatler'
                },
                labels: {
                    formatter: function (value, timestamp) {
                        var dateTime=new Date(value);
                        var newDateTime = dateTime.getDate()+'.'+dateTime.getMonth()+'.'+dateTime.getFullYear()+'  '+dateTime.getHours()+':'+dateTime.getMinutes();
                        return newDateTime// The formatter function overrides format property
                    },
                }
            },
            yaxis: {
                title: {
                    text: 'USDT Miktarı'
                },
                min: {!! $assetUsdt->pluck("balance")->min()- 1000 !!},
                max: {!! $assetUsdt->pluck("balance")->max() + 1000 !!},
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        var chart = new ApexCharts(document.querySelector("#linechart1"), options);
        chart.render();
        var options1 = {
            series: [
                {
                    name: "High",
                    data: {!! $assetCyce->pluck("balance") !!}
                },
            ],
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Ortalama CYCE Miktarı',
                align: 'left'
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: {!! $assetCyce->pluck("created_at") !!},
                title: {
                    text: 'Saatler'
                },
                labels: {
                    formatter: function (value, timestamp) {
                        var dateTime=new Date(value);
                        var newDateTime = dateTime.getDate()+'.'+dateTime.getMonth()+'.'+dateTime.getFullYear()+'  '+dateTime.getHours()+':'+dateTime.getMinutes();
                        return newDateTime// The formatter function overrides format property
                    },
                }
            },
            yaxis: {
                title: {
                    text: 'CYCE Miktarı'
                },
                min: {!! $assetCyce->pluck("balance")->min() - 10000 !!},
                max: {!! $assetCyce->pluck("balance")->max() + 10000 !!},
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        var chart1 = new ApexCharts(document.querySelector("#linechart2"), options1);
        chart1.render();
    </script>
    <!-- Plugins JS Ends-->
@endpush
