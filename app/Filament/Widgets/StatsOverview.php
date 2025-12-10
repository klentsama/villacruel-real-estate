<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use App\Models\Property;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Number of Enquiries', Enquiry::count()),
            Stat::make('Number of Available Property', Property::where('status', 'available')->count()),
            Stat::make('Number of Properties', Property::count()),
            Stat::make('Number of Rented Properties', Property::where('status', 'rented')->count()),
            Stat::make('Number of For Sale Properties', Property::where('listing_type', 'sale')->count()),
            
        ];
    }
}
