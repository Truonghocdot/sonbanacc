<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RevenueChart extends ChartWidget
{
    protected ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $activeFilter = $this->filter;

        $start = now()->startOfMonth();
        $end = now()->endOfMonth();
        $dbFormat = '%Y-%m-%d';
        $interval = 'day';

        switch ($activeFilter) {
            case 'today':
                $start = now()->startOfDay();
                $end = now()->endOfDay();
                $dbFormat = '%Y-%m-%d %H:00';
                $interval = 'hour';
                break;
            case 'week':
                $start = now()->subDays(6)->startOfDay();
                $end = now()->endOfDay();
                $interval = 'day';
                break;
            case 'year':
                $start = now()->startOfYear();
                $end = now()->endOfYear();
                $dbFormat = '%Y-%m';
                $interval = 'month';
                break;
        }

        $revenueData = \App\Models\Order::where('status', \App\Models\Order::STATUS_COMPLETED)
            ->whereBetween('completed_at', [$start, $end])
            ->select(
                DB::raw("DATE_FORMAT(completed_at, '{$dbFormat}') as period"),
                DB::raw('SUM(final_amount) as total')
            )
            ->groupBy('period')
            ->pluck('total', 'period')
            ->toArray();

        $costData = \App\Models\Order::where('orders.status', \App\Models\Order::STATUS_COMPLETED)
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->whereBetween('orders.completed_at', [$start, $end])
            ->select(
                DB::raw("DATE_FORMAT(orders.completed_at, '{$dbFormat}') as period"),
                DB::raw('SUM(products.cost_price) as total_cost')
            )
            ->groupBy('period')
            ->pluck('total_cost', 'period')
            ->toArray();

        $labels = [];
        $revenues = [];
        $profits = [];

        if ($interval === 'hour') {
            for ($i = 0; $i <= 23; $i++) {
                $period = now()->format('Y-m-d ') . str_pad($i, 2, '0', STR_PAD_LEFT) . ':00';
                $labels[] = str_pad($i, 2, '0', STR_PAD_LEFT) . ':00';
                $revenues[] = $revenueData[$period] ?? 0;
                $profits[] = ($revenueData[$period] ?? 0) - ($costData[$period] ?? 0);
                if (now()->format('H') == $i && $activeFilter === 'today') break;
            }
        } elseif ($interval === 'day') {
            for ($date = clone $start; $date->lte($end); $date->addDay()) {
                $period = $date->format('Y-m-d');
                $labels[] = $date->format('d/m');
                $revenues[] = $revenueData[$period] ?? 0;
                $profits[] = ($revenueData[$period] ?? 0) - ($costData[$period] ?? 0);
                if ($date->isToday() && $activeFilter !== 'year') break;
            }
        } elseif ($interval === 'month') {
            for ($i = 1; $i <= 12; $i++) {
                $month = clone $start;
                $month->month($i);
                $period = $month->format('Y-m');
                $labels[] = 'T' . $i;
                $revenues[] = $revenueData[$period] ?? 0;
                $profits[] = ($revenueData[$period] ?? 0) - ($costData[$period] ?? 0);
                if ($month->isCurrentMonth()) break;
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Doanh thu (VND)',
                    'data' => $revenues,
                    'fill' => 'start',
                    'borderColor' => 'rgb(75, 192, 192)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'tension' => 0.3,
                ],
                [
                    'label' => 'Lợi nhuận (VND)',
                    'data' => $profits,
                    'fill' => 'start',
                    'borderColor' => 'rgb(251, 204, 5)',
                    'backgroundColor' => 'rgba(251, 204, 5, 0.2)',
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Hôm nay',
            'week' => '7 ngày qua',
            'month' => 'Tháng này',
            'year' => 'Năm nay',
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
