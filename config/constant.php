<?php

use App\Models\User;
use App\Models\Complaint;

return [
    'user' => [
        'role' => [
            User::ADMIN,
            User::PETUGAS,
        ],
    ],
    'complaint' => [
        'status' => [
            Complaint::BELUM_SELESAI,
            Complaint::PROSES,
            Complaint::SELESAI,
        ]
    ]
]

?>
