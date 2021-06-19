<?php include_once('includes/header.php'); ?>

<?php include_once('includes/report_sidebar.php'); ?>

		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('reports')?>">Reports</a></li>
				<li>Leads</li>
				<li>Summary</li>
			</ol>
			<h4>Your Agent's lead(Last 31 days)</h4>
				
			<div class="form-group">
				<label class="control-label col-sm-2">Total Leads:</label>
				<div class="col-sm-3">
					0
				</div>
			</div>
			<br>
	
			<div class="form-group">
				<label class="control-label col-sm-2">Phone Views:</label>
				<div class="col-sm-3">
					0
				</div>
			</div>
			<br>
				
			<div class="form-group">
				<label class="control-label col-sm-2">Email Leads:</label>
				<div class="col-sm-3">
					0
				</div>
			</div>
			<br>
 
			<ul class="nav nav-tabs"></ul>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<canvas id="bar-chart-horizontal" width="800" height="250"></canvas>
				</div>
			</div>
			<div class="clearfix"></div><br><br>
				
			<h6>Leads by Day (Last 31 Days)</h6>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home1">Phone views</a></li>
				<li><a data-toggle="tab" href="#menu10">Emails received</a></li>
			</ul>
			
			<div class="tab-content">
				<div id="home1" class="tab-pane fade in active">
					<div style="width:812px">
						<canvas id="line-chart"></canvas>
					</div>
				</div>
				<div id="menu10" class="tab-pane fade in">
					<div style="width:812px">
						<canvas id="line-chart1"></canvas>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><br><br>
				
			<table class="table-bordered col-xs-12">
				<thead>
					<tr style="background-color:#05a7e5; color:white;">
						<th>Day</th>
						<th>Phone views</th>
						<th>Email leads</th>
						<th>Total leads</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>14 Jul, 2018</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
					<tr>
						<td>14 Jul, 2018</td>
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
 new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Phone", "Email"],
      datasets: [
        {
          label: "All",
          backgroundColor: ["#3e95cd", "#8e5ea2"],
          data: [30,10]
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
            labelString: "Leads type",
			 
          }
        }],
        xAxes: [{ 
		 
          scaleLabel: {
            display: true,
            labelString: "Leads",
			
          }
        }]
      }
    }
});
</script>
<script>
  new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [0,10,20,30,40],
    datasets: [{ 
        data: [10,20,30,40],
        label: "Phone",
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
            labelString: "Phone views",
			 
          }
        }],
        xAxes: [{ 
		 gridLines: {
                         drawOnChartArea: false 
						},
          scaleLabel: {
            display: true,
            labelString: "Leads",
			
          }
        }]
      }
    }
});
</script>
<script>
  new Chart(document.getElementById("line-chart1"), {
  type: 'line',
  data: {
    labels: [0,10,20,30,40],
    datasets: [{ 
        data: [10,20,30,40],
        label: "Email",
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
            labelString: "Leads",
			
          }
        }]
      }
    }
});
</script>

