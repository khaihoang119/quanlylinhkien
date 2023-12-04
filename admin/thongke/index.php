<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">QUẢN LÝ THỐNG KÊ</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách thống kê</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <script>
                window.onload = function () {

                    var limit = 50000;
                    var y = 100;
                    var data = [];
                    var dataSeries = {type: "line"};
                    var dataPoints = [];
                    for (var i = 0; i < limit; i += 1) {
                        y += Math.round(Math.random() * 10 - 5);
                        dataPoints.push({
                            x: i,
                            y: y
                        });
                    }
                    dataSeries.dataPoints = dataPoints;
                    data.push(dataSeries);

//Tốt hơn là xây dựng các tùy chọn trước rồi chuyển nó dưới dạng tham số
                    var options = {
                        zoomEnabled: true,
                        animationEnabled: true,
                        title: {
                            text: "Danh Sách Thanh Toán"
                        },
                        axisY: {
                            lineThickness: 1
                        },
                        data: data  // dữ liệu ngẫu nhiên
                    };

                    var chart = new CanvasJS.Chart("chartContainer", options);
                    var startTime = new Date();
                    chart.render();
                    var endTime = new Date();
                    document.getElementById("timeToRender").innerHTML = "Time to Render: " + (endTime - startTime) + "ms";

                }
            </script>
            <style>
                #timeToRender {
                    position: absolute;
                    top: 10px;
                    font-size: 20px;
                    font-weight: bold;
                    background-color: #d85757;
                    padding: 0px 4px;
                    color: #ffffff;
                }
            </style>
            </head>
            <body>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>

            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
