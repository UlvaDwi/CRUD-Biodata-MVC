<!DOCTYPE html>
<html>
<head>
<title>CRUD MVC</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body class="container">
<h2><strong><p align="center">Data Mahasiswa</p></strong></h2>

    
                            <a href='index.php?insert=add'class="btn btn-primary btn-sm">
                                <span class = "glyphicon glyphicon-edit"></span> tambah
                            </a> 
   <!--  <th colspan="5" align="left"><button><a href='index.php?insert=add'>TAMBAH DATA</a></button></th> -->
   <table class="table table-hover table-bordered" style="margin-top: 10px">
  <tr class="info" >
    </tr>
    <tr>
    <td width="200" height="30" align="center" valign="middle" bgcolor="cyan">NIM</td>
    <td width="200" align="center" valign="middle" bgcolor="cyan">Nama</td>
    <td width="200" align="center" valign="middle" bgcolor="cyan">Alamat</td>
    <td width="200" align="center" valign="middle" bgcolor="cyan">Jurusan</td>
    <td width="200" align="center" valign="middle" bgcolor="cyan">Aksi</td></tr>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['nim'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['nama'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['jurusan'] ?></td>
                    <!-- <td p align="center" bgcolor="#FFFFFF">
                        <a href="index.php?nim=<?php echo $value['nim']?>&get=true">Edit</a>
                       <a href="index.php?nim=<?php echo $value['nim']?>&delete=true">Delete</a>
                    </td> -->
                    <td style="text-align: center;">
                            <a href="index.php?nim=<?php echo $value['nim']?>&get=true" class="btn btn-primary btn-sm">
                                <span class = "glyphicon glyphicon-edit"></span> Edit
                            </a> 
                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" a href="index.php?nim=<?php echo $value['nim']?>&delete=true" class="btn btn-danger btn-sm">
                                <span class = "glyphicon glyphicon-trash"></span> Hapus
                            </a>
                        </td>

                </tr>
 </td>
  </tr>
<?php } ?>
</table>
</body>
</html>