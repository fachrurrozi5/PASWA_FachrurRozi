<?php
    include('header.php');
    ?>

<?php
 include_once("connection.php");
$result_peserta = mysqli_query($mysqli, "select count(nim) as total_peserta from tab_peserta");
$total_peserta = mysqli_fetch_assoc($result_peserta);
if(empty($total_peserta)){ $t_peserta = "0"; }else{ $t_peserta = $total_peserta['total_peserta'];}

$result_panitia = mysqli_query($mysqli, "select count(nim) as total_panitia from tab_panitia");
$total_panitia = mysqli_fetch_assoc($result_panitia);
if(empty($total_panitia)){ $t_panitia = "0"; }else{ $t_panitia = $total_panitia['total_panitia'];}

?>
            <!-- Total Peserta $ Panitia -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Panitia</p>
                                <h6 class="mb-0"><?php echo $t_panitia ?></h6>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Peserta </p>
                                <h6 class="mb-0"><?php echo $t_peserta ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Tata Tertib $ Perlengkapan -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h3 class="mb-0">Tata Tertib PASWA 2022</h3>
                                <a href="tata_tertib.php" class = "btn btn-danger">Show All</a>
                            </div>
                                <h8>
                                <?php

include_once("connection.php");
$no = 0; 
echo "<tr>";
$result = mysqli_query($mysqli, "SELECT * FROM tab_tata_tertib limit 5");
while ($row = mysqli_fetch_array($result)) {
    $no++;
   
    echo "<td>" . $no. ". "  ;
    echo $row['tata_tertib'] . "<br></td>";
   
}
echo "</tr>";
?>
                                </h8>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h3 class="mb-0">Perlengkapan Paswa 2022</h3>
                                <a href="perlengkapan.php" class = "btn btn-danger">Show All</a>
                            </div>
                                <h8>
                            <div class="table-responsive">
                                <table class="table " id="datatable">
                                <thead>
                        <tr>
                            
                            <td  class="text-light"> No.</td>
                            <td class="text-light"> Perlengkapan</td>
                            <td class="text-light"> Kategori</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_perlengkapan");
                        while ($row = mysqli_fetch_array($result)) {
                            $no++;
                            echo "<tr>";
                            echo "<td class='text-light'>" . $no . "</td>";
                            echo "<td class='text-light'>" . $row['perlengkapan'] . "</td>";
                            echo "<td class='text-light'>" . $row['kategori'] . "</td>";
                        }
                        ?>
                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
                                </h8>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
<?php
    include('footer.php');
?>