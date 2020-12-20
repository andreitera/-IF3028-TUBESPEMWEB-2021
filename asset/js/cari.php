<div id="container">
  <div class="tulisan2">
    <div class="newshead" id="data-data">
      <ul class="detail">
        <?php foreach ($lapor as $dt) : ?>
          <?php
          $limitedKata = $this->Data_model->limitKata($dt['lapor'], 5);
          ?>
          <?= $limitedKata . ' '; ?>
          <br>
          <?= $dt['aspek'] . ' '; ?> <br>
          <table>
            <tr>
              <td><?= $dt['gambar'] . ' '; ?></td>
              <td id="waktu">
                <p>
                  <small style="margin-right: -40px;"><?= $dt['waktu'] . ' '; ?></small>
                  <a href="<?= base_url() ?>data/detail/<?= $dt['id']; ?>" style="text-decoration:none"><small>| Lihat Selengkapnya </small></a></p>
              </td>
            </tr>
          </table>
          <hr />
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</div>