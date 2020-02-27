<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        \Illuminate\Support\Facades\DB::statement('DROP VIEW IF EXISTS view_projects');
        \Illuminate\Support\Facades\DB::statement("
                    CREATE VIEW view_projects AS
                        SELECT pr.id                     AS `id`,
                                cd.id                    AS `category2_id`,
                                cc.category_name         AS `category_name`,
                                cd.category_name         AS `category_detail_name`,
                                pr.title                 AS `title`,
                                pr.condition             AS `condition`,
                                pr.success_count         AS `success_count`,
                                count(sp.project_id)     AS `supporter_count`,
                                sum(pa.payment_price)    AS `total_cost`,
                                pr.start_date            AS `start_date`,
                                pr.deadline              AS `deadline`,
                                pr.created_at            AS `created_at`,
                                pr.updated_at            AS `updated_at`
                        FROM projects                    AS pr
                            LEFT JOIN categories             AS cc ON pr.category_id  = cc.id
                            LEFT JOIN category_details       AS cd ON pr.category2_id = cd.id
                            LEFT JOIN supports               AS sp ON sp.project_id   = pr.id
                            LEFT JOIN payments               AS pa ON pa.support_id   = sp.id
                            LEFT JOIN introductions          AS it ON it.project_id   = pr.id
                        WHERE sp.condition = 0
                        AND pr.deleted_at IS NULL
                        GROUP BY pr.id
                        ORDER BY created_at DESC;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::statement('DROP VIEW view_projects');
    }
}
