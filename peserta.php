<?php
    include('header.php');
?>


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-white rounded h-100 p-4">
                            <h6 class="mb-4 text-dark">Data Peserta Paswa 2022</h6>
                            <p><a href="peserta_add.php" class="btn btn-primary">Tambah</a></p>
                            <div class="table-responsive">
                                <table class="table " id="datatable">
                                <thead>
                        <tr>
                            
                            <td  class="text-dark"> NIM </td>
                            <td class="text-dark"> Nama Peserta </td>
                            <td class="text-dark"> Program Studi </td>
                            <td class="text-dark"> Semester </td>
                            <td class="text-dark"> Kelas </td>
                            <td class="text-dark"> No Handphone </td>
                            <td class="text-dark"> Email </td>
                            <td class="text-dark"> Alamat </td>
                            <td class="text-dark"> Jenis Kelamin </td>
                            <td class="text-dark"> Foto </td>
                            <td class="text-dark"> Agama </td>
                            <td class="text-dark"> Tempat Lahir </td>
                            <td class="text-dark"> Tanggal Lahir </td>
                            <td class="text-dark"> Action </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_peserta");
                        while ($row = mysqli_fetch_array($result)) {
                            $no++;
                            echo "<tr>";
                            echo "<td class='text-dark'>" . $row['nim'] . "</td>";
                            echo "<td class='text-dark'>" . $row['nama'] . "</td>";
                            echo "<td class='text-dark'>" . $row['prodi'] . "</td>";
                            echo "<td class='text-dark'>" . $row['semester'] . "</td>";
                            echo "<td class='text-dark'>" . $row['kelas'] . "</td>";
                            echo "<td class='text-dark'>" . $row['no_hp'] . "</td>";
                            echo "<td class='text-dark'>" . $row['email'] . "</td>";
                            echo "<td class='text-dark'>" . $row['alamat'] . "</td>";
                            echo "<td class='text-dark'>" . $row['jenis_kelamin'] . "</td>";
                            echo "<td class='text-dark'> <img src='gambar/".$row['foto']."' width='80px'> </td>";
                            echo "<td class='text-dark'>" . $row['agama'] . "</td>";
                            echo "<td class='text-dark'>" . $row['tempat_lahir'] . "</td>";
                            echo "<td class='text-dark'>" . $row['tanggal_lahir'] . "</td>";
                            echo "<td class='text-dark'> <a href=\"peserta_edit.php?nim=$row[nim]\">Edit</a> | 
                        <a href=\"peserta_pro_delete.php ?nim=$row[nim]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                            echo "</tr>";
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
<?php
    include('footer.php');
?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

	<script language="javascript" type="text/javascript">
		$(document).ready(function() {
			$('#datatable').dataTable({
				"pagingType": "full_numbers"
			});
		});
	</script>