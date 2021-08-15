<?php

    namespace Source\Models;

    Class Finance extends Model
    {
        public function getDataDashboard($id_user, $year)
        {   

            $query = $this->pdo->prepare("SELECT credit, earning, expense FROM finance_month WHERE id_user = ? AND YEAR(date) = ? AND credit !=0 OR  id_user = ?  AND YEAR(date) = ? AND earning !=0 OR id_user = ? AND YEAR(date) = ? AND expense !=0  ORDER BY date ASC");
            $query->execute(array($id_user, $year, $id_user, $year, $id_user, $year));
            $dataDashboard = $query->fetchAll();

            $query = $this->pdo->prepare("SELECT MONTH(MIN(date)) FROM finance_month WHERE id_user = ? AND YEAR(date) = ?");
            $query->execute(array($id_user, $year));
            $minDate = $query->fetch();

            $data = [$dataDashboard, $minDate];

            return $data;

        }    
    }