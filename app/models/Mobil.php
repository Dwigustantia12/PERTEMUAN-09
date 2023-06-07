<?php

namespace App\Models;

use App\Core\Model;

class Mobil extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_mobil";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
