<?php
return[
    "teachers"=>[
        "role"=>"teacher",
        "resource"=>"User",
        "fieldsExtra"=>['department']
    ],
    "students"=>[
        "role"=>"student",
        "resource"=>"users",
    ],
    "users"=>[
        "fields" => ['name', 'email', 'dni', 'phone', 'password'],
    ],
    "projects"=>[
        "fields" => ['name', 'description', 'hours', 'start_date'],
    ],
    "tasks"=>[
        "fields" => ['name', 'description', 'priority', 'status'],
    ],
    "guests"=>[
        "role"=>"guest",
        "resource" => "users",
    ]//Son usuarios registrados que no son estudiantes,profesores...
];

