<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\ConfSchoolGrade
 *
 * @method static Builder|ConfKindergartenGrades newModelQuery()
 * @method static Builder|ConfKindergartenGrades newQuery()
 * @method static Builder|ConfKindergartenGrades query()
 * @mixin Eloquent
 */
class ConfKindergartenGrades extends Model
{
    /**
     * @var string 表名
     */
    protected $table = 'conf_kindergarten_grades';

    /**
     * @var string 主键
     */
    protected $primaryKey = 'id';
}
