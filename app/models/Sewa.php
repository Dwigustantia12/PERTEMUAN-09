<?php

namespace App\Models;

use App\Core\Model;

class Sewa extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_sewa";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
