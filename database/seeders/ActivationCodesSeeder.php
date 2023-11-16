<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $sql = <<<'SQL'
            -- Paste your SQL data here
            INSERT INTO `activation_codes` (`id`, `code`, `status`, `activated_by`, `created_by`, `created_at`, `updated_at`) VALUES

            (1, 'master', 'Valid', NULL, 'admin@demo.com', '2023-10-17 20:28:22', '2023-10-17 20:28:23'),
            (2, 'IMDOHPSM', 'Invalid', 'User 18', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:34:47'),
            (3, 'AG1ZFJ4G', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (4, '1XLDUVMD', 'Invalid', 'User 19', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:34:43'),
            (5, 'LBDJRJF3', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (6, 'RFV7QOCL', 'Invalid', 'User 14', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:34:45'),
            (7, 'VSIM0Y6I', 'Invalid', 'User 16', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:34:52'),
            (8, 'HXJ93PUC', 'Invalid', 'User11', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:35:04'),
            (9, 'PEA6YSLX', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (10, 'G7G7WFL2', 'Invalid', 'User 9', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:34:58'),
            (11, 'Z1UHCCFK', 'Invalid', 'User 6', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-17 17:34:55'),
            (12, 'BR2K6JB6', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (13, 'WP45XF4B', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (14, 'ATDNQKIT', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (15, 'BX7SRJWV', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (16, 'A5SHPO8C', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (17, 'Q8G4FLQG', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (18, 'PN73ZELQ', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (19, 'QJSJKB2A', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (20, 'KVOTMXPS', 'Valid', NULL, 'admin@demo.com', '2023-10-04 21:01:08', NULL),
            (21, 'RJKSZ97D', 'invalid', 'User 1', 'admin@demo.com', '2023-10-04 21:01:08', '2023-10-05 08:56:45');
        SQL;

        DB::unprepared($sql);
    }
}
