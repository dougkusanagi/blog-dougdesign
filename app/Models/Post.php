<?php

namespace App\Models;

use App\Console\Commands\GenerateSitemap;
use App\Presenters\PostPresenter;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::created(fn () => GenerateSitemap::dispatch());
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('published', true)->where('deleted_at', null);
    }

    public function presenter(): PostPresenter
    {
        return new PostPresenter($this);
    }
}
