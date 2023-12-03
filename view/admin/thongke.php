<!-- <div class="row">
    <div class=" frmtitle">
        <h1>Thống Kê Toàn Bộ</h1>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai"> -->
        <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
        foreach($listadmin as $user){
            extract($user);
            echo "['".$user['name']."',".$user['countsp']."],";
        } 
    ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'DANH MỤC SẢN PHẨM KINH DOANH', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
