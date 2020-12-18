    <script>
      alert('<?= $this->session->flashdata('message');?>');
    </script>
    <form action="<?= base_url('index.php/login/ceklogin') ?>" method="post">
      <table>
        <tr>
          <td align="center" colspan="2">Enter Login Details</td>
        </tr>
        <tr>
          <td align="left">Username</td>
          <td>
            <input type="text" name="username" autofocus>
          </td>
        </tr>
        <tr>
          <td align="left">Password</td>
          <td>
            <input type="text" name="password">
          </td>
        </tr>
        <tr>
          <td align="center" colspan="2">
            <button type="submit">Submit</button>
          </td>
        </tr>
      </table>
    </form>
