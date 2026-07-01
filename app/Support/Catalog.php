<?php

namespace App\Support;

use Illuminate\Support\Collection;

/**
 * Catalog
 * -------
 * Read-only access to the Services and Industries data that used to live
 * in service-detail.js and industries-data.js. The data now lives in
 * app/Data/*.php and is rendered server-side (SEO-friendly, no client JS).
 */
class Catalog
{
    protected static ?array $services = null;
    protected static ?array $industries = null;

    /** All services keyed by slug. */
    public static function services(): array
    {
        if (static::$services === null) {
            static::$services = require app_path('Data/services.php');
        }

        return static::$services;
    }

    /** A single service by slug, or null. */
    public static function service(string $slug): ?array
    {
        return static::services()[$slug] ?? null;
    }

    /** Services grouped by their "category" field (preserves insertion order). */
    public static function servicesByCategory(): Collection
    {
        return collect(static::services())->groupBy('category');
    }

    /** All industries (already slugged in the data file). */
    public static function industries(): array
    {
        if (static::$industries === null) {
            static::$industries = require app_path('Data/industries.php');
        }

        return static::$industries;
    }

    /** A single industry by slug, or null. */
    public static function industry(string $slug): ?array
    {
        foreach (static::industries() as $industry) {
            if (($industry['slug'] ?? null) === $slug) {
                return $industry;
            }
        }

        return null;
    }
}
