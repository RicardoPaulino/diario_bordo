<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'number',
        'description',
        'link',
        'status',
        'created_at',
        'updated_at'
    ];

    public function getProjectsByStatus()
    {
        return [
            [
                'id' => 1,
                'name' => 'Project 1',
                'description' => 'Description 1',
                'status' => 'backlog',
                'created_at' => '2023-01-01'
            ],
            [
                'id' => 2,
                'name' => 'Project 2',
                'description' => 'Description 2',
                'status' => 'em andamento',
                'created_at' => '2023-02-01'
            ],
            [
                'id' => 3,
                'name' => 'Project 3',
                'description' => 'Description 3',
                'status' => 'impedimento',
                'created_at' => '2023-03-01'
            ],
            [
                'id' => 4,
                'name' => 'Project 4',
                'description' => 'Description 4',
                'status' => 'bloqueado',
                'created_at' => '2023-04-01'
            ],
            [
                'id' => 5,
                'name' => 'Project 5',
                'description' => 'Description 5',
                'status' => 'finalizado',
                'created_at' => '2023-05-01'
            ],
            [
                'id' => 6,
                'name' => 'Project 6',
                'description' => 'Description 6',
                'status' => 'aguardando',
                'created_at' => '2023-06-01'
            ]
        ];
    }
}