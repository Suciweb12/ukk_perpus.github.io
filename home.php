<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                    <i class="glyphicon">
                                    <img style="width:50px; height:50px;" src="13.png" alt="">
                                    </i>
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                                    ?>  
<?php
include "uci.php";
?>
                                            
                                    Total Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <i class="glyphicon">
                                    <img style="width:50px; height:50px;" src="12.png" alt="">
                                    </i>
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                                    ?>    
                                    Total Buku</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <i class="glyphicon">
                                    <img style="width:50px; height:50px;" src="15.png" alt="">
                                    </i>
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                                    ?>  

                                    Total Ulasan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                    <i class="glyphicon">
                                    <img style="width:50px; height:50px;" src="2.png" alt="">
                                    </i>
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                                    ?>    
                                    Total User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                      

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">

                                    <tr>
                                        <td width="200">Nama</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['nama']; ?></td>
                                    </tr>

                                    <tr>
                                        <td width="100">Level User</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['level']; ?></td>
                                    </tr>

                                    <tr>
                                        <td width="200">Tanggal Login</td>
                                        <td width="1">:</td>
                                        <td><?php echo date('d-m-Y'); ?></td>
                                    </tr>
                                
                                </table>
                            </div>
                        </div>