<?php include_once('includes/header.php'); ?>	

<?php include_once('includes/report_sidebar.php'); ?>	

		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('reports')?>">Reports</a></li>
				<li>Traffic</li>
			</ol>
				
			<h4>Your performance in last 30 days</h4>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Current number of listings</a></li>
			</ul>
			
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<form class="form-horizontal">
						
						<div class="form-group">
							<label class="control-label col-sm-2">For sale</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">To rent</label>
							<div class="col-sm-3">
								0
							</div>
						</div>
						  
						<div class="form-group">
							<label class="control-label col-sm-2">Total</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
						
					</form>
					
					<h5>Number of listings by location</h5>
					<div id="container" style="min-width: 310px; max-width: 800px; height: 150px; margin: 0 auto"></div>
				
				</div>
			</div>
			<div class="clearfix"></div><br><br>
			
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Traffic reports(last 30 days)</a>
				</li>
			</ul>
						
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					
					<form class="form-horizontal">
						
						<div class="form-group">
							<label class="control-label col-sm-2">Property views</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Property visite</label>
							<div class="col-sm-3">
								0
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">CTR</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
						
					</form>
					
					<h5>Traffic by location</h5>
					<div id="container1" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				
				</div>
			</div>
			<div class="clearfix"></div><br><br>
				
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Leads Report (Last 31 Days)</a>
				</li>
			</ul>
			
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					
					<form class="form-horizontal">
							
						<div class="form-group">
							<label class="control-label col-sm-2">Phone Views:</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Email Leads:</label>
							<div class="col-sm-3">
								0
							</div>
						</div>
						  
						<div class="form-group">
							<label class="control-label col-sm-2">SMS Clicks:</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Total Leads:</label>
							<div class="col-sm-3">
								54
							</div>
						</div>
				  
					</form>
					
					<h5>Leads by Location</h5>
					<div id="container2" style="min-width: 310px; max-width: 800px; height: 250px; margin: 0 auto"></div>
				
				</div>
			</div>
			<div class="clearfix"></div><br><br>
				
			<div class="col-sm-6">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#home">Phone Views by country</a>
					</li>
				</ul>
				
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<div id="pie2" style="height: 200px"></div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#home1">Email Leads by country</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="home1" class="tab-pane fade in active">
						<div id="pie3" style="height: 200px"></div>
					</div>
				</div>
			</div>	
			<div class="clearfix"></div><br><br>
				 
			<div class="col-sm-6">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#home">SMS Clicks by Country</a>
					</li>
				</ul>
				
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<div id="pie1" style="height: 200px"></div>
					</div>
				</div>
			</div>
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
            text: 'Total'
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
        name: 'To rent',
        data: [10]
    }, {
        name: 'For Sale',
        data: [45]
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
        categories: ['DHA DEFENCE', 'Azizabad', 'Air force housing society']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total'
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
        name: 'To rent',
        data: [2, 2,0]
    }, {
        name: 'For sale',
        data: [3, 4,0]
    }]
});
   </script>
<script>
 Highcharts.chart('container2', {
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
            text: 'Total leads'
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
        name: 'To rent',
        data: [2, 2,0]
    }, {
        name: 'For sale',
        data: [3, 4,0]
    }]
});
   </script>  
<script>

Highcharts.chart('pie1', {
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
            showInLegend: true,
			sliced: true,
			slicedOffset: 20
        },
		 series: {
                allowPointSelect: false,
                stickyTracking: false,
                point: {
                    events: {
                        mouseOver: function() {
                            var point = this,
                                points = this.series.points;

                            // unslice sliced element(s)
                            for (var key in points) {
                                if (points[key].sliced) {
                                    points[key].slice(false);
                                }
                            }

                            // slice hovered element
                            if (!point.selected) {
                                point.slice(true);
                            }
                        }
                    }
                },
                events: {
                    mouseOut: function(event) {
                        // unslice sliced element(s)
                        for (var key in this.points) {
                            if (this.points[key].sliced) {
                                this.points[key].slice(false);
                            }
                        }
                    }
                }
            }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pakistan',
            y: 50,
            
            selected: false,
        }, {
            name: 'Other',
            y: 50
        }]
    }]
});
</script>  
<script>
Highcharts.chart('pie2', {
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
             showInLegend: true,
			sliced: true,
			slicedOffset: 20
        },
		 series: {
                allowPointSelect: false,
                stickyTracking: false,
                point: {
                    events: {
                        mouseOver: function() {
                            var point = this,
                                points = this.series.points;

                            // unslice sliced element(s)
                            for (var key in points) {
                                if (points[key].sliced) {
                                    points[key].slice(false);
                                }
                            }

                            // slice hovered element
                            if (!point.selected) {
                                point.slice(true);
                            }
                        }
                    }
                },
                events: {
                    mouseOut: function(event) {
                        // unslice sliced element(s)
                        for (var key in this.points) {
                            if (this.points[key].sliced) {
                                this.points[key].slice(false);
                            }
                        }
                    }
                }
            }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pakistan',
            y: 50,
            
            selected: false,
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
Highcharts.chart('pie3', {
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
            showInLegend: true,
			sliced: true,
			slicedOffset: 20
        },
		 series: {
                allowPointSelect: false,
                stickyTracking: false,
                point: {
                    events: {
                        mouseOver: function() {
                            var point = this,
                                points = this.series.points;

                            // unslice sliced element(s)
                            for (var key in points) {
                                if (points[key].sliced) {
                                    points[key].slice(false);
                                }
                            }

                            // slice hovered element
                            if (!point.selected) {
                                point.slice(true);
                            }
                        }
                    }
                },
                events: {
                    mouseOut: function(event) {
                        // unslice sliced element(s)
                        for (var key in this.points) {
                            if (this.points[key].sliced) {
                                this.points[key].slice(false);
                            }
                        }
                    }
                }
            }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pakistan',
            y: 50,
            
            selected: false,
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