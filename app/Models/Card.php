<?php

namespace App\Models;

use App\Models\Traits\Archivable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Card extends Model implements Sortable
{
    use SortableTrait;
    use HasFactory;
    use Archivable;

    protected $guarded = ['id'];

    public $sortable = [
        'order_column_name'     => 'order',
        'sort_when_creating'    => true,
    ];

    protected $casts = [
        'archived_at' => 'datetime'
    ];

    public function buildSortQuery(): Builder
    {
        return static::query()->where('column_id', $this->column_id);
    }

    public function scopeNotArchive(Builder $query)
    {
        $query->whereNull('cards.archived_at');
    }

    public function scopeArchived(Builder $query)
    {
        $query->whereNotNull('cards.archived_at');
    }

    public function scopeLatestArchived(Builder $query)
    {
        $query->orderBy('cards.archived_at', 'desc');
    }

    public function column()
    {
        return $this->belongsTo(Column::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
