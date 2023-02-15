<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<script src="instascan.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">	
		<h4>SCAN</h4><br/>
		<div class="row">
			<div class="col-md-6" >
				<video id="preview" width="100%" style="color: black;">
					
				</video>
			</div>
			<div class="col-md-6" >
				<label >Qr-code Value</label>
				<input type="text" name="text" id="text" readonly="" class="form-control">
			</div>
		</div>
	</div>
	<script src="instascan.min.js"></script>
	<script type="text/javascript">
		let scanner = new Instascan.Scanner({video:document.getElementById('preview') });
		Instascan.Camera.getCameras().then(function(cameras) {
			if (cameras.length>0) {
				scanner.start(cameras[0]);
			}
			else 
			{
				alert("no camera found");
			}
		}).catch(function(e){
			console.error(e);
		});
		scanner.addListener('scan',function(c){
			document.getElementById("text").value=c;
		});
	</script>
</body>
</html>