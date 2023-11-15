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
            INSERT INTO `users` (`id`, `name`, `email`, `status`, `courses`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES

            (1, 'Admin', 'admin@demo.com', 'Active', NULL, 'admin', NULL, '$2y$10$W7knnugWrFzoDT15U.WH3.DX1dOdqmVwGKYUY7RLaAL3/.0CzKsa2', NULL, '2023-10-04 20:46:44', '2023-10-05 08:56:45'),
            (2, 'User 1', 'user1@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-20 05:01:18', '2023-10-20 01:58:49'),
            (3, 'User 2', 'user2@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-20 05:01:19', '2023-10-19 15:08:27'),
            (4, 'User 3', 'user3@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-20 05:01:18', '2023-10-17 17:33:07'),
            (5, 'User 4', 'user4@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-20 05:01:20', '2023-10-20 02:02:57'),
            (6, 'User 5', 'user5@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:33:13'),
            (7, 'User 6', 'user6@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:34:20'),
            (8, 'User 7', 'user7@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:33:17'),
            (9, 'User 8', 'user8@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:33:21'),
            (11, 'User 10', 'user10@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:33:27'),
        	(12, 'User 11', 'user11@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:34:18'),
        	(13, 'User 12', 'user12@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:33:29'),
        	(14, 'User 13', 'user13@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-10 05:01:36'),
        	(15, 'User 14', 'user14@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:34:29'),
        	(16, 'User 15', 'user15@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-10 05:01:36'),
        	(17, 'User 16', 'user16@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:34:33'),
        	(18, 'User 17', 'user17@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-10 05:01:36'),
            (19, 'User 18', 'user18@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:34:24'),
            (20, 'User 19', 'user19@demo.com', 'Active', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-17 17:34:38'),
            (21, 'User 20', 'user20@demo.com', 'NotActive', NULL, 'user', NULL, '$2y$10$eTRbMOJ.RSmz4GfMYZzYk.G0W2.4qRYkEdyCW.8cAIKkBLcAr6VF.', NULL, '2023-10-10 05:01:36', '2023-10-10 05:01:36');
        SQL;

        DB::unprepared($sql);
    }
}
