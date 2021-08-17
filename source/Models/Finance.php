<?php

namespace Source\Models;

class Finance extends Model
{
    public function getGraph($id_user, $minDate, $maxDate)
    {

        
        $query = ("SELECT date,
         credit,
         earning,
         expense
FROM finance_month
WHERE id_user = ?
        AND credit !=0
    BETWEEN ".$minDate."
        AND ".$maxDate."
        OR id_user = ?
        AND earning !=0
    BETWEEN ".$minDate."
        AND ".$maxDate."
        OR id_user = ?
        AND expense !=0
    BETWEEN ".$minDate."
        AND ".$maxDate."
    ORDER BY  date ASC ");
       $query2 = $this->pdo->prepare($query);
        $query2->execute(array($id_user, $id_user, $id_user));
        $data = $query2->fetchAll();

        return $data;
    }
}
