<?php include_once('includes/header.php'); ?>

<?php include_once('includes/report_sidebar.php'); ?>

		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="index.html">Reports</a></li>
				<li>Leads</li>
				<li>Leads by location</li>
			</ol>
			<h4>Leads by location (Last 31 days)</h4>
			<h6>Sale leads by location</h6>
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">All leads</a></li>
				<li><a data-toggle="tab" href="#menu10">Phone views</a></li>
				<li><a data-toggle="tab" href="#menu11">Email leads</a></li>
			</ul>
				
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<div id="container" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>
				
				<div id="menu10" class="tab-pane fade in">
					<div id="container10" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>
			
				<div id="menu11" class="tab-pane fade in">
					<div id="container20" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>

				<div id="menu13" class="tab-pane fade in">
					<div id="container30" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>
			</div>
			<div class="clearfix"></div><br><br>
			
			<h6>Rental leads by location</h6>
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home12">All leads</a></li>
				<li><a data-toggle="tab" href="#menu14">Phone views</a></li>
				<li><a data-toggle="tab" href="#menu15">Email leads</a></li>
			</ul>
			
			<div class="tab-content">
				<div id="home12" class="tab-pane fade in active">
					<div id="container1" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>
				
				<div id="menu14" class="tab-pane fade in">
					<div id="container40" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>

				<div id="menu15" class="tab-pane fade in">
					<div id="container50" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>

				<div id="menu16" class="tab-pane fade in">
					<div id="container60" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				</div>
			</div>
			<div class="clearfix"></div><br><br>
			
			<table class="table-bordered col-xs-12">
				<thead>
					<tr style="background-color:#05a7e5; color:white;">
						<th>Location</th>
						<th>Phone(sale)</th>
						<th>Email(sale)</th>
						<th>Phone(rent)</th>
						<th>Email(rent)</th>
						<th>Total leads</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>DHA DEFENCE</td>
						<td>-</td>
						<td>-</td>
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
 Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    xAxis: {
	 
        categories: ['DHA DEFENCE']
		
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'All leads',
        data: [35]
    }]
});
   </script>
   <script>
 Highcharts.chart('container10', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    xAxis: {
	 
        categories: ['DHA DEFENCE']
		
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Phone views',
        data: [35]
    }]
});
   </script>
   <script>
 Highcharts.chart('container20', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    xAxis: {
	 
        categories: ['DHA DEFENCE']
		
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Email leads',
        data: [35]
    }]
});
   </script>
   
<script>
 Highcharts.chart('container1', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['DHA DEFENCE', 'Azizabad']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [ {
        name: 'All leads',
        data: [5,2]
    }]
});
   </script>
<script>
 Highcharts.chart('container40', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['DHA DEFENCE', 'Azizabad']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [ {
        name: 'Phone views',
        data: [5,2]
    }]
});
   </script>
<script>
 Highcharts.chart('container50', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['DHA DEFENCE', 'Azizabad']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [ {
        name: 'Email leads',
        data: [5,2]
    }]
});
</script>

