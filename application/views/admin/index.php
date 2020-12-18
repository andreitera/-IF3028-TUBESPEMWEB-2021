      <div class="content">
        <button class="button button1" >Buat Laporan</button>
        <div class="card">
          <?php
            function admin($text)
            {
              if ($text=="admin")
              {
                return "admin";
              }
            }
          ?>
            <h4><b><?php foreach ($profil->result() as $row)
            {
            ?> <?= admin($row->username);  ?>
          <?php } ?> </b></h4>
            <p>Architect & Engineer</p>
        </div>
        <div>
          <button class="button button1" onclick="location.href='<?php echo base_url();?>user/logout'">Logout</button>
        </div>
      </div>
    </div>
