<div class="row">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Tải biểu đồ google
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Vẽ biểu đồ và thiết lập các giá trị biểu đồ
        function drawChart() {
            var data = google.visualization.arrayToDataTable([

                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                $tongdm = count($listthongke);
                $i = 1;
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = ""; else $dauphay = ",";
                    echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                    $i += 1;
                }


                ?>
            ]);

            // Không bắt buộc; thêm tiêu đề và đặt chiều rộng và chiều cao của biểu đồ
            var options = {'title': 'Thống kê sản phẩm', 'width': 800, 'height': 500};

            // Hiển thị biểu đồ bên trong phần tử <div> với id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

</div>