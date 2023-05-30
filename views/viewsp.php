<?php 
include 'koneksi.php';

    $nik = $_GET['nik'];
    $sql = mysqli_query($con, "SELECT * from t_penduduk where nik='$nik'");
    $no=1;
    while ($row = mysqli_fetch_array($sql)){   
        
?>


                            <div class="box-body">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="nkk" class=" form-control-label">No. KK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nkk" name="nkk" maxlength="16" class="form-control" value="<?php echo $row['nkk'];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik" name="nik" maxlength="16" class="form-control" value="<?php echo $row['nik'];?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" value="<?php echo $row['nama'];?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="<?php echo $row['jk'];?>" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahir" name="tmp_lahir" value="<?php echo $row['tmp_lahir'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahir" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"class="form-control"><small class="form-text text-muted">Contoh : 30/12/1990</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agama" id="agama"  class="form-control">
                                                <option value="<?php echo $row['agama'];?>" disabled="disabled" selected="selected">Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status Pernikahan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="status" class="form-control">
                                                <option value="<?php echo $row['status'];?>" disabled="disabled" selected="selected">Status Pernikahan</option>
                                                <option value="S">Sudah Menikah</option>
                                                <option value="B">Belum Menikah</option>
                                                <option value="P">Pernah Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pend" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="pend" id="pend"  class="form-control">
                                                <option value="<?php echo $row['pend'];?>" disabled="disabled" selected="selected">Pendidikan</option>
                                                <option value="SD">SD</option>
                                                <option value="SLTP">SLTP</option>
                                                <option value="SLTA">SLTA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="T/B. Sekolah">T/B. Sekolah</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaan" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kerjaan" name="kerjaan"  value="<?php echo $row['kerjaan'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt"  pvalue="<?php echo $row['almt'];?>"class="form-control"><small class="form-text text-muted">Contoh : 001/002</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="dusun" class=" form-control-label">Dusun</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dusun" name="dusun" value="<?php echo $row['dusun'];?>" class="form-control"><small class="form-text text-muted">Contoh : Dusun Tegal Sari</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">No. HP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="hp" name="hp" value="<?php echo $row['hp'];?>" class="form-control"><small class="form-text text-muted">Contoh : 082212345678</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket" class=" form-control-label">Keterangan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="ket" name="ket"  value="<?php echo $row['ket'];?>" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="submit" class="btn btn-primary btn-sm">Kembali</button></div>
                                        
                                    </div>
                            </div>
<?php  } ?>