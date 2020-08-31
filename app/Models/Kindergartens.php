<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Kindergartens
 *
 * @property int $id
 * @property string $name 幼儿园名称
 * @property int $kindergarten_grade_id 幼儿园等级ID
 * @property Carbon $created_at 新增时间
 * @property Carbon $updated_at 更新时间
 * @method static Builder|Kindergartens newModelQuery()
 * @method static Builder|Kindergartens newQuery()
 * @method static Builder|Kindergartens query()
 * @method static Builder|Kindergartens whereCreatedAt($value)
 * @method static Builder|Kindergartens whereId($value)
 * @method static Builder|Kindergartens whereKindergartenGradeId($value)
 * @method static Builder|Kindergartens whereName($value)
 * @method static Builder|Kindergartens whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Kindergartens extends Model
{
    /**
     * @var string 表名
     */
    protected $table = 'kindergartens';

    /**
     * @var string 主键
     */
    protected $primaryKey = 'id';

    public function grade()
    {
        return $this->hasOne(ConfKindergartenGrades::class, 'id', 'kindergarten_grade_id');
    }
}
