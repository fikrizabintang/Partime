<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Lomba <b>Essay</b></h4>
              </div>
              <div class="modal-body">
            <?php
              require_once("koneksi.php");
              $username = $_POST['username'];
              $pass = $_POST['password']; 
              $query = $db->prepare("SELECT * FROM user WHERE username = ?");
              $query->execute(array($username));  
              if($query->rowCount() != 0) {
                echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
              } else {
                if(!$username || !$pass) {
                  echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
                } else {      
                  $sql = $db->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
                  $simpan = $sql->execute(array($username, $pass));
                  if($simpan) {
                    echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
                  } else {
                    echo "<div align='center'>Proses Gagal!</div>";
                  }
                }
              }
            ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
      </div>
  </div>
</div>