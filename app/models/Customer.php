<?php

namespace App\Models;

use App\Core\Model;

class Customer extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_customer";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
