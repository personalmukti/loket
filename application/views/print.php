
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="loket">
					POLRES GARUT<br>
					<div style="font-size:15px;">	No. Telp (0262) 236415<br>
Jl. Raya Suci, Suci, Kec. Karangpawitan<br><hr></div>
					
				</div>
				<div class="agenda">
					<h1 id="nomer"><?php echo $antrian->row('no_antrian'); 
					if($antrian->row('no_antrian') < 1){
						$antri=1;
					}
					else{
						$antri=$antrian->row('no_antrian')+1;
					}
					?>
					</h1>
					<br>
					<br><div style="font-size:15px;"><?php date_default_timezone_set("Asia/Jakarta");echo date("d-m-Y H:i:s")?></div>
				</div>
			
			</div>
		</div>
	</div>
	<script type="text/javascript">
	window.print(); 
	setInterval(function() {
		location="<?php echo base_url('welcome/antrian/'); ?>"
		}, 2000);
	
	</script>