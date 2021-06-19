<?php include_once('includes/header.php'); ?>

<?php include_once('includes/report_sidebar.php'); ?>

		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="index.html">Reports</a></li>
				<li>Leads</li>
				<li>Leads by country</li>
			</ol>
			<h5>&emsp;Your Leads by country</h5>
			
			<div class="col-sm-6">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#home">Phone Views</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<div id="container" style="height: 200px"></div>
					</div>
				</div>				
			</div>
    
			<div class="col-sm-6">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#home1">Email Leads</a>
					</li>
				</ul>
				
				<div class="tab-content">
					<div id="home1" class="tab-pane fade in active">
						<div id="container2" style="height: 200px"></div>
					</div>
				</div>
			</div>	
			<div class="clearfix"></div><br><br>

			<table class="table-bordered col-xs-12">
				<thead>
					<tr style="background-color:#05a7e5; color:white;">
						<th>Country</th>
						<th>Phone views</th>
						<th>Email Leads</th>
						<th>Total leads</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>DHA DEFENCE</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				</tbody>
			</table>
			
			<ul class="pagination">
				<li><a href="#">></a></li>
				<li class="active"><a href="#"><</a></li>
			</ul>
		</div>				
	</div>				
<?php include_once('includes/footer.php'); ?>		

<script>

Highcharts.chart('container3', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pakistan',
            y: 50,
            sliced: false,
            selected: false
        }, {
            name: 'Other',
            y: 50
        }]
    }]
});
</script>  
<script>
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pakistan',
            y: 50,
            sliced: false,
            selected: false
        }, {
            name: 'Other',
            y: 20
        }, {
            name: 'Hungary',
            y: 30
        }]
    }]
});
</script> 
<script>
Highcharts.chart('container2', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pakistan',
            y: 50,
            sliced: false,
            selected: false
        }, {
            name: 'Other',
            y: 20
        }, {
            name: 'Hungary',
            y: 30
        }]
    }]
});
</script>   
		<script  src="js/index.js"></script>
	</body>
</html>
