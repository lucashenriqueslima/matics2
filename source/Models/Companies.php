<?php

namespace Source\Models;

class Companies extends Model
{
    public function getCompanies($id_user)
    {
        $stmt = $this->pdo->prepare("SELECT razao_social, nome_fantasia, cnpj FROM companies");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}