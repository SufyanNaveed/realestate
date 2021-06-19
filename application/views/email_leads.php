<?php include_once('includes/header.php'); ?>

<?php include_once('includes/report_sidebar.php'); ?>

		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('reports')?>">Reports</a></li>
				<li>Leads</li>
				<li>Email Leads</li>
			</ol>
			<h4>Email leads</h4>
				
			
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
				<li class="active"><a data-toggle="tab" href="#home1">By purpose (Sale,rent)</a></li>
				<li><a data-toggle="tab" href="#menu10">By listing type (SuperHot,Hot,Paid,free)</a></li>
				<li><a data-toggle="tab" href="#menu11">By Email type (Offer,Enquiry)</a></li>
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
        data: [0.5,1.0],
        label: "For Sale",
        borderColor: "#DC3912",
        fill: false
      },  { 
        data: [1.0,0.5],
        label: "To rent",
        borderColor: "#88CB8C",
        fill: false
      },{ 
        data: [0.0,0.5],
        label: "Others",
        borderColor: "#99B3E6",
        fill: false
      }, { 
        data: [0.0,1.0],
        label: "All",
        borderColor: "#FF9900",
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
            labelString: "Emails received",
			 
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
        data: [0.0,0.5],
        label: "Super Hot",
        borderColor: "#DC3912",
        fill: false
      }, { 
        data: [1.0,0.5],
        label: "Hot",
        borderColor: "#88CB8C",
        fill: false
      }, { 
        data: [0.5,1.0],
        label: "Paid",
        borderColor: "#FF9900",
        fill: false
      }, { 
        data: [0.1,0.5],
        label: "Free",
        borderColor: "#99B3E6",
        fill: false
      }, { 
        data: [1.0,0.0],
        label: "All",
        borderColor: "#DC3912",
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
            labelString: "Emails received",
			 
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
        data: [0.0,0.5],
        label: "Offer",
        borderColor: "#DC3912",
        fill: false
      },{ 
        data: [0.1,0.5],
        label: "Inquiry",
        borderColor: "#99B3E6",
        fill: false
      }, { 
        data: [1.0,0.5],
        label: "All",
        borderColor: "#DC3912",
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
            labelString: "Emails received",
			 
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

