<?php include_once('includes/header.php'); ?>

<?php include_once('includes/report_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('reports')?>">Reports</a></li>
				<li>Leads</li>
				<li>Phone Leads</li>
			</ol>
			<h5>Your Phone Views</h5>
				
			
			<form class="form-horizontal agent">
				<div class="form-group">
					<label class="control-label col-sm-2">Select Agents</label>
					<div class="col-md-3">
						<select class="form-control">
							<option>All combined</option>						
						</select>
					</div>
								
					<span><button class="btn btn-info">GO</button></span>
				</div>
			</form>
				
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home1">Phone views</a>
				</li>
				<li>
					<a data-toggle="tab" href="#menu10">By purpose(Sale,Rent)</a>
				</li>
				<li>
					<a data-toggle="tab" href="#menu11">By Listing type (Hot,Paid,Free)</a>
				</li>
			</ul>
			
			<div class="tab-content">
				<div id="home1" class="tab-pane fade in active">
					<div style="width:812px">
						<canvas id="line-chart"></canvas>
					</div>
				</div>
				
				<div id="menu10" class="tab-pane fade in">
					<div style="width:812px">
						<canvas id="line-chart6"></canvas>
					</div>
				</div>
				<div id="menu11" class="tab-pane fade in">
					<div style="width:812px">
						<canvas id="line-chart7"></canvas>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><br><br>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>

<script>
  new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ["June 15","Jun 15","Jun 22","Jul 06"],
    datasets: [{ 
        data: [0.0,0.3,0.2,1.0],
        label: "All",
        borderColor: "#99B3E6",
        fill: false
      }
    ]
  },
  
  options: {
      title: {
        display: true,
        text: ''
      }, scales: {
        yAxes: [{ 
		
          scaleLabel: {
		  
            display: true,
            labelString: "Phone views",
			 
          }
        }],
        xAxes: [{ 
		 gridLines: {
                         drawOnChartArea: false 
						},
          scaleLabel: {
            display: true,
            labelString: "Date",
			
          }
        }]
      }
    }
});
   </script>
 <script>
  new Chart(document.getElementById("line-chart6"), {
  type: 'line',
  data: {
    labels: ["June 15","Jun 15","Jun 22","Jul 06"],
    datasets: [{ 
        data: [0.0,0.5,0.2,0.3],
        label: "For sale",
        borderColor: "#DC3912",
        fill: false
      }, { 
        data: [1.0,0.5,0,0.5],
        label: "Rent",
        borderColor: "#88CB8C",
        fill: false
      } 
    ]
  },
  
  options: {
      title: {
        display: true,
        text: ''
      }, scales: {
        yAxes: [{ 
		
          scaleLabel: {
		  
            display: true,
            labelString: "Phone views",
			 
          }
        }],
        xAxes: [{ 
		 gridLines: {
                         drawOnChartArea: false 
						},
          scaleLabel: {
            display: true,
            labelString: "Date",
			
          }
        }]
      }
    }
});
   </script>
 <script>
  new Chart(document.getElementById("line-chart7"), {
  type: 'line',
  data: {
    labels: ["June 15","Jun 15","Jun 22","Jul 06"],
    datasets: [{ 
        data: [0.0,0.5,0.2,0.6],
        label: "Hot",
        borderColor: "#DC3912",
        fill: false
      },{ 
        data: [0.1,0.5,0.1,0.6],
        label: "Paid",
        borderColor: "#99B3E6",
        fill: false
      }, { 
        data: [1.0,0.5,0.0,0.4],
        label: "Free",
        borderColor: "#88CB8C",
        fill: false
      }
    ]
  },
  
  options: {
      title: {
        display: true,
        text: ''
      }, scales: {
        yAxes: [{ 
		
          scaleLabel: {
		  
            display: true,
            labelString: "Phone views",
			 
          }
        }],
        xAxes: [{ 
		 gridLines: {
                         drawOnChartArea: false 
						},
          scaleLabel: {
            display: true,
            labelString: "Date",
			
          }
        }]
      }
    }
});
</script>
 
