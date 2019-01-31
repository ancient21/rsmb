       <div id="left">
            <ul id="menu" class="collapse">
                <li class="panel active"><a href="index.php"><i class="icon-home"></i> Menu Utama</a></li>
                <li><a href="?menu=pasien"><i class="icon-paper-clip"> </i>Pendaftaran Pasien</a></li>
                <li><a href="?menu=rujukan"><i class="icon-paper-clip"></i> Rujukan</a></li>                          
                <li><a href="?menu=bpup"><i class="icon-paper-clip"></i> BPUP</a></li>                
                <li><a href="?menu=rekam_medis"><i class="icon-paper-clip"></i> Rekam Medis</a></li>
                <li><a href="?menu=user"><i class="icon-user "></i> Daftar User</a></li>
            </ul>
        </div>
		
		
		<div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
						<h1>Rumah Sakit Muhammadiyah Bandung</h1>
                    </div>
                </div>
                <hr/>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
											<div class='panel-heading'>
												Tentang Rumah Sakit
											</div>
											<div class='panel-body'>
												<ul class='nav nav-tabs'>
													<li class='active'><a href='#home' data-toggle='tab'>Home</a>
													</li>
													<li><a href='#profile' data-toggle='tab'>Profil</a>
													</li>
												</ul>

												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home'>
													<center>
														<p><img src='../img/logo.png' class='img-responsive' alt='Header SIRS'/></p></center>
													</div>
													<div class='tab-pane fade' id='profile'>
														<blockquote>
															<table><tr><td align='left' width='200px'>
															Direktur Utama</td><td>:  Dr. Hj. Tety H Rahim, Sp.THT-KL, M.Kes, MH.Kes</td></tr>
															<tr><td align='left'>Alamat</td><td>:  Jl. K.H. Ahmad Dahlan No.53, Turangga, Lengkong, Kota Bandung, Jawa Barat 40264</td></tr>
															<tr><td align='left'>Layanan</td><td>: 24 Jam</td></tr>
															<tr><td align='left'>Website</td><td>: <a href='http://rsmb.co.id/'>rsmb.co.id</a></td></tr>
															</table>
														</blockquote>
												</div>
											</div>
										</div>
									</div>";
						}
						?>
					</div>
                </div>
                  <!--END BLOCK SECTION -->
                <hr />
            </div>
        </div>
