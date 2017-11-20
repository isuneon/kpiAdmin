<?php
namespace App\Repositories;

use App\models\admin\Notification;

class NotificationRepository extends AbstractRepository {

   

    function __construct(Notification $model){
        $this->model = $model;
    }


    /**
     * @param array $filters
     *
     * @return mixed
     */
    public function search(array $filters = [])
    {
        $query = $this->model
            ->distinct()
            ->select('admin_dia.*');

        return $query->orderBy('admin_dia.id', 'asc');
    }


} 