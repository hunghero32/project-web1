<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="index.php?act=account">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng Số Tài Khoản</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $totalUsers ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-users-line" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="index.php?act=listrecr">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng số bài tuyển</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $totalRecr ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-file-contract" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng Số Hồ Sơ Đã Nộp</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $info ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="bar-chart" class="chart-canvas" height="220"></canvas>
                        </div>
                    </div>
                    <h6 class="ms-2 mt-4 mb-0"> Thông tin </h6>
                    <div class="container border-radius-lg">
                        <div class="row">
                            <div class="col-5 py-3 ps-0">
                                <div class="d-flex mb-2">
                                    <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs mt-1 mb-0 font-weight-bold">Doanh Nghiệp</p>
                                </div>
                                <h4 class="font-weight-bolder"><?= $corp ?></h4>
                            </div>
                            <div class="col-5 py-3 ps-0">
                                <div class="d-flex mb-2">
                                    <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs mt-1 mb-0 font-weight-bold">Ứng Viên</p>
                                </div>
                                <h4 class="font-weight-bolder"><?= $user ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="bar-chart-horizontal" class="chart-canvas" height="300px"></canvas>
                        </div>
                    </div>
                    <h6 class="ms-2 mt-4 mb-0"> Thông tin Tuyển Dụng</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Turn 2 -->

</div>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx = document.getElementById("bar-chart").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Doanh Nghiệp", "Ứng Viên", "Bài Tuyển Dụng", "Đơn ứng tuyển"],
            datasets: [{
                label: "Số Lượng ",
                tension: 0.2,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: true,
                backgroundColor: ["#00DD00", '#CCFF00', '#33CCFF', '#9b59b6'],
                data: [<?= $corp ?>, <?= $user ?>, <?= $totalRecr ?>, <?= $info ?>],
                maxBarThickness: 40
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 100,
                        beginAtZero: false,
                        padding: 20,
                        font: {
                            size: 12,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#fff"
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        display: false
                    },
                },
            },
        },
    });


    var ctx2 = document.getElementById("bar-chart-horizontal").getContext("2d");

    new Chart(ctx2, {
        type: "bar",
        data: {
            labels: ["Hồ Sơ Đã Nộp", "Chờ Xét Duyệt", "Đã Xét Duyệt", "Từ Chối"],
            datasets: [{
                axis: 'y',
                label: "Số Lượng ",
                tension: 0.2,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: true,
                fill: false,
                backgroundColor: ["#33CCFF", '#CCFF00', '#00FA9A', '#FF3333'],
                data: [<?= $info ?>, <?= $wait ?>, <?= $approved ?>, <?= $rejected ?>],
                maxBarThickness: 40
            }, ],
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: true,
                mode: 'index',
            },
            scales: {
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        display: false
                    },
                },
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 100,
                        beginAtZero: false,
                        padding: 20,
                        font: {
                            size: 12,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#fff"
                    },
                },
            },
        },
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>