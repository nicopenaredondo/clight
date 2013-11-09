google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(initChart);

function initChart(){
	drawJobOrderChart();
	drawBranchChart();
}

function drawJobOrderChart(){
	 var data = google.visualization.arrayToDataTable([
        ['Year', 'Job Order'],
        ['2010',  50000],
        ['2011',  100000],
        ['2012',  250000],
        ['2013',  500000]
      ]);
      var options = {
          title: 'Citylight Job Order Statistics',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };
      var chart = new google.visualization.ColumnChart(document.getElementById('job_order_chart'));
          chart.draw(data, options);
}

function drawBranchChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Branch'],
        ['2010',  5],
        ['2011',  10],
        ['2012',  15],
        ['2013',  40]
      ]);
      var options = {
          title: 'Citylight Branch Statistics',
          colors: ['red','green'],
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };
      var chart = new google.visualization.LineChart(document.getElementById('branch_chart'));
          chart.draw(data, options);
  }